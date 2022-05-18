@php
$timezones =vetvineHelper::timezones()
@endphp


<!-- Registeration Modal Form  Start-->
<button type="button" class="btn btn-primary d-none" id="registration_modal_box_show_btn" data-toggle="modal" data-target="#Registration-modal">
    Launch demo modal
</button>
<div class="modal fade registraion_form_pop_up" id="Registration-modal">
    <div class="modal-dialog register-modal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="popup-header">
                    <span class="popup-logo"><img src="{{ asset('frontend/images/popup-logo.png') }}" alt="logo"></span>
                    <span class="close" id="register_modal_close" data-dismiss="modal">&times;</span>
                </div>
            </div>
            <div class="modal-body">
                <div class="popup-body">
                    <h2 class="member-login"><span>Member Registration</span></h2>
                    <form action="{{route('register')}}" class="custom_form" method="post" id="regform">
                        @csrf
                        <section class="registration-tab">
                            <div class="container">
                                <div>
                                    <p><sup>*</sup>Select the category that best describes your current activity
                                        or status in the
                                        profession</p>
                                    <div class="lightpage">
                                        <div class="arrow-tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                                            <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix   ui-widget-header ui-corner-all">
                                                <li class="ui-state-default ui-corner-top     ui-tabs-active tab_1_section_parent" >
                                                    <a href="#" class="ui-tabs-anchor" role="presentation">
                                                        <span >Veterinary Professional</span>
                                                    </a>
                                                    <input type="hidden" id="setmemberlevel" name="memberlevel">

                                                    <ul class=" tab_1_section">

                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios7" value="5" checked="">
                                                            <label class="form-check-label" for="exampleRadios7">
                                                                Veterinarian
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios8" value="6">
                                                            <label class="form-check-label" for="exampleRadios8">
                                                                Veterinary Specialist
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios9" value="7">
                                                            <label class="form-check-label" for="exampleRadios9">
                                                                Veterinary Technician
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios10" value="8">
                                                            <label class="form-check-label" for="exampleRadios10">
                                                                Veterinary Client Care / Hospital Admin
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </li>


                                                <li class="ui-state-default ui-corner-top tab_2_section_parent" >
                                                    <a href="#">
                                                        <span >Vet / Vet Tech Student</span>
                                                    </a>

                                                    <ul class="tab_2_section">

                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios1" value="9" checked="">
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                Veterinary Student
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios2" value="10">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                Veterinary Technician Student
                                                            </label>
                                                        </li>
                                                    </ul>

                                                </li>

                                                <li class="ui-state-default ui-corner-top tab_3_section_parent" role="tab">
                                                    <a href="#ta3" class="ui-tabs-anchor" role="presentation">
                                                        <span data-memberlevel="3">Pet Care Professional </span>
                                                    </a>

                                                    <ul class="tab_3_section">

                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios3" value="11" checked="">
                                                            <label class="form-check-label" for="exampleRadios3">
                                                                Trainer / Animal Behavior Consultant
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios4" value="12">
                                                            <label class="form-check-label" for="exampleRadios4">
                                                                Breeder
                                                            </label>
                                                        </li>
                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios5" value="13">
                                                            <label class="form-check-label" for="exampleRadios5">
                                                                Other Service Provider
                                                            </label>
                                                        </li>
                                                    </ul>


                                                </li>
                                                <li class="ui-state-default ui-corner-top tab_4_section_parent" role="tab">
                                                    <a href="#" class="ui-tabs-anchor" role="presentation">
                                                        <span data-memberlevel="4">Pet Owner</span>
                                                    </a>
                                                    <ul class="tab_4_section">

                                                        <li class="form-check">
                                                            <input class="form-check-input remove_box" type="radio" name="networklevel" id="exampleRadios6" value="14" checked="">
                                                            <label class="form-check-label" for="exampleRadios6">
                                                                Pet Owner
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                            <div class="row form-vet-section email_top w-75 mx-auto mt-5">
                                                <div class="col-sm-12 mb-3">
                                                    <h6><i class="red-star">*</i>Email Address</h6>
                                                    <input type="email" name="email" placeholder="Email" class="form-control mb-0 input_click">
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <h6><i class="red-star">*</i>Password</h6>
                                                    <input type="password" name="password" placeholder="Password" class="form-control mb-0 input_click">
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <h6><i class="red-star">*</i>Confirm Password</h6>
                                                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control mb-0 input_click">
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <h6><i class="red-star">*</i>FIRST NAME</h6>
                                                    <input type="text" name="first_name" placeholder="FIRST NAME" class="form-control mb-0 input_click">
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                    <h6><i class="red-star">*</i>LAST NAME</h6>
                                                    <input type="text" name="last_name" placeholder="LAST NAME" class="form-control mb-0 input_click">

                                                </div>

                                                <div class="col-sm-12">
                                                    <h6><i class="red-star">*</i>Timezone</h6>
                                                    <select name="timezone" class="form-control input_click">
                                                        <option disabled selected>Select TimeZone</option>

                                                        @foreach($timezones as $timezone)
                                                        <option value="{{$timezone->id}}">( {{ $timezone->diff_from_gtm}} ) {{$timezone->name .' - '. $timezone->offset }}</option>
                                                        @endforeach

                                                    </select>
                                                    @if($errors->has('timezone'))
                                                    <span class="invalid-feedback" style="margin-top:-20px !important">
                                                        <strong>{{ $errors->first('timezone') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>

                                                <div class="col-md-12 text-center">
                                                    <div class="mm-new-checkbox" style="margin-left:24px;">
                                                        <input class="form-check-input input_click" type="checkbox" name="termsofservice">
                                                        <span><a href="#" class="">
                                                                <sup>*</sup>I have read and agree to the<a href="{{route('termsofservice')}}" target="_blank" style="color: #f27222;">Terms of
                                                                    Service</a>
                                                            </a></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 text-center">
                                                    <div class="d-flex justify-content-center ">
                                                        <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
                                                            <div style="width: 304px; height: 78px;">
                                                                <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR&amp;co=ZmlsZTo.&amp;hl=en&amp;v=dPctOHA2ifhWm5WzFM_B5TjT&amp;size=normal&amp;cb=fao1bvu68guf" width="304" height="78" role="presentation" name="a-k2i5c5yx6045" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                                </div>
                                                                <textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 style="color:red" id="regibtnsmsg">Please Select Above Category And Profession To Continue</h3>

                                                    <div class="social_icons_modal">
                                                        <a href="{{ url('social/facebook') }}" class="socialbtns "><i class="fa fa-facebook-square " aria-hidden="true"></i></a>
                                                        <a href="{{ url('social/twitter') }}" class="socialbtns"><i class="fa fa-twitter-square " aria-hidden="true"></i></a>
                                                        <a href="{{ url('social/google') }}" class="socialbtns"><i class="fa fa-google " aria-hidden="true"></i></a>
                                                    </div>

                                                    <button type="submit" id="submitbtn" class="continue-button">Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </form>
                </div>
                <div class="popup-footer">
                    <div class="text-center already-account">
                        <p> IF YOU ALREADY HAVE AN ACCOUNT <a href="#" id="login_form_show"> LOG IN
                                HERE</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Registeration Modal Form  End-->







<!-- Login Modal Form  Start-->
<button type="button" class="btn btn-primary d-none" id="login_form_show_btn" data-toggle="modal" data-target="#login-modal">
    Launch demo modal
  </button>
    <div class="modal fade" id="login-modal">
        <div class="modal-dialog custum_popup">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="popup-header">
                        <span class="popup-logo"><img src="{{ asset('frontend/images/popup-logo.png') }}" alt="logo"></span>
                        <span class="close" id="login_modal_close" data-dismiss="modal">&times;</span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="popup-body">
                        <h2 class="member-login"><span>Member Login</span></h2>
                        <div class="register-in-login">new to VETVINE?
                            <a class="Register-Now" href="#"  id="register_show_modal_login">Register now</a>
                        </div>
                        <form action="{{route('login')}}" method="post" class="custom_form">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                <div class="alert alert-danger" id="errormsg" style="display: none;">
                              </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">Email</label>
                                        <input type="email" id="email" name="email" placeholder="" class="my-custom_input">
                                        <span id="emailmsg" style="color: red;"></span>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="my-custom_label">password</label>
                                        <input type="password" id="password" name="password" placeholder="" class="my-custom_input">
                                        <span id="passwordmsg" style="color: red;"></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <span class="keep-logged"><label for="checkme"><input type="checkbox"
                                                id="checkme"> Keep me logged
                                            in</label></span>
                                    <span class="forgaot">
                                    @if (Route::has('password.request'))
                                                <a  href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif
                                    </span>
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">



                                <div class="social_icons_modal">
                                    <a href="{{ url('social/facebook/0/0') }}" class="socialbtnslogin "><i class="fa fa-facebook-square " aria-hidden="true"></i></a>
                                    <a href="{{ url('social/twitter/0/0') }}" class="socialbtnslogin"><i class="fa fa-twitter-square " aria-hidden="true"></i></a>
                                    <a href="{{ url('social/google/0/0') }}" class="socialbtnslogin"><i class="fa fa-google " aria-hidden="true"></i></a>
                                </div>

                                </div>
                            <div class="popup-footer">
                        <input type="submit"  value="Log In" class="toggle button send-msg">
                    </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
<!-- Login Modal Form  End-->

@section('scripts')
<script>
$(document).ready(function(){
//step1 hide buttons until user select the network level
    $('.socialbtns').css({
        'pointer-events': 'none'
    });
    $('#submitbtn').css({
        'pointer-events': 'none'
    });
})
//step2 get value of member level and network level
$('.ui-corner-top').on('change',function() {
  var usertype=  $(this).find('span').attr('data-memberlevel');
  $('#setmemberlevel').val(usertype);
  var networkLevel = $('input[name="networklevel"]:checked').val()
  console.log(networkLevel)
  $('#regibtnsmsg').hide();
  $('.socialbtns').css({
        'pointer-events': 'visible'
  });
  $('#submitbtn').css({
        'pointer-events': 'visible'
    });
 //step3 make custom url against member level and network level
  var urlarray = ['social/facebook', 'social/twitter', 'social/google'];
  $('.socialbtns ').each(function(item , index) {
        $(this).attr('href',urlarray[item]);
        var anchorlick = $(this).attr('href');
        var curlink = $(this).attr('href', anchorlick + '/' + usertype + '/' + networkLevel);
    })
 })


 $('#email').on('keyup',function(){
    $('#emailmsg').empty()
})
$('#password').on('keyup',function(){
    $('#passwordmsg').empty()
})
</script>

@endsection
