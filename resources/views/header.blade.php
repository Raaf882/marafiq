<header>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <div class="navbar container">
        
        <a href="{{ url('/home') }}" class="logo text-sm text-gray-700 underline"> <img src="{{asset("img/logo.png")}}" alt="logo"></a>
        <ul>
            <li>
                <a class="nav-item" href="{{url('/')}}">الرئيسية</a>
            </li>
            <li>
                <a class="nav-item" href="#">من نحن</a>
            </li>
            <li>
                <a class="nav-item" href="#">خدماتنا</a>
            </li>
            <li> <a class="nav-item" href="footer">توصل معنا</a></li>
        </ul>  
        <div class="acount-btn">
            @auth
            <a class="bnt" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a class="bnt" href="{{ route('register') }}">Register</a>
            @endif
        @endif
        </div>
    </div>
    
</header>