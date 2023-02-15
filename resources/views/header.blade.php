
<div class=" d-flex justify-content-around p-3" >

    <div>
        <img src="{{ asset('uploads/images/logo-icon.png') }}" width="80px" height="80px" >
    </div>
    
    <h1 class="align-self-center"> APTECH-ECOMMERCE</h1>
</div>
<hr>
<div class="container-fluid d-flex justify-content-around">

       
       <ul class="nav ">
           <li class="nav-item ">Sản Phẩm</li>
           <li class="nav-item ">Đại Lý</li>
           <li class="nav-item ">Tin Tức</li>
           <li class="nav-item ">Liên Hệ</li>
           <li class="nav-item "><i class="bi bi-cart-check"></i>&ensp;Giỏ Hàng</li>
           
        </ul>
        
        <form class="d-inline-flex" role="search" action="find-price" method="POST">
            {{ csrf_field() }}
            <input class="form-control me-2" type="number" placeholder="Tìm theo giá" aria-label="Search" name="price" required>
            <button class="btn btn-outline-primary" type="submit">Tìm</button>
        </form>
        <div>

            <div class="addProduct d-inline-block">
                <a href="/list">Danh Sách Sản Phẩm</a>
            </div>
            <div class="addProduct d-inline-block">
                <a href="/add">Thêm Sản Phẩm</a>
            </div>
        </div>
        
</div>
