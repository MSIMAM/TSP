
<link rel="stylesheet" href="{{ asset('styles/core.css') }}">
<link rel="stylesheet" href="{{asset('styles/theme-default.css')}}">
<link rel="stylesheet" href="{{asset('styles/demo.css')}}">
<link rel="stylesheet" href="{{asset('styles/pages/page-auth.css')}}">
<!-- Content -->

<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <img src="{{ asset('styles/assets/img/logo.jpg') }}" width="50px" height="50px"
                                    alt="tijjaniyya sufi path logo">
                            </span>
                            <span class="app-brand-text demo text-body fw-bolder">Tidjaniya Sufi Path</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome admin 👋</h4>
                    <p class="mb-4">Please sign-in to your account</p>

                    <form id="formAuthentication" action="{{ route('login') }}" class="mb-3" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Muh'd@gmail.com"
                                        aria-describedby="floatingInputHelp" name="email" />
                                    <label for="floatingInput">Email</label>
                                </div>
                                @error('email')
                                    <span class="text-danger p-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <label for="password" class="form-label">Password</label>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="password" class="form-control"
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="floatingInputHelp" name="password" />
                                    <label for="floatingInput">Password</label>
                                </div>
                                @error('password')
                                    <span class="text-danger p-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-success d-grid w-100" type="submit">Sign in</button>
                            </div>
                    </form>
                </div>
            </div>
            <!-- /login -->
        </div>
    </div>
</div>

<!-- / Content -->
<script src="{{asset('styles/js/js/config.js')}}"></script>
<script src="{{asset('styles/js/menu.js')}}"></script>
<script src="{{asset('styles/js/main.js')}}"></script>

