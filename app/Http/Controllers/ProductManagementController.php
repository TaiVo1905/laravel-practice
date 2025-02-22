<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestProduct;
use Illuminate\Support\Facades\Session;

class ProductManagementController extends Controller
{
    public function index() {
        return view("productManagementForm");
    }
    
    public function save(FormRequestProduct $request) {
        $path = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('uploads', 'public');
        }

        $product = [
            'category' => $request->input('category'),
            'product' => $request->input('product'),
            'product_name' => $request->input('product_name'),
            'price' => $request->input('price'),
            'old_price' => $request->input('old_price'),
            'image' => $path,
        ];

        
        if (Session::has('products')) {
            $products = Session::get('products');
        } else {
            $products = [];
        }

        $products[] = $product;
        Session::put('products', $products);

        return redirect()->route('form.index')->with('success', 'Sản phẩm đã được lưu thành công!');
    }

    public function show() {
        $products = Session::get('products', []);
        return view("productManagement", compact('products'));
    }
}
