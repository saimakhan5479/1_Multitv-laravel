<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable= [
        'banner_id',
        'banner_name',
        'inter_id',
        'inter_name',
    ];
}
