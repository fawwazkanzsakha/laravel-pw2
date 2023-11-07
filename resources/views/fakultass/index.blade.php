@extends('layout.main')
@section('title','Fakultas')

@section('content')
<div class="row">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Fakultas</h4>
            <p class="card-description">
                Daftar fakultas di Universitas MDP
            </p>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama fakultas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fakultas as $item)
                            <tr>
                                <td>{{ $item['nama'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
@endsection
