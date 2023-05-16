<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // use HasFactory;

    protected $table = 'todo';  //table name from database
    protected $primarykey = 'id';
    protected $fillable = [
        'task',
        'checked'
    ];

}
