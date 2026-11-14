<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'table_blog';
    protected $fillable = ['title', 'description', 'image'];
}

