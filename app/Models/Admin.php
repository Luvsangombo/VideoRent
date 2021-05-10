<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ["name", "phone", "username","password","address","section_id"];
    use HasFactory;
    protected $table = 'admins';
}
