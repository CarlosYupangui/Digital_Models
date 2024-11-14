<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function indexPro(){
        $getProducto = Producto::all();
        return view('producto', compact('getProducto'));
      }
      
      public function guardarProducto(Request $request){
        Producto::create($request->all());
        return redirect()->to('/producto');
        //dd($request->nombreProductos, $request->descripcion, $request->precio);
      }
      
      public function infoProducto(){
        $getProducto = Producto::all(); 
        return view('infoProducto', compact('getProducto'));
      }
      
      public function editarPro($id){
        $editProducto = Producto::where('id', $id)->firstOrFail();
         return view('editarProducto', compact('editProducto'));
         //dd($Request);
      }
      
      public function actualizarPro(Request $request, $id){
        $actualiProducto = Producto::findOrFail($id);
        $requestProducto = $request->all();
        $actualiProducto->update($requestProducto);
        return redirect()->to('infoProducto');
      }
      
      public function eliminarPro($id){
        $eliminarProducto = Producto::findOrFail($id);
        $eliminarProducto->delete();
        return redirect()->to('infoProducto');
      }
}
