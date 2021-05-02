<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ["video_id", "user_id", "rentedDate","endDate","director","price", "other"];
    use HasFactory;
    protected $table = 'rents';
   
}
