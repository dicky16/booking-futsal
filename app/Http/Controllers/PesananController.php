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
            return view('user.pesanan.detail', compact('pesanan'));
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request) {
        $data = $request->all();
        try {
            DB::table('pembayaran')->insert($data);
            return redirect()->back()->with('success', 'Berhasil upload bukti bayar');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
