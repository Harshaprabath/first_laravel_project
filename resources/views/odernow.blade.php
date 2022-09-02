@extends('master')
@section("content")

<div class="custom-product ">
   <div class="col-sm-8">
   
        <table class="table">
            
            <tbody>
            <tr>
                <td>Amount</td>
                <td>RS {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>RS 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>RS 0</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>RS {{$total}}</td>
            </tr>
            </tbody>
        </table> 
        <div>
           
            <form action="/oderplace" method="POST">
                @csrf
                <div class="form-group"> 
                    <textarea  name="address" class="form-control" placeholder="Enter Your Address"  required></textarea>
                </div>
                <div class="form-group">
                    <label for="pwd">Payment Method</label><br><br>
                    <input type="radio" value="cash" name="payment" checked><span>online payment</span><br>
                    <input type="radio" value="cash" name="payment"><span>EMI payment</span><br>
                    <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span><br>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form> 
           
        </div>
        
   </div>
</div>
@endsection