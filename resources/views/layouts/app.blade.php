<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Telia Plus</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon16.png')}}">
    <link rel="manifest" href="{{asset('assets/favicon/site.webmanifest')}}">

    <!--stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>


<body class="">
    @include('layouts.header')
    <div>
        @yield('body')
    </div>

    <!--footer start-->
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="footer__info">
                            <div class="footer__info--logo">
                                <img href="/" src="{{asset('/assets/images/telia-trans.png')}}" alt="image">
                            </div>
                            <div class="footer__info--content">
                                <p class="paragraph dark">Connecting all furry baby parents with the best pet shops while granting them exclusive discounts for a furrever happier journey!
                                </p>
                                <div class="social">
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer__content-wrapper">
                            <div class="footer__list">
                                <ul>
                                    <li>Explore</li>
                                    <li><a href="#feature">Features</a></li>
                                    <li><a href="#faq">FAQs</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#preview">Preview</a></li>
                                </ul>
                            </div>
                            {{-- <div class="footer__list">--}}
                            {{-- <ul>--}}
                            {{-- <li>Help</li>--}}
                            {{-- <li><a href="#">FAQ</a></li>--}}
                            {{-- <li><a href="#">Privacy Policy</a></li>--}}
                            {{-- <li><a href="#">Support</a></li>--}}
                            {{-- <li><a href="#">Terms of Service</a></li>--}}
                            {{-- <li><a href="#">Contact</a></li>--}}
                            {{-- </ul>--}}
                            {{-- </div>--}}
                            {{-- <div class="download-buttons">--}}
                            {{-- <h5>Download</h5>--}}
                            {{-- <a href="#" class="google-play">--}}
                            {{-- <i class="fab fa-google-play"></i>--}}
                            {{-- <div class="button-content">--}}
                            {{-- <h6>GET IT ON <span>Google Play</span></h6>--}}
                            {{-- </div>--}}
                            {{-- </a>--}}
                            {{-- <a href="#" class="apple-store">--}}
                            {{-- <i class="fab fa-apple"></i>--}}
                            {{-- <div class="button-content">--}}
                            {{-- <h6>GET IT ON <span>Apple Store</span></h6>--}}
                            {{-- </div>--}}
                            {{-- </a>--}}
                            {{-- </div>--}}
                        </div>
                    </div>
                </div>
                {{-- <div class="row">--}}
                {{-- <div class="footer__copy">--}}
                {{-- <h6>&copy; GFXPARTNER</h6>--}}
                {{-- </div>--}}
                {{-- </div>--}}
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <style>
            #vendorForm.contact_from {
                background: white;
            }

            .modal-header .close {
                height: 51px;
                background: #049899 !important;
                width: 45px;
            }

            .modal-header *,
            .modal-header *::before,
            .modal-header *::after,
            .modal-header .questions .card .card-header h5::before {
                color: white !important;
                font-size: 20px !important;
            }

            h2.modal-title {
                color: #049899 !important;
            }

            #vendorForm.contact_from .input_btn input {
                background: #049899;
                color: white !important;
                width: 49%;
                border: 1px #049899 solid !important;
                height: 3rem;
                line-height: 3rem;

            }

            #vendorForm.contact_from .btn-secondary {
                width: 49%;
                height: 3rem;
                background: white;
                border: 0;
                color: #049899;
                font-size: 1.2rem;
                font-weight: 500;
                cursor: pointer;
                outline: none;
                border: 1px #049899 solid;
            }

            #vendorForm h4 {
                color: black !important;
                opacity: 0.7;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
                margin-bottom: 15px;
                margin-top: 15px;
            }


            .error {
                display: inline-block;
    flex-direction: row;
    align-items: flex-start;
    padding: 9px 16px;
    padding-left: 2rem;
    width: 100%;
    border: 1px solid #FFCCC7;
    box-sizing: border-box;
    font-size: 1.2rem;
    line-height: 1rem;

    background-color: #FFF1F0;
            }
            .error p{
                color: red !important;
            }
  .success{
    display: inline-block;
    flex-direction: row;
    align-items: flex-start;
    padding: 9px 16px;
    padding-left: 2rem;
    width: 100%;
    font-size: 1.2rem;
    line-height: 1rem;
    /* Dust Red / 1 */


    /* Dust Red / 2 */

    border: 1px solid #B7EB8F;
    box-sizing: border-box;
    margin-bottom: 1rem;

    background:url('../images/success.png') no-repeat 0.5rem 0.9rem;
    background-color: #F6FFED;
    }
