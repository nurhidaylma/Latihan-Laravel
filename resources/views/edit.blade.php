@extends('layout')

@section('title', 'Edit Rute')

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
        Edit Rute Penerbangan
    </h5>
    <div class="card-body">        
        @foreach($maskapai as $edit)
        <form action="/index/update" method="post">
            @csrf

            <input type="hidden" class="form-control" name="id" value="{{ $edit->id}}">    
            <div class="form-group">
                <label for="name">Nama Maskapai</label>
                <input type="text" class="form-control" name="input_nama" id="nama" value="{{ $edit->nama_maskapai}}">
            </div>
            <div class="form-group">
                <label for="asal">Bandara Asal</label>
                <input type="text" class="form-control" name="input_asal" id="asal" value="{{ $edit->bandara_asal}}">
            </div>
            <div class="form-group">
                <label for="tujuan">Bandara Tujuan</label>
                <input type="text" class="form-control" name="input_tujuan" id="tujuan" value="{{$edit->bandara_tujuan}}">
            </div>
            <div class="form-group">
                <label for="harga">Harga Tiket</label>
                <input type="number" class="form-control" name="input_harga" id="harga" value="{{ $edit->harga }}">
            </div>
            <div class="form-group">
                <label for="pajak">Pajak Bandara</label>
                <input type="number" class="form-control" name="input_pajak" id="pajak" value="{{ $edit->pajak}}" step="any">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="/index" class="btn btn-light">Batal</a>
        </form>
        @endforeach
    </div>
</div>
@endsection
