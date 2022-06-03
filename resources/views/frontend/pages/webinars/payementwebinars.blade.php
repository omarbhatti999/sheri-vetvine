@extends('frontend.master')
@section('content')
    <section>
        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column" id="main">
            <div class="payment-summery">
                <div class="container">
                    <section class="become_member_area">
                        <div class="container">
                            <h2>
                                <span>Payment Method</span>
                            </h2>
                            <div class="col-sm-12">
                                <a class="btn btn-primary float-right" style="background-color:#f27222"
                                    href="{{ route('upcoming_webinars') }}">
                                    Go Back
                                </a>
                            </div>
                            <!-- <p class="membership-text">Please review the following details for this transaction.</p> -->
                        </div>
                    </section>
                    <section>
                        <div class="payment-summery-area">
                            <div class="shoping-cart-details">
                                <div class="payment-method-form">
                                    <div class="billing-info">
                                        <div class="billing-description">
                                            <div class="title">
                                                <p>Billing Information</p>
                                            </div>
                                            <div class="description">
                                                <p>Enter your payment details below.</p>
                                            </div>
                                        </div>
                                        <div class="visa-card-detail">
                                            <div class="title">
                                                <P>Cards Accepted</P>
                                            </div>
                                            <div class="accepted-cards d-flex">
                                                <img src="{{ asset('frontend/img/card-1.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-2.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-3.png') }}" alt="">
                                                <img src="{{ asset('frontend/img/card-4.png') }}" alt="">

                                            </div>
                                        </div>
                                        <div class="credit-card-details">
                                            <div class="card-title">
                                                <p>Credit Card * </p>
                                            </div>
                                            <form action="{{ route('payementwebinars') }}" method="POST"
                                                class="require-validation" data-cc-on-file="false"
                                                data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                                               
                                                @csrf
                                                <input type="hidden" value="{{ $event_price }}" name="event_price">
                                                <input type="hidden" value="{{ $event_id }}" name="event_id">
                                                <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                                                <div class="num-feild required">
                                                    <label for="num">Credit Card Number</label>
                                                    <input autocomplete='off' type="text" name="card_number" id="num"  class='form-control card-number'
                                                        size='20'>
                                                </div>
                                                <div class="name-feild">
                                                    <div class="fname">
                                                        <label for="cvc">CVC</label>
                                                        <input autocomplete='off' name="cvc_number" placeholder='ex. 311'
                                                            size='4' type='text' id="cvc" class='form-control card-cvc'>
                                                    </div>
                                                </div>
                                                <div class="expiry-feild required">
                                                    <div class="month">
                                                        <label for="ex-month">Expiration Month</label>
                                                        <input type="text" name="exp_month" placeholder='MM' size='2'
                                                            id="ex-month"  class='form-control card-expiry-month'>
                                                    </div>
                                                    <div class="year">
                                                        <label for="year">Expiration Year</label>
                                                        <input type="text" name="exp_year" class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                            id="year">
                                                    </div>
                                                </div>
                                                <div class="billing-btn">
                                                    <button type="submit" value="{{ $event_price }}">Pay {{ $event_price }} $</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </main>
        <!-- === /main === -->
    </section>
@endsection
@section('scripts')

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>



<script type="text/javascript">

$(function() {

    var $form         = $(".require-validation");

  $('form.require-validation').bind('submit', function(e) {

    var $form         = $(".require-validation"),

        inputSelector = ['input[type=email]', 'input[type=password]',

                         'input[type=text]', 'input[type=file]',

                         'textarea'].join(', '),

        $inputs       = $form.find('.required').find(inputSelector),

        $errorMessage = $form.find('div.error'),

        valid         = true;

        $errorMessage.addClass('hide');



        $('.has-error').removeClass('has-error');

    $inputs.each(function(i, el) {

      var $input = $(el);

      if ($input.val() === '') {

        $input.parent().addClass('has-error');

        $errorMessage.removeClass('hide');

        e.preventDefault();

      }

    });



    if (!$form.data('cc-on-file')) {

      e.preventDefault();

      Stripe.setPublishableKey($form.data('stripe-publishable-key'));

      Stripe.createToken({

        number: $('.card-number').val(),

        cvc: $('.card-cvc').val(),

        exp_month: $('.card-expiry-month').val(),

        exp_year: $('.card-expiry-year').val()

      }, stripeResponseHandler);

    }



  });



  function stripeResponseHandler(status, response) {

        if (response.error) {
            toastr.error(response.error.message)
            $('.error')

                .removeClass('hide')

                .find('.alert')

                .text(response.error.message);

        } else {

            // token contains id, last4, and card type
            // alert(response);
            var token = response['id'];

            // insert the token into the form so it gets submitted to the server

            $form.find('input[type=text]').empty();

            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");

            $form.get(0).submit();

        }

    }



});

</script>

@endsection