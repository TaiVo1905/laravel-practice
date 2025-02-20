<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class sumTwoNumbersController extends Controller
{
    public function __construct () {

    }
    
    public function index () {
        return view("sumTwoNumbers");
    }

    public function caculator (Request $request) {
        $number1 = $request->input("input1");
        $number2 = $request->input2;
        $sum = $number1 + $number2;
        return view("sumTwoNumbers", ["sum" => $sum]);
        
    }
}
