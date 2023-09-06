<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SM\WipController;
use App\Http\Controllers\Cust\CatController;
use App\Http\Controllers\Cust\FinController;
use App\Http\Controllers\Cust\NpsController;
use App\Http\Controllers\cust\RegController;
use App\Http\Controllers\SM\OrderController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SM\RewardController;
use App\Http\Controllers\ut\SliderController;
use App\Http\Controllers\Exp\SurjalController;
use App\Http\Controllers\SM\InvoiceController;
use App\Http\Controllers\SM\LaporanController;
use App\Http\Controllers\Cust\MasterController;
use App\Http\Controllers\SM\SalesComController;
use App\Http\Controllers\SM\SalesmanController;
use App\Http\Controllers\Cust\WilayahController;
use App\Http\Controllers\wh\WhLaporanController;
use App\Http\Controllers\SM\SalesVisitController;
use App\Http\Controllers\Cust\TicketingController;
use App\Http\Controllers\Exp\ExpLaporanController;
use App\Http\Controllers\Fin\FinLaporanController;
use App\Http\Controllers\Cust\CustRewardController;
use App\Http\Controllers\Exp\EkspedisiController;
use App\Http\Controllers\Member\KomplainController;
use App\Http\Controllers\Pesanan\FreshOrderController;
use App\Http\Controllers\SM\ReturController;
use App\Http\Controllers\SM\SalesProspectController;
use App\Http\Controllers\Ut\EximController;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //COSTUMER
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
    Route::get('/reward-detail', [CustRewardController::class, 'detail'])->name('cust-reward.detail');
    Route::get('/reward-approval', [CustRewardController::class, 'approval'])->name('cust-reward.approval');
    // COSTUMER - KOMPLEN
    Route::resource('komplain', KomplainController::class);
    //Ekspedisi
    Route::get('/ekspedisi', [EkspedisiController::class, 'index'])->name('ekspedisi.index');
    Route::get('/ekspedisi-edit/{id}', [EkspedisiController::class, 'edit'])->name('ekspedisi.edit');
    Route::patch('/ekspedisi-update/{id}', [EkspedisiController::class, 'update'])->name('ekspedisi.update');
    Route::get('/laporan', [SurjalController::class, 'laporan'])->name('laporan.index');
    //Finance
    Route::get('/laporan-fin', [FinLaporanController::class, 'index'])->name('laporan.fin');
    //Warehouse
    Route::get('/surjal', [SurjalController::class, 'index'])->name('surjal');
    Route::get('/surjal-detail', [SurjalController::class, 'detail'])->name('surjal.detail');
    Route::get('/surjal-cetak', [SurjalController::class, 'cetak'])->name('surjal.cetak');
    Route::get('/laporan-wh', [WhLaporanController::class, 'index'])->name('laporan.wh');
    //Sales Marketing
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index');
    Route::get('/invoice-detail', [InvoiceController::class, 'detail'])->name('invoice.detail');
    Route::patch('/invoice-update', [InvoiceController::class, 'updateStatus'])->name('invoice.update');
    Route::get('/invoice-cetak', [InvoiceController::class, 'cetak'])->name('invoice.cetak');
    Route::get('/order', [OrderController::class, 'index'])->name('order.index');
    Route::get('/order-notif', [OrderController::class, 'notif'])->name('pesanan.notif');
    Route::get('/update-notif/{id}', [OrderController::class, 'updateNotif'])->name('update.notif');
    Route::get('/get-notif', [OrderController::class, 'get_notif'])->name('get.notif');

    Route::get('/order-add', [OrderController::class, 'add'])->name('order.add');
    Route::get('/order/{tipe}', [OrderController::class, 'order_tipe_index'])->name('order.tipe.index');
    Route::get('/order-detail/{id}', [OrderController::class, 'detail'])->name('order.detail');
    Route::get('/order-retail/{tipe}', [OrderController::class, 'retail_index'])->name('retail.index');
    // Route::get('/order-fresh/{tipe}', [OrderController::class, 'retail_index'])->name('fresh.index');
    // Route::get('/order-dev/{tipe}', [OrderController::class, 'retail_index'])->name('dev.index');
    Route::get('/order-draft-index', [OrderController::class, 'draft_index'])->name('draft.index');
    Route::get('/order-draft-detail/{id}', [OrderController::class, 'draft_detail'])->name('draft.detail');
    Route::patch('/order-draft-update/{id}', [OrderController::class, 'draft_update'])->name('order.draft.update');
    Route::get('/order-khusus', [OrderController::class, 'khusus_index'])->name('khusus.index');
    Route::get('/order-khusus-detail', [OrderController::class, 'khusus_detail'])->name('khusus.detail');
    Route::get('/order-draft-cetak/{id}', [OrderController::class, 'draft_cetak'])->name('order.draft.cetak');
    Route::get('/harga-by-satuan/{id}', [OrderController::class, 'harga_satuan'])->name('harga.by.satuan');
    //FRESH ORDER
    Route::resource('fresh-order', FreshOrderController::class);
    Route::get('fresh-order-cetak/{id}', [FreshOrderController::class, 'cetak'])->name('fresh-order.cetak');
    //Retur (Modul SM)
    Route::get('/retur-jenis', [ReturController::class, 'index_jenis'])->name('retur.index.jenis');
    Route::get('/retur-so-detail/{id}', [ReturController::class, 'so_detail'])->name('retur.so_detail');
    Route::post('/retur-detail-store/{id}', [ReturController::class, 'retur_detail_store'])->name('retur.detail.store');
    Route::get('/retur-cetak-detail/{id}', [ReturController::class, 'retur_cetak'])->name('retur.cetak');
    // Route::get('/reward-merchartPoint', [RewardController::class, 'index'])->name('reward.index');
    // Route::get('/reward-merchartPoin-add', [RewardController::class, 'add'])->name('reward.add');
    //salesman
    Route::get('/salesman-master', [SalesmanController::class, 'master'])->name('salesman.master');
    Route::get('/salesman', [SalesmanController::class, 'index'])->name('salesman.index');
    Route::get('/salesman-add', [SalesmanController::class, 'add'])->name('salesman.add');
    Route::get('/salesCom', [SalesComController::class, 'index'])->name('salescom.index');
    Route::get('/salesCom-add', [SalesComController::class, 'add'])->name('salescom.add');
    Route::get('/salesCom-approve', [SalesComController::class, 'approve'])->name('salescom.approve');
    Route::get('/salesVisit', [SalesVisitController::class, 'index'])->name('salesvisit.index');
    Route::get('/salesProcpect', [SalesProspectController::class, 'index'])->name('salesprospect.index');
    Route::get('/salesProcpect-add', [SalesProspectController::class, 'add'])->name('salesprospect.add');
    Route::get('/wip', [RewardController::class, 'index'])->name('wip.index');
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
    //Utility
    Route::get('/exim', [EximController::class, 'index'])->name('exim.index');
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider-add', [SliderController::class, 'add'])->name('slider.add');
    Route::get('/slider-edit', [SliderController::class, 'edit'])->name('slider.edit');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/dani.php';
require __DIR__ . '/fikri.php';
