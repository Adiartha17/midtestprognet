<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $guard = 'admin';
    protected $keyType = 'string';
    protected $fillable = [
        'username',
        'email',
        'password',
        'alamat',
        'tgl_lahir',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
