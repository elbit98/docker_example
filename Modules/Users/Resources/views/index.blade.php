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
                                    <a href="#" class="q-button _red js-show-q-create-project-popup">Создать проект</a>
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
                                            <a class="q-news__info--title" href="#">{{ $project->name }}</a>
                                        </td>
                                        <td class="table-projects-3">
                                            <p class="_gray-text">Всего задач - 155, Выполнено - 54</p>
                                        </td>
                                        <td class="table-projects-3">
                                            <p class="_gray-text">67%</p>
                                        </td>
                                        <td class="table-projects-3">
                                            <p class="_gray-text">05.06.1998</p>
                                        </td>
                                        <td>
                                            <div class="q-buttons__list">
                                                <span class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Изменить
                                                    <i class="q-icon q-icon-change"></i>
                                                </span>
                                                <span class="q-button _xs _light-gray _uppercase">Удалить
                                                    <i class="q-icon q-icon-close-sm"></i>
                                                </span>
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
                                <input id="themeName" class="q-form__input" value="Название">

                            </div>

                        </div>

                        <div class="q-form__row _submit">
                            <button class="q-button _red">Применить изменения</button>
                            <input type="file" id="uploadFile_input" hidden="hidden" accept=".csv">
                            <div class="preloader _inline" style="display: none;"></div> <!----></div>
                    </form>
                    <div class="q-popup__close js-close-popup"></div>
                </div>
            </div>
            <!-- end of edit-user-project-popup -->

            <!-- create-project-popup -->
            <div class="q-popup js-q-create-project-popup">
                <div class="q-popup__holder js-q-popup-holder">
                    <h3 class="q-popup__title">Добавить проект</h3>
                    <form class="q-form">


                        <div class="q-form__row">
                            <label for="themeName" class="q-form__label">Название проекта:</label>
                            <div class="q-form__input--wrapper">
                                <input id="themeName" class="q-form__input">

                            </div>

                        </div>
                        <div class="q-form__row">
                            <label for="themeName" class="q-form__label">Отправить участникам приглашения (не более 100):</label>
                            <div class="q-form__input--wrapper">
                                <input id="themeName" class="q-form__input" placeholder="email адреса через запятую">

                            </div>

                        </div>

                        <div class="q-form__row _submit">
                            <button class="q-button _red">Создать проект</button>
                            <button class="q-button _white">Загрузить email списком</button>
                            <a href="/entities_example.csv" target="_blank" class="_right-link _like-dashed-link">образец csv</a>
                            <input type="file" id="uploadFile_input" hidden="hidden" accept=".csv">
                            <div class="preloader _inline" style="display: none;"></div> <!----></div>
                    </form>
                    <div class="q-popup__close js-close-popup"></div>
                </div>
            </div>
            <!-- end of create-project-popup -->

            <!-- end of popups -->

            </body>
@stop
