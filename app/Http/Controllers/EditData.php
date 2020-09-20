<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\Controller;
use App\Http\Requests\OfferRequest;
use App\models\Offer;
use Illuminate\Http\Request;

class EditData extends Controller
{
    public function Edit($id){
       $id_existince = Offer::find($id);
      if (!$id_existince)
          return redirect()->back();  //لو جايلك ب اى دى مش موجود فى الداتا بيز ارجع تانى للصفحة اللى جه منها

      $data_acc_id = Offer::select('id','name_ar', 'name_en', 'price')->find($id);

      return view('forms.form_edit' , compact('data_acc_id'));


    }

public function update(OfferRequest $Request){


}

}
