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

Route::get('/pizzas', function () {
    // return view('pizzas');  //return view
    // return "Pizas";     //return string
    // return ['name'=> 'veg pizza', 'base' => 'classic' ];   //return in json format

    //passing data to views
    // return view('pizzas',['type' => 'Hawaiian', 'base' => 'classic']);   //pass data as sec parameter to view ,lateron fron db
       
    // $pizza = [
    //     'type' => 'Hawaiian', 
    //     'base' => 'classic',
    //     'price' => 20
    // ];
    // return view ('pizzas',$pizza);

    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'classic','price' => 20],
        ['type' => 'Veg garden', 'base' => 'cheesy crust','price' => 16],
        ['type' => 'Tandoori Chicken', 'base' => 'garlic crust','price' => 22]
    ];
    // query parameters in url pizzahouse.com/?name=maria
    $name = request('name');
    return view ('pizzas', [
        'pizzas' => $pizzas,
        'name' => $name,
        'age' => request('age')
    ]);
});

?>