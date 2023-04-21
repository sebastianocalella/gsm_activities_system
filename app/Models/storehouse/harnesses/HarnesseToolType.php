<?php

namespace App\Models\storehouse\harnesses;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarnesseToolType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'branch', 'expiration'];
}
