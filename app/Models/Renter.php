<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renter extends Model
{  protected $fillable = ["name", "surname", "username","password","email","date_of_birth", "phone"];
    use HasFactory;
    protected $table = 'renters';
}
