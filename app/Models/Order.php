<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'status'];

    // Define relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Many-to-many relationship with Product
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('quantity', 'price') // Store quantity and price in the pivot table
            ->withTimestamps();
    }

    // Calculate the total price for the order
    public function calculateTotalPrice()
    {
        return $this->products->sum(function ($product) {
            return $product->pivot->quantity * $product->pivot->price;
        });
    }

    // Boot method to automatically calculate total price before saving
    // protected static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($order) {
    //         $order->total_price = $order->calculateTotalPrice();
    //     });
    // }

    // Mark the order as completed
    public function markAsCompleted()
    {
        $this->status = 'completed';
        $this->save();
    }

    // Cancel the order
    public function cancel()
    {
        $this->status = 'cancelled';
        $this->save();
    }
}
