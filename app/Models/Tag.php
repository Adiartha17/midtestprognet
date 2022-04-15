<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $fillable = [
        'nama_tag',
        'deskripsi',
        'id_post',
    ];
    
    public function post (){
        return $this->belongsTo('App\Models\Post','id_post');
    }
}
