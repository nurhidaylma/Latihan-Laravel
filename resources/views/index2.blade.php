@extends('layout')

@section('title', 'Index')

@section('content')
<div class="card">
    <h5 class="card-header">
        Employee Table
        <a href="{{ url('/home/create') }}" class="btn btn-dark float-right">Insert Employee</a>
    </h5>
    <div class="card-body">
        <table class="table table-sm datatable">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pegawai</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">No Telephone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{ $loop->iteration}}</th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->jabatan}}</td>
                    <td>{{ $employee->telephone}}</td>
                    <td>{{$employee->address}}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <form action="{{route('delete', $employee->id)}}" method="post">
                            @crsf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <!-- <a href="{{route('delete', $employee->id)}}" class="btn btn-danger">Delete</a> -->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection