<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'Product_Detail' => 'array', // or 'object' if you prefer
        'avaliable_colorway' => 'array',
    ];

    public function resells()
    {
        return $this->hasMany(Resell::class);
    }
}
