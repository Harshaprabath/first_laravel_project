@extends('master')
@section("content")

<div class="custom-product ">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($products as $key => $item)
            @if($key < 5)
                <li data-target="#myCarousel" data-slide-to="{{$key}}" {{$key === 0 ? 'class="active"' : ''}}></li>
            @endif
        @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($products as $key => $item)
            @if($key < 5)
                <div class="item {{$key === 0 ? 'active' : ''}}">
                    <a href="detail/{{$item['id']}}">
                        <img class="slider-img" src="{{$item['gallery']}}" alt="{{$item['name']}}">
                        <div class="carousel-caption">
                            <h3>{{$item['name']}}</h3>
                            <p>{{$item['description']}}</p>
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <div class="treanding-wrapper">      
        <h3>Mobile phone</h3>
        

            @foreach($products as $item)
            <div class="trending-items"  style="text-align: center; padding-bottom: 10px;">
            <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['gallery']}}" >
            <div class="">
                <h5>{{$item['name']}}</h5>
                
                
            </div>
            </a>
            @if(Session::has('user') && Session::get('user')->isAdmin)
                <a class="btn btn-success" href="editproductdetails/{{$item['id']}}">Edit</a>
                <a class="btn btn-danger" href="#" onclick="confirmDelete({{ $item['id'] }})">Delete</a>

            @endif
            </div>
            @endforeach
    
    </div>
    

    </div>
</div>

<script>

    function confirmDelete(id) {
        var confirmation = confirm("Are you sure you want to delete this product?");
        if (confirmation) {
            // If the user clicks "Yes," redirect to the delete URL
            window.location.href = "deleteproduct/" + id;
        } else {
            // If the user clicks "No" or cancels the dialog, do nothing
        }
    }

</script>
@endsection