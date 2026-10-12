<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | E-Commerce</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
        }

        .container {
            width: min(90%, 650px);
            padding: 48px 28px;
            text-align: center;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px #00000012;
        }

        h1 {
            margin-bottom: 12px;
            font-size: 36px;
        }

        p {
            color: #6b7280;
            line-height: 1.7;
        }

        .buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 28px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            background: #2563eb;
            color: white;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .admin {
            background: #374151;
        }
    </style>
</head>

<body>
    <main class="container">
        <h1>Selamat Datang</h1>

        <p>
            Selamat datang di aplikasi E-Commerce.
            Silakan login atau daftar untuk memulai.
        </p>

        <div class="buttons">
            <a href="{{ route('dashboard') }}" class="btn">
                Login
            </a>

            <a href="{{ route('register') }}" class="btn">
                Register
            </a>

            <a href="{{ url('/admin/login') }}" class="btn admin">
                Admin Login
            </a>
        </div>
    </main>
</body>

</html>