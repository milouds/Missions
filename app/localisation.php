<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class localisation extends Model
{
    //use Notifiable;
    protected $table = 'localisation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adresse', 'latitude', 'longitude',
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
