
@extends('templateLogin.templateLogin')
@section('main')
    <div id="homepage">
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <div class="login-area">
            <div class="container">
                <div class="login-box ptb--80">
                    <form method="POST" action="{{ route('password.update') }}">
                        <div class="login-form-head">
                            <h4>SIG WISATA KAB. & KOTA TEGAL</h4>
                        </div>
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                <div class="text-danger"></div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gp">
                                <label for="password">Password Baru</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div class="text-danger"></div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-gp">
                                <label for="confirm-password">konfirmasi Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit">
                                    {{ __('Reset Password') }}
                                    <i class="ti-arrow-right"></i>
                                </button>
                            </div>
                            <div class="ptb--30 text-center">
                                <p>Sudah Punya Akun.? <a href="{{url('/')}}">Login.!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop