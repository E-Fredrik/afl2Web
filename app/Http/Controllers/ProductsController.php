<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $productsModel = new Product();
        $products = $productsModel->getProducts();
        return view('products', ['products' => $products]);
    }

    public function show($id) {
        $productsModel = new Product();
        $product = $productsModel->getProductById($id);
        
        if (!$product) {
            abort(404, 'Product not found');
        }

        return view('detailProduct', ['product' => $product]);
    }


    public function home() {
        $product = new Product();
        $featuredProduct = $product->getLatestProducts();
        return view('home', ['featuredProducts' => $featuredProduct]);
    }
}
