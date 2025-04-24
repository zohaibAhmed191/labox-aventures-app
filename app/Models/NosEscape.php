<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class NosEscape extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'slug'];

     // Automatically create the slug when setting the name
     public static function booted()
     {
         static::creating(function ($nosEscape) {
             // Generate slug from the name field
             $nosEscape->slug = Str::slug($nosEscape->name, '-');
         });
     }
}
