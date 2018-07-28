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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/fecha/{f}", function($f){

    $arra = \App\JaimeHelper::getCicloSobreDia(new DateTime($f));
    return $arra[0]->format('d-m-Y')." => ".$arra[1]." ciclos, dia +".$arra[2]." del ciclo";
});


Route::get("/pedido/{f}","PedidosController@getPedidosDeCiclo");