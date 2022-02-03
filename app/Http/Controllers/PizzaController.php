<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        // using  Pizza model to get all data
        // $pizzas = Pizza::all();

        // get records sorted by name  Pizza::OrderBy('name')
        // $pizzas = Pizza::OrderBy('name','desc')->get();  

    //    selecting specific records
        $pizzas = Pizza::where('type', 'Hawaiian')->get();

        // return records by timestamp, or if timesyamp null then all records
        // $pizzas = Pizza::latest()->get();

    //      $pizzas = [
    //     ['type' => 'Hawaiian', 'base' => 'classic','price' => 20],
    //     ['type' => 'Veg garden', 'base' => 'cheesy crust','price' => 16],
    //     ['type' => 'Tandoori Chicken', 'base' => 'garlic crust','price' => 22]
    // ];
    // // query parameters in url pizzahouse.com/?name=maria
    // $name = request('name');
    // return view ('pizzas', [
    //     'pizzas' => $pizzas,
    //     'name' => $name,
    //     'age' => request('age')
    // ]);
    return view('pizzas', ['pizzas' => $pizzas] );
    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
