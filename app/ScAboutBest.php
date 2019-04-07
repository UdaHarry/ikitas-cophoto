<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScAboutBest extends Model
{
    protected $table = 'scsambutanbest';
    protected $fillable = ['id','title', 'deskripsi'];
}
