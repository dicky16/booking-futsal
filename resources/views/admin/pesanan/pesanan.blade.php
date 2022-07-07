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
                            <h4 class="card-title">Booking Lapangan</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <table class="table" id="table_id" style="display: inline-table;">
                            <thead>
                                <tr>
                                    <th>ID Booking</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Jam Mulai</th>
                                    <th>Durasi</th>
                                    <th>Total Bayar</th>
                                    <th>Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($pesanans as $pesanan)
                                <tr>
                                    <td>{{$pesanan->id}}</td>
                                    <td>{{$pesanan->nama}}</td>
                                    <td>{{$pesanan->tanggal}}</td>
                                    <td>{{$pesanan->jam}}</td>
                                    <td>{{$pesanan->durasi}}</td>
                                    <td>{{$pesanan->total_bayar}}</td>
                                    <td>{{$pesanan->status_bayar}}</td>
                                    <td class="">
                                        <div class="list-user-action text-center">
                                            <a class="iq-bg-primary text-decoration-none" href="/mahasiswa/kegiatan/detail"><i class="ri-eye-line"></i></a>
                                            <a class="iq-bg-primary text-decoration-none" href="{{url('admin/pesanan')}}/{{$pesanan->id}}/edit"><i class="ri-pencil-line"></i></a>
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