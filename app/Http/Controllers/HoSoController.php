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
        $hoSo->mahsme = $request->get('nhanh-me');
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
        if($request->has('hinhanh')){
            $photo = $request->file('hinhanh')->getClientOriginalName();
            $destination = base_path() . '/public/img/anhcanhan';
            $request->file('hinhanh')->move($destination, $photo);
            if ($request->hasFile('hinhanh')) {
                $hoSo->hinhanh = $request->file('hinhanh')->getClientOriginalName();
            }

        }
        $hoSo->save();

        return redirect()->back()->with('thongbao', "Tạo hồ sơ thành công");
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

    protected function getThemCon($id){
        $hoSo = HoSo::find($id);
        $dsVo = VCHoSo::where('mahosovc',$id)->get();
        return view('admin.them-con', compact('hoSo','dsVo'));
    }

    protected function themAnh(Request $request,$id){
        $hoSo = HoSo::find($id);
        $photo = $request->file('hinhanh')->getClientOriginalName();
        $destination = base_path() . '/public/img/anhcanhan';
        $request->file('hinhanh')->move($destination, $photo);
        if ($request->hasFile('hinhanh')) {
            $hoSo->hinhanh = $request->file('hinhanh')->getClientOriginalName();
        }
        $hoSo->save();
        return redirect()->back();
    }

}
