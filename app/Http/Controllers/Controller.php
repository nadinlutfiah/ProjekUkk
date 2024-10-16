<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Product;

class Controller extends BaseController
{
    // use AuthorizesRequests, ValidatesRequests;

//     public function create()
//     {
//         return view('products.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'name' => 'required',
//             'sku' => 'required|unique:products',
//             'price' => 'required|numeric',
//             'stock' => 'required|integer',
//         ]);

//         Product::create($request->all());

//         return redirect()->route('products.index')->with('success', 'Product created successfully.');
//     }

//     public function edit(Product $product)
//     {
//         return view('products.edit', compact('product'));
//     }

//     public function update(Request $request, Product $product)
//     {
//         $request->validate([
//             'name' => 'required',
//             'sku' => 'required|unique:products,sku,'.$product->id,
//             'price' => 'required|numeric',
//             'stock' => 'required|integer',
//         ]);

//         $product->update($request->all());

//         return redirect()->route('products.index')->with('success', 'Product updated successfully.');
//     }

//     public function destroy(Product $product)
//     {
//         $product->delete();

//         return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
//     }
// }
}