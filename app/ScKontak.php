<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScKontak extends Model
{
    protected $table = 'sckontak';
    protected $fillable = ['maps','home', 'email', 'telepon','hp','whatsapp'];
}
