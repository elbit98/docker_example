@extends('users::layouts.master')

@section('content')
    <body>
    <div class="q-wrapper">

        <!-- content-wrapper -->
        <div class="q-content-wrapper">

        <!-- header -->
        @include('users::layouts.header')
        <!-- end header -->

            <!-- content -->
            <div class="q-content">
                <div class="q-inner">
                    <div class="q-page__header _border-bottom">

                        <div class="q-autorization__links">
                            <span class="q-autorization__links-item _active">Хочу войти на сайт</span>
                            <a href="#" class="q-autorization__links-item">Хочу зарегистрироваться</a>
                        </div>
                    </div>
                    <div class="q-autorization">

                        <div class="print-error-msg" style="display: none"><ul></ul></div>

                        <div id="autorization-content" class="q-tabs__content">
                            <div id="autorization-tab-1" class="q-tabs__content--item _active">
                                <div class="q-form">
                                    <div class="q-form__row _not-valid">
                                        <label for="autorizationEmail" class="q-form__label">Ваш email:</label>
                                        <div class="q-form__input--wrapper">
                                            <input id="autorizationEmail" type="text" value="dedede" placeholder="" class="q-form__input q-form-white"/>


                                        </div>

                                    </div>
                                    <div class="q-form__row">
                                        <label for="autorizationPassword" class="q-form__label _with-link">Ваш пароль:</label>
                                        <span class="q-form__label-link">
                                                <span class="q-form__label-link--text"><a href="{{ route('fogot-password') }}">Забыли пароль?</a></span>
                                            </span>
                                        <div class="q-form__input--wrapper">
                                            <input id="autorizationPassword" type="password" value="••••••••••••••" placeholder="" class="q-form__input q-form-white"/>

                                        </div>

                                    </div>
                                    <div class="q-form__row _submit">
                                        <button onclick="login()" class="q-button _red">Войти на сайт</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end of content -->

        </div>
        <!-- end of content-wrapper -->

    </div>

    <!-- popups -->


    <!-- end of popups -->

    </body>
@endsection

<script>
    function login() {

        let url = 'login_form';

        let autorizationEmail = $('#autorizationEmail').val();
        let autorizationPassword = $('#autorizationPassword').val();

        $.ajax({
            type: "POST",
            url: url,
            data: {
                _token: "{{ csrf_token() }}",
                email: autorizationEmail,
                password: autorizationPassword,
            }, // serializes the form's elements.
            success: function () {
                window.location.href = "/home"
            },
            error: function (data) {
                printErrorMsg(data.responseJSON.errors);
            }
        });


        function printErrorMsg(msg) {

            let errorBlock = $(".print-error-msg");

            errorBlock.find("ul").html('');
            errorBlock.css('display', 'block');
            $.each(msg, function (key, value) {
                errorBlock.find("ul").append('<li>' + value + '</li>');
            });
        }

    }

</script>


