<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/tags', function () {
    return view('tags');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/pedido', function () {
    return view('pedido');
});

Route::get('/faleconosco', function () {
    return view('faleconosco');
});

Route::get('/carro', function () {
    return view('carro');
});


Route::get('/enviado', function () {
    return view('enviado');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/identificacao', function () {
    return view('identificacao');
});

Route::get('/identificacao2', function () {
    return view('identificacao2');
});

Route::get('/identificacao3', function () {
    return view('identificacao3');
});

Route::get('/identificacao4', function () {
    return view('identificacao4');
});

Route::get('/identificacao5', function () {
    return view('identificacao5');
});

Route::get('/identificacao6', function () {
    return view('identificacao6');
});

Route::get('/identificacao7', function () {
    return view('identificacao7');
});

Route::get('/identificacao8', function () {
    return view('identificacao8');
});

Route::get('/identificacao9', function () {
    return view('identificacao9');
});
Route::get('/identificacao10', function () {
    return view('identificacao10');
});
Route::get('/identificacao11', function () {
    return view('identificacao11');
});
Route::get('/identificacao12', function () {
    return view('identificacao12');
});
Route::get('/identificacao13', function () {
    return view('identificacao13');
});
Route::get('/identificacao14', function () {
    return view('identificacao14');
});
Route::get('/identificacao15', function () {
    return view('identificacao15');
});
Route::get('/identificacao16', function () {
    return view('identificacao16');
});

Route::get('/carrinho/finalizar-pedido', 'App\Http\Controllers\CarrinhoController@finalizarPedido')->name('carrinho.finalizar-pedido');
Route::post('/carrinho/{id}','App\Http\Controllers\CarrinhoController@RemoverItem')->name('carrinho.destroy');
Route::get('/meucarro','App\Http\Controllers\CarrinhoController@ListarItem') -> name('meucarro');
Route::post('/adicionar-dados1','App\Http\Controllers\CarrinhoController@adicionar') -> name('adicionar.dados');
Route::post('/adicionar-dados2','App\Http\Controllers\CarrinhoController@adicionar2') -> name('adicionar.dados2');
Route::post('/adicionar-dados3','App\Http\Controllers\CarrinhoController@adicionar3') -> name('adicionar.dados3');
Route::post('/adicionar-dados4','App\Http\Controllers\CarrinhoController@adicionar4') -> name('adicionar.dados4');
Route::post('/adicionar-dados5','App\Http\Controllers\CarrinhoController@adicionar5') -> name('adicionar.dados5');
Route::post('/adicionar-dados6','App\Http\Controllers\CarrinhoController@adicionar6') -> name('adicionar.dados6');
Route::post('/adicionar-dados7','App\Http\Controllers\CarrinhoController@adicionar7') -> name('adicionar.dados7');
Route::post('/adicionar-dados8','App\Http\Controllers\CarrinhoController@adicionar8') -> name('adicionar.dados8');
Route::post('/adicionar-dados9','App\Http\Controllers\CarrinhoController@adicionar9') -> name('adicionar.dados9');
Route::post('/adicionar-dados10','App\Http\Controllers\CarrinhoController@adicionar10') -> name('adicionar.dados10');
Route::post('/adicionar-dados11','App\Http\Controllers\CarrinhoController@adicionar11') -> name('adicionar.dados11');
Route::post('/adicionar-dados12','App\Http\Controllers\CarrinhoController@adicionar12') -> name('adicionar.dados12');
Route::post('/adicionar-dados13','App\Http\Controllers\CarrinhoController@adicionar13') -> name('adicionar.dados13');
Route::post('/adicionar-dados14','App\Http\Controllers\CarrinhoController@adicionar14') -> name('adicionar.dados14');
Route::post('/adicionar-dados15','App\Http\Controllers\CarrinhoController@adicionar15') -> name('adicionar.dados15');
Route::post('/adicionar-dados16','App\Http\Controllers\CarrinhoController@adicionar16') -> name('adicionar.dados16');
Route::get('/enviado','App\Http\Controllers\PedidoController@ListarItem')-> name('pedido.listar');