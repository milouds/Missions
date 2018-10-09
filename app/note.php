<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    //use Notifiable;
    protected $table = 'note';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'contenu', 'date_pub', 'note_owner',
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
