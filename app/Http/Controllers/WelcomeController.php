<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Traits\LVHTrait;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    use LVHTrait;

    public function index(){ //home page redirect func
        $shop= auth()->user();
        $products = $shop->api()->rest('GET','/admin/api/2023-01/products.json'); //shopify product fetch rest api
        if($products['status'] ==200 || $products['status'] == 201){
            $products = $products['body']['products'];
        }else{
            $products = [];
        }
        return view('home',compact('products'));
    }
    public function addProduct(){  //product
        return view("addproduct");
    }
    
}
