<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

@extends('layouts.app')

<section class="vh-100" style="text-align: right" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="card-header">{{ __('إستعادة كلمة المرور') }}</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-outline mb-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('البريد الإلكتروني') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="pt-1 mb-4">
                            <button type="submit" class="btn btn-primary btn btn-white btn-lg btn-block"
                            style="color:white; background-color: #198754">
                                {{ __('إستعادة كلمة المرور') }}
                            </button>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </section>
