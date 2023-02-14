
    
<ul class="list-group ">
  @foreach ($ds as $d)
  <li class="list-group-item list-group-item-primary">
    <a href="{{url('product/'.$d->Maloai.'.html')}}"> {{$d->Tenloai}}</a>
  </li>
  @endforeach
  
</ul>
