@extends('master')
@section("content")



<div class="container custom-login" >

<blockquote class="blockquote text-center" >
  <p class="mb-0">Add Product</p>
</blockquote>
    <div class="row ">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="/addproduct" method="POST">
            <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Name" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" name="price" class="form-control" id="exampleInputPassword1" placeholder="RS" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Category</label>
                <input type="text" name="category" class="form-control" id="exampleInputPassword1" placeholder="ex: Mobile" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description" required>
            </div>
            <div class="form-group">
                <label for="Image" class="form-label">Product Pic Url</label>
                <input class="form-control" type="text" id="formFile"  name="gallery" placeholder="url" required >
                <br>
                 <button type="submit" class="btn btn-primary">Add</button>
                <br>
            </div>
            </form>
        </div>
    </div>
</div>

        <script>
      
        </script>
   
@endsection