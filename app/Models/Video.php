<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ["name", "catelog_id", "section_id","name","director","length", "price",
    "image_path","highlight_path","description",];
    use HasFactory;
    protected $table = 'videos';
}
