<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['titulo' => 'Home page', 'nome' => 'Manoel']);
})->name('home');

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('layouts.app');
});

Route::get('/sobre', function (){
    return view('sobre', ['titulo' => 'Sobre Nós']);

});
