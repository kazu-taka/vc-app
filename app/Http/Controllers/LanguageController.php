<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    function index() {
        $langueges = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Ruby'];
        return view('language.index', ['langueges' => $langueges]);
    }
}
