<?php

namespace App\Http\Controllers;

use App\HocVan;
use App\HoSo;
use App\VCHoSo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected function getSoDoGiaPha()
    {
        $sql  = 'SELECT hoso.mahoso,hoso.hoten,vchoso.hoten as hotenvo, mahsbo,hoso.ngaysinh FROM hoso LEFT JOIN vchoso ON vchoso.mahosovc = hoso.mahoso GROUP by hoso.mahoso';
        $data = DB::select($sql);
        $data = json_decode(json_encode($data),true);
        return view('users.so-do-gia-pha',compact('data'));
    }
    protected function getHoSo(Request $request){
        $hoSo = HoSo::where('mahoso', $request->id)->first();
        if(isset($hoSo)){
            $hoSoBo = HoSo::where('mahoso', $hoSo->mahsbo)->first();
            if (isset($hoSoBo)){
                $hoSoOng = HoSo::where('mahoso', $hoSoBo->mahsbo)->first();
            }
        }
        $dsHocVan = HocVan::where('mahoso', $request->id)->get();
        $dsVo = VCHoSo::where('mahosovc',$request->id)->get();
        $dsCon = HoSo::where('mahsbo', $request->id)->get();
        $dsAnhEm = HoSo::where('mahsbo',$hoSo->mahsbo)->get();
        return view('users.chi-tiet-ho-so', compact(['hoSo','hoSoBo','hoSoOng','dsVo','dsCon','dsAnhEm','dsHocVan']));
    }
}
