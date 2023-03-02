<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use PhpParser\Node\Expr\Exit_;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ShopController extends Controller
{
    public function index()
    {
        $allShops = Shop::all();

        return view('shop', ['shops' => $allShops]);
    }

    public function create()
    {
        return view('shops.create');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
        ]);
    
        $shop = new Shop;
        $shop->nombre = $validatedData['nombre'];
        $shop->save();
    
        return redirect('/shops')->with('success', 'created successfully');
    }

}