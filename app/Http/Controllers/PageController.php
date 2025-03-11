<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    // public function getIndex() {
    //     return view('page.trangchu');
    // }
    public function getLoaiSp() {
        return view('page.loai_sanpham');
    }

    public function getIndex()
    {
        $slide = Slide::all();
        return view('page.trangchu', compact('slide'));
    }
}
