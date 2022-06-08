<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [InventoryController::class, 'index'])->name('home');

Route::prefix('inventory')->group(function (){
    Route::get('/add', [InventoryController::class, 'addInventory'])->name('inventory.add');
    Route::post('/create', [InventoryController::class, 'createInventory'])->name('inventory.create');
    Route::get('/{id}/edit', [InventoryController::class, 'editInventory'])->name('inventory.edit');
    Route::patch('/{id}/update', [InventoryController::class, 'updateInventory'])->name('inventory.update');
    Route::delete('/{id}/delete', [InventoryController::class, 'deleteInventory'])->name('inventory.delete');
});

