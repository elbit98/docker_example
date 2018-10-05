@extends('users::layouts.master')

@section('content')
    <body>
    <div class="q-wrapper">

        <!-- content-wrapper -->
        <div class="q-content-wrapper">

            <!-- header -->
        @include('users::layouts.header')
        <!-- end header -->

            <style>
                #UserPhoto {
                    width: 200px;
                    height: 200px;
                    background-size: contain;
                    background-position: center;
                    background-repeat: no-repeat;
                    margin: 0px 0px 20px;
                    cursor: pointer;
                }

                input[type="file"]#UploadPhoto {
                    display: none;
                }
            </style>

            <!-- content -->
            <div class="q-content">
                <div class="q-inner">
                    <div class="q-page__header _single-title">
                        <h1 class="q-page__title">Мой профиль</h1>
                        <div class="q-page__header--right-part-profile">

                        </div>
                    </div>
                    <div class="q-profile">
                        <div class="q-profile__form">
                            <div class="q-profile__col _av-col">
                                <div class="q-user__avatar-profile _text-center">


                                    <div class="q-user__avatar _large _edit q-user-white-border">
                                        <img id="UserPhoto" src="{{ asset($user->avatar) }}" alt="" class="q-user__avatar-img">

                                        <input type="file" id="UploadPhoto" class="form-control">
                                        <input type="hidden" name="Photo" class="form-control">

                                        <span class="q-user__avatar--edit-btn"></span>
                                        <span class="q-user__avatar--edit-text">Изменить <br/> аватар</span>
                                    </div>


                                    {{--<div class="form-group">--}}
                                    {{--<div id="UserPhoto" style="background-image: url(@if(Auth::user()->photo != NULL){{url(Auth::user()->photo)}}@else{{url('/img/no-avatar.png')}}@endif);">--}}
                                    {{--</div>--}}
                                    {{--<input type="file" id="UploadPhoto" class="form-control">--}}
                                    {{--<input type="hidden" name="Photo" class="form-control">--}}
                                    {{--</div>--}}

                                </div>
                                <div class="q-profile__info--container">
                                    <div class="q-profile__info">
                                        <div class="q-profile__info--text">
                                            <p>Доступ к Вашим проектам для 1000 участников (10 мест свободно) активен до
                                                12.12.2012</p>

                                        </div>
                                        <a href="#" class="_like-dashed-link js-show-q-subscriptions-popup">Продлить или
                                            добавить участников</a>
                                    </div>

                                </div>
                            </div>
                            <div class="q-profile__col _left-col">
                                <div class="q-form__row">
                                    <label for="profileEmail" class="q-form__label _with-link">ФИО на сайте:</label>
                                    <div class="q-form__input--wrapper">
                                        <input id="profileLogin" type="text" value="{{ $user->full_name }}"
                                               placeholder="" class="q-form__input q-form-white"/>


                                    </div>

                                </div>

                                <div class="q-form__row">
                                    <label for="profileEmail" class="q-form__label _with-link">E-mail:</label>
                                    <span class="q-form__label-link">
                                            <span class="q-form__label-link--text js-show-q-edit-email">Изменить</span>
                                        </span>
                                    <div class="q-form__input--wrapper">
                                        <input id="profileEmail" type="text" value="{{ $user->email }}" placeholder=""
                                               disabled="disabled" class="q-form__input q-form-white"/>


                                    </div>

                                </div>
                            </div>
                            <div class="q-profile__col _right-col">

                                <div class="q-form__row">
                                    <label for="profilePassword" class="q-form__label">Новый пароль:</label>
                                    <div class="q-form__input--wrapper">
                                        <input id="profilePassword" type="password" placeholder="Новый пароль"
                                               class="q-form__input q-form-white"/>

                                        <i class="q-icon q-icon-success"></i>
                                    </div>
                                </div>
                                <div class="q-form__row">
                                    <label for="profilePasswordRetry" class="q-form__label">Новый пароль
                                        (повторно):</label>
                                    <div class="q-form__input--wrapper">
                                        <input id="profilePasswordRetry" type="password" placeholder="Повтор пароля"
                                               class="q-form__input q-form-white"/>

                                        <i class="q-icon q-icon-success"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="q-profile__footer">
                            <div class="q-profile__footer--buttons">
                                <button onclick="updateProfile()" class="q-button _red">Сохранить изменения</button>
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


    <!-- edit-email-popup -->
    <div class="q-popup _sm js-q-edit-email">
        <div class="q-popup__holder js-q-popup-holder">
            <form class="q-form">
                <div class="q-form__row _inline-send-message-btn">
                    <label for="newEmail" class="q-form__label">Введите новый e-mail:</label>
                    <div class="q-form__input--wrapper">
                        <input id="newEmail" type="text" value="" placeholder="" class="q-form__input"/>

                    </div>
                    <button class="q-button">Отправить письмо</button>
                </div>
                <div class="q-form__row">
                    <p>На вашу старую почту будет отправлено письмо для подтверждения.</p>
                </div>

            </form>
            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of edit-email-popup -->

    <!-- subscriptions-popup -->
    <div class="q-popup js-q-subscriptions-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Оплата подписки</h3>
            <form class="q-form">

                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Я хочу:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Продлить подписку</option>
                            <option>Добавить участников</option>
                        </select>
                    </div>

                </div>
                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">У Вас 1000 мест, из них 10 свободно:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities"
                                class="q-form__select js-q-select-multiple">
                            <option value="" selected="selected">Свободное место</option>
                            <option value="">Свободное место</option>
                            <option value="">Свободное место</option>
                            <option value="">Свободное место</option>
                            <option value="">Антон Петров</option>
                            <option value="">Петя Сидоров</option>
                            <option value="">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>
                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Период оплаты:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>За 1 месяц</option>
                            <option>За 3 месяца</option>
                            <option>За 6 месяцев</option>
                        </select>
                    </div>

                </div>


                <div class="q-form__row _text-and-link g-margin-top-for-element">
                    <a href="#" class="_like-dashed-link js-toggle-actions-cities">У меня есть код на скидку</a>
                    <p>Итого: 997 участников, за 3 месяца - 5000.00 руб.</p>
                </div>
                <div class="q-form__row _hidden-cities js-actions-cities">

                    <div class="q-form__row _inline-send-message-btn">
                        <label for="newEmail" class="q-form__label">Код на скидку:</label>
                        <div class="q-form__input--wrapper">
                            <input id="newEmail" type="text" value="" placeholder="" class="q-form__input"/>

                        </div>
                        <button class="q-button">Проверить</button>
                    </div>


                </div>
                <div class="q-form__row _submit">
                    <button class="q-button _red">Оплатить</button>
                </div>
            </form>
            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of subscriptions-popup -->


    <!-- end of popups -->

    </body>

