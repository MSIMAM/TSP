@extends('layout.myStyleLinks')

<div class="account-page">

<div class="main-wrapper">
    <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo">
                            <img src="{{asset('styles/assets/img/logo.png')}}" alt="img">
                        </div>
                        <div class="login-userheading">
                            <h3>Sign In</h3>
                            <h4>Please login to your account</h4>
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-login">
                                <label>Name</label>
                                <div class="form-addons">
                                    <input type="text" id="name" name="name" @error('name') is-invalid @enderror placeholder="Enter your email address" @required(true)>
                                    <img src="{{asset('styles/assets/img/icons/mail.svg')}}" alt="img">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="email" id="email" name="email" @error('email') is-invalid @enderror placeholder="Enter your email address" @required(true)>
                                    <img src="{{asset('styles/assets/img/icons/mail.svg')}}" alt="img">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password" class="pass-input" placeholder="Enter your password" @required(true)>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-login">
                                <label>Confirm Password</label>
                                <div class="pass-group">
                                    <input type="password" name="password_confirmation" class="pass-input" placeholder="Enter your password" @required(true)>
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-login">
                                <div class="alreadyuser">
                                    @if (Route::has('password.request'))
                                    <h4>
                                        <a class="hover-a" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </h4>
                                @endif

                                </div>
                            </div>
                            <div class="form-login">
                                <button class="btn btn-login" type="submit" >Sign Up</button>
                            </div>

                        </form>
                        <div class="signinform text-center">
                            <h4>Already have an account? <a href="{{ route('login') }}" class="hover-a">Sign In</a></h4>
                        </div>

                    </div>
                </div>
                <div class="login-img">
                    <img src="{{asset('styles/assets/img/login.jpg')}}" alt="img">
                </div>
            </div>
    </div>
</div>

</div>
@include('includes.myJsLinks')
