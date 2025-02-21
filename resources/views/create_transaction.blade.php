<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi - POS</title>
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
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }
        h1 {
            text-align: center;
            color: #003063;
            font-size: 26px;
        }
        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            display: block;
            margin-top: 10px;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #125422;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        .btn:hover {
            background: #218838;
        }
        .btn-secondary {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #555;
            font-weight: bold;
            text-decoration: none;
        }
        footer {
            margin-top: 40px;
            padding: 20px;
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
        <h1>Tambah Transaksi</h1>
        
        <form action="{{ route('sales.store') }}" method="POST">
            @csrf

            <label for="product_name">Nama Produk</label>
            <input type="text" id="product_name" name="product_name" required placeholder="Masukkan nama produk">


            <label for="quantity">Jumlah</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <label for="total_price">Total Harga (Rp)</label>
            <input type="number" id="total_price" name="total_price" required>

            <label for="transaction_date">Tanggal Transaksi</label>
            <input type="date" id="transaction_date" name="transaction_date" required>

            <button type="submit" class="btn">Simpan Transaksi</button>
        </form>

        <a href="/sales" class="btn-secondary">⬅ Kembali ke Daftar Transaksi</a>
    </div>

    <footer>
        <p>&copy; 2025 POS System | Nadyne Rosalia N.A - 2341760142</p>
    </footer>

</body>
</html>
