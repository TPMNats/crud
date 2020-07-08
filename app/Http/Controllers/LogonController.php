<?php

namespace App\Http\Controllers;
use App\Logon;
use Illuminate\Http\Request;

class LogonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Logon::latest()->paginate(5);
        return view('index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'engineer'    =>  'required',
            'tetramodel'     =>  'required',
            'memsize'     =>  'required',
            'sernum'     =>  'required',
            'bchnum'     =>  'required',
            'qty'     =>  'required',
            'comments'         =>  'required|comments|max:2048'
        ]);

        $comments = $request->file('comments');

        $new_name = rand() . '.' . $comments->getClientOriginalExtension();
        $comments->move(public_path('images'), $new_name);
        $form_data = array(
            'engineer'       =>   $request->engineer,
            'tetramodel'        =>   $request->tetramodel,
            'memsize'        =>   $request->memsize,
            'sernum'        =>   $request->sernum,
            'bchnum'        =>   $request->bchnum,
            'qty'        =>   $request->qty,
            'comments'            =>   $request->comments
        );

        Logon::create($form_data);

        return redirect('logon')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Logon::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Logon::findOrFail($id);
        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image_name = $request->hidden_image;
        $comments = $request->file('comments');
        if($comments != '')
        {
            $request->validate([
            'engineer'    =>  'required',
            'tetramodel'     =>  'required',
            'memsize'     =>  'required',
            'sernum'     =>  'required',
            'bchnum'     =>  'required',
            'qty'     =>  'required',
            'comments'         =>  'required'
            ]);

            $image_name = rand() . '.' . $comments->getClientOriginalExtension();
            $comments->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
            'engineer'    =>  'required',
            'tetramodel'     =>  'required',
            'memsize'     =>  'required',
            'sernum'     =>  'required',
            'bchnum'     =>  'required',
            'qty'     =>  'required'
            ]);
        }

        $form_data = array(
            'engineer'       =>   $request->engineer,
            'tetramodel'        =>   $request->tetramodel,
            'memsize'        =>   $request->memsize,
            'sernum'        =>   $request->sernum,
            'bchnum'        =>   $request->bchnum,
            'qty'        =>   $request->qty,
            'comments'            =>   $request->comments
        );
  
        Logon::whereId($id)->update($form_data);

        return redirect('logon')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Logon::findOrFail($id);
        $data->delete();

        return redirect('logon')->with('success', 'Data is successfully deleted');
    }
}