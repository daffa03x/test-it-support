<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Atasan extends Model
{
    use HasFactory;
    protected $table = 'atasan';
    protected $fillable = ['nama'];

}
