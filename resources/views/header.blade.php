
<header style="min-width: 480px">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <div class="navbar container">
        
        <a href="{{ url('/home') }}" class="logo text-sm text-gray-700 underline"> <img src="{{asset("img/logo.png")}}" alt="logo"></a>
        
        
        <ul>
            <li>
                <a class="nav-item" href="{{route('home')}}">الرئيسية</a>
            </li>
        
            <li>
                <a class="nav-item" href="{{ route('show_building') }}">عرض المرافق</a>
            </li>
        
        </ul> 
        <ul class="navbar-nav ms-auto" style="display: flex">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="btn nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn nav-link" href="{{ route('register') }}">{{ __('تسجيل') }}</a>
                    </li>
                @endif
            @else
                <li class=" " style="display: flex; gap:1rem;">
                    <a id="" class=" btn nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="" aria-labelledby="">
                        <a class="btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="btn d-none">
                            @csrf
                        </form>
                    </div>
                    {{-- <div class="" aria-labelledby="">
                            <a href="{{route ('cms')}}" class="btn"> إنشاء مرفق</a> 
                        </div> --}}
                </li>
            @endguest
        </ul>
       
    </div>
    
</header>