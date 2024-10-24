<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plant;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'status','dueDate', 'plant_id'];

    public function plant()
    {
        return $this->belongsTo(Plant::class); 
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}


