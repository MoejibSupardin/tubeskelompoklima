<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<style>
    .texthitam {
        color: black !important;
    }
</style>

<body class="bg-white">
    <div class="hero_area">
        <!-- Header section -->
        @include('home.header')
    </div>

    <!-- Shop Section -->
    <section class="shop_section py-5">
        <div class="container">
            <div class="heading_container text-center mb-4">
                <h2>Wisata</h2>
            </div>
            <div class="row g-4 texthitam">
    @foreach($wisatas as $wisata)  <!-- Looping untuk menampilkan setiap wisata -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-img-top">
                    <!-- Menampilkan gambar wisata dari database -->
                    <img src="{{ asset('storage/' . $wisata->gambar) }}" alt="{{ $wisata->nama }}" class="img-fluid rounded-top" />
                </div>
                <div class="card-body">
                    <!-- Menampilkan nama dan deskripsi wisata -->
                    <h5 class="card-title text-truncate fs-5 fw-bold">{{ $wisata->nama }}</h5>
                    <p class="card-text fw-semibold">
                        {{ Str::limit($wisata->deskripsi, 100) }}  <!-- Menampilkan 100 karakter pertama dari deskripsi -->
                    </p>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="{{ url('wisataUser-detail', $wisata->id)}}" class="btn btn-primary btn-sm">Selengkapnya</a> <!-- Link menuju detail wisata -->
                </div>
            </div>
        </div>
    @endforeach
</div>

        </div>
    </section>

    <!-- Info Section -->
    @include('home.footer')

</body>

</html>