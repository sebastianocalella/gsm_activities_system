<?php

namespace App\Models\activities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'object',
        'target',
        'report',
        'start_date',
        'end_date'
    ];
}
