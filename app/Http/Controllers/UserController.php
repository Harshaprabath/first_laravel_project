<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
            $user = User::where(['email'=> $req-> email]) -> first();
            if(!$user || !Hash::check($req->password,$user -> password))
            {
                return "User Name or Password is missedmach";
            }
            else
            {
                $req->session()->put('user',$user);
                return redirect('/');
            }
    
    }

     //
     function sinup(Request $req)
     {      //&& $req-> email != $user-> email
             $user = User::where(['email'=> $req-> email]) -> first();
             if(!$user && $req->password == $req->cpassword  )
             { 
                  $newuser = new User;
                  $newuser -> name =$req->name;
                  $newuser -> email=$req->email;
                  $newuser -> password=Hash::make($req->cpassword);
                  $newuser ->save();
                 
                  $req->session()->put('user',$newuser);
                  return redirect('/');
                 
             }
             else
             {
                return "confirm Password is missedmach";

             }
     
     }
}
