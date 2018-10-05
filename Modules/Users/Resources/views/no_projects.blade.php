@extends('users::layouts.master')

@section('content')

    <!-- header -->
    @include('users::layouts.header')
    <!-- end header -->

    <!-- content -->
    <div class="q-content">
        <div class="q-inner">
            <div class="q-page__header">
                <h1 class="q-page__title">Создайте новый проект</h1>
            </div>

            <form class="q-form g-no-projects">


                <div class="q-form__row">
                    <label for="themeName" class="q-form__label">Название проекта:</label>
                    <div class="q-form__input--wrapper">
                        <input id="themeName" class="q-form__input q-form-white">

                    </div>

                </div>

                <div class="q-form__row _submit">
                    <button class="q-button _red">Создать проект</button>
                    <div class="preloader _inline" style="display: none;"></div> <!----></div>
            </form>
        </div>

        <!-- end of content -->

    </div>
    <!-- end of content-wrapper -->

    </div>
    </div>

    <!-- popups -->

    <!-- end of popups -->

    </body>
@stop
