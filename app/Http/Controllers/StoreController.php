<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use App\Models\Shoe;

class StoreController extends Controller
{
    public function index(string $c=null){

        if($c == "preto")
            $c = 1;
        else if($c == "azul")
            $c = 2;
        else if($c == "verde")
            $c = 3;
        else if($c == "vermelho")
            $c = 4;
        else if($c == "branco")
            $c = 5;
        else if($c == "amarelo")
            $c = 6;

        $shoes = Shoe::find(3)->get()->where('color_id', $c);
        // echo $shoes[0];

        return View('stock', ['shoes' => $shoes]);
    }
}
