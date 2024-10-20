<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name',          
        'description',   
        'start_date',    
        'end_date',      
        'location',      
        'capacity',     
        'price',         
        'image_path',    
        'has_delay', 
        'category_id',  // Foreign key to EventCategory

    ];
    public function category()
    {
        return $this->belongsTo(EventCategory::class, 'category_id');
    }
}
