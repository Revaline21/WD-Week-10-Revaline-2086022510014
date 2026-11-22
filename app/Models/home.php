<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class home extends Model
{
    use HasFactory;
    protected $table = 'table_home';
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
