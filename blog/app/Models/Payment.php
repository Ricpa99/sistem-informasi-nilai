<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['id_semester', 'indeks', 'pembayaran'];

    public function scopefilterPayment($query,   $filter){
        // menggunakan ternary
        $query->when($filter ?? false, function($query, $search){
            return $query->where('indeks', 'like', '%' . $search . '%');
        });
    }
}
