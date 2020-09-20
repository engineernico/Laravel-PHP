<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return
            [
                'name_ar' => 'required|max:30|unique:offers,name_ar',
                'name_en' => 'required|max:30|unique:offers,name_en',
                'price' => 'required|numeric'

        ];
    }

    public function messages()
    {
        return[
            'name_ar.required' => trans('message.offer_required'),  //go to resources langs message
            'name_en.required' => trans('message.offer_required'),  //go to resources langs message
            'name_ar.max' => trans('messages.offer_max') ,
            'name_en.max' => trans('messages.offer_max') ,
            'name_ar.unique' => trans('message.offer_unique'),
            'name_en.unique' => trans('message.offer_unique'),
            'price.required' => trans('message.price_required'),
            'price.numeric' => trans('message.price_type'),


        ];
    }
}
