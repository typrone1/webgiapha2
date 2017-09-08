<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function getSoDoGiaPha()
    {
        $data = HoSo::select('mahoso', 'hoten', 'mahsbo', 'ngaysinh')->get()->toArray();
        return view('users.so-do-gia-pha',compact('data'));
    }
}
