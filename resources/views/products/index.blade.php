<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 24px;
            background: #f5f5f5;
        }

        h1 {
            text-align: center;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            max-width: 1100px;
            margin: 24px auto;
        }

        .product {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #00000012;
        }

        .price {
            font-weight: bold;
            color: #16803c;
        }
    </style>
</head>

<body>
    <h1>Katalog Produk</h1>

    <nav style="margin-bottom: 24px;">
        |
        <a href="{{ route('dashboard') }}">Dashboard</a>
        |
    </nav>

    <div class="products">
        @forelse ($products as $product)
            <div class="product">
                <h2>{{ $product->name }}</h2>

                <p>
                    Kategori:
                    {{ $product->category->name ?? 'Belum ada kategori' }}
                </p>

                <p class="price">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
            </div>
        @empty
            <p>Belum ada produk yang tersedia.</p>
        @endforelse
    </div>
</body>

</html>