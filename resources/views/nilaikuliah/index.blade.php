@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')

    <h2>Data Nilai Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse($nilaikuliah as $row)
            <tr>
                <td>{{ $row->ID }}</td>
                <td>{{ $row->NRP }}</td>
                <td>{{ $row->NilaiAngka }}</td>
                <td>{{ $row->SKS }}</td>
                <td>
                    @if ($row->NilaiAngka <= 40)
                        D
                    @elseif ($row->NilaiAngka >= 41 && $row->NilaiAngka <= 60)
                        C
                    @elseif ($row->NilaiAngka >= 61 && $row->NilaiAngka <= 80)
                        B
                    @elseif ($row->NilaiAngka >= 81)
                        A
                    @endif
                </td>
                <td>{{ $row->NilaiAngka * $row->SKS }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data nilai kuliah.</td>
            </tr>
        @endforelse
    </table>
@endsection
