@extends('layouts.app')

@section('title')
    Manajemen Obat
@endsection

@section('content')
    @push('css-plugins')
    @endpush

    @include('components.navbar')

    <div class="container">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Success!</strong> {{ $message }}.
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                @foreach ($errors->all() as $error)
                    <strong>{{ $error }}</strong><br>
                @endforeach
            </div>
        @endif

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Data Obat
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('data-obat.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="kode_obat" class="form-label">Kode Obat</label>
                                <input type="text"
                                    class="form-control @error('kode_obat') is-invalid @enderror" id="kode_obat"
                                    name="kode_obat" required>

                                @error('kode_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="nama_obat" class="form-label">Nama Obat</label>
                                <input type="text"
                                    class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat"
                                    name="nama_obat" required>

                                @error('nama_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kekuatan_obat" class="form-label">Kekuatan Obat</label>
                                <input type="text"
                                    class="form-control @error('kekuatan_obat') is-invalid @enderror" id="kekuatan_obat"
                                    name="kekuatan_obat" required>

                                @error('kekuatan_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kemasan_obat" class="form-label">Kemasan Obat</label>
                                <select class="form-control @error('kemasan_obat') is-invalid @enderror" id="kemasan_obat" name="kemasan_obat" required>
                                    <option value="">-- Pilih Kemasan Obat --</option>
                                    @foreach($kemasans as $kemasan)
                                        <option value="{{ $kemasan->id }}">{{ $kemasan->nama_kemasan }}</option>
                                    @endforeach
                                </select>
                            
                                @error('kemasan_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="bentuk_sediaan" class="form-label">Bentuk Sediaan</label>
                                <select class="form-control @error('bentuk_sediaan') is-invalid @enderror" id="bentuk_sediaan" name="bentuk_sediaan" required>
                                    <option value="">-- Pilih Bentuk Sediaan --</option>
                                    @foreach($bentukSediaans as $bentukSediaan)
                                        <option value="{{ $bentukSediaan->id }}">{{ $bentukSediaan->nama_satuan }}</option>
                                    @endforeach
                                </select>
                            
                                @error('bentuk_sediaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="exp_obat" class="form-label">Expired Obat</label>
                                <input type="date"
                                    class="form-control @error('exp_obat') is-invalid @enderror" id="exp_obat"
                                    name="exp_obat" required>

                                @error('exp_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="satuan" class="form-label">Satuan</label>
                                <select class="form-control @error('satuan') is-invalid @enderror" id="satuan" name="satuan" required>
                                    <option value="">-- Pilih Satuan --</option>
                                    @foreach($satuans as $satuan)
                                        <option value="{{ $satuan->id }}">{{ $satuan->nama_satuan }}</option>
                                    @endforeach
                                </select>
                            
                                @error('satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                {{-- bisa lebih dari satu foto --}}
                                <label for="foto_obat" class="form-label">Foto</label>
                                <input type="file"
                                    class="form-control @error('foto_obat') is-invalid @enderror" id="foto_obat"
                                    name="foto_obat" required>

                                @error('foto_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="stok_awal" class="form-label">Stok Awal</label>
                                <input type="number"
                                    class="form-control @error('stok_awal') is-invalid @enderror" id="stok_awal"
                                    name="stok_awal" required>

                                @error('stok_awal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="barang_masuk" class="form-label">Barang Masuk</label>
                                <input type="number"
                                    class="form-control @error('barang_masuk') is-invalid @enderror" id="barang_masuk"
                                    name="barang_masuk" required>

                                @error('barang_masuk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Obat</th>
                            <th scope="col">Nama Obat</th>
                            <th scope="col">Expired Date</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($obats as $key => $obat)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $obat->kode_obat }}</td>
                                <td>{{ $obat->nama_obat }}</td>
                                <td>{{ $obat->exp_obat }}</td>
                                <td>
                                    <a href="{{ route('data-obat.show', $obat->id) }}">Lihat Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    @push('javascript-plugins')
    @endpush
@endsection
