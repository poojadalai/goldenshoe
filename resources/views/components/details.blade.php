@extends('layouts.app')

@section('content')


@include('layouts.nav')

<div class="small-container single-product">   

    <div class="row">
       <div class="col-2">           
            <img src="images/gallery-1.jpg" width="100%" id="prodImg"> 

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="images/gallery-1.jpg" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-2.jpg" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-3.jpg" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images/gallery-4.jpg" class="small-img">
                </div>
            </div>
       </div>

       <div class="col-2">
           <p>Home/ T-shirt</p>
           <h1>Printed Tshirt</h1>
           <h4>$50.00</h4>
           <select name="" id="">
                <option value="">Select Size</option>
                <option value="">XXl</option>
                <option value="">XL</option>
                <option value="">Large</option>
                <option value="">Medium</option>
                <option value="">small</option>
           </select>
           <input type="number" value="1">
           <a href="" class="btn"> Add to Cart</a>

           <h3>Product Details  <i class="fa fa-indent"></i></h3>
           <br>
           <p>Also note that if you change the font-size or color of the icon's container, the icon changes. Same things goes for
                shadow, and anything else that gets inherited using CSS.</p>
       </div>
    </div>

</div>

@include('layouts.footer')