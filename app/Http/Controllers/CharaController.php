<?php

namespace App\Http\Controllers;

use App\Models\Chara;
use Illuminate\Http\Request;

class CharaController extends Controller
{
    public function indexMuse(Chara $chara)
    {
        return view('templates.homeunit', [
            'title' => 'Muse',
            'active' => 'Muse',
            'datas' => $chara->where('unit_id', '1')->get()
        ]);
    }
    
    public function charaMuse(Chara $chara)
    {
        return view('templates.charadetail', [
            'title' => 'Muse',
            'active' => 'Muse',
            'chara' => $chara,
        ]);
    }

    public function indexAqours(Chara $chara)
    {
        return view('templates.homeunit', [
            'title' => 'Aqours',
            'active' => 'Aqours',
            'datas' => $chara->where('unit_id', '2')->get()
        ]);
    }
    
    public function charaAqours(Chara $chara)
    {
        return view('templates.charadetail', [
            'title' => 'Aqours',
            'active' => 'Aqours',
            'chara' => $chara
        ]);
    }

    public function indexNiji(Chara $chara)
    {
        return view('templates.homeunit', [
            'title' => 'Nijigasaki School Idol Club',
            'active' => 'Nijigasaki',
            'datas' => $chara->where('unit_id', '3')->get()
        ]);
    }

    public function charaNiji(Chara $chara)
    {
        return view('templates.charadetail', [
            'title' => 'Nijigasaki School Idol Club',
            'active' => 'Nijigasaki',
            'chara' => $chara
        ]);
    }
}
