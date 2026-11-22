<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
    {
    use HasFactory;
    protected $table = 'table_contact';
    protected $fillable = ['name', 'email', 'phone', 'message'];
}
