<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\userController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PasokController;
use App\Http\Controllers\Admin\SatuanBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminBarangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\adminUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/petugas', function () {
    return view('petugas/app');
    
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/detailproduk', function () {
    return view('detailproduk');
});

// Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualanindex');
// Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit');
// Route::put('/penjualan/{id}', [PenjualanController::class, 'update'])->name('penjualan.update')
// Route::get('/home', [HomeController::class, 'index']);

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/user', [userController::class, 'index'])->name('user');
// Route::get('/user/store', [userController::class, 'store']);
// Route::get('/user/update/{id}', [HomeController::class, 'update']);

//sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales');
Route::get('/sales/{id}/edit', [SalesController::class, 'edit'])->name('sales.edit');
Route::put('/sales/{id}', [SalesController::class, 'update'])->name('sales.update');
Route::get('/sales/create', [SalesController::class, 'create'])->name('sales.create');
Route::post('/sales', [SalesController::class, 'store'])->name('sales.store');
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::delete('/sales/{id}', [SalesController::class, 'destroy'])->name('sales.destroy');

//penjualan
Route::get('/penjualan', [penjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/create', [penjualanController::class, 'create'])->name('penjualan.create');
Route::get('/penjualan/{id}/edit', [penjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('/penjualan/{id}', [penjualanController::class, 'update'])->name('penjualan.update');
Route::delete('/penjualan/{id}', [penjualanController::class, 'destroy'])->name('penjualan.destroy');
Route::post('/penjualan', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::get('penjualan-pdf', [penjualanController::class, 'exportPDF'])->name('penjualan-pdf');
Route::get('penjualan/{penjualan}', [PenjualanController::class, 'show'])->name('penjualan.show');

//kategoris
Route::get('/kategoris', [KategoriBarangController::class, 'index'])->name('kategoris');
Route::get('/kategoribarang/create', [KategoriBarangController::class, 'create'])->name('kategoribarang.create');
Route::post('/kategoribarang', [KategoriBarangController::class, 'store'])->name('kategoribarang.store');
Route::get('/kategoribarang', [KategoriBarangController::class, 'index'])->name('kategoribarang.index');
Route::get('/kategoribarang/{id}/edit', [KategoriBarangController::class, 'edit'])->name('kategoribarang.edit');
Route::get('/kategoribarang/{id}/edit', [KategoriBarangController::class, 'edit'])->name('kategoribarang.edit');
Route::put('/kategoribarang/{id}', [KategoriBarangController::class, 'update'])->name('kategoribarang.update');
Route::delete('/kategoribarang/{id}', [KategoriBarangController::class, 'destroy'])->name('kategoribarang.destroy');


//transaksi
Route::get('/transaksis', [transaksiController::class, 'index'])->name('transaksis');
Route::get('/transaksis', [transaksiController::class, 'index'])->name('transaksi.index');
Route::get('/transaksi/create', [transaksiController::class, 'create'])->name('transaksi.create');
Route::post('/transaksis', [transaksiController::class, 'store'])->name('transaksi.store');
Route::put('/transaksis/{id}', [transaksiController::class, 'update'])->name('transaksis.update');
Route::get('/transaksi/{id}/edit', [transaksiController::class, 'edit'])->name('transaksi.edit');
Route::delete('/transaksis/{id}', [transaksiController::class, 'destroy'])->name('transaksis.destroy');

//pembayaran
Route::get('pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
Route::get('pembayaran/create', [PembayaranController::class, 'create'])->name('pembayaran.create');
Route::post('pembayaran', [PembayaranController::class, 'store'])->name('pembayaran.store');
Route::get('pembayaran/{pembayaran}', [PembayaranController::class, 'show'])->name('pembayaran.show');
Route::put('pembayaran/{pembayaran}', [PembayaranController::class, 'update'])->name('pembayaran.update');
Route::delete('pembayaran/{pembayaran}', [PembayaranController::class, 'destroy'])->name('pembayaran.destroy');


Route::get('/pasok', [pasokController::class, 'index'])->name('pasok');
Route::get('/pasok/create', [pasokController::class, 'create'])->name('pasok.create');
Route::post('pasok', [PasokController::class, 'store'])->name('pasok.store');
Route::get('pasok', [PasokController::class, 'index'])->name('pasok.index');
Route::delete('/pasok/{id}', [pasokController::class, 'destroy'])->name('pasok.destroy');
Route::get('/pasok/{id}/edit', [pasokController::class, 'edit'])->name('pasok.edit');
Route::put('/pasok/{id}', [pasokController::class, 'update'])->name('pasok.update');
// Route::get('pasok', [PasokController::class, 'show'])->name('pasok.show');

Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('admin/satuan-barang', SatuanBarangController::class);
});
Route::get('admin/satuanBarang', [SatuanBarangController::class, 'index'])->name('satuanBarangs.index');
Route::get('admin/satuanBarang/create', [SatuanBarangController::class, 'create'])->name('admin/Satuan.create');
Route::post('admin/satuanBarang', [SatuanBarangController::class, 'store'])->name('admin.satuan.store');
Route::get('admin/satuanBarang/{satuanBarang}/edit', [SatuanBarangController::class, 'edit'])->name('admin/satuan.edit');
Route::put('admin/satuanBarang/{satuanBarang}', [SatuanBarangController::class, 'update'])->name('admin/satuan.update');
Route::delete('admin/satuanBarang/{satuanBarang}', [SatuanBarangController::class, 'destroy'])->name('admin/satuan.destroy');
Route::get('/admin/satuanBarangs', [SatuanBarangController::class, 'index'])->name('/admin/satuanBarangs');

Route::get('/laporan.index', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/data/{awal}/{akhir}', [LaporanController::class, 'data'])->name('laporan.data');
        Route::get('laporan-export-pdf', [LaporanController::class, 'exportPDF'])->name('laporan-export-pdf');
        Route::get('/laporan', [LaporanController::class, 'create'])->name('laporan.create');
        Route::post('/laporan', [LaporanController::class, 'store'])->name('laporan.store');
        Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');


Route::get('/admin_kategoris', [AdminKategoriController::class, 'index'])->name('admin_kategoris');  
Route::get('/admin_kategoris', [AdminKategoriController::class, 'create'])->name('admin_kategoris.create');
Route::post('/admin_kategoris', [AdminKategoriController::class, 'store'])->name('admin_kategoris.store');
Route::get('/admin_kategoris.index', [AdminKategoriController::class, 'index'])->name('admin_kategoris.index');  

Route::get('/adminbarangs', [AdminBarangController::class, 'index'])->name('adminbarangs');
Route::get('/adminbarangss', [AdminBarangController::class, 'index'])->name('adminbarangss.index');
Route::get('/adminbarangs', [AdminBarangController::class, 'create'])->name('adminbarangs.create');
Route::post('/adminbarangs', [AdminBarangController::class, 'store'])->name('adminbarangs.store');


Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
Route::get('kasir.create', [KasirController::class, 'create'])->name('kasir.create');
Route::get('kasir', [KasirController::class, 'index'])->name('kasir.index');
Route::post('kasir', [KasirController::class, 'store'])->name('kasir.store');
Route::get('/kasir/{id}/edit', [KasirController::class, 'edit'])->name('kasir.edit');
Route::delete('/kasir/{id}', [KasirController::class, 'destroy'])->name('kasir.destroy');
Route::put('/kasir', [KasirController::class, 'update'])->name('kasir.update');

Route::get('/barangs', [BarangController::class, 'index'])->name('barangs');
Route::get('/barangs.index', [BarangController::class, 'index'])->name('barangs.index');
Route::get('barangs.create', [BarangController::class, 'create'])->name('barangs.create');
Route::post('/barangs.store', [BarangController::class, 'store'])->name('barangs.store');
Route::get('/barangs/{id}/edit', [BarangController::class, 'edit'])->name('barangs.edit');
Route::delete('/barangs/{id}', [BarangController::class, 'destroy'])->name('barangs.destroy');


Route::get('/pelanggan', [pelangganController::class, 'index'])->name('pelanggan');
Route::get('pelanggan.create', [pelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan', [pelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan.index', [pelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/{id}/edit', [pelangganController::class, 'edit'])->name('pelanggan.edit');
Route::delete('/pelanggan/{id}', [pelangganController::class, 'destroy'])->name('pelanggan.destroy');


Route::get('/pembelians', [PembelianController::class, 'index'])->name('pembelians');
Route::get('pembelian.create', [pembelianController::class, 'create'])->name('pembelian.create');
Route::post('/pembelian', [pembelianController::class, 'store'])->name('pembelian.store');
Route::get('/pembelian.index', [pembelianController::class, 'index'])->name('pembelian.index');
Route::get('/pembelian/{id}/edit', [pembelianController::class, 'edit'])->name('pembelian.edit');
Route::delete('/pembelian/{id}', [pembelianController::class, 'destroy'])->name('pembelian.destroy');
Route::get('pembelian', [PembelianController::class, 'show'])->name('pembelian.show');


Route::get('/adminusers', [adminUserController::class, 'index'])->name('adminusers');
Route::get('/adminusers.create', [adminUserController::class, 'create'])->name('adminusers.create');
Route::post('/adminusers.store', [adminUserController::class, 'store'])->name('adminusers.store');
Route::get('/adminusers.index', [adminUsersController::class, 'index'])->name('adminusers.index');