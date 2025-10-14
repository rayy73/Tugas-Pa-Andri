@extends('layouts/app')

@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ trim(session('success')) }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Karyawan</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Sisfo Pegawai</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{ route('karyawan.create') }}">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama Karyawan</th>
                                            <th>Gaji Karyawan</th>
                                            <th>Alamat</th>
                                            <th>Jenis Kelamin</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @foreach($karyawan as $karyawan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $karyawan->nip }}</td>
                                            <td>{{ $karyawan->nama_karyawan }}</td>
                                            <td>{{ $karyawan->gaji_karyawan }}</td>
                                            <td>{{ $karyawan->alamat }}</td>
                                            <td>{{ $karyawan->jenis_kelamin }}</td>
                                            <td>
                                                {{-- Tombol Edit --}}
                                                <a class="btn btn-sm btn-primary" href="{{ route('karyawan.edit', $item->nip) }}">Edit</a>

                                                {{-- Tombol Delete --}}
                                                <form action="{{ url('karyawan/'.$karyawan->nip') }}" 
                                                      method="POST" 
                                                      style="display:inline-block;"
                                                      onsubmit="return confirm('Apakah anda ingin menghapus data ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

@endsection
