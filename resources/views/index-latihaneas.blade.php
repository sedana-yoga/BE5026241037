@extends('template')
@section('judul_halaman', 'Keranjang Belanja')
@section('konten')
    {{-- <a href="/keyboard/tambah" class="btn btn-primary mt-3 mb-4">Tambah Keyboard Baru</a> --}}

    {{-- keyboard --}}
    {{-- <p>Cari Data keyboard :</p>
    <form action="/keyboard/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Keyboard .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form> --}}

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->KodeBarang }}</td>
                <td>{{ $p->Jumlah }}</td>
                <td>{{ number_format($p->Harga) }}</td>
                <td>{{ number_format($p->Jumlah * $p->Harga) }}</td>
                <td>
                    <a href="/keranjangbelanja/tambah/" class="btn btn-warning">Beli</a>
                    |
                    <a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
