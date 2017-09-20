<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\Category;
use App\ViecToc;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    protected function getBaiViet($id = '*'){
        if ($id == '*'){
            $dsBaiViet= BaiViet::all()->sortByDesc('created_at');
        }
        else {
            $dsBaiViet= BaiViet::where('madanhmuc',$id)->get();
        }
        $dsViecToc = ViecToc::all();
        $dsDanhMuc = Category::all();
        return view('users.tin-tuc-su-kien',compact('dsBaiViet', 'dsDanhMuc','dsViecToc'));
    }
    protected function postCapNhatBaiViet(Request $request, $id){
        $baiViet = BaiViet::findOrFail($id);
        $baiViet->tieude = $request->tieude;
        $baiViet->noidung = $request->editor1;
        $baiViet->madanhmuc = $request->madanhmuc;
        $baiViet->save();
        return redirect()->back();
    }
    protected function xoaBaiViet($id){
        $baiViet = BaiViet::find($id);
        $baiViet->delete();
        return redirect()->back();
    }
    protected function getChiTietBaiViet($id){
        $baiViet = BaiViet::find($id);
        return view('users.chi-tiet-bai-viet', compact('baiViet'));
    }
}
