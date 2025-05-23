<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'paragraph_one',
        'paragraph_two',
    ];
}
