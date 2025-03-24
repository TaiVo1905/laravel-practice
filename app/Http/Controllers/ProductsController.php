<?php

namespace App\Http\Controllers;

use App\Models\Bill_detail;
use App\Models\Type_Products;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    //Cake_Shop Add product
    public function postAdminAdd(Request $request)							
    {							
        $product = new Products();							
        if ($request->hasFile('inputImage')) {							
            $file = $request->file('inputImage');							
            $fileName = $file->getClientOriginalName('inputImage');							
            $file->move('source/image/product', $fileName);							
        }							
        $file_name = null;							
        if ($request->file('inputImage') != null) {							
            $file_name = $request->file('inputImage')->getClientOriginalName();							
        }
        
        $product -> name = $request -> inputName;
        $product -> image = $file_name;
        $product -> description = $request -> inputDescription;
        $product -> unit_price = $request -> inputPrice;
        $product -> promotion_price = $request -> inputPromotionPrice;
        $product -> unit = $request -> inputUnit;
        $product -> new = $request -> inputNew;
        $product -> id_type = $request -> inputType;
        $product -> save();
        return $this -> getIndexAdmin();

    }
       
    // Cake_Shop Edit product
    public function postAdminEdit(Request $request)							
    {							
        // $id = $request -> edit;
        $id = $request->editId;

        $product = Products::find($id);							
        if ($request->hasFile('editImage')) {							
            $file = $request->file('editImage');							
            $fileName = $file->getClientOriginalName('editImage');							
            $file->move('source/image/product', $fileName);							
        }							
        $file_name = null;							
        if ($request->file('editImage') != null) {							
            $file_name = $request->file('editImage')->getClientOriginalName();							
        }
        
        $product -> name = $request -> editName;
        $product -> image = $file_name;
        $product -> description = $request -> editDescription;
        $product -> unit_price = $request -> editPrice;
        $product -> promotion_price = $request -> editPromotionPrice;
        $product -> unit = $request -> editUnit;
        $product -> new = $request -> editNew;
        $product -> id_type = $request -> editType;
        $product -> save();
        return $this -> getIndexAdmin();

    }

    // Cake_Shop Delete product
    public function postAdminDelete($id) {
        $product = Products::find($id);
        $product->delete();
        return $this -> getIndexAdmin();
    }
    
    // Call funtion getIndexAdmin()
    public function getIndexAdmin() {
        $products = Products::all();
        $sumSold = Bill_detail::count();
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => $sumSold]);
    }
    
       
}
