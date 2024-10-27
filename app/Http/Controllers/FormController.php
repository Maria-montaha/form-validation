<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function addUser(Request $request){
$request->validate([
    'username'=>'required|max:55|min:3',
    'useremail'=>'required|email',
    'cityname'=>'required',
    'skill'=>'required',
]);
return $request;

    //    return $request->all();
    }
}
