<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Carro;
use App\Models\Vaga;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Usuario::all();
        $car = Carro::all();
        $vaga = Vaga::all();
        return view('userLists',compact('user'),compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
     
        return view('registerUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $user = new Usuario;
        $user->nome = $request->nome;
        $user->dataVencimento = $request->dataVencimento;
        $user->save(); 

        $car = new Carro;
        $car->placa = $request->placa;
        $car->cor = $request->cor;
        $car->marca = $request->marca;
        $car->modelo = $request->modelo;
        $car->save();

        $vaga = new Vaga;
        $vaga->cliente_idCliente = $user->idCliente;
        $vaga->carro_idCarro = $car->idCarro;
        $vaga->occupied = $request->occupied;
        $vaga->save();
        
;        

        return redirect()->action('CarsController@ShowCars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    
}
