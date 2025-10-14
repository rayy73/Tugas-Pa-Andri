@extends('layouts.app')

@section('content')
<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Karyawan</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="nip" required>
                    </div>

                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" name="nama_karyawan" required>
                    </div>

                    <div class="form-group">
                        <label>Gaji Karyawan</label>
                        <input type="number" class="form-control" name="gaji_karyawan" required>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                            <option value="" selected disabled hidden>-- Pilih Jenis Kelamin --</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
