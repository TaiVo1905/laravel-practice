<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Products;
use App\Models\Type_Products;
use App\Models\Comments;
use App\Models\Bill_detail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // public function getIndex() {
    //     return view('page.trangchu');
    // }
    // public function getLoaiSp() {
    //     return view('page.loai_sanpham');
    // }

    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = Products::where('new', 1)->paginate(4);
        $promotion_price = Products::where('promotion_price', '<>', 0)->paginate(8);
        $type_product = Type_Products::all();
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_price', 'type_product'));
    }
    public function getLoaiSp($type)
    {
        $type_product = Type_Products::all();
        $sp_theoloai = Products::where('id_type', $type)->get();
        $sp_khac = Products::where('id_type', '<>', $type)->paginate(3);

        return view('page.loai_sanpham', compact('sp_theoloai', 'type_product', 'sp_khac'));
    }

    public function getDetail(Request $request)
    {
        $type_product = Type_Products::all();
        $sanpham = Products::where('id', $request->id)->first();
        $splienquan = Products::where('id', '<>', $sanpham->id)
                            ->where('id_type', '=', $sanpham->id_type)
                            ->paginate(3);
        $comments = Comments::where('id_product', $request->id)->get();

        return view('page.chitiet_sanpham', compact('sanpham', 'splienquan', 'comments', 'type_product'));
    }


    public function about() {
        $type_product = Type_Products::all();
        return view('page.about')-> with(['type_product' => $type_product]);
    }
    public function contacts() {
        $type_product = Type_Products::all();
        return view('page.lienhe')-> with(['type_product' => $type_product]);
    }

    /// Admin
    public function getIndexAdmin() {
        $products = Products::all();
        $type_product = Type_Products::all();
        $sumSold = Bill_detail::count();
        return view('pageadmin.admin')->with(['products' => $products, 'type_product' => $type_product, 'sumSold' => $sumSold]);
    }         
    public function getAdminAdd() {
        $type_product = Type_Products::all();
        return view('pageadmin.formAdd')-> with(['type_product' => $type_product]);
    }
    public function getAdminEdit($id) {
        $products = Products::find($id);
        $type_product = Type_Products::all();
        return view('pageadmin.formEdit') -> with(['products' => $products, 'type_product' => $type_product]);
    }
    
}
