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
            // dd( $barangs);
            return view('home', compact('barangs'));
        }

    }

    public function filter()
    {
        $barangs = Barang::paginate(10);
        return view('filter', compact('barangs'));
    }
    
    public function cari(Request $request)
    {
        $var_vga = $request->vga;
        $var_ram = $request->ram;
        $var_cpu = $request->cpu;
        
        $list_item_gaming =  Barang::where('kategori', "Laptop Gaming")->count();
        $list_item_vga_gaming =  Barang::where('vga', $var_vga)->where('kategori', "Laptop Gaming")->count();
        $list_item_ram_gaming =  Barang::where('ram', $var_ram)->where('kategori', "Laptop Gaming")->count();
        $list_item_cpu_gaming =  Barang::where('cpu', $var_cpu)->where('kategori', "Laptop Gaming")->count();
        
        $list_item_office =  Barang::where('kategori', "Laptop Office")->count();
        $list_item_vga_office =  Barang::where('vga', $var_vga)->where('kategori', "Laptop Office")->count();
        $list_item_ram_office =  Barang::where('ram', $var_ram)->where('kategori', "Laptop Office")->count();
        $list_item_cpu_office =  Barang::where('cpu', $var_cpu)->where('kategori', "Laptop Office")->count();

        // echo($list_item_gaming." _ ".$list_item_office."/->");
        // echo($list_item_vga_gaming." _ ".$list_item_vga_office."/->");
        // echo($list_item_ram_gaming." _ ".$list_item_ram_office."/->");
        // echo($list_item_cpu_gaming." _ ".$list_item_cpu_office."/->");
        
        $prop_gaming = $list_item_gaming/($list_item_gaming+$list_item_office);
        $prop_office = $list_item_office/($list_item_gaming+$list_item_office);
        // echo($prop_gaming." _ ".$prop_office);
        
        $prop_item_is_gaming = $prop_gaming*
        ($list_item_vga_gaming/$list_item_gaming)*
        ($list_item_ram_gaming/$list_item_gaming)*
        ($list_item_cpu_gaming/$list_item_gaming);
        
        $prop_item_is_office = $prop_office*
        ($list_item_vga_office/$list_item_office)*
        ($list_item_ram_office/$list_item_office)*
        ($list_item_cpu_office/$list_item_office);
        // echo($prop_item_is_gaming." _ ".$prop_item_is_office);

        if($prop_item_is_gaming>$prop_item_is_office){
            // produk yang dicari user, produk gaming, rekomendasi produk gaming
            $rekomendasi = "Laptop Gaming";
            $barangs = Barang::where('kategori', $rekomendasi)->
            where('vga', $var_vga)->
            where('ram', $var_ram)->
            where('cpu', $var_cpu)->
            paginate(10);
            if(count($barangs)<=0){
                echo "0";
                $barangs = Barang::where('kategori', $rekomendasi)->
                where('ram', $var_ram)->
                where('cpu', $var_cpu)->
                paginate(10);
            }
            if(count($barangs)<=0){
                echo "1";
                $barangs = Barang::where('kategori', $rekomendasi)->
                where('cpu', $var_cpu)->
                paginate(10);
            }
            if(count($barangs)<=0){
                echo "2";
                $barangs = Barang::where('kategori', $rekomendasi)->
                paginate(10);
            }

            
            // dd(compact('barangs'));
            return view('hasilFilter',compact('barangs','rekomendasi'));
        }else{
            $rekomendasi = "Laptop Office";
            $barangs = Barang::where('kategori', $rekomendasi)->
            where('vga', $var_vga)->
            where('ram', $var_ram)->
            where('cpu', $var_cpu)->
            paginate(10);
            if(count($barangs)<=0){
                echo "0";
                $barangs = Barang::where('kategori', $rekomendasi)->
                where('ram', $var_ram)->
                where('cpu', $var_cpu)->
                paginate(10);
            }
            if(count($barangs)<=0){
                echo "1";
                $barangs = Barang::where('kategori', $rekomendasi)->
                where('cpu', $var_cpu)->
                paginate(10);
            }
            if(count($barangs)<=0){
                echo "2";
                $barangs = Barang::where('kategori', $rekomendasi)->
                paginate(10);
            }

            return view('hasilFilter',compact('barangs','rekomendasi'));
        }
       
    }
}
