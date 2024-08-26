<?php

namespace App\Http\Controllers\All;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class fisrtController extends Controller
{
    public function index(){

        return view('test');
    }
}
