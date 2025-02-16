<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $quarded = ['id'];
    protected $fillable = [
        'matkul_id',
        'kode',
        'matkul',
        'kelas',
        'sks',
        'nilai',
    ];
    
}
