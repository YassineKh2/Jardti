<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'image',
        'description', 
        'category'
    ];

    // Define relationship with Task (if necessary)
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    
}
