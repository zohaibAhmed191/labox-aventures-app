<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeHeader extends Model
{
    use HasFactory;
    protected $table = 'home_header';
    protected $fillable = [
        'top_line',
        'main_heading',
        'color_heading',
        'paragraph',
    ];
}
