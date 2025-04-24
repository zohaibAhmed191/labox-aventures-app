<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeVideoSection extends Model
{
    use HasFactory;
    protected $fillable = ['video_url', 'paragraph_one', 'paragraph_two'];
}
