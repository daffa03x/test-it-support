<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'nama',
        'atasan_id',
        'jabatan_id',
        'jenis_kelamin',
        'alamat'
    ];
}
