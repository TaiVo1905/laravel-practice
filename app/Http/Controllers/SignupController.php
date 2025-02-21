<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\rulesRequest;

class SignupController extends Controller
{
    public function index() {
        return view("./signup");
    }
    public function signup(rulesRequest $request) {
        
        $user = [
            'name' => $name = $request -> input('name'),
            'age' => $age = $request -> input('age'),
            'date' => $date = $request -> input('date'),
            'phone' => $phone = $request -> input('phone'),
            'web' => $web = $request -> input('web'),
            'address' => $address = $request -> input('address')
        ];
        if (session()->has('sv')) {
            session()->push('sv', $user);
        } else {
            session()->put('sv', [$user]);
        }
        return view("./signup")->with('users', session()->get('sv'));
    }
}
