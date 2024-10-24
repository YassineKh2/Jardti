<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderProduct extends Pivot
{
    protected $table = 'order_product'; // Specify your pivot table name if it's different

    protected $fillable = ['quantity', 'price']; // Define the fillable fields
}
