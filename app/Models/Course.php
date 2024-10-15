<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Fillable properties to allow mass assignment
    protected $fillable = [
        'title',
        'description',
        'pdf',
        'course_category_id'
    ];

    // A Course belongs to a CourseCategory
    public function category()
    {
        return $this->belongsTo(CourseCategory::class, 'course_category_id');
    }
}
