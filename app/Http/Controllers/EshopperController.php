<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EshopperController extends Controller
{
    //
    public function getIndex() {
        return view('eshopper.page.index');
    }

    public function getProducts() {
        return view('eshopper.page.products');
    }

    public function getDetails() {
        return view('eshopper.page.product_details');
    }
}
