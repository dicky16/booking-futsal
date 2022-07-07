<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = DB::table('bookings')
            ->select('bookings.*', 'users.id as id_user', 'lapangan.id as id_lapangan', 'lapangan.nama as nama_lapangan')
            ->where('id_user', session('id'))
            ->join('lapangan', 'lapangan.id', '=', 'bookings.id_lapangan')
            ->join('users', 'users.id', '=', 'bookings.id_user')
            ->get();
        // $status = [];
        // for ($i=0; $i < count($pesanans); $i++) { 
        //     $pembayaran = DB::table('pembayaran')->where('id_booking', $pesanans[$i]->id)->get();
        //     if($pembayaran) {
        //         $status[$i] = true;
        //     } else {
        //         $status[$i] = false;
        //     }
        // }
        return view('user.pesanan.pesanan', compact('pesanans'));
    }

    public function show($id)
    {
        try {
            $booking = DB::table('bookings')
                ->select('bookings.*', 'users.id as id_user', 'lapangan.id as id_lapangan', 'lapangan.nama as nama_lapangan')
                ->join('lapangan', 'lapangan.id', '=', 'bookings.id_lapangan')
                ->join('users', 'users.id', '=', 'bookings.id_user')
                ->where('lapangan.id', $id)
                ->get();
            $pesanan = $booking[0];
            $status = false;
            $pembayaran = DB::table('pembayaran')->where('id_booking', $id)->get();
            // dd($pembayaran);
            // if (count($pembayaran) > 0) {
            //     $pembayaran = $pembayaran[0];
            // }
            // if(count($pembayaran) > 0) {
            //     $status = true;
            // }
            return view('user.pesanan.detail', compact('pesanan', 'pembayaran'));
        } catch (\Throwable $th) {
            dd("show" . $th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        $data = [
            "id_booking" => $request->id_booking,
            "total_harga" => $request->total_bayar
        ];
        try {
            $file = $request->file('bukti_bayar');
            $coverName = time() . "." . $file->extension();
            $destination = "assets/images/bukti";
            $file->move($destination, $coverName);
            DB::table('bookings')->where('id', $request->id_booking)->update(["status_bayar" => 1]);
            DB::table('pembayaran')->insert(array_merge($data, ["bukti_tf" => $destination . "/" . $coverName]));
            return redirect()->back()->with('success', 'Berhasil upload bukti bayar');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
