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
            <div class="q-breadcrumbs">
                <div class="q-inner">
                    <ul class="q-breadcrumbs__list">
                        <li class="q-breadcrumbs__item">
                            <span class="q-breadcrumbs__link">Проект</span>
                        </li>
                        <li class="q-breadcrumbs__item">{{ $project->name }}</li>


                    </ul>

                </div>
            </div>
            <div class="q-about-us _show-720">
                <div class="q-inner">
                    <div class="q-filters-with-buttons">
                        <a href="#" class="q-button _red js-show-q-create-message-popup">Новая задача</a>
                        <div class="q-form__input--wrapper q-form__input--wrapper-right">
                            <div class="q-buttons__submit">
                                <a href="#" class="q-button js-show-q-settings-main-page-popup">Фильтры</a>
                            </div>

                            <div class="q-buttons__list q-buttons__submit--list">
									<span class="q-button _xs _light-gray _uppercase">17.01.2017 – 17.01.2018
										<i class="q-icon q-icon-close-sm"></i>
									</span>
                                <span class="q-button _xs _light-gray _uppercase">Иванов Иван Иванович
										<i class="q-icon q-icon-close-sm"></i>
									</span>
                                <span class="q-button _xs _light-gray _uppercase">Мои поручения
										<i class="q-icon q-icon-close-sm"></i>
									</span>
                                <span class="q-button _xs _light-gray _uppercase">Чужие поручения
										<i class="q-icon q-icon-close-sm"></i>
									</span>


                                <span class="q-button _xs _light-gray _uppercase g-clear-filter">сбросить все фильтры

									</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="q-inner">
                <div class="q-page__header--right-part">
                </div>
                <div class="q-tasks-list">
                    <div class="g-column">
                        <span class="text-column">Новая:</span>
                        <div class="g-task g-task-second">
                            <a class="open-g-task js-show-q-view-task-user-popup" href="#">
                                <div class="g-task-header"><div class="g-task-header-name">Я поручил(а):</div>
                                    Купить дочери зеленого слона<div class="g-task-footer-urgency g-medium-urgency"></div></div>
                            </a>
                            <div class="g-task-footer">
                                <div class="g-task-footer-date">
                                    12.10 - <span class="g-task-footer-date-overdue">12.11</span>
                                </div>

                                <a class="g-delete-icon js-show-compare-popup" href="#" title="Удалить задачу"></a>
                                <a class="g-arrow-right-icon" href="#"  title="Изменить статус"></a>
                            </div>
                        </div>

                    </div>
                    <div class="g-column">
                        <span class="text-column">В работе:</span>
                        <div class="g-task">

                            <a class="open-g-task" href="#">
                                <div class="g-task-header"><div class="g-task-header-name">Я в копии:</div>
                                    Разработать механизм описания неописуемых явлений мира квантовой физики</div>
                            </a>
                            <div class="g-task-footer">
                                <div class="g-task-footer-date">
                                    12.11 - <span class="g-task-footer-date-normal">15.11</span>
                                </div>
                                <i class="g-newmail-icon Blink"></i>


                            </div>

                        </div>

                    </div>
                    <div class="g-column">
                        <span class="text-column">Выполнено:</span>
                        <div class="g-task g-task-ok">

                            <a class="open-g-task" href="#">
                                <div class="g-task-header"><div class="g-task-header-name">Мне поручил Антон Иванович Иванов:</div>
                                    Заказать печать визиток<div class="g-task-footer-urgency"></div></div>
                            </a>
                            <div class="g-task-footer">
                                <div class="g-task-footer-date">
                                    12.11 - <span class="g-task-footer-date-normal">15.11</span>
                                </div>

                                <a class="g-arrow-left-icon" href="#" title="Изменить статус"></a>
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

    <!-- create-message-popup -->
    <div class="q-popup js-q-create-message-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Добавить задачу</h3>
            <form class="q-form">


                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Срочность:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Срочно</option>
                            <option></option>
                        </select>
                    </div>

                </div>


                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Исполнители:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Иван Иванов</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>
                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Поставить в копию:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Иван Иванов</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>

                <div class="q-form__row">
                    <label class="q-form__label">Период выполнения:</label>
                    <div class="q-form__input--wrapper">
                        <div class="q-datepicker__double">
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                            <div class="q-datepicker__divider">-</div>
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="q-form__row">
                    <label for="themeName" class="q-form__label">Заголовок задачи:</label>
                    <div class="q-form__input--wrapper">
                        <input id="themeName" class="q-form__input">

                    </div>
                </div>



                <div class="q-form__row">
                    <label for="textMessage" class="q-form__label">Описание задачи:</label>
                    <textarea id="textMessage" class="q-form__textarea"></textarea>
                </div>






                <div class="q-form__row _submit">
                    <button class="q-button _red">Добавить</button>
                    <span class="q-upload-btn _cursor">
                            <i class="q-icon q-icon-upload"></i>
                            <span class="_dashed">Прикрепить</span>
                           </span>
                    <div class="q-buttons__list q-buttons__submit--list list-files-new-task">
                                        <span class="q-button _xs _light-gray _uppercase list-files-new-task-margin-top">1.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">sfhdkjf.png
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">12.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">file_new.pdf
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">tablica_good.xlsx
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>



                    </div>

                </div>

            </form>

            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of create-message-popup -->

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
                    <label for="themeName" class="q-form__label">Пригласить участников (не более 100 новых):</label>
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




    <!-- view-task-admin-popup -->
    <div class="q-popup js-q-view-task-admin-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Редактировать задачу: Ехали медведи на велосипеде, а за ними кот задом наперед</h3>
            <form class="q-form">


                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Срочность:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Надо было вчера</option>
                            <option>Нужно ускориться</option>
                            <option>Не горит</option>
                        </select>
                    </div>

                </div>


                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Исполнители:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Иван Иванов</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>

                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Поставить в копию:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Иван Иванов</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>

                <div class="q-form__row">
                    <label class="q-form__label">Период выполнения:</label>
                    <div class="q-form__input--wrapper">
                        <div class="q-datepicker__double">
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                            <div class="q-datepicker__divider">-</div>
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Создана: </span>
                    <span class="g-lite-color-text">12.12.2012</span>
                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Фактически выполнялась: </span>
                    <span class="g-lite-color-text">37ч. 55м. + 02ч. 23м. 12с.</span>
                </div>

                <div class="q-form__row">
                    <label for="textMessage" class="q-form__label">Описание задачи:</label>
                    Ранее первый зампрокурора области обратился в суд с иском о признании недействительным решения Николаевского областного совета от 2012 года, подтвердившего закон «Об основах языковой политики». Зампрокурора обратился в суд, так как областной совет не предпринимал мер к приведению регионального законодательства к общегосударственному.

                    В феврале Конституционный суд Украины признал недействительным принятый при президенте Викторе Януковиче закон «Об основах языковой политики». Статус регионального языка присваивался в том случае, если он является родным для 10% населения региона. В восточных областях Украины благодаря этому в документообороте использовали русский язык, а в западных — румынский и венгерский.

                    <div class="q-form__input--wrapper g-margin-top-for-element">
                        <span class="g-lite-color-text">Прикреплённые файлы:
                        <a href="#">preza.psd</a>,
                         <a href="#">kartinki.png</a>,
                          <a href="#">Tablica.xlsx</a>,
                           <a href="#">Фигня.jpg</a></span>
                    </div>
                </div>




                <div class="q-table__row _chat-row js-chat-row _opened">
                    <div class="q-table__table-row">
                        <div class="q-chat">
                            <div class="q-chat__content js-chat-scrollbar">
                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>

                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>

                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Очень маленький текст</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>
                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="q-chat__footer">
                                <div class="q-chat__footer--left">
                                    <textarea class="q-textarea _rnd-tr" placeholder="Ваш комментарий"></textarea>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="q-form__row _submit g-margin-top-for-element">
                    <button class="q-button _red">Сохранить</button>
                    <span class="q-upload-btn _cursor">
                            <i class="q-icon q-icon-upload"></i>
                            <span class="_dashed">Прикрепить</span>
                           </span>
                    <div class="q-buttons__list q-buttons__submit--list list-files-new-task">
                                        <span class="q-button _xs _light-gray _uppercase list-files-new-task-margin-top">1.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">sfhdkjf.png
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">12.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">file_new.pdf
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">tablica_good.xlsx
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>



                    </div>

                </div>

            </form>

            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of view-task-admin-popup -->


    <!-- view-task-user-popup -->
    <div class="q-popup js-q-view-task-user-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Ехали медведи на велосипеде, а за ними кот задом наперед! Раз два три четыре пять вышел</h3>
            <form class="q-form">

                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Создана: </span>
                    <span class="g-lite-color-text">12.12.2012</span>
                </div>


                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Срочность:</span>
                    <div class="g-task-detail-urgency"></div><span class="g-lite-color-text">Надо было вчера</span>


                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Автор: </span>
                    <span class="g-lite-color-text">Антонов Антон Антонович</span>


                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Исполнители: </span>
                    <span class="g-lite-color-text">Антонов Антон Антонович, Сергеев Иван Олегович, Иванова Мария Ивановна</span>


                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">В копии стоят: </span>
                    <span class="g-lite-color-text">Антонов Антон Антонович, Сергеев Иван Олегович, Иванова Мария Ивановна</span>


                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Заданный период выполнения: </span>
                    <span class="g-lite-color-text">12.12.2012 - 15.15.2015</span>


                </div>
                <div class="q-form__row">
                    <span class="g-label-for-user-view-task">Фактически выполнялась: </span>
                    <span class="g-lite-color-text">37ч. 55м. + 02ч. 23м. 12с.</span>
                    <a class="q-button _red _sm _uppercase _no-cursor _no-hover _g-play" href="#">Запустить счётчик</a>
                    <a class="q-button _red _sm _uppercase _no-cursor _no-hover _g-stop" href="#">Остановить счётчик</a>
                </div>
                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Статус задачи:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Новая</option>
                            <option>В работе</option>
                            <option>Выполнено</option>
                        </select>
                    </div>

                </div>




                <div class="q-form__row">
                    <label for="textMessage" class="q-form__label">Описание задачи:</label>
                    Ранее первый зампрокурора области обратился в суд с иском о признании недействительным решения Николаевского областного совета от 2012 года, подтвердившего закон «Об основах языковой политики». Зампрокурора обратился в суд, так как областной совет не предпринимал мер к приведению регионального законодательства к общегосударственному.

                    В феврале Конституционный суд Украины признал недействительным принятый при президенте Викторе Януковиче закон «Об основах языковой политики». Статус регионального языка присваивался в том случае, если он является родным для 10% населения региона. В восточных областях Украины благодаря этому в документообороте использовали русский язык, а в западных — румынский и венгерский.

                    <div class="q-form__input--wrapper g-margin-top-for-element">
                        <span class="g-lite-color-text">Прикреплённые файлы:
                        <a href="#">preza.psd</a>,
                         <a href="#">kartinki.png</a>,
                          <a href="#">Tablica.xlsx</a>,
                           <a href="#">Фигня.jpg</a></span>
                    </div>
                </div>




                <div class="q-table__row _chat-row js-chat-row _opened">
                    <div class="q-table__table-row">
                        <div class="q-chat">
                            <div class="q-chat__content js-chat-scrollbar">
                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>

                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>

                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Очень маленький текст</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>
                                <div class="q-chat__item">
                                    <div class="q-user__avatar q-chat__item--avatar">
                                        <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                                    </div>
                                    <div class="q-chat__item--info">
                                        <p class="q-chat__item--text">Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив». У каждой стороны переписки выводится аватарка (предоставлю дефолтные). Рядом с каждой темой выводятся дата последнего сообщения и ссылка «в архив».</p>
                                        <p class="q-chat__item--date">Антон Иванович Иванов<br />07.04.2018, 22:50:07</p>
                                    </div>
                                </div>
                            </div>
                            <div class="q-chat__footer">
                                <div class="q-chat__footer--left">
                                    <textarea class="q-textarea _rnd-tr" placeholder="Ваш комментарий"></textarea>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <div class="q-form__row _submit g-margin-top-for-element">
                    <button class="q-button _red">Ответить</button>
                    <span class="q-upload-btn _cursor">
                            <i class="q-icon q-icon-upload"></i>
                            <span class="_dashed">Прикрепить</span>
                           </span>
                    <div class="q-buttons__list q-buttons__submit--list list-files-new-task">
                                        <span class="q-button _xs _light-gray _uppercase list-files-new-task-margin-top">1.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">sfhdkjf.png
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">12.jpg
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">file_new.pdf
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>
                        <span class="q-button _xs _light-gray _uppercase">tablica_good.xlsx
                                            <i class="q-icon q-icon-close-sm"></i>
                                        </span>



                    </div>

                </div>

            </form>

            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of view-task-user-popup -->


    <!-- settings-main-page-popup -->
    <div class="q-popup js-q-settings-main-page-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Фильтры вывода задач</h3>
            <form class="q-form">
                <div class="q-form__row">
                    <label class="q-form__label">Крайний срок выполнения:</label>
                    <div class="q-form__input--wrapper">
                        <div class="q-datepicker__double">
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                            <div class="q-datepicker__divider">-</div>
                            <div class="q-datepicker">
                                <input class="q-form__input js-q-datepicker">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Статус:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Все</option>
                            <option>Новая</option>
                            <option>В работе</option>
                            <option>Выполнено</option>
                        </select>
                    </div>

                </div>

                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Тип задач:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Все</option>
                            <option>Я поручил</option>
                            <option>Мне поручили</option>
                            <option>Я в копии</option>
                        </select>
                    </div>

                </div>
                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Исполнители:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Вася</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>
                <div class="q-form__row">

                    <label for="profileActivities" class="q-form__label">Авторы:</label>
                    <div class="q-form__input--wrapper">
                        <select id="profileActivities" multiple="multiple" name="profileActivities" class="q-form__select js-q-select-multiple">
                            <option value="Торговля" selected="selected">Петя</option>
                            <option value="Выставки">Антон Петров</option>
                            <option value="Ярмарки">Петя Сидоров</option>
                            <option value="Продукты питания">Маша Пронина</option>
                        </select>
                    </div>


                    <div class="q-profile__subcol _no-r-p">

                    </div>
                </div>
                <div class="q-form__row">
                    <label for="profileTownClient" class="q-form__label _with-link">Срочность:</label>

                    <div class="q-form__input--wrapper">
                        <select id="profileTownClient" class="q-form__select js-q-select">
                            <option>Все</option>
                            <option>Адски срочно</option>
                            <option>Ну фиг знает</option>
                        </select>
                    </div>

                </div>



                <div class="q-form__row _submit">
                    <button class="q-button _red">Показать</button>


                </div>

            </form>

            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of settings-main-page-popup -->


    <!-- compare-popup -->
    <div class="q-compare-popup js-compare-popup">
        <div class="q-compare-popup__holder">
            <div class="q-inner">
                <span class="q-compare-popup__title _uppercase">Удаление задачи</span>
                <div class="q-compare-popup__text">
                    <p>Уверены, что хотите удалить эту задачу?</p>

                </div>
                <div class="q-compare-popup__buttons">
                    <button class="q-button">Да</button>
                    <button class="q-button _red">Нет</button>
                </div>
            </div>
        </div>
        <div class="q-popup__close js-close-compare-popup"></div>
    </div>
    <!-- end of compare-popup-->

    <!-- my-invitation-popup -->
    <div class="q-popup js-q-my-invitation-popup">
        <div class="q-popup__holder js-q-popup-holder">
            <h3 class="q-popup__title">Мои приглашения</h3>

            <div class="q-my-actions">
                <table class="q-simple-table _tm q-actions-table q-actions-table-popup">
                    <thead>
                    <tr>
                        <th class="_partner-t-col table-projects-4"></th>
                        <th>Автор</th>
                        <th>Проект</th>
                        <th>Действие</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="_partner-t-col table-projects-4">
                            <div class="q-user__avatar">
                                <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                            </div>
                        </td>
                        <td>
                            <p>Антон Иванов</p>
                        </td>
                        <td data-title="Проект:">
                            <span class="_gray-text">Фром май харт</span>
                        </td>
                        <td>
                            <div class="q-buttons__list">
                                                <span class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Принять

                                                </span>
                                <span class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Отказать
                                                    <i class="q-icon q-icon-close-sm"></i>
                                                </span>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td class="_partner-t-col table-projects-4">
                            <div class="q-user__avatar">
                                <img src="img/avatar.png" alt="" class="q-user__avatar-img">
                            </div>
                        </td>
                        <td>
                            <p>Антон Иванов</p>
                        </td>
                        <td data-title="Проект:">
                            <span class="_gray-text">Фром май харт</span>
                        </td>
                        <td>
                            <div class="q-buttons__list">
                                                <span class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Принять

                                                </span>
                                <span class="q-button _xs _light-gray _uppercase js-show-q-edit-user-project-popup">Отказать
                                                    <i class="q-icon q-icon-close-sm"></i>
                                                </span>
                            </div>
                        </td>

                    </tr>
                    </tbody>
                </table>

            </div>

            <div class="q-popup__close js-close-popup"></div>
        </div>
    </div>
    <!-- end of my-invitation-popup -->

    <!-- end of popups -->

    </body>
@stop
