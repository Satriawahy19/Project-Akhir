@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Barang</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Stok</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->harga }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('transaksi.index') }}" class="btn btn-info">Lihat Transaksi</a>
</div>
@endsection
