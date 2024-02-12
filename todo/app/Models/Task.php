<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //protected $table = 'tableName';
    //protected $primaryKey = 'tableId';
    //protected $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'completed',
        'due_date',
        'user_id'
    ];
}
