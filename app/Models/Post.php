<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = [
        'judul',
        'konten',
        'gambar',
        'id_user',
        'id_kategori'
    ];

    public function user (){
        return $this->belongsTo('App\Models\User','id_user');
    }

    public function kategori (){
        return $this->belongsTo('App\Models\Kategori','id_kategori');
    }
}
