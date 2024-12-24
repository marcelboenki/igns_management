<?php

namespace App\Http\Controllers\Tcg;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Pokemon\Pokemon;

class TcgController extends Controller
{
    public function index()
    {
        $moduleNav = 1;
        Pokemon::Options(['verify' => true]);
        Pokemon::ApiKey('512032fc-650d-4647-927c-7837577a00e9');
        $cards = Pokemon::Card()->where(['set.name' => 'obsidian flames'])->all();
        return view('module.tcg.overview', compact('moduleNav', 'cards'));
    }
}
