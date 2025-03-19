<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\product\StoreProductRequest;
use App\Http\Requests\product\StorePutRequest;
use App\Models\Dashboard\Category;
use App\Models\Dashboard\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        $categories = Category::all();
        return view('dashboard.product.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','name');
        $product = new Product();
        return view('dashboard.product.create', compact('product','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        if ( isset($data["image"])) {
            $data["image"] = $filename = time().'.'.$data["image"]->extension();
            $request->image->move(public_path("image"), $filename); # $request->image tiene el valor del campo sin validar.
        }
        Product::create($data);
        return to_route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('id','name');
        return view('dashboard.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePutRequest $request, Product $product)
    {
        $data = $request->validated();
        if ( isset($data["image"])) {
            $data["image"] = $filename = time().'.'.$data["image"]->extension();
            $request->image->move(public_path("image"), $filename); # $request->image tiene el valor del campo sin validar.
        }
        $product->update($data);
        return to_route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function products(Request $request)
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function productsPost(Request $request)
    {
        
        return response()->json($request);
    }
}
