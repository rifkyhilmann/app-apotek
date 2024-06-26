<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'username',
        'password',
        'email',
        'alamat',
        'tanggal_lahir',
        'no_hp'
    ];
}
