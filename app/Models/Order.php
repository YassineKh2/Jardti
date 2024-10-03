<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity', 'total_price', 'status'];

    // Define relationship to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define relationship to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Calculate the total price of the order
    public function calculateTotalPrice()
    {
        return $this->product->price * $this->quantity;
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($order) {
            $order->total_price = $order->calculateTotalPrice();
        });
    }
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
