@extends('layouts.app')

@section('content')

{{-- @include('layouts.nav') --}}
 @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
<div class="header">
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="{{ url('/index') }}"><img class="width1" src="images/logo.png"></a>
            </div>
            <nav>
                <ul id="MenuItem">
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="{{ url('/') }}">About</a></li>
                    <li><a href="{{ url('/') }}">Contact</a></li>
                    <li><a href="{{ url('/account') }}">Account</a></li>
                </ul>
            </nav>  
            <a href="{{ url('/cart') }}"><img src="images/cart.png" width="30px" height="30px"></a>
            <img src="images/menu.png" class="menu-icon" onclick="toggleMenu()">
        </div>
        <div class="row">
            <div class="col-2">
                <h1>Give Your Workout <br> A New Style!</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s.</p>
                <a href="" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2"> <img src="images/image1.png" alt=""></div>        
        </div>
    </div>
</div>

@include('components.featuredcat')

@include('components.featuredprod')

@include('components.offer')

@include('components.testimonials')

@include('components.brands')

@include('layouts.footer')