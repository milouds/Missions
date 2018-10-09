<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horaire extends Model
{
    //use Notifiable;
    protected $table = 'horaire';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'date_debut', 'heure_debut', 'heure_fin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function mission(){
        return $this->belongsTo('App\mission');
    }
}
