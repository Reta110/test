<?php

namespace Reta110\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function add($a, $b){
        $result = $a + $b;
        return view('test::result', compact('result'));
    }

    public function subtract($a, $b){
        $result = $a - $b;
        return view('test::result', compact('result'));
    }
}
