<?php
use App\Http\Controllers\ProductController; 
$total= 0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>
<div style="background-image: url('https://cutewallpaper.org/23/wallpaper-hd-white/2654715225.jpg');
            background-size: cover;
            background-position: center;
            
            position: relative;">
<nav class="navbar navbar-default" style="background-color: red;">
  <div class="container-fluid"  >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E-Comm</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Mobiles <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Tabs</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Other <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Back Cover</a></li>
            <li><a href="#">Tempered Glass</a></li>
            <li><a href="#">Stickers</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">More..</a></li>
            <!-- <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li> -->
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" action="/search">
        <div class="form-group">
          @csrf
          <input type="text" class="form-control" name="search" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user'))
        <li><a href="/cartlist">cart ({{$total}})</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
              @if(Session::has('user') && Session::get('user')->isAdmin)
              <li><a href="/addproduct"><span class="fa fa-plus"></span> Add Product</a></li>
              @endif
              <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
         </ul>
        </li>
        @else
        <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#">|</a></li>
        <li><a href="/sinup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div>