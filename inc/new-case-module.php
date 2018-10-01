<div class="right_col" role="main">

    <!--row Связанные организации (пустой блок) -->
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Новая публикация </h3>
            </div>
        </div>

        <div class="row">

            <div class="tab-wrapper" role="tabpanel" data-example-id="togglable-tabs">

                <ul id="myCaseTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tabCaseCommon" id="caseCommonInfo" role="tab"
                           data-toggle="tab" aria-expanded="true">Общая информация
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabcasetext" role="tab" id="caseText" data-toggle="tab" aria-expanded="false">
                            Текст публикации
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabCasePreview" role="tab" id="casePreview" data-toggle="tab" aria-expanded="false">
                            Превью
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabCaseOrg" role="tab" id="caseOrg" data-toggle="tab" aria-expanded="false">
                            Связанные организации
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabCasePubl" role="tab" id="casePubl" data-toggle="tab" aria-expanded="false">
                            Связанные публикации
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabCaseCorr" role="tab" id="caseCorr" data-toggle="tab" aria-expanded="false">
                            Переписка
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabCasePromises" role="tab" id="casePromises" data-toggle="tab" aria-expanded="false">
                            Обещания
                        </a>
                    </li>
                </ul>

                <!-- tab content-->
                <div id="caseTabContent" class="tab-content">

                    <!-- Общая информация -->
                    <div role="tabpanel" class="tab-pane fade active in" id="tabCaseCommon"
                         aria-labelledby="caseCommonInfo">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Общая информация
                                        <small>еще какойто текст</small>
                                    </h2>
                                </div>
                                <div class="x_content">
                                    <br/>
                                    <form data-parsley-validate
                                          class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="case-header">Заголовок
                                                <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="case-header" required="required"
                                                       class="form-control col-md-7 col-xs-12" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="case-desc"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Описание</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="case-desc" class="form-control" rows="3"
                                                    placeholder="Описание случая"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="case-type" class="control-label col-md-3 col-sm-3 col-xs-12">Тип
                                                случая</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                                <select name="case-type" class="select2_multiple form-control"
                                                        multiple="multiple">
                                                    <option>Злосное превышение полномочий</option>
                                                    <option>Устойчивое развитие</option>
                                                    <option>Безалаберность</option>
                                                    <option>Вредность</option>
                                                    <option>Услужливость</option>
                                                    <option>Некомпетентность</option>
                                                    <option>Профессионализм</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="case-location">Местоположение
                                                <br>
                                                <small>(Город, деревня, район города)</small>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="case-location"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success">Сохранить</button>
                                                <button type="submit" class="btn btn-primary">Очистить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>     <!--/ Общая информация -->


                        <!-- Последние опубликованные случаи -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Последние опубликованные случаи
                                        <small>для менеджера</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <div class="table-wrapper table-responsive">
                                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                            <thead>
                                            <tr class="headings">
                                                <th class="column-title">Название</th>
                                                <th class="column-title">Дата</th>
                                                <th class="column-title">Время</th>
                                                <th class="column-title last">Редактор</th>
                                                <th class="column-title last">Действие</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="even pointer">
                                                <td>Пожар в лесном огороде</td>
                                                <td>27.03.2017</td>
                                                <td>13:05</td>
                                                <td>Михаил Задорнов</td>
                                                <td class="last">
                                                    <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i>
                                                        Смотреть
                                                    </a>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>
                                                        Ред
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="far fa-trash-alt"></i>
                                                        Удалить
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td>Пожар в лесном огороде</td>
                                                <td>27.03.2017</td>
                                                <td>13:05</td>
                                                <td>Михаил Задорнов</td>
                                                <td class="last">
                                                    <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i>
                                                        Смотреть
                                                    </a>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>
                                                        Ред
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="far fa-trash-alt"></i>
                                                        Удалить
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="even pointer">
                                                <td>Пожар в лесном огороде</td>
                                                <td>27.03.2017</td>
                                                <td>13:05</td>
                                                <td>Михаил Задорнов</td>
                                                <td class="last">
                                                    <a href="#" class="btn btn-primary btn-xs"><i
                                                                class="fa fa-folder"></i>
                                                        Смотреть
                                                    </a>
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i>
                                                        Ред
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="far fa-trash-alt"></i>
                                                        Удалить
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div><!--/ Последние публикации -->
                    </div> <!--/ tab wrapper-->

                    <!-- Текст публикации -->
                    <div role="tabpanel" class="tab-pane fade" id="tabcasetext" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Текст публикации</h2>
                                </div>
                                <div class="x_content">

                                    <form id="case-publication" class="case-publication">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <textarea class="ckeditor" id="ckeditor"></textarea>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="checkbox">
                                            <label class="case-text-checkbox ">
                                                <input type="checkbox" > Опубликовать
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="case-text-checkbox ">
                                                <input type="checkbox" > Отобразить в ленте
                                            </label>
                                        </div>
                                        <div class="form-group case-text-button">
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success">Сохранить</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div><!--/ Дополнительная информация -->


                    <!-- Загрузить фотографию -->
                    <div role="tabpanel" class="tab-pane fade" id="tabCasePreview" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Превью</h2>
                                </div>
                                <div class="x_content">

                                    <p>минимальные размеры превью 380*285 px</p>
                                    <form action="choices/form_upload.html" class="dropzone"
                                          style="border: 1px solid #e5e5e5; height: 200px; "></form>

                                    <div class="ln_solid"></div>
                                    <div class="clearfix"></div>

                                    <div class="form-group upload-link">
                                        <label for="website" class="control-label col-md-2 col-sm-3 col-xs-12">Загрузить по ссылке</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="website" class="form-control col-md-7 col-xs-12" type="url" name="website">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button type="submit" class="btn btn-success">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- / Загрузить фотографию -->

                    <!-- Связанные организации (пустой блок) -->
                    <div role="tabpanel" class="tab-pane fade" id="tabCaseOrg" aria-labelledby="profile-tab">

                        <!-- Связанные организации (пустой блок) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные организации
                                        <small> пустой блок</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Добавить организацию</button>
                                        </div>

                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div><!-- / Связанные организации (пустой блок) -->


                        <!-- Связанные организации (пустое поле) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные организации
                                        <small> пустое поле</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Добавить организацию</button>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="case-header">Организация</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-success">Привязать</button>
                                        </div>
                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>    <!-- / Связанные организации (пустое поле) -->

                        <!-- Связанные организации (таблица) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные организации
                                        <small> таблица</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <div class="rel-orgs">
                                        <div class="col-xs-12 ">
                                            <div class="table-wrapper table-responsive">
                                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                                    <thead>
                                                    <tr class="headings">
                                                        <th class="column-title">Организация</th>
                                                        <th class="column-title last" style="width: 20%">Действие</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr class="even pointer">
                                                        <td>Пожар в лесном огороде</td>
                                                        <td class="last">
                                                            <a href="#" class="btn btn-danger btn-xs"><i
                                                                        class="far fa-trash-alt"></i>
                                                                Отвязать </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd pointer">
                                                        <td >Пожар в лесном огороде</td>
                                                        <td class="last">
                                                            <a href="#" class="btn btn-danger btn-xs"><i
                                                                        class="far fa-trash-alt"></i>
                                                                Отвязать </a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even pointer">
                                                        <td>Пожар в лесном огороде</td>
                                                        <td class="last">
                                                            <a href="#" class="btn btn-danger btn-xs"><i
                                                                        class="far fa-trash-alt"></i>
                                                                Отвязать </a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <form id="case-org" data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-primary">Добавить организацию</button>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="case-header">Организация</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-success">Привязать</button>
                                        </div>
                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>    <!-- / Связанные организации (таблица) -->
                    </div><!-- one tab wrapper -->

                    <!-- Связанные публикации (пустой блок) -->
                    <div role="tabpanel" class="tab-pane fade" id="tabCasePubl" aria-labelledby="profile-tab">

                        <!-- Связанные публикации (пустой блок) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные публикации
                                        <small> пустой блок</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Добавить организацию</button>
                                        </div>

                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div><!-- / Связанные публикации (пустой блок) -->


                        <!-- Связанные публикации (пустое поле) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные публикации
                                        <small> пустое поле</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary">Добавить публикацию</button>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="case-header">Публикации</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-success">Привязать</button>
                                        </div>
                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>    <!-- / Связанные публикации (пустое поле) -->

                        <!-- Связанные публикации (таблица) -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Связанные публикации
                                        <small> таблица</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <div class="rel-orgs">
                                        <div class="col-xs-12 ">
                                            <div class="table-wrapper table-responsive">
                                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                                    <thead>
                                                    <tr class="headings">
                                                        <th class="column-title">Публикация</th>
                                                        <th class="column-title last" style="width: 20%">Действие</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="even pointer">
                                                            <td>Пожар в лесном огороде</td>
                                                            <td class="last">
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i>
                                                                    Отвязать </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="odd pointer">
                                                            <td>Пожар в лесном огороде</td>
                                                            <td class="last">
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i>
                                                                    Отвязать </a>
                                                            </td>
                                                        </tr>
                                                        <tr class="even pointer">
                                                            <td>Пожар в лесном огороде</td>
                                                            <td class="last">
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i>
                                                                    Отвязать </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="col-xs-12">
                                            <button type="button" class="btn btn-primary">Добавить публикацию</button>
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                                   for="case-header">Публикация</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="button" class="btn btn-success">Привязать</button>
                                        </div>
                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>    <!-- / Связанные публикации (таблица) -->
                    </div><!-- one tab wrapper -->


                    <!-- Переписка -->
                    <div role="tabpanel" class="tab-pane fade" id="tabCaseCorr" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Переписка
                                        <small> пустой блок</small>
                                    </h2>
                                </div>
                                <div class="x_content">
                                    <div class="correspondence-wrapper">
                                        <div class="col-md-6">
                                            <h4>Запрос (вопрос, исходящее уведомление)</h4>
                                            <form action="choices/form_upload.html" class="dropzone"
                                                  style="border: 1px solid #e5e5e5; height: 200px; "></form>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Ответ</h4>
                                            <form action="choices/form_upload.html" class="dropzone"
                                                  style="border: 1px solid #e5e5e5; height: 200px; "></form>
                                        </div>
                                    </div>
                                    <form data-parsley-validate class="form-horizontal form-label-left">

                                        <div class="col-xs-12">
                                            <div class="form-group upload-button">
                                                <button type="button" class="btn btn-primary">Добавить переписку
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                    <br/>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>  <!-- Переписка -->

                    <!-- Обещания -->
                    <div role="tabpanel" class="tab-pane fade" id="tabCasePromises" aria-labelledby="profile-tab">
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Выполнение обещаний</h2>
                                    <span class="good">Обещание выполнено</span>
                                    <span class="bad">Обещание не выполнено</span>
                                    <span class="process">Обещание в процессе выполнения</span>
                                </div>
                                <div class="x_content">

                                    <form class="case-promise-date">
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Выберите дату
                                                проверки
                                                обещания
                                            </label>
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control date-picker" id="promiseFinish"
                                                       value="<?php /* echo date('d/m/Y'); */ ?>">
                                            </div>
                                            <div class="col-md-2 col-sm-12">
                                                <p class="expire">Срок проверки: <span id="expire">20.12.2018</span></p>
                                            </div>
                                        </div>
                                    </form>
                                    <form id="casePromise" class="civilPromise" action="">
                                        <p>Если есть необходимость добавить такую характеристику как "выполнение
                                            обещаний",
                                            то активируйте форму ниже и выберите нужный пункт.</p>
                                        <div class="col-md-2 col-sm-4 col-xs-12 promise-activate">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"  name="promiseActivate" id="promiseActivate">
                                                    Активировать форму
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 promise-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promise" id="casePromiseYes" disabled>
                                                    Обещание выполнено
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promise" id="casePromiseNo" disabled>
                                                    Обещание
                                                    не выполнено
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promise"
                                                           id="casePromiseProcess" disabled>
                                                    Обещание в процессе выполения
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Сохранить</button>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- / Обещания -->

                </div><!-- / tab content-->

            </div> <!-- / tab wrapper -->


        </div>   <!-- / row -->

        <script>
            $(document).ready(function(){

                $('#promiseActivate').on('change', function() {
                    if ( $(this).prop('checked') ) {
                        $('#casePromiseYes').prop('disabled', false);
                        $('#casePromiseNo').prop('disabled', false);
                        $('#casePromiseProcess').prop('disabled', false);
                    }
                    else
                    {
                        $('#casePromiseYes').prop('disabled', true)
                        $('#casePromiseNo').prop('disabled', true)
                        $('#casePromiseProcess').prop('disabled', false);
                    }
                });
            });
        </script>
