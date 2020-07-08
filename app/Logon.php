<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logon extends Model
{
    protected $fillable = [
     'engineer', 'tetramodel', 'memsize', 'sernum', 'bchnum', 'qty', 'comments'
    ];
}
