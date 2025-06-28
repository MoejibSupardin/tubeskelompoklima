<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
</head>

<body class="bg-white">
    <div class="hero_area">
        @include('home.header')
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $wisata->gambar) }}" class="img-fluid rounded" alt="{{ $wisata->nama }}">
                </div>
                <div class="col-md-6 text-black">
                    <h2 class="fw-bold">{{ $wisata->nama }}</h2>
                    <p class="text-muted">{{ $wisata->lokasi }}</p>
                    <p>{{ $wisata->deskripsi }}</p>
                    <a href="{{ url('/wisataUser') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </section>

    @include('home.footer')
</body>

</html>
