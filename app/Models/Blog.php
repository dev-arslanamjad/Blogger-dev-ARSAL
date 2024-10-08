<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's default table naming convention
    protected $table = 'blog';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
        'category',
    ];
    // App\Models\Blog.php
    public function category()
    {
        return $this->belongsTo(Category::class, 'category'); // Ensure 'category' is the correct foreign key
    }
}
