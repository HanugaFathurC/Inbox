<?php

namespace App\Models;

use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Warehouse extends Model
{
    use HasFactory, HasScope;
    protected $fillable = [
        'name', 'provinsi', 'kabupaten', 'address', 'telp', 'kapasitas', 'image', 'types_id'
    ];

    public function image(): Attribute
    {
        return new Attribute(
            get: fn ($image) => asset('storage/warehouses/' . $image),
        );
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
