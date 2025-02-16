<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sks extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['id_sks', 'indeks', 'sks'];

    public function scopeFilter($query,   $filter){
        // menggunakan ternary
        $query->when($filter ?? false, function($query, $search){
            return $query->where('id_sks', 'like', '' . $search . '%');
        });
    }

    
    public function scopeFilterSks($query,   $filter){
        // menggunakan ternary
        $query->when($filter ?? false, function($query, $search){
            return $query->where('indeks', 'like', '%' . $search . '%');
        });
    }
    
}
