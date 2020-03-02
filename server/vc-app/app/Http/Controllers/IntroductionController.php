<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
  public function name()
  {
    return view('introduction.name', ['full_name' => '高橋一真です！！']);
  }
}
