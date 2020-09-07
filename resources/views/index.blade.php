@extends('layout')

@section('title', 'Index')

@section('content')
<div class="card">
    <h5 class="card-header">
        Daftar Rute Tersedia
        <a href="{{ url('create') }}" class="btn btn-dark float-right">Rute Baru</a>
    </h5>
    <div class="card-body">
        <table class="table table-sm datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Maskapai</th>
                    <th scope="col">Asal Penerbangan</th>
                    <th scope="col">Tujuan Penerbangan</th>
                    <th scope="col">Harga Tiket</th>
                    <th scope="col">Pajak</th>
					<th scope="col">Total Harga</th>
					<th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($maskapai as $new_maskapai)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $new_maskapai->nama_maskapai }}</td>
                    <td>{{ $new_maskapai->bandara_asal}}</td>
                    <td>{{ $new_maskapai->bandara_tujuan}}</td>
                    <td>{{ $new_maskapai->harga}}</td>
					<td>{{ $totalPajak = $new_maskapai->pajak * $new_maskapai->harga}}</td>
					<td>{{ $totalPajak + $new_maskapai->harga }}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>                        
                        <a href="/delete/{{ $new_maskapai->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
				@endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection