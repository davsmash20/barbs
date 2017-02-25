@extends('layout')

@section('comments')
	<style>
	table{width:700px;
	margin: 0 auto;}
	tr{
		height: 50px;
	}
	</style>
	
	<body>


	<div class="container">
  <h2>Leave a comment below: </h2> 
  
  <form action="/d/comments" method="post" class="form-horizontal">
  	{{ csrf_field() }}
    <div class="input-group">
    <span class="input-group-addon"><input type="text" name="commenter" placeholder="User"></span>
    <input id="msg" type="text" class="form-control" name="contents" placeholder="Write your comment here.">
  	</div>
    </br>
  	<button type="submit" class="btn btn-primary" name="comment">Comment</button> 
  </form>
    </br>
    </br>         
  <table class="table table-bordered">
    <thead>
      <tr>

        <th>User</th>
        <th>Comment</th>
        <th>Delete</th>
      </tr>
    </thead>

    <tbody>
    	<tr>
    	@foreach($comments as $comment)
        	<td>{{ $comment->commenter }}</td>
        	<td>{{ $comment->contents }}</td>
        	<td><a href="/d/delete/{{ $comment->id }}">Delete</a>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
@stop