.btn_form{
    cursor: pointer !important;
}
    .success p{
        color:green;
    }
        </style>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Come a vendor</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact_from" id="vendorForm">

                        <div class="tab tab-active" data-id="tab1">
                            <form action="{{url('contact-us/submit')}}" id="vendor_form" method="post" class="form-validator" enctype="multipart/form-data">
                            @csrf

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Trade License Copy</label>
                                            <input type="file" name="trade_license">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Brand Logo</label>
                                            <input type="file" name="brand_logo">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_row">
                                            <label>VAT Certificate (TRN Number)</label>
                                            <input type="text" name="trn_number">
                                        </div>
                                    </div>
                                </div>
                                <h4>Bank account details</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Bank Name</label>
                                            <input type="text" name="bank_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Account Name</label>
                                            <input type="text" name="acct_name">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Account Number</label>
                                            <input type="text" name="acct_number">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Iban</label>
                                            <input type="text" name="iban">
                                        </div>
                                    </div>
                                </div>

                                <h4>Contact Details</h4>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Fullname</label>
                                            <input type="text" name="full_name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Email</label>
                                            <input type="text" name="email" placeholder="email@example.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="input_row">
                                            <label>Location</label>
                                            <input type="text" name="location">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="input_row">
                                            <label>Operational Hours</label>
                                            <input type="text" name="operational_hours" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-5 col-sm-12">
                                        <div class="messages"></div>
                                        <div class="input_btn">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" value="Send Message" name="" class="btn_form">
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
    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper-1.16.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script>
        $(window).on('load', function() {
            $("body").addClass("loaded");
        });
    </script>
    <script src="{{asset('assets/js/forms.js')}}"></script>
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/ytdefer.min.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>

    <script>
        var $ = jQuery.noConflict();
        var loading_text = 'Loading...';
        $(document).ready(function() {

            $('.form-validator').each(function() {
                var formObj = $(this);
                var formBtn = formObj.find('.btn_form');
                formBtn.click(function(event) {
                    event.preventDefault();
                    //if(formObj.attr('id') == 'careers-jobform' || formObj.attr('id') == 'contactus-form') {
                    //ajaxSubmit_multipart(formObj);
                    ///}
                    //else {
                    ajaxSubmit(formObj);
                    //}
                });
            });
        });

        function ajaxSubmit(formObj) {

            var formID = formObj.attr('id');
            var formAction = formObj.attr('action');
            var formMethod = formObj.attr('method');
            var updateOnly = formObj.attr('updateOnly');
            //var formData = formObj.serialize();

            var formBtn = formObj.find('.btn_form');
            var formBtn_text = formbtn_text = formBtn.html();

            // var token="";
            // if($('#user_info').length>0){ var token=getCookie('user_token');}

            var token = localStorage.getItem('user_token');


            formBtn.html(loading_text);
            formBtn.attr('disabled', 'disabled');
            formObj.find('.messages').html('');
            //   grecaptcha.execute(recaptcha_sitekey, {action:'validate_captcha'}).then(function(token) {
            formObj.find('input[name="g-recaptcha-response"]').remove();
            // formObj.append('<input type="hidden" name="g-recaptcha-response" value="'+token+'" />');
            //var formData = formObj.serialize();
            var formData = new FormData(formObj[0]);


            $.ajax({
                url: formAction,
                type: formMethod,
                headers: {
                    "Authorization": "Bearer " + token
                },
                data: formData,
                success: function(response) {
                    formBtn.html(formbtn_text);


                    if (response.result == true) {

                        if (response.msg) {
                            //alert_float('success',response.msg);
                            formObj.find('.messages').html('<div class="success">' + response.msg + '</div>');
                            $('html, body').animate({
                                scrollTop: formObj.find('.messages').offset().top - 120
                            }, 500);
                        }



                        if (response.message) {
                            //alert_float('success',response.message);
                            formObj.find('.messages').html('<div class="success">' + response.message + '</div>');
                            // $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                        }



                        if (response.token) {
                            if (formID == "login_form") {
                                remember_me();
                            }
                            localStorage.setItem('user_token', response.token)
                            user = JSON.stringify(response.user);
                            if ($('#redirect_link').length > 0) {
                                window.location = $('#redirect_link').val();
                            }
                            //loadAllUserCarts(formObj,response);
                            //doSuccessFormResponseAction(formObj,response);
                        }

                        if (formID == "ProfileForm") {
                            setTimeout(function() {
                                $('.profile_cancel').click();
                            }, 1000);
                        }

                        if (formID == "AddressForm") {

                            if (formObj.find('input[name="id"]').val() == 0) {
                                if ($('#checkout_form').length > 0) {
                                    CheckoutBindObj.addAddress(response.data);

                                } else {
                                    UserBindObj.addAddress(response.data);
                                }
                            }
                            setTimeout(function() {
                                $('.profile_cancel').click();
                            }, 1000);
                        }

                        if (formID == "review_form") {
                            ProductBindObj.addReview(response.data);
                        }

                        if (response.redirect_link)
                            window.location = response.redirect_link;

                        if (response.cart_box)
                            $('#load-header-cart').html(response.cart_box);
                        //else
                        /*formObj.find( 'input[type="email"], input[type="text"], input[type="password"], textarea, select' ).each(function(){
			           $(this).val('');
			           $(this).val('').change();
			      	});*/
                        if (!updateOnly) {
                            document.getElementById(formID).reset();
                        }
                    } else {

                        if (response.errors) {
                            $.each(response.errors, function(i, val) {
                                var o = formObj.find('input[name="' + i + '"], textarea[name="' + i + '"], select[name="' + i + '"]');
                                if (o) {
                                    o = o.parent('div');
                                    o.addClass('error').append('<div class="form-error">' + val + '</div>');
                                }
                            });
                        }
                        if (response.msg) {
                            formObj.find('.messages').html('<div class="error">' + response.msg + '</div>');
                            //if(is_mobile) {
                            $('html, body').animate({
                                scrollTop: formObj.find('.messages').offset().top - 120
                            }, 500);
                            //}
                        }

                        if (response.message) {
                            formObj.find('.messages').html('<div class="error">' + response.message + '</div>');
                            //if(is_mobile) {
                            $('html, body').animate({
                                scrollTop: formObj.find('.messages').offset().top - 120
                            }, 500);
                            //}
                        }
                    }


                    if (formID == 'checkout_form') {
                        formBtn.html('Redirect...');
                        window.location = $('#baseurl').val() + '/invoice?checkout=1&token=' + response.OrderToken;
                        localStorage.removeItem('cart');
                    } else {
                        formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                    }
                },
                fail: function(response) {
                    formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                    formObj.find('.messages').html('<div class="error">ERROR</div>');
                },
                error: function(response) {

                    formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                    var arr = response.responseJSON.message.split(',');
                    var msg = ''
                    for (var i = 0; i < arr.length; i++) {
                        msg = msg + '<p>' + arr[i] + '</p>';
                    }
                    formObj.find('.messages').html('<div class="error">' + msg + '</div>');
                },
                contentType: false,
                processData: false
                // error: function(response) {
                //     formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                //     formObj.find('.messages').html('<div class="error">ERROR</div>');
                // },
            });
            //});
        }



        function doSuccessFormResponseAction(formObj, response) {
            if (formObj.find('#redirect_link').length > 0) {
                window.location = formObj.find('#redirect_link').val();
            }

        }
    </script>

</body>

</html>
<style>
    .social ul li a {
        background-color: #dddd3f !important;
    }
</style>
