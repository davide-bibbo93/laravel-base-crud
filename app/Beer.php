<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    // il fillable è un array che include tutti i campi che devono essere riempiti
    protected $fillable = ['brand', 'type', 'alcohol_content', 'price', 'cover'];
}
