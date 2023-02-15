
    
<ul class="list-group ">
  <li class="list-group-item list-group-item-primary">
    <a href="/"> Tất Cả Sản Phẩm</a>
  </li>
  @foreach ($ds as $d)
  <li class="list-group-item list-group-item-primary">
    <a href="{{url('product/'.$d->Maloai.'.html')}}"> {{$d->Tenloai}}</a>
  </li>
  @endforeach
  
</ul>
