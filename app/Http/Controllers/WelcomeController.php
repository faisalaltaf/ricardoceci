<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Traits\LVHTrait;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    use LVHTrait;

    public function index(){ //home page redirect func
        
        return view('home');
    }
    public function addProduct(){  //product
        return view("addproduct");
    }
    
}
