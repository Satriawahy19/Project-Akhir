@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Transaksi</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Barang ID</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->barang_id }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <td>{{ $transaksi->total_harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('barang.index') }}" class="btn btn-info">Lihat Data Barang</a>
    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
</div>
@endsection
