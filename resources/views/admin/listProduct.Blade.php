@extends('layouts.master')
@section('main')

<div class="row">
    <h2>Danh Sách Sản Phẩm</h2>
    <hr>
<table class="table table-bordered text-center table-info">
    <tr class="align-middle table-primary">   
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Hình</th>
        <th>Ngày Tạo</th>
        <th>Mã Loại</th>
    </tr>
    @foreach ($listPro as $pro)
        <tr>
            <td>{{$pro->Masp}}</td>
            <td>{{$pro->Tensp}}</td>
            <td>{{number_format($pro->Dongia)}}</td>
            <td>{{$pro->Hinh}}</td>
            <td>{{$pro->Ngaytao}}</td>
            <td>{{$pro->Maloai}}</td>
        </tr>
    @endforeach
</table>

</div>
    
@endsection

