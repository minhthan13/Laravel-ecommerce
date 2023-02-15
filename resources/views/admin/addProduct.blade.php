@extends('layouts.master')
@section('main')
<h2>Thêm Sản Phẩm</h2>
    <hr>
<div class="row d-flex justify-content-around">
    
    <form action="/post-product" method="post" name="addPro" class="col-3" >
        @csrf
        <div class="form-label">Tên Sản Phẩm
            <input type="text" name="tensp" class="form-control">
        </div>
        <div class="form-label">Giá<input type="numble" name="gia" class="form-control"></div>
        <div class="form-label">Ngày Tạo<input type="date" name="ngay" class="form-control"></div>
        <div class="form-label">Phân Loại
            <select name="maloai" class="form-select">
                <option selected>Chọn loại danh mục</option>
                <option value="1">1-Điện Thoại</option>
                <option value="2">2-Laptop</option>
                <option value="3">3-Máy Tính Bảng</option>
            </select>
        </div>
        <input type="submit" value="Thêm" class="btn btn-info">
        <input type="reset" value="Nhập lại"  class="btn btn-info">
    </form>
    <div class="col-5">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
    
@endsection

