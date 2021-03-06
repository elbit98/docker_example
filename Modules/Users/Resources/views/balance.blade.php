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
                    <h1 class="q-page__title">Пополнение баланса</h1>
                </div>

                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @elseif(Session::has('error'))
                    <div class="alert alert-success">
                        {{ Session::get('error') }}
                    </div>
                @endif

                    {!! Form::open(['method'=>'POST', 'route' => 'payment'], ['class' => 'q-form g-no-projects']) !!}

                    <div class="q-form__row">
                        {!! Form::text('summ', '0', ['class' => 'q-form__input q-form-white']) !!}
                    </div>

                    <div class="q-form__row _submit">
                        {!! Form::button('Пополнить баланс', ['type' => 'submit', 'class' => 'q-button _red']) !!}
                    </div>

                {!! Form::close() !!}

            </div>
            <!-- end of content -->

        </div>
        <!-- end of content-wrapper -->

    </div>


</div>

<!-- popups -->

<!-- end of popups -->

</body>

@endsection