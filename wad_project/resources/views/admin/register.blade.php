@extends('layout.form')

@section('form')
<h1>Register</h1>

<form>
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
    </div><br>

    <div class="form-group">
        <p>Already have an account? <a href="{{ url('/login') }}">Login Here</a></p>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection