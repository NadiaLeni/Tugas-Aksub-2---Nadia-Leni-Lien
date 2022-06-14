<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Category;

class InventoryController extends Controller
{
    //
    public function index(){
        $inventories = Inventory::all();
        return view('index', ['inventories' =>$inventories]);
    }
    public function alatTulis(){
        $inventories = Inventory::all()->where('category_id', 1);
        return view('showByCategory', ['inventories' =>$inventories]);
    }
    public function alatMasak(){
        $inventories = Inventory::all()->where('category_id', 2);
        return view('showByCategory', ['inventories' =>$inventories]);
    }
    public function makanan(){
        $inventories = Inventory::all()->where('category_id', 3);
        return view('showByCategory', ['inventories' =>$inventories]);
    }
    public function aksesoris(){
        $inventories = Inventory::all()->where('category_id', 4);
        return view('showByCategory', ['inventories' =>$inventories]);
    }
    public function elektronik(){
        $inventories = Inventory::all()->where('category_id', 5);
        return view('showByCategory', ['inventories' =>$inventories]);
    }

    public function addInventory(){
        $categories = Category::all();
        return view('add', compact('categories'));
    }
    public function createInventory(Request $request){
        Inventory::create([
            'category_id'=> $request->category_id,
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
    // public function showInventory($category_id){
        // $inventories = Inventory::find($category_id);
        // $categories = Category::all();
        // return view('showByCategory', compact('inventories','category_id'));
    // }
    // public function showInventory($id){
    //     $inventory = Inventory::find($id);
    //     $categories = Category::all();
    //     return view('showByCategory', compact('categories','inventory','id'));
    // }

    // public function showInventory($category_id){
    //     $inventory = Inventory::find($category_id);
    //     return view('showByCategory', compact('inventory','category_id'));
    // }
}
