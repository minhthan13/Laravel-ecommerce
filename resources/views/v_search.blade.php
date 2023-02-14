@extends('layouts.master')
@section('main')

    <div class="row">
        <h2>Tìm kiếm sản phẩm theo giá {{$price}}</h2>
        <hr>
        @foreach ($ds as $d)
        <div class="card col-3  mt-4 me-4 pt-4 align-items-center" >
            <img src="{{asset('uploads/images/'.$d->Hinh)}}" width="300px" height="300px" >
            <div class="card-body text-center">
              <h5 class="card-title">{{$d->Tensp}}</h5>
              <div class="pb-1">{{number_format($d->Dongia)}} VNĐ</div>
              
              <a href="#" class="btn btn-primary">Thêm</a>
            </div>
          </div>

        @endforeach
    </div>
@endsection