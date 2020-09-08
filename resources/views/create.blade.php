@extends('layout')

@section('title', 'Buat Rute')

@push('css')
<link href="#"/>
<style>
    body{
        background-color: white;
    }
</style>
@endpush

@section('content')
<div class="card">
    <h5 class="card-header">
        Pendaftaran Rute Penerbangan
    </h5>
    <div class="card-body">
        <form action="{{ url('store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Maskapai</label>
                <input type="text" class="form-control" name="input_nama" id="nama" placeholder="Nama Maskapai">
            </div>
            <div class="form-group">
                <label for="asal">Bandara Asal</label>
                <input type="text" class="form-control" name="input_asal" id="asal" placeholder="Bandara Asal">
            </div>
            <div class="form-group">
                <label for="tujuan">Bandara Tujuan</label>
                <input type="text" class="form-control" name="input_tujuan" id="tujuan" placeholder="Bandara Tujuan">
            </div>
            <div class="form-group">
                <label for="harga">Harga Tiket</label>
                <input type="number" class="form-control" name="input_harga" id="harga" placeholder="Harga Tiket">
            </div>
            <div class="form-group">
                <label for="pajak">Pajak Bandara</label>
                <input type="number" class="form-control" name="input_pajak" id="pajak" placeholder="Pajak Bandara" step="any">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
            <a href="{{ url('index') }}" class="btn btn-light">Batal</a>
        </form>
    </div>
</div>
@endsection
