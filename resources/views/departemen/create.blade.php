@extends('layouts.app')

@section('content')
<form action="{{ route('departemen.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Departemen</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_departemen">Nama Departemen</label>
                        <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" value="{{ old('nama_departemen') }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('departemen.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
