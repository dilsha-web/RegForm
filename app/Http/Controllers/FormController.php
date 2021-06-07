<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\RegForm;
use Illuminate\Support\Facades\Hash;


class FormController extends Controller
{
public function load(Request $req){
    //return $req->input();


   $req-> validate([
           'username' => 'required | max:10',
           'email'=>'required',
           'password' => 'required |min:5'
       ]);
   
       //RegForm::create($req->all());
       $user = new RegForm();
       $user->username = $req->username;
       $user->email = $req->email;
       $user->password = Hash::make($req->password);
    $user->save();
$data = $req ->input('username');
$req->session()->flash('user',$data);
return view('welcome');



}



}
