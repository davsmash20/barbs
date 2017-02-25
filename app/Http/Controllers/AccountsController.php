<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountsController extends Controller
{

        public function register(Request $r){
        $a  = new Account;
        // $aa = $a->username;
        // $aaa= $a->password;

        $username = $r['username'];
        $password = $r['password'];
        $confirmpass = $r['confirmpass'];

        if($password!=$confirmpass){
        $msgs="Registration Failed";
        return back()->with(['msgs'=>$msgs]);
    	// $u = new User;
    	}	
    	else{
    	// $a = new Account;
    	$a->username = $username;
    	$a->password = $password;
    	$a->save();
    	$msgs="Registration Successful";
    	return redirect('/d/regform')->with(['msgs'=>$msgs]);
    	}
    }
}