<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_transaksi', 'id_pelanggan', 'tanggal_transaksi', 'nominal_transaksi'
    ];

    public function Customers()
    {
        return $this->belongsTo( Customers::class, 'customer_code' );
    }
}
