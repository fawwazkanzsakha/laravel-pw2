@extends('layout.main')
@section('title','Fakultas')

@section('content')
<h1>Halaman Program Studi </h1>
<table class="table table -striped">
    <tr>
        <th> Nama Prodi</th>
        <th> Nama Fakultas</th>
    </tr>
    @foreach ($prodi as $item)
    <tr>
        <td>{{$item['nama']}}</td>

    @endforeach
</table>
@endsection
