<?php

namespace App\Models;

use App\Models\Chara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subunit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function chara_subunit()
    {
        return $this->hasMany(Chara::class, 'subunit_id');
    }
}
