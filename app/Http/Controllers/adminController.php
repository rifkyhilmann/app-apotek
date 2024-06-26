<?php

namespace App\Http\Controllers;


use App\Models\admin;
use App\Models\obat;
use App\Models\keranjang;
use App\Models\pengguna;
use App\Models\pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    function adminLogin() {
        return view('auth.adminLogin');
    }

    function adminRegister() {
        return view('auth.adminRegister');
    }

    function pagesAdmin(Request $request) {
        

        $path = $request->path();

        // Jika tidak ada sub-halaman, arahkan ke dashboard
        if ($path === 'admin/pages') {
            return redirect()->route('admin.dashboard');
        }

        return view('pages.pagesAdmin');

    }

    function dashboardAdmin() {
        $jumlahUser = pengguna::count();
        $jumlahObat = obat::count();
        $pesanan = pesanan::count();
    
        return view('Layout.dashboardAdmin', [
            'jumlahUser' => $jumlahUser,
            'jumlahObat' => $jumlahObat,
            'pesanan' => $pesanan
        ]);
    }

    function tambahDataUser() {
        return view('Layout.TambahData');
    }

    function ProductAdmin() {
        $obat = obat::all();
        return view('Layout.ProductAdmin', compact('obat'));
    }

    function TambahObat() {
        return view('Layout.TambahObat');
    }

    function UpdateObat($id) {
        $obat = obat::find($id);

        return view('Layout.UpdateObat', compact('obat'));
    }

    function DeleteObat($id) {
        $obat = obat::find($id);
        $obat -> delete();
        return redirect()->route('admin.Product');
    }

    function Penjualan() {
        $pesanan = pesanan::all();
        $totalPendapatan = $pesanan->sum('harga');

        return view('Layout.PenjualanAdmin', compact('pesanan', 'totalPendapatan'));
    }

    function UpdateObatSubmit(Request $request, $id) {
        $obat = obat::find($id);
        $obat -> kode_obat = $request -> kode_obat;
        $obat -> nama_obat = $request -> nama_obat;
        $obat -> jenis_obat = $request -> jenis_obat;
        $obat -> harga = $request -> harga;
        $obat -> update();

        return redirect()->route('admin.Product');
    }

    function TambahObatSubmit(Request $request) {
        $obat = new obat();
        $obat -> kode_obat = $request -> kode_obat;
        $obat -> nama_obat = $request -> nama_obat;
        $obat -> jenis_obat = $request -> jenis_obat;
        $obat -> harga = $request -> harga;
        $obat -> save();

        return redirect()->route('admin.Product');
    }



    function adminSubmit(Request $request) {
        $admin = new admin();
        $admin -> username = $request->username;
        $admin -> password = $request->password;
        $admin -> save();

        return redirect()->route('admin.login')->with('success', 'Akun berhasil dibuat.');
    } 

    function adminLoginSubmit(Request $request) {
        $credentials = $request->only('username', 'password');
        $admin = admin::where('username', $credentials['username'])->first();

        if ($admin && $credentials['password'] === $admin->password) {
            // Jika username dan password cocok, maka login berhasil
            // Anda bisa menggunakan session atau metode lain untuk login user
            // Misalnya menggunakan Auth facade
            Auth::login($admin);

            return redirect()->route('admin.pages')->with('success', 'Login berhasil.');
        }
    }
}
