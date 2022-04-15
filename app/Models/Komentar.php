<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentars';
    protected $fillable = [
        'komentar',
        'id_post',
        'id_admin',
    ];

    public function post (){
        return $this->belongsTo('App\Models\Post','id_post');
    }

    public function admin (){
        return $this->belongsTo('App\Models\Admin','id_admin');
    }
}
