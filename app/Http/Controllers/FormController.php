<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function addUser(Request $request){
        //form validation

$request->validate([
    'username'=>'required|max:55|min:3',
    'useremail'=>'required|email',
    'cityname'=>'required',
    // 'skill'=>'required',
]);
//database inserted

$form=new Form();
$form->username=$request->username;
$form->useremail=$request->useremail;
$form->cityname=$request->cityname;
$form->skill=json_encode($request->skill);//for multiple data in array
$form->Gender=$request->Gender;
$form->age=$request->age;
$form->city=$request->city;
$result=$form->save();
if($request){
   return redirect ('listUser');

}else{
    echo"form not added";
}
// return $request;

    //    return $request->all();
    }

    //For show data 
public function  listUser(){
//    return $formData=Form::all();jeson file dekhabe
 $formData=Form::all();
 return view('list-form-user',['forms'=>$formData]);
}



//for delete data
public function delete($id){
    $isDelete=Form::destroy($id);
    if($isDelete){
        return redirect('listUser');
}else{
    echo"record not deleted";
}

}                   



//for edit 

public function edit($id){
   $form=Form::find($id);
   return view('edit-form-user',["data"=>$form]);
}

//for update
public function update(Request $request,$id){
    $form=Form::find($id);
    $form->username=$request->username;
    $form->useremail=$request->useremail;
    $form->cityname=$request->cityname;
    $form->skill=json_encode($request->skill);//for multiple data in array
    $form->Gender=$request->Gender;
    $form->age=$request->age;
    $form->city=$request->city;
    if($form->save()){
        return redirect('listUser');
    }else{
        echo"form not updated";
    }

}



}