@extends('template')
@section('judul_halaman', 'Kode Soal tagihan_air')
@section('konten')

    <h2>Kode Soal tagihan_air</h2>


    <a href="{{ route('tagihan_air.index') }}" class="btn btn-secondary mt-3 mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Tagihan Air
        </div>

        <div class="card-body">
            <form action="{{ route('tagihan_air.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="row mb-3">
                    <label for="NoMeteran" class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoMeteran" id="NoMeteran">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAwal" id="MeterAwal" maxlength="20" value="{{ old('MeterAwal') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAkhir" id="MeterAkhir" maxlength="20"
                            value="{{ old('MeterAkhir') }}">
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

    <script>
        function validasiForm() {
            let meterawal = document.getElementById('MeterAwal').value.trim();
            let meterakhir = document.getElementById('MeterAkhir').value.trim();

            if (meterawal > meterakhir) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Meter akhir harus lebih besar daripada Meter awal",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
