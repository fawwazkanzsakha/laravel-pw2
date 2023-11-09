@extends('layout.main')
@section('title','Fakultas')

@section('content')
<h1>Halaman Program Studi </h1>
<a href="{{route('prodi.create')}}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
<table class="table table -striped">
    <tr>
        <th> Nama Prodi</th>

    </tr>
    @foreach ($prodi as $item)
    <tr>
        <td>{{$item['nama']}}</td>

    @endforeach
</table>
@endsection
