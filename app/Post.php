<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //tabel name
    protected $table='posts';
    public $timestamps=true;
    public $primaryKey='id';
    public function user(){
        return $this->belongsTo('App\User');
    }
}
