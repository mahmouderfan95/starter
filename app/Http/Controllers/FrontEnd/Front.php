<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Front extends Controller
{
    public function first(){
        return view('front.first-page');
    }
}
