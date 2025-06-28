<!DOCTYPE html>
<html lang="en">

<head>
  @include('home.css')

  <style type="text/css">
    .div_center {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 30px;
    }

    .detail-box {
      padding: 15px;
    }

    .product-image {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-details h6 {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .product-details span {
      color: #28a745;
      font-weight: 600;
    }

    .btn-add-cart {
      margin-top: 20px;
    }
  </style>
</head>

<body class="bg-white">
  <div class="hero_area">
    <!-- Header section -->
    @include('home.header')
  </div>

  <!-- Product Details -->
  <section class="shop_section py-5">
    <div class="container">
      <div class="heading_container text-center mb-4">
        <h2>Detail Produk</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card border-0 shadow-sm">
            <div class="div_center p-3">
              <img src="/products/{{$data->image}}" alt="{{$data->title}}" class="product-image">
            </div>
            <div class="card-body">
              <div class="product-details">
                <h6>Nama Produk: {{$data->title}}</h6>
                <h6>Harga: <span>Rp {{number_format($data->price, 0, ',', '.')}}</span></h6>
                <h6>Kategori: {{$data->category}}</h6>
                <h6>Stok Tersedia: <span>{{$data->quantity}}</span></h6>
              </div>
              <div class="product-description mt-3">
                <p>{{$data->description}}</p>
              </div>
              <div class="btn-add-cart text-center">
                <a href="{{url('add_cart', $data->id)}}" class="btn btn-primary w-100">Tambah ke Keranjang</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  @include('home.footer')

</body>

</html>
