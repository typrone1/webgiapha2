<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected function getSoDoGiaPha()
    {
        $data = DB::select('SELECT hoso.mahoso,hoso.hoten,vchoso.hoten as hotenvo, mahsbo,hoso.ngaysinh FROM hoso LEFT JOIN vchoso ON vchoso.mahosovc = hoso.mahoso');
        $data = json_decode(json_encode($data),true);
        return view('users.so-do-gia-pha',compact('data'));
    }
}
