@extends('layouts.main-app')

@section('content')

    <!-- Company Information Part start -->
    <section id="company_informations">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="company-image">
                        <img src="{{ asset('img/CompanyInformation/information_carousel.png') }}" alt="image" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 ml-auto">
                    <div class="company_deatils">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Company Information</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Contact Information</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Recruitment Details</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlText1">Company Name*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email*</label> 
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText2">Website</label>
                                        <input type="text" class="form-control" id="exampleFormControlText2" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText3">Facebook Page Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlText3" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText4">Instagram Handle</label>
                                        <input type="text" class="form-control" id="exampleFormControlText4" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText5">Twitter Handle</label>
                                        <input type="text" class="form-control" id="exampleFormControlText5" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText6">Linkedin URL</label>
                                        <input type="text" class="form-control" id="exampleFormControlText6" placeholder="">
                                    </div>
                                    <div class="company-btn text-right">
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlText7">Main Source of Students*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText7" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput2">Legal First Name*</label> 
                                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText8">Legal Last Name*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText8" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText9">Street Address*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText9" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText10">City*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText10" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText11">State/Province</label>
                                        <input type="text" class="form-control" id="exampleFormControlText11" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText12">Country*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText12" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText13">Postal Code</label>
                                        <input type="text" class="form-control" id="exampleFormControlText13" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText14">Phone*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText14" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText15">PhonHas anyone from ApplyBoard helped or referred you?</label>
                                        <input type="text" class="form-control" id="exampleFormControlText15" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="company-btn">
                                                <button type="submit" class="btn btn-primary">Back</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="company-btn text-right">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlText17">When did you begin recruiting students?</label>
                                        <input type="text" class="form-control" id="exampleFormControlText17" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">What services do you provide to your clients?*</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                      </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                Canadian Schools Represented 
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                American Schools Represented 
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label" for="invalidCheck2">
                                                Represents Other Countries
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea2">What institutions are you representing?</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleFormControlTextarea3">What educational associations or groups does your organization 
                                            belong to?*</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="3"></textarea>
                                      </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlText19">Where do you recruit from?*</label>
                                        <input type="text" class="form-control" id="exampleFormControlText19" placeholder="">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="company-btn">
                                                <button type="submit" class="btn btn-primary">Back</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="company-btn text-right">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Company Information Part End -->
    @endsection