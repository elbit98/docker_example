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
                    <div class="q-page__header _single-title">
                        <h1 class="q-page__title">Мои проекты</h1>
                        <div class="q-buttons__submit _hide-992">
                            <a href="{{ url('projects/create') }}" class="q-button _red">Создать проект</a>
                        </div>

                    </div>
                    <div class="q-my-actions">
                        <table class="q-simple-table _tm q-actions-table">
                            <thead>
                            <tr>
                                <th>Проект</th>
                                <th>Задачи</th>
                                <th>Готовность</th>
                                <th>Создан</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td class="table-projects-1 _title-col">
                                        <a id="linkZp" class="q-news__info--title" href="{{ route('projects.show', $project) }}">{{ $project->name }}</a>
                                    </td>
                                    <td class="table-projects-3">
                                        <p class="_gray-text">Всего задач - 155, Выполнено - 54</p>
                                    </td>
                                    <td class="table-projects-3">
                                        <p class="_gray-text">67%</p>
                                    </td>
                                    <td class="table-projects-3">
                                        <p class="_gray-text">{{ $project->created_at }}</p>
                                    </td>
                                    <td>
                                        <div class="q-buttons__list">
                                                <span id="{{ $project->id }}" onclick="editClick(this.id, $('#linkZp').text())" class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Изменить
                                                    <i class="q-icon q-icon-change"></i>
                                                </span>

                                            {{ Form::open(['url' => ['projects',  $project->id], 'class' => 'pull-right']) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Удалить', ['class' => 'q-button _xs _light-gray _uppercase']) }}
                                            {{ Form::close() }}

                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!-- end of content -->

        </div>
        <!-- end of content-wrapper -->

    </div>

    <!-- popups -->

    <!-- edit-user-project-popup -->
    <div class="q-popup js-q-edit-user-project-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Изменить проект</h3>
            <form class="q-form">


                <div class="q-form__row">
                    <label for="themeName" class="q-form__label">Название проекта:</label>
                    <div class="q-form__input--wrapper">
                        <input id="themeName" value="" class="q-form__input">
                    </div>
                </div>

                <div class="q-form__row _submit">
                    <button onclick="editsave($('#themeName').val())" class="q-button _red">Применить изменения</button>
                    <input type="file" id="uploadFile_input" hidden="hidden" accept=".csv">
                    <div class="preloader _inline" style="display: none;"></div> <!----></div>
            </form>
            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of edit-user-project-popup -->
    <!-- end of popups -->

    </body>
@stop


<script>
    let idProject;

    function editClick(id, name) {
        idProject = id;
        $('#themeName').val(name);
    }

    function editsave(name) {

        let iso = name;

        $.ajax({
            type: 'PUT',
            url: 'projects/' + idProject,
            data: {
                _token: "{{ csrf_token() }}",
                'name': name,
            }, success: function() {
                $('#linkZp').text(iso);
            }
        });

    }
</script>