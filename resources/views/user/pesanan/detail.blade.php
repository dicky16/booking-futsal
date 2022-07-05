@extends('user.master')
@section('content')
<section class="home" id="home">
    <div class="home__container container grid" style="text-align-last: center; grid-template-columns: repeat(1, 1fr); margin-top: 10%;">
        <div class="home__data">
            <h4 class="home__title">Selesaikan pesanan Anda,
                Lakukan pembayaran ke
                <br>
                Rekening BCA 9875667876 A/N Siapa sebesar Rp. {{$pesanan->total_bayar}}
            </h4>
        </div>
    </div>
</section>

<section class="message section container">
    <h2>Detail Booking</h2>
    <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
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
                <input type="text" name="total_bayar" class="form-control" id="totalBayar" value="{{$pesanan->total_bayar}}" readonly>
            </div>
            <div class="form-group col-sm-12">
                <label for="exampleInputDisabled1">Upload Bukti Bayar</label>
                <input type="file" name="bukti_bayar" class="form-control">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection