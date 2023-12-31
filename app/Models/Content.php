<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'category',
        'link',
        'overview',
        'ordering',
        'status',
        'live',
        'poster_image',
        'image'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
