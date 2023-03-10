<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>


@extends('layouts.app')

<section class="vh-100" style="text-align: right" >
    <div class="container py-5 h-100">
      <div class="row d-flex navbar justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-header">{{ __('تسجيل الدخول') }}</div>
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset("img/logo.png")}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form method="POST" action="{{ route('login') }}" >
                    @csrf
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0" style="color: #198754; text-align:  center;">تسجيل الدخول</span>
                    </div>
                    <div class="form-outline mb-4">
                    <label for="email" class="form-label">{{ __('البريد الإلكتروني') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">{{ __('كلمة المرور') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                     
                    </div>
                     <div class="pt-1 mb-4" >
                        <p>
                            <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('تذكرني') }}
                                </label> 
                        </p>
                            <button type="submit" class="btn btn-primary btn btn-white btn-lg btn-block"
                            type="button" style="color:white; background-color: #198754">
                                {{ __('الدخول') }}
                            </button>
                            </div>
                            <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('نسيت كلمة المرور؟') }}
                                </a>
                            @endif
                        </div>
                        <div>
                          <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('  سجل حساب جديد') }}
                        </a>
                        </div>
                        <div class="col-md-6 offset-md-4">
                            
                        </div>
                       
                    </div>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

