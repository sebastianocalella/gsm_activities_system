<?php

namespace App\Models\storehouse\ropes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rope extends Model
{
    use HasFactory;

    protected $fillable = ['purchase_date', 'length', 'diameter'];
}
