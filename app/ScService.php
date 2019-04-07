<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScService extends Model
{
    protected $table = 'scservice';
    protected $fillable = ['icon','service', 'keterangan'];
}
