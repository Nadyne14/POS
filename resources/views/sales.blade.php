<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales - POS</title>
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
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #003063;
            font-size: 28px;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 15px;
            background: #125422;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .btn:hover {
            background: #218838;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background: #400044;
            color: white;
        }
        footer {
            margin-top: 40px;
            padding: 20px;
            background: #636b74;
            color: white;
            font-size: 14px;
            border-radius: 10px 10px 0 0;
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
        <h1>Halaman Transaksi POS</h1>
        <p>Di sini Anda dapat melihat daftar transaksi terbaru dan melakukan transaksi baru.</p>

        <a href="/sales/create" class="btn">➕ Tambah Transaksi</a>

        <h2>Daftar Transaksi</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
                <th>Tanggal</th>
            </tr>
            @foreach($transactions as $key => $transaction)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $transaction->product_name }}</td>
                <td>{{ $transaction->quantity }}</td>
                <td>Rp {{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                <td>{{ $transaction->transaction_date }}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <footer>
        <p>&copy; 2025 POS System | Nadyne Rosalia N.A - 2341760142</p>
    </footer>

</body>
</html>
