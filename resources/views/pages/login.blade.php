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
                    <h2>Log In</h2>
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
                    <p>Or log in with your email and password</p>
                    <form>
                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="name@example.com">
                            </div>
                        </div>
                        <div class="user">
                            <label class="sr-only" for="inlineFormInputGroup">Password</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                                </div>
                                <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="***************">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                                Remember Me 
                              </label>
                            </div>
                          </div>
                          <div class="text-center">
                            <button class="btn btn-primary" type="submit">Log In</button>
                          </div>
                    </form>
                 </div>
                 <div class="row mt-3">
                     <div class="col-lg-6">
                        <a href="#" style="text-decoration: none;">
                            <h6 class="ml-4" style="color: #FE7769; font-weight: 400;">Forget Password?</h6>
                        </a>
                     </div>
                     <div class="col-lg-6">
                        <a href="#" style="text-decoration: none;">
                            <h6 style="color: #FE7769; font-weight: 400;">Locked Account?</h6>
                        </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Login Part End -->


 <!-- Login Sub Part start -->
 <section id="login-sub">
     <div class="container">
         <div class="row">
             <div class="col-lg-8 ml-auto">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sub-content">
                            <h6>Student</h6>
                            <p>Are you a student looking for higher education 
                                abroad? Register today and let our team of experts 
                                guide you through your journey.</p>
                                <a href="./signup.html">Register as student</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sub-content">
                            <h6>Recruitment Partner</h6>
                            <p>Do you recruit prospective students wanting to 
                                study abroad? Register today and become an 
                                ApplyBoard Certified recruitment partner.</p>
                                <a href="./company information.html">Register as recruitment partner</a>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Login Sub Part End -->


@endsection