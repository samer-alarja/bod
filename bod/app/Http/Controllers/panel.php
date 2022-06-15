<?php

namespace App\Http\Controllers;

use App\Models\newmodel;
use Illuminate\Http\Request;

class panel extends Controller
{
    public function index()
    {  
      
       return view(view: 'welcome');
   }
   public function check()
    {  
      $user=newmodel::all();
      return $user;
         
    }
}
