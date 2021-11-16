<?php

namespace App\Models;

use App\Models\Chara;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seiyuu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function chara_seiyuu()
    {
        return $this->hasMany(Chara::class);
    }
}
