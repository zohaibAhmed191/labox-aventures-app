<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAboutus extends Model
{
    use HasFactory;
    protected $table = 'home_aboutus';
    protected $fillable = [
        'main_heading',
        'sub_heading_1',
        'description_1',
        'sub_heading_2',
        'description_2',
        'sub_heading_3',
        'description_3',
        'sub_heading_4',
        'description_4',
    ];
}
