<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AniversarianteController extends Controller
{
    public function index()
    {
        return view('admin/supports/aniversariantes');
    }
}
