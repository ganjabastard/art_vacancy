@extends('layouts.login')
@section('content')
    <script type="text/javascript">
        jQuery(document).ready(function($)
        {
            console.log();
            // Reveal Login form
            setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);


            // Validation and Ajax action
            $("form#login").validate({
                rules: {
                    username: {
                        required: true
                    },

                    passwd: {
                        required: true
                    }
                },

                messages: {
                    username: {
                        required: 'Please enter your username.'
                    },

                    passwd: {
                        required: 'Please enter your password.'
                    }
                },

                // Form Processing via AJAX
                submitHandler: function(form)
                {
                    show_loading_bar(70); // Fill progress bar to 70% (just a given value)

                    var opts = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": "toast-top-full-width",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    $.ajax({
                        url: '{!! url('login') !!}',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            email: $(form).find('#username').val(),
                            pwd: $(form).find('#passwd').val(),
                            _token: window.Laravel.csrfToken,
                        },
                        success: function(resp)
                        {
                            console.log(resp);
                            if(resp.auth == true) {
                                window.location.href = "/dashboard";
                            } else {
                                switch(resp.auth) {
                                    case 'block':
                                        _mess = 'Ваш акаунт заблокирован.';
                                        break;
                                    case 'black':
                                        _mess = 'Ваш IP адрес заблокирован.';
                                        break;
                                    default:
                                        _mess = 'Введеные данные неправильные. Попробуйте еще.';
                                        break;
                                }
                                show_loading_bar({
                                    delay: .5,
                                    pct: 100,
                                    finish: function () {
                                            toastr.error(_mess, "Ошибка!", opts);
                                            $(form).find('#passwd').select();
                                    }
                                });
                            }

                        }
                    });

                }
            });

            // Set Form focus
            $("form#login .form-group:has(.form-control):first .form-control").focus();
        });
    </script>

    <!-- Errors container -->
    <div class="errors-container">
    </div>

    <!-- Add class "fade-in-effect" for login form effect -->
    <form method="post" role="form" id="login" class="login-form fade-in-effect">

        <div class="login-header">
            <img src="{{ url('assets/images/art-logo.png') }}" alt="" width="80" />
            <span>log in</span>
        </div>


        <div class="form-group">
            <label class="control-label" for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" autocomplete="off" />
        </div>

        <div class="form-group">
            <label class="control-label" for="passwd">Password</label>
            <input type="password" class="form-control" name="passwd" id="passwd" autocomplete="off" />
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-dark  btn-block text-left">
                <i class="fa-lock"></i>
                Log In
            </button>
        </div>
    </form>
@endsection
