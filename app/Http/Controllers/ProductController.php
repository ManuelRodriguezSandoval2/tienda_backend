<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{

    public function obtenerProducto(Request $request){

        $categoria=DB::table('product')
        ->select('product.id', 'product.name as nombre_producto', 'product.url_image', 'product.price', 'product.discount', 'category.name as categoria')
        ->join('category', 'product.category', '=', 'category.id')
        ->where('category.name','=',$request->categoria_producto)
        ->groupBy('product.id', 'product.name', 'product.url_image', 'product.price', 'product.discount','categoria')
        ->get();

        return $categoria;
    }

    public function obtenerProductoNombre(Request $request){

        $producto=DB::table('product')
        ->select('product.id', 'product.name as nombre_producto', 'product.url_image', 'product.price', 'product.discount', 'category.name as categoria')
        ->join('category', 'product.category', '=', 'category.id')
        ->where('product.name','=',$request->nombre_producto)
        ->groupBy('product.id', 'product.name', 'product.url_image', 'product.price', 'product.discount','categoria')
        ->get();

        return $producto;
    }

    public function obtenerListaProductos(Request $request){

    $lista_producto=DB::table('product')
    ->select('product.id', 'product.name as nombre_producto', 'product.url_image', 'product.price', 'product.discount', 'category.name as categoria')
    ->join('category', 'product.category', '=', 'category.id')
    ->groupBy('product.id', 'product.name', 'product.url_image', 'product.price', 'product.discount','categoria')
    ->orderBy('product.name', 'asc')
    ->get();

    return $lista_producto;
}
}
