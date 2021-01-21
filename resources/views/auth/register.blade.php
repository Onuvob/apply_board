@extends('layouts.main-app')

@section('content')


 <!-- Login Part start -->
 <section id="login">
     <div class="container">
         <div class="row">
             <div class="col-lg-7">
                 <div class="login-image">
                     <img src="{{ asset('img/login/undraw_true_friends_c94g.png') }}" alt="image" class="w-100">
                 </div>
             </div>
             <div class="col-lg-4 ml-auto">
                 <div class="login-form">
                    <h2>Sign up with</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="fb">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('img/login/facebook.png') }}" alt="fb">
                                    <span>Facebook</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fb">
                                <a href="#" style="text-decoration: none;">
                                    <img src="{{ asset('img/login/search.png') }}" alt="google">
                                    <span>Google</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <p>Or sign up with your email</p>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                </div>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="inlineFormInputGroup" placeholder="User Name">
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Email</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                </div>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="inlineFormInputGroup" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>


                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="inlineFormInputGroup" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Confirm Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Confirm Password"  name="password_confirmation" required autocomplete="new-password">

                            </div>
                        </div>
                          <div class="text-center mt-5 mb-3">
                            <button class="btn btn-primary" type="submit">Create Account</button>
                          </div>
                          <div class="already">
                            <a href="#" style="text-decoration: none;">
                                <h6 style="color: #FE7769; font-weight: 400; font-size: 14px;">Already have an account? Login</h6>
                            </a>
                          </div>
                          <div class="already">
                            <a href="#" style="text-decoration: none;">
                                <h6 style="color: #FE7769; font-weight: 400; font-size: 14px; line-height: 24px; text-align: justify;">By joining ApplyBoard, you agree to ApplyBoard's Student 
                                    Terms & Conditions , Privacy Policy and Terms of Use .</h6>
                            </a>
                          </div>
                    </form>


                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Login Part End -->

@endsection
  {{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form> --}}