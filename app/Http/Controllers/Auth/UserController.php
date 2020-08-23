<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    public function __construct(){

        $this->middleware('auth') -> except('ShowUserName2');

    }



     public function ShowUserName1()
   {
   return "this is the user name1";

   }  public function ShowUserName2()
   {
   return "this is the user name2";

   }  public function ShowUserName3()
   {
   return "this is the user name3";

   }


}






