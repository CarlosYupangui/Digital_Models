<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function indexCli(){
      $getCliente = Cliente::all();
      return view('cliente', compact('getCliente'));
    }
    
    public function guardarCliente(Request $request){
      Cliente::create($request->all());
      return redirect()->to('/cliente');
      //dd($request->nombre, $request->apellido, $request->cedula);
    }
    
    public function infoCliente(){
      $getCliente = Cliente::all(); 
      return view('infoCliente', compact('getCliente'));
    }
    
    public function editarCli($id){
      $editCliente = Cliente::where('id', $id)->firstOrFail();
       return view('editarCliente', compact('editCliente'));
    }
    
    public function actualizarCli(Request $request, $id){
      $actualiCliente = Cliente::findOrFail($id);
      $requestCliente = $request->all();
      $actualiCliente->update($requestCliente);
      return redirect()->to('infoCliente');
    }
    
    public function eliminarCli($id){
      $eliminarCliente = Cliente::findOrFail($id);
      $eliminarCliente->delete();
      return redirect()->to('infoCliente');
    }
    
}
