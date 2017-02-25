<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostsController extends Controller
{
    public function add($id, Request $r){
    	// $u = new User;
    	$p = new Post;
    	$p->title = $r->title;
    	$p->body = $r->body;
    	$p->user_id = $id;
    	$p->save();
    	return back();
    }
}