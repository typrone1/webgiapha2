<?php

namespace App\Http\Controllers;

use App\HoSo;
use App\VCHoSo;
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
        if(isset($hoSo)){
            $hoSoBo = HoSo::where('mahoso', $hoSo->mahsbo)->first();
            if (isset($hoSoBo)){
                $hoSoOng = HoSo::where('mahoso', $hoSoBo->mahsbo)->first();
            }
        }
        $dsVo = VCHoSo::where('mahosovc',$request->id)->get();
        $dsCon = HoSo::where('mahsbo', $request->id)->get();
        $dsAnhEm = HoSo::where('mahsbo',$hoSo->mahsbo)->get();
        return view('admin.chi-tiet-ho-so', compact(['hoSo','hoSoBo','hoSoOng','dsVo','dsCon','dsAnhEm']));
    }
    protected function getThemHoSo(){
        $dsNhanhBo = HoSo::all();
        return view('admin.them-ho-so', compact('dsNhanhBo'));
    }
    protected function test(){
        return view('users.test');
    }
}
