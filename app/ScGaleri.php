<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScGaleri extends Model
{
    protected $table = 'scgaleri';
    protected $fillable = ['id','foto', 'label', 'quote'];

    public function photo_link(){
        return asset($this->foto);
    }
}
