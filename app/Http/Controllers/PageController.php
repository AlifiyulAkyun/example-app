<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function index(){
       return 'Selamat Datang';
   }
   public function about(){
       return '2041720036,Alifiyul Akyun,TI-2B';
   }
   public function articles($id=null){
       return 'Ini adalah halaman artikel dengan id= '.$id;
   }

   
    
}

