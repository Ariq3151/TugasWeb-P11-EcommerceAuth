<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eager Loading Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }

        .info {
            padding: 15px;
            background: #e8f5e9;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <h1>Eager Loading Demo</h1>

    <nav style="margin-bottom: 24px;">
        |
        <a href="{{ route('dashboard') }}">Dashboard</a>
        |
    </nav>

    <div class="info">
        <p>
            Data produk diambil menggunakan
            <code>Product::with('category')</code>.
        </p>
        <p>
            Jumlah produk yang ditampilkan: {{ $products->count() }}
        </p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category?->name ?? 'Tanpa kategori' }}</td>
                    <td>Rp{{ number_format((float) $product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <p><a href="{{ url('/dashboard') }}">Kembali ke Dashboard</a></p>
</body>
</html>