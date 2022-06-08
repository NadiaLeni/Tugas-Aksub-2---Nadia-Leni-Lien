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
        return redirect(route('home'));
    }
    public function editInventory($id){
        $inventory = Inventory::find($id);
        return view('edit', compact('inventory', 'id'));
    }
    public function updateInventory(Request $request, $id){
        $inventory = Inventory::find($id);
        $inventory->title = $request->title;
        $inventory->amount = $request->amount;

        $inventory->save();

        return redirect(route('home'));
    }
    public function deleteInventory($id){
        $inventory = Inventory::find($id);

        $inventory->delete();

        return redirect(route('home'));
    }
}
