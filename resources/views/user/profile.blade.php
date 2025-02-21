<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background: #f8f9fa;
        }
        nav {
            background: #400044;
            padding: 15px;
            border-radius: 0 0 10px 10px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 16px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        h1 {
            color: #003063;
            font-size: 28px;
            text-align: center;
        }
        .profile-info {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 20px;
            background: #125422;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }
        .btn:hover {
            background: #218838;
        }
        footer {
            margin-top: 40px;
            padding: 15px;
            background: #636b74;
            color: white;
            font-size: 14px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/category/food-beverage">Food & Beverage</a>
        <a href="/category/beauty-health">Beauty & Health</a>
        <a href="/category/home-care">Home Care</a>
        <a href="/category/baby-kid">Baby & Kid</a>
        <a href="/user/1/name/Fahmi">User Profile</a>
        <a href="/sales">Sales</a>
    </nav>

    <div class="container">
        <h1>👤 Profil Pengguna</h1>
        <p class="profile-info">
            Selamat datang, <strong>{{ $name }}</strong>! Berikut adalah informasi akun Anda:
        </p>

        <ul class="profile-info">
            <li><strong>ID Pengguna:</strong> {{ $id }}</li>
            <li><strong>Nama:</strong> {{ $name }}</li>
            <li><strong>Status Keanggotaan:</strong> Premium</li>
        </ul>

        <a href="/sales" class="btn">💳 Lihat Transaksi</a>
    </div>

    <footer>
        <p>&copy; 2025 POS System | Nadyne Rosalia N.A - 2341760142</p>
    </footer>

</body>
</html>
