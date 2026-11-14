<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table = 'table_about';
    protected $fillable = ['title', 'description', 'image'];
}
