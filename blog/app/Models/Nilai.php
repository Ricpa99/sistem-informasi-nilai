<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $quarded = ['id'];
    protected $fillable = [
        'matkul_id',
        'indeks',
        'kode',
        'matkul',
        'kelas',
        'sks',
        'nilai',
        'beban_sks',
        'slug',
    ];

   
    // public function scopeFilter($query,   $filter){
    //     // menggunakan ternary
    //     $query->when($filter ?? false, function($query, $search){
    //         return $query->where('matkul_id', 'like', '%' . $search . '%')
    //                      ->orWhere('slug', 'like', '%' . $search . '%');
    //     });
    // }
    
    public function scopefilterNilai($query,   $filter){
        // menggunakan ternary
        $query->when($filter ?? false, function($query, $search){
            return $query->where('matkul_id', 'like', '%' . $search . '%')
                         ->orWhere('slug', 'like', '%' . $search . '%');
        });
    }

    public function user(){
        return $this->hasMany(User::class);
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
