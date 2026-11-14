<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
    {
    protected $table = 'table_contact';
    protected $fillable = ['title', 'description', 'image'];
}
