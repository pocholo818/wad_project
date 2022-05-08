@extends('layout.form')

@section('form')
<h1>Login</h1>

<form>
  {{ csrf_field() }}
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remeber me</label>
  </div>

  <div class="form-group">
    <p>Don't have an account yet? <a href="{{ url('/register') }}">Register Here</a></p>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection