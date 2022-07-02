<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register(Request $request) 
    {
        $data = $request->all();
        // dd($data);
        try {
            $password = $request->password;
            $password = Hash::make($password);
            // dd($password);
            unset($data["_token"]);
            DB::table('users')->insert(array_merge($data, ["password" => $password, "role" => "user"]));
            return redirect('login')->with('register', 'success');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('register', 'error '.$th->getMessage());
        }
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = DB::table('users')->where('email', $email)->get();
        // dd($data);
        try {
            if (count($data) > 0) {
                if(Hash::check($password, $data[0]->password)) {
                    session(["id" => $data[0]->id]);
                    session(["login" => true]);
                    if($data[0]->role == "admin") {
                        return redirect('/admin')->with('login', 'success');
                    } else {
                        return redirect('/user')->with('login', 'success');
                    }
                }
            } else {
                return redirect()->back()->with('login', 'credentials error');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('login', 'error '. $th->getMessage());
        }
    }
}
