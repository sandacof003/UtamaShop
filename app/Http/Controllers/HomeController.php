<?php

namespace App\Http\Controllers;
use App\Barang;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::where('id', Auth::User()->id)->first();
        $user_role = $user->role_id;

        if ($user->role_id == 1) {
            return view('admin/home');
        } else {
            $barangs = Barang::paginate(20);
            return view('home', compact('barangs'));
        }

    }

    public function filter()
    {
        $barangs = Barang::paginate(10);
        return view('filter', compact('barangs'));
    }

    public function cari()
    {
        $barangs = Barang::where('id',1)->first();
        return view('hasilFilter',compact('barangs'));
    }
}
