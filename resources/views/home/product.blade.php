<section class="shop_section py-5 bg-white">
  <div class="container">
    <div class="heading_container text-center mb-4">
      <h2>Produk Kami</h2>
    </div>
    <div class="row">
      @foreach($product as $products)
      <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card shadow-sm h-100">
          <div class="card-img-top">
            <img
              src="products/{{$products->image}}"
              alt="{{$products->title}}"
              class="img-fluid rounded-top" />
          </div>
          <div class="card-body">
            <h5 class="card-title text-truncate">{{$products->title}}</h5>
            <p class="card-text text-success fw-bold">Harga: Rp {{number_format($products->price, 0, ',', '.')}}</p>
          </div>
          <div class="card-footer bg-white border-top-0 d-flex gap-2 justify-content-between">
            <a
              href="{{url('product_details',$products->id)}}"
              class="btn btn-danger btn-sm">
              Detail
            </a>
            <a
              href="{{url('add_cart',$products->id)}}"
              class="btn btn-primary btn-sm">
              Add Keranjang
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>