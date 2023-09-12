@extends('master')
@section("content")


<div class="container custom-login" >

<blockquote class="blockquote text-center" >
  <p class="mb-0">Loging</p>
</blockquote>
    <div class="row ">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/login" method="POST">
            <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>
</div>

@endsection