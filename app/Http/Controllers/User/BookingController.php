<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $id = session('id');
        // $user = DB::table('users')->where('id', $id)->get();
        // $user = $user[0];
        $jams = DB::table('jam')->get();
        $lapangans = DB::table('lapangan')->get();
        return view('user.booking.booking', compact('jams', 'lapangans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $jams = DB::table('jam')->get();
        // $lapangans = DB::table('lapangan')->get();
        // return view('user.booking.tambah_booking', compact('jams', 'lapangans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        try {
            DB::table('bookings')->insert(array_merge($data, ["id_user" => session('id')]));
            return redirect('user/pesanan')->with('success', 'berhasil tambah pesanan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jams = DB::table('jam')->get();
        $lapangan = DB::table('lapangan')->where('id', $id)->get();
        $lapangan = $lapangan[0];
        return view('user.booking.tambah_booking', compact('jams', 'lapangan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $booking = DB::table('bookings')->where('id', $id)->get();
        // $booking = $booking[0];
        // return view('user.booking.detail', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
