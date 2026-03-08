<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'side_hustle_id',
        'title',
        'description',
        'status'
    ];

    public function sideHustle()
    {
        return $this->belongsTo(SideHustle::class);
    }
}