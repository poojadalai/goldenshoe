@extends('layouts.app')

@section('content')

@include('layouts.nav')

<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="images/image1.png" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="indicator">
                    </div>

                    <form id="LoginForm" action="">
                        <input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot Password</a>
                    </form>

                    <form id="RegForm" action="{{ route('register.post') }}" method="POST">
                         @csrf
                        <div class="form-field">
                            <input type="text" placeholder="Username" name="email" id="username">
                            <small class="danger"></small>
                        </div>
                        <div class="form-field">
                            <input type="email" placeholder="Email" name="email" id="email">
                            <small class="danger"></small>
                        </div>
                        <div class="form-field">
                            <input type="password" placeholder="Password" id="password">
                            <small class="danger"></small>
                        </div>
                        <div class="form-field">
                            <input type="password" placeholder="confirm-password" name="password" id="confirm-password">
                            <small class="danger"></small>
                        </div>
                        <button type="submit" class="btn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')