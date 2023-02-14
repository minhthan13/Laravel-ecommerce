<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanphamController extends Controller
{
    public function home(){
        $query = DB::table("san_pham")
            ->select('san_pham.Tensp','san_pham.Dongia','san_pham.Hinh','san_pham.Ngaytao','san_pham.Maloai')
            ->get();
        return view('homepage')->with(['ds'=>$query]);
    }
    public function product($id){
        $query = DB::table("san_pham")
            ->join('loai_san_pham','san_pham.Maloai','=','loai_san_pham.Maloai')
            ->select('loai_san_pham.Tenloai','san_pham.Masp','san_pham.Tensp','san_pham.Dongia','san_pham.Hinh','san_pham.Maloai')
            ->where('san_pham.Maloai','=',$id)
            ->orderBy('san_pham.Dongia','DESC')
            ->get();
        return view('v_sanpham')->with(['product'=>$query]);
    }
    

}