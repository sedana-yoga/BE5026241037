@extends('template')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')
    <a href="/keranjangbelanja" class="btn btn-secondary mt-3 mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Keranjang Belanja
        </div>

        <div class="card-body">
            <form action="/keranjangbelanja/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
                    <div class="col-sm-10">
                        <input type="text" name="Jumlah" id="Jumlah" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Harga per Item</label>
                    <div class="col-sm-10">
                        <input type="text" name="Harga" id="Harga" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
