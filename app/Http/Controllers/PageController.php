<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Products;
use App\Models\Users;
use App\Models\Comments;
use App\Models\Cart;
use App\Models\Bill_detail;
use Illuminate\Http\Request;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        
        return view('page.trangchu', compact('slide', 'new_product', 'promotion_price'));
    }
    public function getLoaiSp($type)
    {
        
        $sp_theoloai = Products::where('id_type', $type)->get();
        $sp_khac = Products::where('id_type', '<>', $type)->paginate(3);

        return view('page.loai_sanpham', compact('sp_theoloai', 'sp_khac'));
    }

    public function getDetail(Request $request)
    {
        
        $sanpham = Products::where('id', $request->id)->first();
        $splienquan = Products::where('id', '<>', $sanpham->id)
                            ->where('id_type', '=', $sanpham->id_type)
                            ->paginate(3);
        $comments = Comments::where('id_product', $request->id)->get();

        return view('page.chitiet_sanpham', compact('sanpham', 'splienquan', 'comments'));
    }


    public function about() {
        
        return view('page.about');
    }
    public function contacts() {
        
        return view('page.lienhe');
    }

    public function search(Request $request){
        
        $products = Products::where('name', 'LIKE', '%'.$request->s.'%')->paginate(6);
        return view('page.seach', compact('products'));
    }

    /// Admin
    public function getIndexAdmin() {
        $products = Products::all();
        
        $sumSold = Bill_detail::count();
        return view('pageadmin.admin')->with(['products' => $products, 'sumSold' => $sumSold]);
    }         
    public function getAdminAdd() {
        
        return view('pageadmin.formAdd')-> with(['type_product' => $type_product]);
    }
    public function getAdminEdit($id) {
        $products = Products::find($id);
        
        return view('pageadmin.formEdit') -> with(['products' => $products]);
    }
    

    //authenticate
    public function GetFormSignUp() {
        return view('page.signUp');
    }

    public function signup(SignUpRequest $req) {
        if($req->input('password') == $req->input('rePw')) {
            $user = new Users();
            $user->name = $req->input('your_last_name');
            $user->email = $req->input('email');
            $user->password = bcrypt($req->input('password'));
            $user->save();
            return $this->GetFormSignIn();
        }
    }

    public function GetFormSignIn() {
        return view('page.signIn');
    }

    public function signin(SignInRequest $req) {
        $user = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];
        if(Auth::attempt($user)) {
            Session::put('user', Auth::user());
            return $this->getIndex();
        } else {
            return $this->GetFormSignIn();
        }
    }

    public function LogOut() {
        Session::forget('user');
        return redirect('/');
    }
    
    public function getAddToCart(Request $req, $id){																					
        if (Session::has('user')) {																					
            if (Products::find($id)) {																					
                $product = Products::find($id);																					
                $oldCart = Session('cart') ? Session::get('cart') : null;																					
                $cart = new Cart($oldCart);																					
                $cart->add($product, $id);																		
                $req->session()->put('cart', $cart);																					
                return redirect()->back();																					
            } else {																					
                return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';																					
            }																					
        } else {																					
            return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';																					
        }																					
    }
    
    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
        Session::put('cart',$cart);

        }
        else{
            Session::forget('cart');
        }
        return redirect()->back();
    }
																					

}
