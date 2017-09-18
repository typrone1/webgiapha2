<?php

namespace App\Http\Controllers;

use App\HoSo;
use App\VCHoSo;
use Illuminate\Http\Request;

class VCHoSoController extends Controller
{
    protected function getThemVo($id){
        $hoSo = HoSo::find($id);
        return view('admin.them-vo', compact('hoSo'));
    }
    protected function postThemVo(Request $request, $idChong){
        $hsVC = new VCHoSo();
        $hsVC->mahosovc = $idChong;
        $hsVC->hoten = $request->get('ho-ten');
        $hsVC->ngaysinh = $request->get('ngay-sinh');
        $hsVC->gioitinh = !!$request->get('gioi-tinh');
        $hsVC->quequan = $request->get('que-quan');
        $hsVC->conthu = $request->get('con-thu');
        $hsVC->email = $request->get('email');
        $hsVC->sdt = $request->get('sdt');
        $hsVC->hotenbo = $request->get('ho-ten-bo');
        $hsVC->hotenme = $request->get('ho-ten-me');
        $hsVC->nghenghiep = $request->get('nghe-nghiep');
        if ($hsVC->save()){
            return redirect()->back()->with('thongbao', "Thêm vợ thành công!");
        }
        else {
            return redirect()->back()->with('thongbao', "Có lỗi vui lòng thử lại sau!");
        }
    }
}
