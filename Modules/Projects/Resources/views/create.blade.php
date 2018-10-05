@extends('users::layouts.master')

@section('content')
    <body class="home-page">
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
                        <h1 class="q-page__title">Создайте новый проект</h1>
                    </div>

                    {!! Form::open(['method'=>'POST', 'route' => 'projects.store'], ['class' => 'q-form g-no-projects']) !!}
                    <div class="q-form__row">
                        <label for="themeName" class="q-form__label">Название проекта:</label>
                        <div class="q-form__input--wrapper">
                            {!! Form::text('name', 'Name', ['class' => 'q-form__input q-form-white']) !!}
                        </div>
                    </div>
                    <div class="q-form__row _submit">
                        {!! Form::button('Создать проект', ['type' => 'submit', 'class' => 'q-button _red']) !!}
                    </div>
                {!! Form::close() !!}
                <!-- end of content -->

                </div>
                <!-- end of content-wrapper -->

            </div>
        </div>
    </div>

    <!-- popups -->

    <!-- end of popups -->

    </body>
@stop
