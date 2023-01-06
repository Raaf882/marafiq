<header>
    <div class="navbar container">
        
        <a href="{{ url('/home') }}" class="logo text-sm text-gray-700 underline"> <img src="{{asset("img/logo.png")}}" alt="logo"></a>
        <ul>
            <li>
                <a class="nav-item" href="#">الرئيسية</a>
            </li>
            <li>
                <a class="nav-item" href="#">من نحن</a>
            </li>
            <li>
                <a class="nav-item" href="#">خدماتنا</a>
            </li>
            <li> <a class="nav-item" href="#">توصل معنا</a></li>
        </ul>  
        <div class="acount-btn">
          @auth
                        {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}
                    @else
                        <a href="{{ route('login') }}" class="btn text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class=" btn ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
          
        </div>
    </div>
    
</header>