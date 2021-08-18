<?php

namespace App\Http\Controllers;

use Alert;
use Auth;
use App\Barang;
use App\Pesanan;
use App\PesananDetail;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barangs = Barang::paginate(20);
        return view('admin.dataproduk', compact('barangs'));
    }

    public function tambah()
    {
        return view('admin.tambah');
    }

    public function invoice(){
        $pesanans = Pesanan::where('status', '!=', 0)->get();

        return view('admin.invoice', compact('pesanans'));
    }

    public function invoiceProses($id){
        $pesanans = Pesanan::where('id', $id)->first();
        $pesanans->status = 2;
        $pesanans->update();

        return view('admin.home');
    }

    public function detailInvoice($id)
    {
        $pesanan = Pesanan::where('id', $id)->first(); //terima masukkan id
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->first();
        $user = User::where('id',$pesanan->user_id)->first(); //dapetin semua detail user
        $barang = Barang::where('id', $pesanan_details->barang_id)->first();
        $jumlah = PesananDetail::where('jumlah', $pesanan_details->jumlah)->first();
        $jumlahHarga = PesananDetail::where('jumlah_harga', $pesanan_details->jumlah_harga)->get();

        return view('admin.detailInvoice', compact('pesanan','pesanan_details', 'user', 'barang', 'jumlah', 'jumlahHarga'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $tanggal = Carbon::now();

        $this->validate($request, [
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'nama_barang' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'integer'],
            'stok' => ['required', 'integer'],
            'berat' => ['required', 'integer'],
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $namaGambar = $request->gambar->getClientOriginalName() . '-' . time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('uploads'), $namaGambar);
        DB::table('barangs')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'berat' => $request->berat,
            'gambar' => $namaGambar,
            'created_at' => $tanggal,
        ]);

        /* Store $imageName name in DATABASE from HERE */
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$namaGambar);

        Alert::Success('Produk Berhasil diUpdate', 'Success!');
        return redirect('admin/dataproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::where('id', $id)->first();

        return view('admin.edit', compact('barang'));
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
        $barangs = Barang::where('id', $id)->first();
        $barangs->nama_barang = $request->nama_barang;
        $barangs->deskripsi = $request->deskripsi;
        $barangs->stok = $request->stok;
        $barangs->berat = $request->berat;
        $barangs->harga = $request->harga;
        $barangs->update();

        Alert::Success('Produk Berhasil diUpdate', 'Success!');
        return redirect('admin/dataproduk');
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

    public function delete($id)
    {
        $barang = Barang::where('id', $id)->first();
        $barang->delete();

        Alert::error('Produk Sukses dihapus', 'Hapus');
        return redirect('admin/dataproduk');
    }

    public function profile()
    {
       $user = User::where('id',Auth::user()->id)->first();

       return view('admin.profile',compact('user'));
    }

    public function editProfile()
    {
       $user = User::where('id',Auth::user()->id)->first();

       return view('admin.editProfile',compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'password' => 'confirmed',
        ]);

        $user = User::where('id',Auth::user()->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->update();

        Alert::Success('Profile Berhasil diUpdate', 'Success!');
        return redirect('admin/profile');
    }

    public function history()
    {
        $pesanans = Pesanan::where('status', '=', 2)->get();

        return view('admin.history', compact('pesanans'));
    }

    public function deleteHistory($id)
    {
        $pesanans = Pesanan::where('id', $id)->where('status','=','2')->first();
        $pesanans->delete();

        Alert::error('History Sukses dihapus', 'Hapus');
        return redirect('admin/history');
    }

}
