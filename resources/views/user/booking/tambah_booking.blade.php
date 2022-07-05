@extends('user.master')
@section('content')
<section class="home" id="home">
    <div class="home__container container grid" style="text-align-last: center; grid-template-columns: repeat(1, 1fr); margin-top: 10%;">
        <div class="home__data">
            <h1 class="home__title">Selesaikan pesanan Anda
        </div>
    </div>
</section>

<section class="message section container">
    <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class=" row align-items-center">
            <div class="form-group col-sm-12">
                <label for="exampleInputDisabled1">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="exampleInputDisabled1" value="">
            </div>
            <div class="form-group col-sm-12">
                <label for="email">Jam</label>
                <select class="form-control" id="jam" name="jam" data-dependent="tingkat_kegiatan">
                    <option selected="" disabled="">Pilih Jam</option>
                    @foreach($jams as $jam)
                    <option value="{{substr($jam->jam, 0,5)}}">{{substr($jam->jam, 0,5)}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="exampleFormControlSelect1">Durasi (Jam)</label>
                <select class="form-control" id="durasi" name="durasi" onchange="setTotal()" data-dependent="tingkat_kegiatan">
                    <option selected="" disabled="">Pilih Jam</option>
                    @for($i = 1; $i <= 9; $i++) <option value="{{$i}}">{{$i}}</option>
                        @endfor
                </select>
            </div>
            <div class="form-group col-sm-12">
                <label for="exampleInputDisabled1">Lapangan</label>
                <input type="hidden" name="id_lapangan" value="{{$lapangan->id}}">
                <input type="text" class="form-control" value="{{$lapangan->nama}}">
            </div>
            <div class="form-group col-sm-12">
                <label for="exampleInputDisabled1">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="totalBayar" value="" readonly>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Booking</button>
    </form>
</section>
@endsection

@push('js')
<script>
    function setTotal() {
        var durasi = $("#durasi").val()
        var harga = "{{$lapangan->harga}}"
        var total = ((durasi) + (harga))
        $("#totalBayar").val(total)
    }
</script>

@if(session('error'))
<script>
    alert("{{session('error')}}")
</script>
@endif
@endpush