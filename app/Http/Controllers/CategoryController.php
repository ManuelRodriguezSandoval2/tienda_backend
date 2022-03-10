<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function obtenerProductoCategoria(Request $request){

        $producto_categoria=DB::table('product')
        ->select('product.id', 'product.name as nombre_producto', 'product.url_image', 'product.price', 'product.discount', 'category.name as categoria')
        ->join('category', 'product.category', '=', 'category.id')
        ->groupBy('product.id', 'product.name', 'product.url_image', 'product.price', 'product.discount','categoria')
        ->get();

        return $producto_categoria;
    }
}
