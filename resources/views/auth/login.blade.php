@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membuat Form Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Form Login</div>
        <div class="title signup">Form Registrasi</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked />
          <input type="radio" name="slide" id="signup" />
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Daftar</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
            <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf
            <pre></pre>
            <div class="field">
              <input
                id="name"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus
                placeholder="Masukan Email"
              />

              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="field">
              <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Masukan Password"
              />

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="field btn">
              <div class="btn-layer"></div>
              <button type="submit">{{ __('Login') }}</button>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
                <a href="{{ route('login.google') }}">Login Google</a>
            </div>
            <div class="signup-link">
              Buat akun
              <a href="">Daftar sekarang</a>
            </div>
          </form>
          <form method="POST" class="signup" action="{{ route('register') }}">
                        @csrf
            <div class="field">
                <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Masukan Nama" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="field">
                <input id="email" placeholder="Masukan Email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="field">
                <input id="password" type="password" placeholder="Masukan Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <div class="field">
                <input id="password-confirm" placeholder="Ulangi password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
            </div>
            <div class="signup-link">
              Sudah punya akun? <a href="">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="{{asset('assets/js/script.js')}}"></script>
  </body>
</html>
@endsection