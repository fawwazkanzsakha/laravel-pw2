@extends ('layout.main')
@section ('title','mahasiswa')

@section ('content')
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa Table</h4>
                  <p class="card-description">
                    Daftar Mahasiswa
                  </p>
                   <a href="{{route('mahasiswa.create')}}"class="btn btn-dark btn-rounded btn-fw">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>NPM</th><th>Nama</th>
                                <th>tempat_lahir</th><th>tanggal_lahir</th>
                                <th>foto</th><th>nama_prodi</th><th>nama_fakultas</th>
                            </tr>
                        </thead>
                     @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{$item['npm']}}</td>
                            <td>{{$item['nama']}}</td>
                            <td>{{$item['tempat_lahir']}}</td>
                            <td>{{$item['tanggal_lahir']}}</td>
                            <td><img src="image/{{$item['images.jpg']}}"
                             class="rounded-circle" width="70px" /></td>
                            <td>{{$item['prodi']['nama']}}</td>
                            <td>{{$item['prodi']['fakultas']['nama']}}</td>
                        </tr>
                    @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection
