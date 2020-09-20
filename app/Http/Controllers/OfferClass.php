<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use   App\models\Offer;
use Illuminate\Routing\Controller;

class OfferClass extends Controller
{
//{
//    public function ShowFillables(){
//
//        return Offer::where('id',1)->get();
//    }


    public function store(OfferRequest $Request)
    {


//        $rules = $this->getrules();
//        $messege = $this -> ShowMessage();
//        $validator = Validator::make($Request->all(),$rules, $messege);
//
//               if($validator -> fails()){
//
//            return  redirect()->back()->withErrors($validator)->withInput($Request->all()) ; //send error messages to the form
//
//        }

        Offer::create([

            'name_ar' => $Request->name_ar
            ,
            'name_en' => $Request->name_en
            ,
            'price' => $Request->price


        ]);

        return redirect()->back()->with(['success' => 'تمت الاضافة بنجاح']);

    }

//    protected function ShowMessage(){
//
//        return
//            [
//                'name.required' => trans('message.offer_required'),  //go to resources langs message
//                'name.max' => trans('messages.offer_max') ,
//                'name.unique' => trans('message.offer_unique'),
//                'price.required' => trans('message.price_required'),
//                'price.numeric' => trans('message.price_type'),
//
//
//            ];
//    }

//    protected function getrules(){
//
//        return
//        [
//             'name' => 'required|max:30|unique:offers,name',
//            'price' => 'required|numeric'
//        ];
//    }

}

//}
