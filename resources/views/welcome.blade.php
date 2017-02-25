@extends('layout')

@section('welcome')

<!--         <form method="post" action="addpost/1">
            {{ csrf_field() }}
            Title: <input type="text" name="title"></br></br>
            Body: <textarea name="body"></textarea></br></br>
            <button type="submit">Post</button>    
        </form>

        <ul>
            <h4>{{ $users}}</h4>
            @foreach($posts as $post)
                <a href="{{ $post->id }}"> <li>{{ $post->title }}</li></a>
            @endforeach -->

<div>
<br> 
<center>

<div class="hymn">
<video width="640" height="480" autoplay>
  <source src="files/hymn.mp4" type="video/mp4">
</video>
</div>
@stop