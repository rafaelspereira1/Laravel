<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gestaoController extends Controller
{
   public function index (){
         return view('super-gestao.principal');
   }

   public function contato(){
         return view('super-gestao.contato');
   }

   public function sobreNos(){
         return view('super-gestao.sobre-nos');
   }
}
