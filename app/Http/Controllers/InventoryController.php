<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    //
    public function index(){
        $inventories = Inventory::all();
        return view('index', ['inventories' =>$inventories]);
    }
    public function addInventory(){
        return view('add');
    }
    public function createInventory(Request $request){
        Inventory::create([
            'title' => $request->title,
            'amount' =>$request->amount,
        ]);
        return redirect('/');
    }
}