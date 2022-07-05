@extends('admin.master')
@section('content')
<!-- Page Content  -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Lapangan</h4>
                            <a href="{{route('lapangan.create')}}"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahLapangan">Tambah</button></a>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table class="table" id="table_id" style="display: inline-table;">
                            <thead>
                                <tr>
                                    <!-- <th>No</th> -->
                                    <th>Nama</th>
                                    <th>Cover</th>
                                    <th>Harga/Jam</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $lapangan)
                                <tr>
                                    <td>{{$lapangan->nama}}</td>
                                    <td>
                                        <img src="{{url('')}}/{{$lapangan->cover}}" alt="" width="100" height="100">
                                    </td>
                                    <td>{{$lapangan->harga}}</td>
                                    <td class="">
                                        <div class="list-user-action text-center">
                                            <a class="iq-bg-primary text-decoration-none" href="/mahasiswa/kegiatan/detail"><i class="ri-eye-line"></i></a>
                                            <a class="iq-bg-primary text-decoration-none" href="/mahasiswa/kegiatan/edit"><i class="ri-pencil-line"></i></a>
                                            <!-- <a class="iq-bg-primary text-decoration-none" href="/mahasiswa/kegiatan/edit"><i class="fa-solid fa-trash-can"></i></a> -->
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection