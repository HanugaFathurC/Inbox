<?php

namespace App\Models;

use App\Enums\TransactionStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity', 'durasi', 'tagihan', 'transaction_id', 'product_id', 'payment_status', 'midtrans_url', 'midtrans_booking_code'
    ];

    protected $casts = [
        'status' => TransactionStatus::class
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }


}
