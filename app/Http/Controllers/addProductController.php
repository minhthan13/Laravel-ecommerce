<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class addProductController extends Controller
{
    //ds sản phẩm
    public function listPro(){
        $query = DB::table("san_pham")
        ->orderBy('san_pham.Masp','ASC')
        ->get();
    return view('admin.listProduct')->with(['listPro'=>$query]);
    }
    //thêm sp
    public function addPro(){
        return view('admin.addProduct');
    }
    public function postPro(Request $request){
        $validation = $request->validate([
            'tensp' => 'required|max:50',
            'gia'   => 'required|max:11',
            'ngay'=> 'required',
            'maloai' => 'required'
        ]);
        
        $tensp = $request -> post('tensp');
        $gia   = $request -> post('gia');
        $ngay  = $request ->post('ngay');
        $maloai = $request ->post('maloai');
        $insert = DB::table('san_pham')
        ->insert([
            'Tensp' => $tensp ,
            'Dongia'=> $gia,
            'Ngaytao' => $ngay,
            'Maloai' => $maloai
        ]);
        return $this->listPro();
    }
    
}