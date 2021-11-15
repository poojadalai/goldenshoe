@extends('layouts.app')

@section('content')


@include('layouts.nav')


<div class="small-container">   

    <div class="row row-2">
        <h2>All Products</h2>
        <select name="" id="">
            <option value="">Default Shorting</option>
            <option value="">Short by Price</option>
            <option value="">Short by popularity</option>
            <option value="">Short by rating</option>
             <option value="">Short by sale</option>
        </select>
    </div>


    <div class="row"> 
        {{-- @foreach($products as $product) --}}
     
        <div class="col-4">  
                @foreach($images as $image)          
                    <a href="{{ url('/details') }}"><img src="{{$image->path}}" alt=""></a>
                @endforeach
            {{-- <a href="{{ url('/details') }}"><h4>{{$product->name}}</h4></a> --}}
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        {{-- @endforeach --}}
    </div>

    <div class="page-btn">
        <span>1</span>
         <span>2</span>
          <span>3</span>
           <span>4</span>
            <span>&#8594</span>
    </div>
</div>



@include('layouts.footer')