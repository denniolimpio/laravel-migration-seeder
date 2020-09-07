<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BookController;

class Book extends Model
{

  protected  $fillable =

    [

      'titolo',
      'autore',
      'editore',
      'sinossi',
      'anno',
      'prezzo',

    ];
  }
    //
