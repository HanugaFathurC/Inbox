<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasSlug;
use App\Traits\HasScope;
class AnalyticLog extends Model
{
    use HasFactory, HasSlug, HasScope;

    protected $fillable = ['name'];

    public function analyticDetails()
    {
        return $this->hasMany(AnalyticDetail::class);
    }
}
