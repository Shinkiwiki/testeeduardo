<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar',function(Illuminate\Http\request $request){
    $contato=new App\Contato();

    $contato->codproduto=$request->get('codproduto');
    $contato->nomeproduto=$request->get('nomeproduto');
    $contato->categoria=$request->get('categoria');
    $contato->precounitario=$request->get('precounitario');
    $contato->descricao=$request->get('descricao');

    $contato->save();
    echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
});