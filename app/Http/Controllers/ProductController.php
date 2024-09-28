<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin/admin-product-table',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/create-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $colors = $request->colorway;
        $colorArray = explode(',', $colors);
        
        
        $product = Product::create([
            'Name' => $request->name,
            'serie' => $request->serie,
            'Category' => $request->category,
            'Brand' => $request->brand,
            'Retail_Price' => $request->retail_price,
            'avaliable_colorway' => $colorArray,
            'Product_Detail' => [
                'material' => $request->material,
                'release_date' => $request->release_date,
                'gender' => $request->gender,
            ],
            'ranking' => mt_rand(1, 100),
            'Stock' => 0,
            'num_sold_product' => 0,
            'keywords' => $request->serie.','.$request->name.','.$request->category.','.$request->brand.','.$request->material.','.$request->gender.','.$colorArray[0],
        ]);
        return redirect()->route('productTable');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $colorway = implode(',', $product->avaliable_colorway);
        return view('admin/edit-product',['product' => $product, 'colorway' => $colorway]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $colors = $request->colorway;
        $colorArray = explode(',', $colors);
        $product = Product::find($id);
        $product->Name = $request->name;
        $product->serie = $request->serie;
        $product->Category = $request->category;
        $product->Brand = $request->brand;
        $product->Retail_Price = $request->retail_price;
        $product->avaliable_colorway = $colorArray;
        $product->Product_Detail = [
            'material' => $request->material,
            'release_date' => $request->release_date,
            'gender' => $request->gender,
        ];
        $product->keywords = $request->serie.','.$request->name.','.$request->category.','.$request->brand.','.$request->material.','.$request->gender.','.$colorArray[0];

        $product->save();

        return redirect()->route('productTable');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
    public function browse($filter){
        $products = Product::where('keywords', 'LIKE', '%,' . $filter . ',%')
                   ->orWhere('keywords', 'LIKE', $filter . ',%')
                   ->orWhere('keywords', 'LIKE', '%,' . $filter)
                   ->orWhere('keywords', '=', $filter)
                   ->get();
        return view('filtered',['category' => $filter,'products'=> $products]);
    }


}
