<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_code', 'customer_name', 'customer_contactperson', 'customer_address'
    ];

    public function Transaksi()
    {
        return $this->belongsTo( Transaksi::class, 'id_pelanggan');
    }
}
