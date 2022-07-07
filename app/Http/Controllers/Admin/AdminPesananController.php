<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AdminPesananController extends Controller
{
    public function index()
    {
        $pesanans = DB::table('bookings')
            ->select('bookings.*', 'users.id as id_user', 'users.nama as nama', 'lapangan.id as id_lapangan', 'lapangan.nama as nama_lapangan')
            ->join('lapangan', 'lapangan.id', '=', 'bookings.id_lapangan')
            ->join('users', 'users.id', '=', 'bookings.id_user')
            ->get();
        return view('admin.pesanan.pesanan', compact('pesanans'));
    }

    public function edit($id)
    {
        $pesanan = DB::table('bookings')
            ->select('bookings.*', 'users.id as id_user', 'users.nama as nama', 'lapangan.id as id_lapangan', 'lapangan.nama as nama_lapangan')
            ->where('bookings.id', $id)
            ->join('lapangan', 'lapangan.id', '=', 'bookings.id_lapangan')
            ->join('users', 'users.id', '=', 'bookings.id_user')
            ->get();
            $pesanan = $pesanan[0];
        // dd($pesanan);
        return view('admin.pesanan.edit', compact('pesanan'));
    }

    public function update(Request $request, $id) {
        try {
            DB::table('bookings')->where('id', $id)->update(["status_bayar" => $request->status]);
            return Redirect()->back()->with('success', 'berhasil update status');
        } catch (\Throwable $th) {
            //throw $th;
            return Redirect()->back()->with('errir', $th->getMessage());
        }
    }
}
