<?php

namespace App\Http\Controllers;

use App\HoSo;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getHoSo(Request $request, $id){
        $hoSo = HoSo::find($id);

        return $hoSo;
    }
}
