<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessModelCanvas extends Model
{
    use HasFactory;

    protected $fillable = [
        'side_hustle_id',
        'keyPartners',
        'keyActivities',
        'keyResources',
        'valuePropositions',
        'customerRelationships',
        'channels',
        'customerSegments',
        'costStructure',
        'revenueStreams'
    ];

    public function sideHustle()
    {
        return $this->belongsTo(SideHustle::class);
    }
}