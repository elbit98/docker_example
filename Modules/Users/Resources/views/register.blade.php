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
                            <a href="#" class="q-autorization__links-item">Хочу войти на сайт</a>
                            <span class="q-autorization__links-item _active">Хочу зарегистрироваться
                                </span>
                        </div>
                    </div>
                    <div class="q-registration">

                        <div class="print-error-msg" style="display: none"><ul></ul></div>

                        <div id="registration-content" class="q-tabs__content">
                            <div id="registration-tab-1" class="q-tabs__content--item _active">
                                <div class="q-registration__form">
                                    <div class="q-registration__col">
                                        <div class="q-form__row">
                                            <label for="registrationFIO" class="q-form__label">ФИО:</label>
                                            <div class="q-form__input--wrapper">
                                                <input id="registrationFIO" type="text" value="Iv" placeholder=""
                                                       class="q-form__input q-form-white"/>
                                            </div>
                                            <div class="q-form__input--notice">Это имя будут видеть коллеги</div>
                                        </div>
                                        <div class="q-form__row">
                                            <label for="registrationEmail" class="q-form__label">E-mail:</label>
                                            <div class="q-form__input--wrapper">
                                                <input id="registrationEmail" type="text" value="stepan@ivanoff.ru"
                                                       placeholder="" class="q-form__input q-form-white"/>

                                            </div>
                                            <div class="q-form__input--notice">Ваша электронная почта.</div>
                                        </div>

                                    </div>

                                    <div class="q-registration__col">
                                        <div class="q-form__row">
                                            <label for="registrationPassword" class="q-form__label">Пароль:</label>
                                            <div class="q-form__input--wrapper">
                                                <input id="registrationPassword" type="password"
                                                       placeholder="••••••••••••••" class="q-form__input q-form-white"/>

                                                <i class="q-icon q-icon-success"></i>
                                            </div>
                                            <div class="q-form__input--notice">Ваш пароль.</div>
                                        </div>
                                        <div class="q-form__row">
                                            <label for="registrationPasswordRetry" class="q-form__label">Пароль
                                                (повторно):</label>
                                            <div class="q-form__input--wrapper">
                                                <input id="registrationPasswordRetry" type="password"
                                                        placeholder="••••••••••••••"
                                                       class="q-form__input q-form-white"/>

                                                <i class="q-icon q-icon-success"></i>
                                            </div>
                                            <div class="q-form__input--notice">Ваш пароль еще раз.</div>
                                        </div>


                                    </div>

                                </div>

                                <div class="q-registration__footer">
                                    <div class="q-registration__footer--buttons">
                                        <button onclick="register()" class="q-button _red">Зарегистрироваться</button>
                                        <div class="q-checkbox__container">
                                            <div class="q-checkbox">
                                                <input type="checkbox" id="registrationRules" class="q-checkbox__input">
                                                <label for="registrationRules" class="q-checkbox__label">Я согласен
                                                    (согласна) с <a href="#">Пользовательским Соглашением</a></label>
                                            </div>
                                        </div>
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
    function register() {

        let url = 'register_form';

        let registrationFIO = $('#registrationFIO').val();
        let registrationEmail = $('#registrationEmail').val();
        let registrationPassword = $('#registrationPassword').val();
        let registrationPasswordRetry = $('#registrationPasswordRetry').val();

        // alert(registrationFIO);

        $.ajax({
            type: "POST",
            url: url,
            data: {
                _token: "{{ csrf_token() }}",
                full_name: registrationFIO,
                email: registrationEmail,
                password: registrationPassword,
                password_confirmation: registrationPasswordRetry
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

