<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function chara_unit()
    {
        return $this->hasMany(Chara::class, 'unit_id');
    }
}
