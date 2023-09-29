@extends('master')
@section("content")

<div class="container ">
   
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/" class="btn btn-info">Go Back</a>
            <br>
            @if($edit)
                <br>
                <form action="/editproduct" method="POST">
                <div class="form-group">
                        @csrf
                    <input type="hidden" name="id"   value = "{{ $product['id'] }}" required>
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value = "{{ $product['name'] }}"aria-describedby="emailHelp" placeholder="Product Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Price</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1"  value = "{{ $product['price'] }}" placeholder="RS" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Category</label>
                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value = "{{ $product['category'] }}" placeholder="ex: Mobile" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" value = "{{ $product['description'] }}" placeholder="Description" required>
                </div>
                <div class="form-group">
                    <label for="Image" class="form-label">Product Pic Url</label>
                    <input class="form-control" type="text" id="formFile"  name="gallery" value = "{{ $product['gallery'] }}"  placeholder="url" required >
                    <br>
                    <button type="submit" class="btn btn-success">SAVE</button>
                    <br>
                </div>
                </form>
            @else
                <h2>{{ $product['name'] }}</h2>
                <h3>price : {{$product['price']}}</h3>
                <h4>Category : {{$product['category']}}</h4>
                <h4>Details  : {{$product['description']}}</h4>
                <br><br>
                <form action="/add_to_cart" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-success">Buy</button>
                <br><br>
            @endif
        </div>
    </div>
</div>
@endsection