<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\penggunaController;
use Illuminate\Support\Facades\Route;

//adminRoute
Route::get('/admin/login', [adminController::class, 'adminLogin']) ->name('admin.login');
Route::get('/admin/register', [adminController::class, 'adminRegister']) ->name('admin.register');
Route::get('/admin/pages', [adminController::class, 'pagesAdmin']) ->name('admin.pages');
Route::get('/admin/pages/dashboard', [adminController::class, 'dashboardAdmin'])->name('admin.dashboard');
Route::get('/admin/pages/masterData', [penggunaController::class, 'masterDataAdmin'])->name('admin.MasterDataAdmin');
Route::get('/admin/pages/product', [adminController::class, 'ProductAdmin'])->name('admin.Product');
Route::get('/admin/pages/penjualan', [adminController::class, 'Penjualan'])->name('admin.Penjualan');
Route::get('/admin/pages/product/TambahObat', [adminController::class, 'TambahObat'])->name('admin.ProductTambah');
Route::get('/admin/pages/product/UpdateOba/{id}', [adminController::class, 'UpdateObat'])->name('admin.ProductUpdate');
Route::get('/admin/pages/tambahData', [adminController::class, 'tambahDataUser'])->name('admin.TambahDataUser');
Route::get('/admin/pages/masterData/update/{id}', [penggunaController::class, 'updateUser'])->name('admin.UpdateUser');

Route::post('/admin/pages/Product/submit', [adminController::class, 'TambahObatSubmit'])->name('admin.ProductSubmit');
Route::post('/admin/pages/Product/Update/submit/{id}', [adminController::class, 'UpdateObatSubmit'])->name('admin.ProductUpdateSubmit');
Route::post('/admin/pages/Product/Delete/{id}', [adminController::class, 'DeleteObat'])->name('admin.DeleteObat');
Route::post('/admin/pages/masterData/update/submit/{id}', [penggunaController::class, 'updateUserSubmit'])->name('admin.UpdateUserSubmit');
Route::post('/admin/pages/tambahData/submit', [penggunaController::class, 'tambahData'])->name('admin.TambahDataUserSubmit');
Route::post('/admin/pages/masterData/delete/{id}', [penggunaController::class, 'deleteUser'])->name('admin.DeleteUser');
Route::post('/admin/regis/submit', [adminController::class, 'adminSubmit']) -> name('admin.regisSubmit');
Route::post('/admin/login/submit', [adminController::class, 'adminLoginSubmit'])->name('admin.login.submit');

//PenggunaRoute
Route::get('/', [penggunaController::class, 'userLogin']) -> name('user.login');
Route::get('/user/register', [penggunaController::class, 'userRegister']) -> name('user.register');
Route::get('/user/pages', [penggunaController::class, 'pagesUser']) -> name('user.pages');
Route::get('/user/dashboard', [penggunaController::class, 'dashboardUser'])->name('user.dashboard');
Route::get('/user/product', [penggunaController::class, 'ProductUser']) -> name('user.product');
Route::get('/user/Keranjang', [penggunaController::class, 'keranjang']) -> name('user.keranjang');
Route::get('/user/Pesanan', [penggunaController::class, 'Pesanan']) -> name('user.Pesanan');

Route::post('/user/Product/TambahKeranjang/{nama_obat}', [penggunaController::class, 'TambahPesanan']) -> name('user.productTambahKeranjang');
Route::post('/user/Product/TambahPesanan', [penggunaController::class, 'CheckoutKeranjang']) -> name('user.productCheckout');
Route::post('/user/Keranjang/delete/{id}', [penggunaController::class, 'DeleteKeranjang']) -> name('user.DeleteKeranjang');
Route::post('/user/regis/submit', [penggunaController::class, 'userSubmit']) -> name('user.regisSubmit');
Route::post('/user/login/submit', [penggunaController::class, 'userLoginSubmit'])->name('user.login.submit');




