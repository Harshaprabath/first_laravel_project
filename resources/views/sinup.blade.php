@extends('master')
@section("content")


<div class="container custom-login" >

<blockquote class="blockquote text-center" >
  <p class="mb-0">Register</p>
</blockquote>
    <div class="row ">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/sinup" method="POST">
            <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <br>
        </div>
    </div>
</div>

    
    
@endsection