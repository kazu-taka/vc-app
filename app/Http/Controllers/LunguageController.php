<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LunguageController extends Controller
{
    function index() {
        $data = ['HTML','CSS','JavaScript'];
        return view('languages.index', ['data' => $data]);
    }
}
