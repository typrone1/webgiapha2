<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaiVietController extends Controller
{
    protected function getBaiViet(){
        return view('users.tin-tuc-su-kien');
    }
}
