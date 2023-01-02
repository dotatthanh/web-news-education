<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
    	'title',
    	'image',
    	'category_id',
    	'summary',
    	'content',
        'view',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
