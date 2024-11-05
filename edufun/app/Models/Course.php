<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'content', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
