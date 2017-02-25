<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	$p = new Post;
    	$u = new User;
    	$users = $u->all();
    	$posts = $p->all();
    	return view('welcome', compact('posts', 'users'));	
    }

    public function ntr(){
    	return view('d/amenities');
    }
    public function about(){
    	return view('d/about');
    }   
    public function comm(){
    	return view('d/comments');
    } 
    public function login(){
    	return view('d/regform');
    }   
    public function comment(){
    	return view('d/comment');
    }   
    public function courses(){
    	return view('d/courses');
    } 
    public function services(){
    	return view('d/services');
    }                       
}