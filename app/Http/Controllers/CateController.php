<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowCate extends Controller
{
    public function danhsachmuc($id){
        $query = DB::table("san_pham")
            ->join('loai_san_pham','san_pham.Maloai','=','loai_san_pham.Maloai')
            ->select('loai_san_pham.Tenloai','san_pham.Masp','san_pham.Tensp','san_pham.Dongia','san_pham.Hinh','san_pham.Ngaytao','san_pham.Maloai')
            ->where('san_pham.Maloai','=',$id)
            ->orderBy('Masp','ASC')
            ->get();
        return view('v_sanpham')->with(['ds'=>$query]);
    }
}