<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class SalesController extends Controller
{
    // Menampilkan halaman daftar transaksi
    public function index()
    {
        $transactions = Transaction::all();
        return view('sales', compact('transactions'));
    }

    // Menampilkan halaman form tambah transaksi
    public function create()
    {
        return view('create_transaction');
    }

    // Menyimpan transaksi baru
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'quantity' => 'required|numeric',
            'total_price' => 'required|numeric',
        ]);

        Transaction::create([
            'product_name' => $request->product_name,
            'quantity' => $request->quantity,
            'total_price' => $request->total_price,
            'transaction_date' => now(),
        ]);

        return redirect('/sales')->with('success', 'Transaksi berhasil ditambahkan!');
    }
}
