<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function search(Request $request){
        $price = $request->post('price');
        $query = DB::table("san_pham")
            ->select('san_pham.Tensp','san_pham.Dongia','san_pham.Hinh','san_pham.Ngaytao','san_pham.Maloai')
            ->where('san_pham.Dongia','<=',$price)
            ->get();
        return view('v_search')->with(['ds'=>$query,'price'=>$price]);
    }
    
}