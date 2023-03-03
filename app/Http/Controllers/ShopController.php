<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $allShops = Shop::all(['id', 'nombre']);
        // products from shop

        return view('shops.index', ['shops' => $allShops]);
    }

    public function create()
    {
        return view('shops.create');
    }

    public function showShop($id)
    {
        // show all products from shop
        $shop = Shop::where('id', $id)->first();
        

        return view('shops.showShop', ['shop' => $shop]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
        ]);

        $shop = new Shop;
        $shop->nombre = $validatedData['nombre'];
        $shop->save();

        return redirect('/shops')->with('success', 'Shop created successfully');
    }

    public function edit($id)
    {
        $shop = Shop::where('id', $id)->first();

        return view('shops.edit', compact('shop'));
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
        ]);
        $shop = Shop::where('id', $id)->first();

        $shop->nombre = $validatedData['nombre'];
        $shop->update();
        return redirect('/shops')->with('success', 'Shop updated successfully');
    }

    public function delete($id)
    {
        $shop = Shop::where('id', $id)->first();

        $shop->delete();

        return redirect()->route('shops.index')->with('success', 'Shop deleted successfully');
    }
}
