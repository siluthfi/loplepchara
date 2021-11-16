<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Image;
use App\Models\Seiyuu;
use App\Models\Subunit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chara extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function seiyuu()
    {
        return $this->belongsTo(Seiyuu::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    
    public function subunit()
    {
        return $this->belongsTo(Subunit::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
