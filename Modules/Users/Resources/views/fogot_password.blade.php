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
                <div class="q-page__header">
                    <h1 class="q-page__title">Восстановление доступа</h1>

                </div>
                <div class="q-autorization">
                    <div class="print-error-msg" style="display: none"><ul></ul></div>

                    <div id="autorization-content" class="q-tabs__content">
                        <div id="autorization-tab-1" class="q-tabs__content--item _active">
                            <div class="q-form">
                                <div class="q-form__row">
                                    <label for="autorizationEmail" class="q-form__label">Ваш email:</label>
                                    <div class="q-form__input--wrapper">
                                        <input id="autorizationEmail" type="text" placeholder="email" class="q-form__input q-form-white"/>
                                    </div>
                                    <div class="q-form__input--notice">На этот адрес будет выслано письмо с инструкцией по восстановлению доступа к сайту.</div>
                                </div>

                                <div class="q-form__row _submit">
                                    <button onclick="forgot()" class="q-button _red">Восстановить доступ</button>
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

@stop


<script>
    function forgot() {

        let url = "{{ route('password.email') }}";

        let autorizationEmail = $('#autorizationEmail').val();

        $.ajax({
            type: "POST",
            url: url,
            data: {
                _token: "{{ csrf_token() }}",
                email: autorizationEmail
            }, // serializes the form's elements.
            success: function (e) {
                // window.location.href = "/"
                alert(e.responseJSON);
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
