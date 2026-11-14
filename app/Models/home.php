<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = 'table_home';
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
