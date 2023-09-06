<?php

use App\Http\Controllers\Cms\PageController;
use App\Http\Controllers\Cust\CustomerController;
use App\Http\Controllers\Cust\MasterController;
use App\Http\Controllers\Purc\AccessoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Purc\BarangController;
use App\Http\Controllers\Purc\BarangKainController;
use App\Http\Controllers\Purc\BarangTipeController;
use App\Http\Controllers\Purc\PurcLaporanController;
use App\Http\Controllers\Purc\BarangGudangController;
use App\Http\Controllers\Purc\BarangKategoriController;
use App\Http\Controllers\Purc\BarangSubkategoriController;
use App\Http\Controllers\Purc\TipeAcsController;
use App\Http\Controllers\Purc\TipePriceController;
use App\Http\Controllers\SM\ReturController;
use App\Http\Controllers\ElfinderController;
use App\Http\Controllers\Purc\BarangBagianController;
use App\Http\Controllers\Purc\BarangCorakController;
use App\Http\Controllers\Purc\GramasiController;
use App\Http\Controllers\Purc\LebarController;
use App\Http\Controllers\Purc\SatuanController;
use App\Http\Controllers\Purc\WarnaController;

Route::middleware('auth')->group(function () {

    //Customer
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/customer-add', [CustomerController::class, 'add'])->name('customer.add');
    Route::post('/customer-store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/customer-detail/{id}', [CustomerController::class, 'detail'])->name('customer.detail');
    Route::put('/customer-edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::delete('/customer-delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');;
    Route::post('/getkabupaten', [CustomerController::class, 'getkabupaten'])->name('getkabupaten');
    Route::post('/getkecamatan', [CustomerController::class, 'getkecamatan'])->name('getkecamatan');
    Route::post('/getdesa', [CustomerController::class, 'getdesa'])->name('getdesa');

    //Customer
    Route::get('/master', [MasterController::class, 'index'])->name('master.index');
    Route::get('/master-add', [MasterController::class, 'add'])->name('master.add');
    Route::get('/fin', [FinController::class, 'index'])->name('custfin.index');
    Route::get('/fin-approval/{keyid:id}', [FinController::class, 'approval']);
    Route::post('/approved_financing', [FinController::class, 'approval_financing']);
    Route::get('/cat', [CatController::class, 'index'])->name('cat.index');
    Route::get('/cat-add', [CatController::class, 'add'])->name('cat.add');
    Route::get('/wilayah', [WilayahController::class, 'index'])->name('wilayah.index');
    Route::get('/wilayah-add', [WilayahController::class, 'add'])->name('wilayah.add');
    Route::get('/nps-index', [NpsController::class, 'index'])->name('nps.index');

    //Retur (Modul SM)
    Route::get('/retur', [ReturController::class, 'index'])->name('retur.index');
    Route::get('/retur-detail', [ReturController::class, 'detail'])->name('retur.detail');

    // kain
    Route::get('/kain', [BarangKainController::class, 'index'])->name('kain.index');
    Route::get('/kain-add', [BarangKainController::class, 'add'])->name('kain.add');
    Route::post('/kain-store', [BarangKainController::class, 'store'])->name('kain.store');
    Route::get('/kain-edit/{id}', [BarangKainController::class, 'edit'])->name('kain.edit');
    Route::put('/kain-update/{id}', [BarangKainController::class, 'update'])->name('kain.update');
    Route::delete('/kain-delete/{id}', [BarangKainController::class, 'destroy'])->name('kain.destroy');

    //tipe
    Route::get('/tipe', [BarangTipeController::class, 'index'])->name('tipe.index');
    Route::get('get-warna', [BarangTipeController::class, 'GetWarna'])->name('get.warna');
    // Route::get('get-tipe-kain/{jenis_kain_id}', [BarangTipeController::class, 'getTipeKain'])->name('get.tipe_kain');
    // Route::get('get-kategori-warna/{tipe_kain_id}', [BarangTipeController::class, 'getKategoriWarna'])->name('get.kategori_warna');
    // Route::get('get-warna/{kategori_warna_id}', [BarangTipeController::class, 'getWarna'])->name('get.warna');
    Route::get('/tipe-add', [BarangTipeController::class, 'add'])->name('tipe.add');
    Route::post('/tipe-store', [BarangTipeController::class, 'store'])->name('tipe.store');
    Route::get('/tipe-edit/{id}', [BarangTipeController::class, 'edit'])->name('tipe.edit');
    Route::get('/tipe-detail/{id}', [BarangTipeController::class, 'detail'])->name('tipe.detail');
    Route::put('/tipe-update/{id}', [BarangTipeController::class, 'update'])->name('tipe.update');
    Route::delete('/tipe-delete/{id}', [BarangTipeController::class, 'destroy'])->name('tipe.destroy');
    Route::get('/tipe/export/index', [BarangTipeController::class, 'export_index'])->name('tipe.export.index');
    Route::get('/tipe/export', [BarangTipeController::class, 'export'])->name('tipe.export');
    Route::get('/tipe/export-all', [BarangTipeController::class, 'export_all'])->name('tipe.export.all');
    Route::get('/tipe-import/index', [BarangTipeController::class, 'import_index'])->name('tipe.import.index');
    Route::post('/tipe/import', [BarangTipeController::class, 'import'])->name('tipe.import');

    //tipe-harga
    Route::get('/get-tipe-kain', [TipePriceController::class,'getTipeKain'])->name('get-tipe-kain');
    Route::get('/tipe-price', [TipePriceController::class, 'index'])->name('tipe-price.index');
    Route::post('/tipe-price/store', [TipePriceController::class, 'store'])->name('tipe-price.store');
    Route::get('/tipe-price/import', [TipePriceController::class, 'indexImport'])->name('import-price.index');
    Route::post('/tipe-price/import', [TipePriceController::class, 'import'])->name('tipe-price.import');
    Route::get('/export-tipekain', [TipePriceController::class, 'export'])->name('tipe-price.export');

    //Accessories
    Route::get('/accessories', [AccessoriesController::class, 'index'])->name('acs.index');
    Route::get('/accessories-add', [AccessoriesController::class, 'add'])->name('acs.add');
    Route::post('/accessories-store', [AccessoriesController::class, 'store'])->name('acs.store');
    Route::get('/accessories-edit/{id}', [AccessoriesController::class, 'edit'])->name('acs.edit');
    Route::get('/accessories-detail/{id}', [AccessoriesController::class, 'detail'])->name('acs.detail');
    Route::put('/accessories-update/{id}', [AccessoriesController::class, 'update'])->name('acs.update');
    Route::delete('/accessories-destroy/{id}', [AccessoriesController::class, 'destroy'])->name('acs.destroy');

    //Tipe Accessories
    Route::get('/tipe-acs', [TipeAcsController::class, 'index'])->name('tipe-acs.index');
    Route::get('/tipe-acs-add', [TipeAcsController::class, 'add'])->name('tipe-acs.add');
    Route::post('/tipe-acs-store', [TipeAcsController::class, 'store'])->name('tipe-acs.store');
    Route::get('/tipe-acs-edit/{id}', [TipeAcsController::class, 'edit'])->name('tipe-acs.edit');
    Route::get('/tipe-acs-detail/{id}', [TipeAcsController::class, 'detail'])->name('tipe-acs.detail');
    Route::put('/tipe-acs-update/{id}', [TipeAcsController::class, 'update'])->name('tipe-acs.update');
    Route::delete('/tipe-acs-destroy/{id}', [TipeAcsController::class, 'destroy'])->name('tipe-acs.destroy');
    Route::get('/tipe-import/acs', [TipeAcsController::class, 'import_index'])->name('tipe-acs.import.index');
    Route::post('/tipe-acs/import', [TipeAcsController::class, 'import'])->name('tipe-acs.import');
    Route::get('/export-acs', [TipeAcsController::class, 'export'])->name('tipe-acs.export');

    //Corak
    Route::get('/corak', [BarangCorakController::class, 'index'])->name('corak.index');
    Route::get('/corak-add', [BarangCorakController::class, 'add'])->name('corak.add');
    Route::post('/corak-store', [BarangCorakController::class, 'store'])->name('corak.store');
    Route::get('/corak-edit/{id}', [BarangCorakController::class, 'edit'])->name('corak.edit');
    Route::put('/corak-update/{id}', [BarangCorakController::class, 'update'])->name('corak.update');
    Route::delete('/corak-delete/{id}', [BarangCorakController::class, 'destroy'])->name('corak.destroy');

    //Kategori
    Route::get('/kategori', [BarangKategoriController::class, 'index'])->name('kategori.index');
    Route::get('/kategori-add', [BarangKategoriController::class, 'add'])->name('kategori.add');
    Route::post('/kategori-store', [BarangKategoriController::class, 'store'])->name('kategori.store');
    Route::get('/kategori-edit/{id}', [BarangKategoriController::class, 'edit'])->name('kategori.edit');
    Route::put('/kategori-update/{id}', [BarangKategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori-delete/{id}', [BarangKategoriController::class, 'destroy'])->name('kategori.destroy');

    //Bagian
    Route::get('/bagian', [BarangBagianController::class, 'index'])->name('bagian.index');
    Route::get('/bagian-add', [BarangBagianController::class, 'add'])->name('bagian.add');
    Route::post('/bagian-store', [BarangBagianController::class, 'store'])->name('bagian.store');
    Route::get('/bagian-edit/{id}', [BarangBagianController::class, 'edit'])->name('bagian.edit');
    Route::put('/bagian-update/{id}', [BarangBagianController::class, 'update'])->name('bagian.update');
    Route::delete('/bagian-delete/{id}', [BarangBagianController::class, 'destroy'])->name('bagian.destroy');

    //Warna
    Route::get('/warna', [WarnaController::class, 'index'])->name('warna.index');
    Route::get('/warna-add', [WarnaController::class, 'add'])->name('warna.add');
    Route::post('/warna-store', [WarnaController::class, 'store'])->name('warna.store');
    Route::get('/warna-edit/{id}', [WarnaController::class, 'edit'])->name('warna.edit');
    Route::put('/warna-update/{id}', [WarnaController::class, 'update'])->name('warna.update');
    Route::delete('/warna-delete/{id}', [WarnaController::class, 'destroy'])->name('warna.destroy');

    //Gramasi
    Route::get('/gramasi', [GramasiController::class, 'index'])->name('gramasi.index');
    Route::get('/gramasi-add', [GramasiController::class, 'add'])->name('gramasi.add');
    Route::post('/gramasi-store', [GramasiController::class, 'store'])->name('gramasi.store');
    Route::get('/gramasi-edit/{id}', [GramasiController::class, 'edit'])->name('gramasi.edit');
    Route::put('/gramasi-update/{id}', [GramasiController::class, 'update'])->name('gramasi.update');
    Route::delete('/gramasi-delete/{id}', [GramasiController::class, 'destroy'])->name('gramasi.destroy');

    //Satuan
    Route::get('/satuan', [SatuanController::class, 'index'])->name('satuan.index');
    Route::get('/satuan-add', [SatuanController::class, 'add'])->name('satuan.add');
    Route::post('/satuan-store', [SatuanController::class, 'store'])->name('satuan.store');
    Route::get('/satuan-edit/{id}', [SatuanController::class, 'edit'])->name('satuan.edit');
    Route::put('/satuan-update/{id}', [SatuanController::class, 'update'])->name('satuan.update');
    Route::delete('/satuan-delete/{id}', [SatuanController::class, 'destroy'])->name('satuan.destroy');

    //Lebar
    Route::get('/lebar', [LebarController::class, 'index'])->name('lebar.index');
    Route::get('/lebar-add', [LebarController::class, 'add'])->name('lebar.add');
    Route::post('/lebar-store', [LebarController::class, 'store'])->name('lebar.store');
    Route::get('/lebar-edit/{id}', [LebarController::class, 'edit'])->name('lebar.edit');
    Route::put('/lebar-update/{id}', [LebarController::class, 'update'])->name('lebar.update');
    Route::delete('/lebar-delete/{id}', [LebarController::class, 'destroy'])->name('lebar.destroy');

    //cms page
    Route::resource('cms/page', PageController::class);
    Route::get('cms/file-manager', function () {
        $data['dir'] = '/packages/barryvdh/elfinder';
        $data['locale'] = 'id';
        return view('cms.file-manager.index', $data);
    });

    // Route::get('/barang-kategori', [BarangKategoriController::class, 'index'])->name('kategori.index');
    // Route::get('/barang-kategori-add', [BarangKategoriController::class, 'add'])->name('kategori.add');

    Route::get('/barang-subKategori', [BarangSubkategoriController::class, 'index'])->name('subKategori.index');
    Route::get('/barang-subKategori-add', [BarangSubkategoriController::class, 'add'])->name('subKategori.add');
    Route::get('/laporan-purc', [PurcLaporanController::class, 'index'])->name('laporan.purc');
    Route::get('/barang-master', [BarangController::class, 'index'])->name('purc.barang');
    Route::get('/barang-gudang', [BarangGudangController::class, 'index'])->name('gudang.index');
    Route::get('/barang-gudang-add', [BarangGudangController::class, 'add'])->name('gudang.add');
});
