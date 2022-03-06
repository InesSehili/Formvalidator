<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FieldRequest;

class FormController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }
    public function store(FieldRequest $request){
$validatedData = $request->validated();
        \App\Form::create($validatedData);

        return response()->json('Form is successfully validated and data has been saved');

    }
    
  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
    public function messages()
    {
        return [
            'item_name.required' => 'An Item Name is required',
            'sku_no.required'  => 'An SKU NO is required',
            'price.required'  => 'The price is required',
        ];
    }
}
