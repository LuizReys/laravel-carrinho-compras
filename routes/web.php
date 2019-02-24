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

Auth::routes();

Route::get('/', 'HomeController@index')->name('index');

Route::group(['prefix' => 'produto'], function(){
	Route::get('/', 'ProdutoController@index')->name('produto');
	Route::get('/categoria/{categoria?}', 'ProdutoController@index')->name('produto.categoria');
	Route::get('/{id}', 'ProdutoController@show')->name('produto.show');
});

Route::group(['prefix' => 'pedido'], function(){
	Route::get('/', 'PedidoController@index')->name('pedido');
});

Route::group(['prefix' => 'carrinho'], function(){
	Route::get('/', 'CarrinhoController@index')->name('carrinho');
});

