<?php

namespace App\Models\activities;

use App\Models\caves\Cave;
use App\Models\members\Member;
use App\Models\storehouse\cumulatives\Bag;
use App\Models\storehouse\cumulatives\Nail;
use App\Models\storehouse\harnesses\HarnessTool;
use App\Models\storehouse\ropes\Rope;
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

    public function caves(){
        return $this->belongsToMany(Cave::class);
    }

    public function members(){
        return $this->belongsToMany(Member::class);
    }

    // storehouse many to many relations

    public function anchors(){
        return $this->belongsToMany(Anchor::class);
    }

    public function bags(){
        return $this->belongsToMany(Bag::class);
    }

    public function connectors(){
        return $this->belongsToMany(Connector::class);
    }

    public function harnessTools(){
        return $this->belongsToMany(HarnessTool::class);
    }

    public function nails(){
        return $this->belongsToMany(Nail::class);
    }

    public function ropes(){
        return $this->belongsToMany(Rope::class);
    }
}
