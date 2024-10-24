<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Add HasFactory if needed

class CourseCategory extends Model
{
    use HasFactory; // Optionally include if you're using factories for testing

    // Fillable properties to allow mass assignment
    protected $fillable = ['name'];

    // One Category has many Courses
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
