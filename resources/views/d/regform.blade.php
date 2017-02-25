@extends('layout')

@section('user-related')
	<hr>

<!-- 	<form action ="/d/regform" method="post">
		{{ csrf_field() }}
	<table>
		<tr><td>Username: 		  </td><td><input type="text"     name="username"   maxlength="25"></td></tr>
		<tr><td>Password: 		  </td><td><input type="password" name="password"   maxlength="25"></td></tr>
		<tr><td>Re-type Password: </td><td><input type="password" name="confirmpass" maxlength="25"></td></tr>
		<tr><td><button type="submit" name="register">Sign Up</button></td></tr>
	</table>
	</form> -->
	<div class="container">
  <h2>New User Registration</h2>
  
  <form class="form-horizontal" action ="/d/regform" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id ="email" name="username" placeholder="Enter username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="confirmpass" placeholder="Confirm password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary" name="register">Submit</button>
      </div>
    </div>
  </form>
</div>

	<hr>
<!-- 	
		<form action ="" method="post">
			{{ csrf_field() }}
			<table>
				<tr><td>Enter your username: 		       </td>	<td><input type="text" name="username" size="45">			 </td></tr>
				<tr><td>Enter your password: 			   </td>	<td><input type="password" name="password" size="45">		 </td></tr>	
				<tr><td>(Password are case-sensitive!)	   </td>													                  </tr>
			</table>
			<button type="submit" name="register">Log In</button>
		</form> -->
		<div class="container">
  <h2>Login Form</h2>
  <form class="form-inline">
  	{{ csrf_field() }}
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@stop