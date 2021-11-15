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
    
</div>  