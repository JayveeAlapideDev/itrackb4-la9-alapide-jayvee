<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function featured()
    {
        $products = $this->products();
        $featured = $products[4];

        return view('products.show', ['product'=> $featured]);
    }
    public function index(Request $request)
    {
        $products = Product::all();
    return view('products.index', compact('products'));

    }
    private function products()
    {
    $path = storage_path('app/products.json');
    
    return json_decode(file_get_contents($path), true);
    }
    private function saveProducts($products)
    {
        file_put_contents(
            storage_path('app/products.json'),
            json_encode($products, JSON_PRETTY_PRINT)
        );
    }
    
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
        'name' => 'required|max:100',
        'price' => 'required|numeric|min:1|max:1000',
        'stock' => 'required|numeric|max:1000',
        'brand' => 'required|in:sunsilk,choco,dishwashing,nescafe,mint',
        'package' => 'required|in:bottle,plastic,pack,sachet,stick'
      ]);

      $products = $this->products();
      $id = max(array_keys($products)) +1;

      $products[$id] = [
        'id' => $id,
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'stock' => $request->input('stock'),
        'brand' => $request->input('brand'),
        'package' => $request->input('package'),
      ];

      $this->saveProducts($products);

      return redirect()
      ->route('products.index')
      ->with('success', 'product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $products = Product::findOrFail($id);
    return view('products.show', compact('products'));

    }

    
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}