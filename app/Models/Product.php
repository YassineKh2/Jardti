<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'category',
        'image',
    ];

    // Many-to-many relationship with Order
    public function orders()
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('quantity', 'price') // Store quantity and price in the pivot table
            ->withTimestamps();
    }
}
