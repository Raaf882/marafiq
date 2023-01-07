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
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline btn">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline btn">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline btn">Register</a>
                @endif
            @endif
        </div>
    @endif 
        {{-- <div class="acount-btn">
            @auth
            <a class="btn" href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a class="btn" href="{{ route('register') }}">Register</a>
            @endif
        @endif
        </div> --}}
    </div>
    
</header>