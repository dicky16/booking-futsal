@extends('admin.master')
@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <h2>Detail Booking</h2>
        <form action="{{url('admin/pesanan/update')}}/{{$pesanan->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class=" row align-items-center">
                <div class="form-group col-sm-12">
                    <label for="exampleInputDisabled1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="exampleInputDisabled1" value="{{$pesanan->tanggal}}">
                </div>
                <div class="form-group col-sm-12">
                    <label for="email">Jam</label>
                    <input type="time" name="jam" class="form-control" id="exampleInputDisabled1" value="{{$pesanan->jam}}">
                </div>
                <div class="form-group col-sm-12">
                    <label for="exampleFormControlSelect1">Durasi (Jam)</label>
                    <input type="text" name="durasi" class="form-control" id="exampleInputDisabled1" value="{{$pesanan->durasi}}">
                </div>
                <div class="form-group col-sm-12">
                    <label for="exampleInputDisabled1">Lapangan</label>
                    <input type="text" class="form-control" value="{{$pesanan->nama_lapangan}}">
                </div>
                <div class="form-group col-sm-12">
                    <label for="exampleInputDisabled1">Total Bayar</label>
                    <input type="hidden" value="{{$pesanan->id}}" name="id_booking">
                    <input type="text" name="total_bayar" class="form-control" id="totalBayar" value="{{$pesanan->total_bayar}}" readonly>
                </div>
                <div class="form-group col-sm-12">
                    <label for="exampleInputDisabled1">Aksi Pesanan</label>
                    <select name="status" id="">
                        <option value="1">Terima</option>
                        <option value="0">Tolak</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection