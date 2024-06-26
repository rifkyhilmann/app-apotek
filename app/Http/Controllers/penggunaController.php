<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\obat;
use App\Models\pengguna;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class penggunaController extends Controller
{

    function userLogin() {
        return view('auth.userLogin');
    }

    function userRegister() {
        return view('auth.userRegister');
    }

    function pagesUser(Request $request) {
        $path = $request->path();
    
        // Jika tidak ada sub-halaman, arahkan ke dashboard
        if ($path === '/user/pages') {
            // Memanggil metode dashboardUser untuk menampilkan dashboard
            return $this->dashboardUser();
        }
    
        // Jika bukan rute '/user/pages', lanjutkan dengan menampilkan halaman dengan variabel username
        $username = session('username');
        return view('pages.pagesUser', compact('username'));
    }
    

    function dashboardUser() {
        $jumlahUser = pengguna::count();
        $jumlahObat = obat::count();
        $pesanan = pesanan::count();
        $username = session('username');
    
        return view('Layout.User.DashboardUser', [
            'jumlahUser' => $jumlahUser,
            'jumlahObat' => $jumlahObat,
            'pesanan' => $pesanan,
            'username' => $username
        ]);
    }

    function masterDataAdmin() {
        $user = pengguna::all();
        return view('layout.masterData', compact('user'));
    }

    function deleteUser($id) {
        $user = pengguna::find($id);
        $user -> delete();
        return redirect()->route('admin.MasterDataAdmin');
    }

    function updateUser($id) {
        $user = pengguna::find($id);
        $username = session('username');
        
        return view('Layout.UpdateData', compact('user'));
    }

    function ProductUser() {
        $obat = obat::all();
        $username = session('username');

        return view('Layout.User.ProductUser', compact('obat', 'username'));
    }

    function keranjang() {
        $username = session('username');
        $keranjang = Keranjang::where('username', $username)->get();

        return view('Layout.User.KeranjangUser', compact('keranjang', 'username'));
    }

    function pesanan() {
        $username = session('username');
        $pesanan = pesanan::where('username', $username)->get();

        return view('Layout.User.PesananUser', compact('pesanan', 'username'));
    }

    function TambahPesanan (Request $request, $nama_obat) {
        $obat = obat::where('nama_obat', $nama_obat)->first();
        $username = session('username');
        $jumlah_obat = $request->input('jumlah_obat', 1);
        if($obat) {
            $keranjang = new keranjang();
            $keranjang -> username = $username;
            $keranjang-> kode_obat = $obat -> kode_obat;
            $keranjang-> nama_obat = $obat -> nama_obat;
            $keranjang-> jumlah_obat = $jumlah_obat;
            $keranjang-> harga = $obat->harga;

            $keranjang->save();
        }

        return redirect()->route('user.keranjang');
    }

    function DeleteKeranjang($id) {
        $keranjang = keranjang::find($id);
        $keranjang -> delete();

        return redirect()->route('user.keranjang');
    } 

    function CheckoutKeranjang() {
        $username = session('username');
        $keranjang = keranjang::where('username', $username)->get();
        
        foreach ($keranjang as $item) {
            $pesanan = new pesanan();
            $pesanan->username = $item->username;
            $pesanan->kode_obat = $item->kode_obat;
            $pesanan->nama_obat = $item->nama_obat;
            $pesanan->jumlah_obat = $item->jumlah_obat; // Default jumlah obat
            $pesanan->harga = $item->harga;
            $pesanan->save();
            
            // Hapus item dari keranjang
            $item->delete();
        }
    
        return redirect()->route('user.Pesanan');
    }
    

    

    function updateUserSubmit(Request $request, $id) {
        $user = pengguna::find($id);
        $user -> nama = $request->nama;
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> email = $request->email;
        $user -> alamat = $request->alamat;
        $user -> tanggal_lahir = $request->tanggal_lahir;
        $user -> no_hp = $request->no_hp;
        $user -> update();

        return redirect()->route('admin.MasterDataAdmin');
    }


    function userSubmit(Request $request, $id) {
        $user = new pengguna();
        $user -> nama = $request->nama;
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> email = $request->email;
        $user -> alamat = $request->alamat;
        $user -> tanggal_lahir = $request->tanggal_lahir;
        $user -> no_hp = $request->no_hp;
        $user -> save();

        return redirect()->route('user.login')->with('success', 'Akun berhasil dibuat.');
    }

    function userLoginSubmit(Request $request){
        $credentials = $request->only('username', 'password');

        $user = pengguna::where('username', $credentials['username'])->first();

        if ($user && $credentials['password'] === $user->password) {
            // Jika username dan password cocok, maka login berhasil
            // Simpan username dalam sesi
            $request->session()->put('username', $user->username);
            
            // Redirect ke halaman dashboard
            return redirect()->route('user.dashboard')->with('success', 'Login berhasil.');
        }

        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    function tambahData(Request $request) {
        $user = new pengguna();
        $user -> nama = $request->nama;
        $user -> username = $request->username;
        $user -> password = $request->password;
        $user -> email = $request->email;
        $user -> alamat = $request->alamat;
        $user -> tanggal_lahir = $request->tanggal_lahir;
        $user -> no_hp = $request->no_hp;
        $user -> save();

        return redirect()->route('admin.MasterDataAdmin')->with('success', 'Akun berhasil dibuat.');
    }

}
