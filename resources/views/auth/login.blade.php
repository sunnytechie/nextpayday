
@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card mt-10">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('auth.login') }}">
                            @csrf

                            <div class="form-group mb-3 row">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address or Username') }}</label> --}}

                                <div class="col-md-12">
                                    <input id="usernameOrEmail" type="text" placeholder="E-mail or Username" class="form-control @error('usernameOrEmail') is-invalid @enderror" name="usernameOrEmail" value="{{ old('usernameOrEmail') }}" required autocomplete="usernameOrEmail" autofocus>

                                    @error('usernameOrEmail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-2 row">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Your Passcode" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group justify-content-between d-flex">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <button type="submit" class="btn rounded-0 btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
