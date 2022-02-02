<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
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
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
