<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    use HasFactory, HasScope;

    protected $fillable = ['name', 'quantity', 'status', 'image', 'unit', 'user_id'];

    protected $casts = [
        'status' => OrderStatus::class
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('storage/orders/' . $image),
        );
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
