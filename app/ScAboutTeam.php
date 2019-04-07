<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScAboutTeam extends Model
{
    protected $table = 'scaboutteam';
    protected $fillable = ['id','foto', 'nama', 'jobdesk', 'facebook', 'instagram', 'twitter', 'linkedin'];
}
