@extends('frontend.layouts.app')

@section('content')



    <main class="no-main">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="ps-breadcrumb__list">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="{{ route('user.registration') }}">User Register</a></li>
                </ul>
            </div>
        </div>

        <section class="section--login">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="login__box">
                            <div class="login__header">
                                <h3 class="login__login">Create your Naulobazar Account</h3>
                            </div>
                            <div class="login__content">
                                <form role="form" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-12 col-lg-12  form-group--block">
                                            <label>Full Name <span>*</span></label>
                                            <input class="form-control" type="text" {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" placeholder="{{ __('Name') }}" name="name" required="">
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                        </div>


                                        <div class="col-12 col-lg-6 form-group--block">
                                            <label>Password: <span>*</span></label>

                                            <input class="form-control" type="password" {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" name="password" required="">
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        <div class="col-12 col-lg-6 form-group--block">
                                            <label>Confirm Password: <span>*</span></label>
                                            <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required="">
                                        </div>

                                        @if (\App\Addon::where('unique_identifier', 'otp_system')->first() != null && \App\Addon::where('unique_identifier', 'otp_system')->first()->activated)
                                        <div class="col-12 col-lg-12  form-group--block">
                                            <label>Phone: <span>*</span></label>
                                            <input class="form-control"type="tel" id="phone-code" {{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="{{ __('Mobile Number') }}" name="phone">
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        </div>
                                        <input type="hidden" name="country_code" value="">

                                        <div class="col-12 col-lg-12  form-group--block">
                                            <label>Email: <span>*</span></label>

                                            <input class="form-control" type="email" {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email">
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-link p-0" type="button" onclick="toggleEmailPhone(this)">Use Email Instead</button>
                                        </div>

                                        @else
                                        <div class="col-12 col-lg-12  form-group--block">
                                            <label>Email: <span>*</span></label>

                                            <input class="form-control" type="email" {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ __('Email') }}" name="email">
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                        @endif

                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                                                @if ($errors->has('g-recaptcha-response'))
                                                    <span class="invalid-feedback" style="display:block">
                                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-12  form-group--block">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="email0" value="">
                                                <label for="email0">I want to receive exclusive offers and promotions from <strong>Naulobazar.</strong></label>
                                            </div>
                                        </div>

                                    </div>
                                     <button class="btn btn-login" type="submit">Register</button>

                                     @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1 || \App\BusinessSetting::where('type', 'twitter_login')->first()->value == 1)


                                     <div class="login__conect">
                                        <hr>
                                        <p>Or Sign Up with</p>
                                        <hr>
                                    </div>


                                    <div class="row">
                                        @if (\App\BusinessSetting::where('type', 'facebook_login')->first()->value == 1)
                                        <div class="col-12 col-lg-6">
                                            <a href="{{ route('social.login', ['provider' => 'facebook']) }}">
                                            <button class="btn btn-social btn-facebook" type="button">
                                                <i class="fa fa-facebook-f"></i>Facebook</button>
                                            </div></a>
                                            @endif

                                            @if(\App\BusinessSetting::where('type', 'google_login')->first()->value == 1)

                                            <div class="col-12 col-lg-6">
                                                <a href="{{ route('social.login', ['provider' => 'google']) }}">
                                            <button   type="button" class="btn btn-social btn-google">
                                                <i class="fa fa-google-plus"></i>Google</button>
                                        </div> </a>@endif


                                        <div class="clearfix"></div>
                                        @endif
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="login_big_link">
                        <h3 class="login__title">Already Have an Account?</h3>
                        <h3>
                            <a href="{{ route('user.login') }}"><i class="fa fa-hand-o-right"></i> Login Here.</a>
                        </h3>
                    </div>

                    <h3 class="login__title">Advantages Of Becoming A Member</h3>
                    <p class="login__description"> <b>Naulobazar Buyer Protection </b>has you covered from click to
                        delivery.<br>Sign up or sign in and you will be able to: </p>
                    <div class="login__orther">
                        <p> <i class="icon-truck"></i>Easily Track Orders, Hassle free Returns</p>
                        <p> <i class="icon-alarm2"></i>Get Relevant Alerts and Recommendation</p>
                        <p><i class="icon-star"></i>Wishlist, Reviews, Ratings and more.</p>
                    </div>
                    <div class="login__vourcher">
                        <div class="vourcher-money"><span class="unit">Rs</span><span
                                class="number">25</span></div>
                        <div class="vourcher-content">
                            <h4 class="vourcher-title">GIFT VOURCHER FOR FISRT PURCHASE</h4>
                            <p>We give Rs25 as a small gift for your first purchase.<br>Welcome to Naulobazar Market!</p>
                        </div>
                    </div>

                    <div class="help-area">
                        <h3> Need Help? </h3>
                        <p>
                            If you are facing any problem and have any query then feel free to ask.
                        </p>
                        <h4 class="phone-number">
                            <i class="icon-phone">&nbsp;</i>
                            +977-9810099062
                        </h4>
                        <h4 class="email-address">
                            <i class="icon-envelope">&nbsp;</i>
                            support@onestorenepal.com.np
                        </h4>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            </div>
        </section>


    </main>




@endsection

@section('script')
    <script type="text/javascript">
        var isPhoneShown = true;

        var input = document.querySelector("#phone-code");
        var iti = intlTelInput(input, {
            separateDialCode: true,
            preferredCountries: []
        });

        var countryCode = iti.getSelectedCountryData();


        input.addEventListener("countrychange", function() {
            var country = iti.getSelectedCountryData();
            $('input[name=country_code]').val(country.dialCode);
        });

        $(document).ready(function() {
            $('.email-form-group').hide();
        });

        function autoFillSeller() {
            $('#email').val('seller@example.com');
            $('#password').val('123456');
        }

        function autoFillCustomer() {
            $('#email').val('customer@example.com');
            $('#password').val('123456');
        }

        function toggleEmailPhone(el) {
            if (isPhoneShown) {
                $('.phone-form-group').hide();
                $('.email-form-group').show();
                isPhoneShown = false;
                $(el).html('Use Phone Instead');
            } else {
                $('.phone-form-group').show();
                $('.email-form-group').hide();
                isPhoneShown = true;
                $(el).html('Use Email Instead');
            }
        }
    </script>
@endsection
