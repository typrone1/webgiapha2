<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    protected function index(){
        return view('admin.dashboard');
    }
    protected function getQuanLyHoSo(){
        $dsHoSo = DB::table('hoso')->paginate(8);
        return view('admin.quan-ly-ho-so',compact('dsHoSo'));
    }
    protected function getTimKiemHoSo(Request $request){
        $dsHoSo = HoSo::where('hoten','LIKE','%'.$request->keyword.'%')->paginate(8);
        $count = $dsHoSo->total();
        return view('admin.tim-kiem-ho-so',compact('dsHoSo','count'));
    }
    protected function getChiTietHoSo(Request $request){
        $hoSo = HoSo::where('mahoso', $request->id)->first();
        return view('admin.chi-tiet-ho-so', compact('hoSo'));
    }
}
