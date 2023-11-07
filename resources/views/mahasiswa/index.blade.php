@extends ('layout.main')
@section ('title','mahasiswa')

@section ('content')
    <h1>halaman mahasiswa </h1>
    <table class="table table-success table-striped-columns">
        <tr>
            <th>NPM</th><th>Nama</th>
            <th>tempat_lahir</th><th>tanggal_lahir</th>
            <th>foto</th><th>nama_prodi</th><th>nama_fakultas</th>
        </tr>
    @foreach ($mahasiswa as $item)
        <tr>
            <td>{{$item['npm']}}</td>
            <td>{{$item['nama']}}</td>
            <td>{{$item['tempat_lahir']}}</td>
            <td>{{$item['tanggal_lahir']}}</td>
            <td><img src="image/{{$item['foto']}}" class="rounded-circle" width="70px" /></td>
            <td>{{$item['prodi']['nama']}}</td>
             <td>{{$item['prodi']['fakultas']['nama']}}</td>
        </tr>
    @endforeach
    </table>
@endsection
