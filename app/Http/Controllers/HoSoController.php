<?php

namespace App\Http\Controllers;

use App\HoSo;
use App\VCHoSo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoSoController extends Controller
{
    protected function postDangKyHoSo(Request $request){

        $hoSo = new HoSo();
        $hoSo->mahotoc = 1;
        $hoSo->hoten = $request->get('ho-ten');
        $hoSo->mahsbo = $request->get('nhanh-bo');
        $hoSo->doithu = $request->get('doi-thu');
        $hoSo->conthu = $request->get('con-thu');
        $hoSo->ngaysinh = $request->get('ngay-sinh');
        $hoSo->gioitinh = $request->get('gioi-tinh') == 'nam' ? true : false;
        $hoSo->quequan = $request->get('que-quan');
        $hoSo->email = $request->get('email');
        $hoSo->sdt = $request->get('sdt');
        $hoSo->damat = $request->get('da-mat');
        $hoSo->nguoiky = '';
        $hoSo->diachi = '';
        $hoSo->damat = false;
        $hoSo->save();
        return redirect()->back()->with('thongbao', "Tạo hồ sơ thành công");
    }


    protected function test(){
        $maHoSo = 7;
        $hoSo = HoSo::where('mahoso', $maHoSo)->first();
        $hoSoBo = HoSo::where('mahoso', $hoSo->mahsbo)->first();
        $hoSoOng = HoSo::where('mahoso', $hoSoBo->mahsbo)->first();
        echo "Bố là". $hoSoBo->hoten;
        echo "Ông là". $hoSoOng->hoten;
        $dsVo = VCHoSo::where('mahosovc', $maHoSo)->get();
        echo "Danh sách vợ <br>";
        foreach ($dsVo as $vo){
            echo $vo->hoten;
        }
        $dsCon = HoSo::where('mahsbo', $maHoSo)->get();
        echo "Danh sách con <br>";
        foreach ($dsCon as $con){
            echo $con->hoten;
        }
    }
    protected function deQuyTimDoi($data, $id, $soDoi = 1)
    {
        if ($id==1){
            $GLOBALS['soDoi'] = $soDoi;
        }
        foreach ($data as $val) {
            if ($val['mahoso'] == $id) {
                $this->deQuyTimDoi($data,$val['mahsbo'], $soDoi + 1);
            }
        }
    }
//    Cach dung
//$dsHoSo = HoSo::select('mahoso', 'hoten', 'mahsbo')->get()->toArray();
//echo $this->deQuyTimDoi($dsHoSo, 7);
//echo $soDoi= isset($GLOBALS['soDoi'])?$GLOBALS['soDoi']:null;

    protected function postCapNhatHoSo(Request $request, $maHoSo){
//        echo "<pre>";
//        print_r($request->all());
//        echo "</pre>";
        $hoSo = HoSo::where('mahoso', $maHoSo)->first();
        $hoSo->email = $request->email;
        $hoSo->gioitinh = $request->get('gioi-tinh')=='nam'?true:false ;
        $hoSo->diachi = $request->get('diachi');
        $hoSo->email = $request->email;
        $hoSo->sdt = $request->sdt;
        $hoSo->save();
        return redirect()->back()->with('thongbao', "Tạo hồ sơ thành công");
    }

}
