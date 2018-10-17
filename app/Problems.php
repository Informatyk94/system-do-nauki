<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problems extends Model
{
    protected $fillable = [
        'id',
        'title',
        'category',
        'content_problem',
        'content_solution',
        'update_at',
        'created_at'
    ];
}
