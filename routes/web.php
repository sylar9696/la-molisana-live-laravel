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
    return view('home');
})->name('home');

//Rotta per prodotti
//url: localhost:8080/prodotti
Route::get('/prodotti', function () {

    $pasta = config('pasta');
    //dump($pasta);

    return view('prodotti', [ 'products' => $pasta ] );
})->name('prodotti');

//Rotta per prodotto = show
//url: localhost:8080/prodotti/1
Route::get('/prodotti/{id}', function ($id) {

    $pasta = config('pasta');
    // dump($pasta);
    //validazione parametro
    if( is_numeric( $id ) && $id < count( $pasta ) && $id > 0 ){
        // dump($id);
        //dump( $pasta[$id] );
        $prodotto = $pasta[$id];

        return view('prodotto', [ 'singoloProdotto' => $prodotto ] );
    } else {
        abort(404);
    }


})->name('prodotto');
