<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Subunit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Song extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function song_unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function song_subunit()
    {
        return $this->belongsTo(Subunit::class);
    }
}
