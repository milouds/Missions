<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    //use Notifiable;
    protected $table = 'mission';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'workorder', 'description', 'priorite', 'statut', 'titre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function note(){
        return $this->hasOne('App\note');
    }

    public function horaire(){
        return $this->hasOne('App\horaire');
    }

    public function localisation(){
        return $this->hasOne('App\localisation');
    }

    public function photo(){
        return $this->hasOne('App\photo');
    }
}
