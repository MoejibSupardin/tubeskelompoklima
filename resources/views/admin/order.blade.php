<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Management</title>

    @include('admin.css')

    <style>
        /* Pusatkan tabel */
        .table_center {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
        }

        /* Mengatur ukuran gambar */
        .table img {
            width: 70px;
            height: auto;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        /* Memberikan warna pada status */
        .badge-in-progress {
            background-color: red;
            color: white;
        }

        .badge-on-the-way {
            background-color: skyblue;
            color: white;
        }

        .badge-delivered {
            background-color: yellow;
            color: black;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }
            .btn {
                padding: 6px 8px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

    @include('admin.header')
    @include('admin.sidebar')

    <div class="page-content">
        <div class="container-fluid">
            <h3 class="mt-4">Semua Pesanan</h3>

            <div class="table_center">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama Customer</th>
                                <th>Alamat</th>
                                <th>No.Hp</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Status Pembayaran</th>
                                <th>Status</th>
                                <th>Ubah Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $order)
                            <tr>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->rec_address }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->product->title }}</td>
                                <td>Rp {{ number_format($order->product->price, 0, ',', '.') }}</td>
                                <td>
                                    <img src="products/{{ $order->product->image }}" alt="{{ $order->product->title }}">
                                </td>
                                <td>{{ $order->payment_status }}</td>
                                <td>
                                    @if($order->status == 'in progress')
                                        <span class="badge badge-in-progress">In Progress</span>
                                    @elseif($order->status == 'On the way')
                                        <span class="badge badge-on-the-way">On the Way</span>
                                    @else
                                        <span class="badge badge-delivered">Delivered</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-primary mb-1" href="{{ url('on_the_way', $order->id) }}">On the Way</a>
                                    <a class="btn btn-sm btn-success" href="{{ url('delivered', $order->id) }}">Delivered</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    @include('admin.js')z

</body>
</html>
