<?php

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

//FORMULARIO
//Route::get('/form',function(){
//    return 'mi vieja';
// });


Route::get('/actors/add', function(){
    return view('actorsadd');
});
Route::post('/actors/add', 'ActorController@store');

Route::get('/actores', 'ActorController@directory');



Route::get('/productos', function(){
    $productos = DB::table('productos')
    ->select('SELECT prdNombre, prdPrecio FROM productos');
    dd($productos);
});
Route::get('/pruebaListado', 'PruebasController@listar');

Route::get('/formulario', function () {
    return view('formularioVista');
});

Route::post('/proceso', function(){
    $nombre= $_POST['nombre'];
    return view('proceso', ['nombre'=> $nombre]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function(){
   return view('prueba');
});

Route::get('/test/{obj}/{color}', function($color, $obj){
    $share = compact("color", "obj");
    return view('test', $share);
 });

Route::get('/test2/{color}', function($color){
    $n = 15;
    $frutas = ['manzana', 'pera', 'banana', 'mandarina'];
    return view('test2', ['color'=> $color, 'n'=> $n, 'frutas'=>$frutas]);
 });

 use Illuminate\Support\Facades\DB;
 Route::get('productos', function(){
     $productos = DB::select('SELECT prdNombre, prdPrecio FROM productos');
     dd($productos);
     
 });