<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Routing\Controller;


class VarController extends Controller
{
public function index(){
$data = [];
$data['name'] = 'ali';
$data['id'] = 5;
$data['gender'] ='male';
$arr_data = [];
$obj = new \stdClass();
$obj -> name = 'samy';
$obj -> id = 5;
$obj -> gender = 'male';


//
//    return view('welcome',$data);
    return view ('welcome',compact('arr_data'));
}

}
