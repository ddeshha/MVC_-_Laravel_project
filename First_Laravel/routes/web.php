<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home.index');



Route::get("contact", function ($id = null) {
    return view("home.contact");
})->name("home.contact");


Route::get("home", function () {
    return view("home/index");
})->name('home.index');

Route::get("about", function ($id = null) {
    return view("home.about");
})->name("home.about");


// Route::get("/product/{id?}", function($id = null){
//     echo "This is $id";
// } ) ->name("home.products");

Route::get("/product/{id}", function ($id) {

    $products = [

        1 => [
            "title" => "Test Number 1",
            "descriton" => "Test Number 1",
            "is_ready" => true,

        ],
        2 => [
            "title" => "Test Number 2",
            "descriton" => "Test Number 2",
            "is_ready" => false,

        ],
        3 => [
            "title" => "Test Number 3",
            "descriton" => "Test Number 3",
            "is_ready" => true,

        ]
    ];

    // echo "<h1> This is $id </h1>";
    // echo "<h2> Test of $id </h2>";

    abort_if(!isset($products[$id]), 404);

    $product = $products[$id];

    // dd($product);
    /**
     * This is first way
     */
    // return view("product.show", ['product' => $product]);

    /**
     * This is second way
     */

    return view("product.show", compact("product"));
});

Route::get("/products", function ()
{
    $products = [
        1 => [
            "title" => "Test Number 1",
            "descriton" => "Test Number 1",
            "is_ready" => true,
        ],
        2 => [
            "title" => "Test Number 2",
            "descriton" => "Test Number 2",
            "is_ready" => false,
        ],
        3 => [
            "title" => "Test Number 3",
            "descriton" => "Test Number 3",
            "is_ready" => true,
        ],
    ];
    return view("/product.index", ['products' => $products] );
});