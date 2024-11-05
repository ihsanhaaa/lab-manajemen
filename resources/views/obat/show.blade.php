@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-3">Detail Obat</h2>

    
    <a href="{{ route('data-obat.show', $obat->id) }}">Edit Barang</a>
    
    <div class="card">
        <div class="card-header">
            <h5>{{ $obat->nama_obat }} ({{ $obat->kode_obat }})</h5>
        </div>
        <div class="card-body">
            <p><strong>Kekuatan Obat:</strong> {{ $obat->kekuatan_obat }}</p>
            <p><strong>Kemasan Obat:</strong> {{ $obat->kemasan->nama_kemasan ?? 'N/A' }}</p>
            <p><strong>Bentuk Sediaan:</strong> {{ $obat->bentukSediaan->nama_sediaan ?? 'N/A' }}</p>
            <p><strong>Satuan:</strong> {{ $obat->satuan->nama_satuan ?? 'N/A' }}</p>
            <p><strong>Expired Date:</strong> {{ \Carbon\Carbon::parse($obat->exp_obat)->format('d-m-Y') }}</p>
            <p><strong>Stok Awal:</strong> {{ $obat->stok_awal }}</p>
            <p><strong>Barang Masuk:</strong> {{ $obat->barang_masuk }}</p>

            <!-- Display multiple photos if available -->
            <h5>Foto Obat:</h5>
            <div class="row">
                @foreach($obat->fotos as $foto)
                    <div class="col-md-4">
                        <img src="{{ asset($foto->foto_path) }}" alt="Foto Obat" class="img-thumbnail">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('data-obat.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
