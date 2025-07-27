<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FetchController extends Controller
{
    public function Fetch(){
        $response = Http::get('https://dummyjson.com/products')->json();
        $products = $response['products'];
        return view('Nav.nav',compact('products'));


    }
}
