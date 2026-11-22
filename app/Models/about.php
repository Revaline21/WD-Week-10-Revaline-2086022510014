<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class about extends Model
{
    use HasFactory;
    protected $table = 'table_about';
    protected $fillable = ['title', 'description', 'image'];
}