@endsection


<script>
    {{--function updateProfile() {--}}

        {{--let url = 'updateProfile';--}}

        {{--let profilePassword = $('#profilePassword').val();--}}
        {{--let profilePasswordRetry = $('#profilePasswordRetry').val();--}}

        {{--if (profilePassword && profilePasswordRetry && profilePassword === profilePasswordRetry) {--}}

            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: url,--}}
                {{--data: {--}}
                    {{--_token: "{{ csrf_token() }}",--}}
                    {{--type_edit: 'password',--}}
                    {{--password: profilePassword,--}}
                    {{--password_confirmation: profilePasswordRetry,--}}
                {{--},--}}
                {{--success: function () {--}}
                    {{--alert('Good reset password');--}}
                {{--},--}}
                {{--error: function (data) {--}}
                    {{--printErrorMsg(data.responseJSON.errors);--}}
                {{--}--}}
            {{--});--}}

        {{--}--}}

        {{--let profileLogin = $('#profileLogin').val();--}}

        {{--if (profileLogin) {--}}

            {{--$.ajax({--}}
                {{--type: "POST",--}}
                {{--url: url,--}}
                {{--data: {--}}
                    {{--_token: "{{ csrf_token() }}",--}}
                    {{--type_edit: 'full_name',--}}
                    {{--full_name: profileLogin--}}
                {{--},--}}
                {{--success: function () {--}}
                    {{--alert('Good reset profileLogin');--}}
                {{--},--}}
                {{--error: function (data) {--}}
                    {{--printErrorMsg(data.responseJSON.errors);--}}
                {{--}--}}
            {{--});--}}

        {{--}--}}


    {{--}--}}


        $('#UserPhoto').on('click', function() {
            if (!load)
                $('#UploadPhoto').click();
        });

        var load = false;
        $('#UploadPhoto').on('change', function(e) {
            var formData = new FormData();

            $.each(this.files, function(key, value){
                formData.append('file[]', value);
            });

            $.ajax({
                type: 'POST',
                url: '/upload',
                processData: false,
                contentType: false,
                data: formData,
                beforeSend: function() {
                    $('#ProfileForm button[type="submit"]').prop('disabled', true);
                    load = true;
                },
                complete: function() {
                    $('#ProfileForm button[type="submit"]').prop('disabled', false);
                    load = false;
                },
                success: function(data){
                    if (data.status == 'success') {
                        $('input[type="hidden"][name="Photo"]').val(data.uploads[0]);
                        $('#UserPhoto').css('background-image', 'url('+data.uploads[0]+')');
                    } else {
                        swal('Error', 'The image must be a file of type: jpeg, jpg, png, gif.', 'error');
                    }
                }
            });
        });


</script>
