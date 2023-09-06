<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cust\RegController;
use App\Http\Controllers\Cust\CustRewardController;
use App\Http\Controllers\Cust\TicketingController;
use App\Http\Controllers\SM\RewardController;


Route::middleware('auth')->group(function () {
    //

    // Membership
    Route::get('/reg', [RegController::class, 'index'])->name('reg.index');
    Route::get('/reg-approval/{keyid:id}', [RegController::class, 'approval']);
    Route::post('/approved_bayar', [RegController::class, 'approved_bayar']);
    Route::post('/approved_member', [RegController::class, 'approved_member']);
    // Route::get('/reg-approval', [RegController::class, 'approval'])->name('reg.approval');

    // Reword
    Route::get('/reward', [CustRewardController::class, 'index'])->name('cust-reward.index');

    // Ticketing / Complaint
    Route::get('/ticketing', [TicketingController::class, 'index'])->name('ticketing');
    Route::get('/detail-ticketing/{keyid:id}', [TicketingController::class, 'ticketing_index']);
    Route::get('/ticketing-add/{keyid:id}', [TicketingController::class, 'ticketing_add']);
    Route::post('/ticketing-add', [TicketingController::class, 'add_followup']);

    Route::get('/reward-merchartPoint', [RewardController::class, 'index'])->name('reward.index');
    Route::get('/reward-merchartPoin-add', [RewardController::class, 'add'])->name('reward.add');
    Route::post('/add-merchant', [RewardController::class, 'store']);
});
