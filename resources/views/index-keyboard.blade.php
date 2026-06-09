@extends('template')
@section('judul_halaman', 'Data Keyboard')
@section('konten')
    <a href="/keyboard/tambah" class="btn btn-primary mt-3 mb-4">Tambah Keyboard Baru</a>

    {{-- keyboard --}}
    <p>Cari Data keyboard :</p>
    <form action="/keyboard/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Keyboard .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($keyboard as $p)
            <tr>
                <td>{{ $p->merkkeyboard }}</td>
                <td>{{ $p->stockkeyboard }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/keyboard/edit/{{ $p->kodekeyboard }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/keyboard/hapus/{{ $p->kodekeyboard }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $keyboard->links() }}
@endsection

{{-- <?php
echo $keyboard;
?> --}}
