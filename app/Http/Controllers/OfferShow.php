<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Controller;
use App\models\Offer;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class OfferShow extends Controller
{
    public function ShowData(){

      $offers =  Offer::select(
         'id',

        'name_ar',

         'name_en',

        'price') -> get();     //return collection

        return view('forms.form_show',compact('offers'));

    }
}
