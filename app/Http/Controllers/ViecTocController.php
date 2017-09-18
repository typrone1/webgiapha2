<?php

namespace App\Http\Controllers;

use App\BaiViet;
use App\Category;
use Illuminate\Http\Request;
use App\ViecToc;
use Illuminate\Support\Facades\Storage;
class ViecTocController extends Controller
{
    protected function getQuanLyViecToc()
    {
        $dsViecToc = ViecToc::all();
        $dsDanhMuc = Category::all();
        $dsBaiViet = BaiViet::all();
        return view('admin.quan-ly-viec-toc', compact('dsViecToc', 'dsDanhMuc', 'dsBaiViet'));
    }

    protected function postThemViecToc(Request $request)
    {
        $viecToc = new ViecToc();
        $viecToc->ngaydienra = $request->ngaydienra;
        $viecToc->tensukien = $request->tensukien;
        $viecToc->noidung = $request->editor1;
        if ($viecToc->save()) {
            return redirect()->back();
        }
    }

    protected function themDanhMuc(Request $request)
    {
        $category = new Category();
        $category->tendanhmuc = $request->tendanhmuc;
        $category->mota = $request->mota;
        $category->save();
        return redirect()->back();
    }

    protected function themBaiViet(Request $request)
    {
        $baiViet = new BaiViet();
        $baiViet->madanhmuc = $request->madanhmuc;
        $baiViet->tieude = $request->tieude;
        $baiViet->noidung = $request->editor1;
        $data = $request->input('hinhanh');
        $photo = $request->file('hinhanh')->getClientOriginalName();
        $destination = base_path() . '/public/img/anhbaiviet';
        $request->file('hinhanh')->move($destination, $photo);
        if ($request->hasFile('hinhanh')) {
            $baiViet->hinhanh = $request->file('hinhanh')->getClientOriginalName();
        }
        $baiViet->save();
        return redirect()->back();
    }
    protected function getChinhSuaBaiViet($id){
        $baiViet = BaiViet::where('mabaiviet', $id)->first();
        $dsDanhMuc = Category::all();
        return view('admin.chi-tiet-bai-viet', compact('baiViet','dsDanhMuc'));
    }

    protected function xoaViecToc($id){
        $viecToc = ViecToc::find($id);
        $viecToc->delete();
        return redirect()->back();
        return view('admin.chi-tiet-bai-viet');
    }

}