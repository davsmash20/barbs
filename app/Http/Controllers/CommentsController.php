<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function comments(Request $r){

        $commenter = $r['commenter'];
        $contents = $r['contents'];

    	$c = new Comment;
    	$c->commenter = $commenter;
    	$c->contents = $contents;
    	$c->save();
    	return redirect('/d/comments');
    }

    public function viewcomments(){
    	$c = new Comment;
    	$comments = $c->all();
    	return view('/d/comments', compact('comments'));
    }

    public function delete($id){
    	$c = new Comment;
    	$c->where('id', $id)->delete();
    	return back();
    }
}