<?php

namespace App\Http\Controllers;

use App\Models\Dashboard\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::count();
        return view('dashboard.index', compact('products'));
    }

    public function colecciones(){
        $productos = Product::all()->reject(function (Product $product) {
            return $product->name === 'Gengar';
        })->map(function (Product $productos) {
            return strtoupper($productos->name);
        });
        $productos = $productos->add('Lugia');
        //print_r($productos->toJson());
        $var = [
            'numbers' => [1,2,3], 
            'pokemon' => ['Gengar', 'Charizard', 'Lugia', 'Mewtwo']];
        //print_r($collection);

        $ex = collect(['nombre','edad']);
        $ex = $ex->combine(['ariel',10]);
        dd($ex);
    }
    
}
