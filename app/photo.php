<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    //use Notifiable;
    protected $table = 'photo';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'urlImage', 'titre', 'uploader', 'time_and_date',
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
