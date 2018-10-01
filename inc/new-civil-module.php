<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Новый госслужащий</h3>
            </div>
        </div>


        <div class="row">

            <div class="tab-wrapp" role="tabpanel" data-example-id="togglable-tabs">

                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#tabСontentCommon" id="commonInfo" role="tab"
                           data-toggle="tab" aria-expanded="true">Общая информация
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabContentAdd" role="tab" id="addInfo" data-toggle="tab" aria-expanded="false">
                            Дополнительная информация
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabContentPositions" role="tab" id="positions" data-toggle="tab" aria-expanded="false">
                            Должности
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabContentImages" role="tab" id="images" data-toggle="tab" aria-expanded="false">
                            Фотографии
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#tabContentPromises" role="tab" id="promises" data-toggle="tab" aria-expanded="false">
                            Обещания
                        </a>
                    </li>
                </ul>

                <!-- Tab content -->
                <div id="myTabContent" class="tab-content">

                    <!-- Общая информация -->
                    <div role="tabpanel" class="tab-pane fade active in" id="tabСontentCommon" aria-labelledby="commonInfo">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Общая информация
                                        <small>еще какойто текст</small>
                                    </h2>
                                </div>
                                <div class="x_content">
                                    <br/>
                                    <form id="common-info" data-parsley-validate
                                          class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Имя
                                                <span
                                                        class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="first-name" required="required"
                                                       class="form-control col-md-7 col-xs-12" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Фамилия
                                                <span
                                                        class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last-name" name="last-name" required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="patronymic">Отчество
                                                <span
                                                        class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="patronymic" name="patronymic" required="required"
                                                       class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <!-- doubles -->
                                        <div class="col-md-8 col-xs-12 col-md-offset-2 double">
                                            <div class="x_title">
                                                <h2><span class="label label-danger double-danger">!</span> В базе уже
                                                    есть
                                                    такое
                                                    имя
                                                    <small>Убедитесь, что не создаете дубликат</small>
                                                </h2>
                                            </div>
                                            <div class="org-doubles">
                                                <div class="table-wrapper table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>ФИО</th>
                                                            <th>Организация</th>
                                                            <th>Населенный пункт</th>
                                                            <th>Действия</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Лукашенко Александр Григорьевич</td>
                                                            <td>Управление</td>
                                                            <td>Чашники</td>
                                                            <th>
                                                                <a href="#" class="btn btn-primary btn-xs"><i
                                                                            class="fa fa-folder"></i> Смотреть </a>
                                                                <a href="#" class="btn btn-info btn-xs"><i
                                                                            class="fa fa-edit"></i>
                                                                    Ред </a>
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i> Удалить </a>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Лукашенко Александр Григорьевич</td>
                                                            <td>ДЭУ №3</td>
                                                            <td>Новолукомль</td>
                                                            <th>
                                                                <a href="#" class="btn btn-primary btn-xs"><i
                                                                            class="fa fa-folder"></i> Смотреть </a>
                                                                <a href="#" class="btn btn-info btn-xs"><i
                                                                            class="fa fa-edit"></i>
                                                                    Ред </a>
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i> Удалить </a>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Лукашенко Александр Григорьевич</td>
                                                            <td>Городской исполком</td>
                                                            <td>Могилев</td>
                                                            <th>
                                                                <a href="#" class="btn btn-primary btn-xs"><i
                                                                            class="fa fa-folder"></i> Смотреть </a>
                                                                <a href="#" class="btn btn-info btn-xs"><i
                                                                            class="fa fa-edit"></i>
                                                                    Ред </a>
                                                                <a href="#" class="btn btn-danger btn-xs"><i
                                                                            class="far fa-trash-alt"></i> Удалить </a>
                                                            </th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="maiden-name" class="control-label col-md-3 col-sm-3 col-xs-12">Девичья
                                                фамилия</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="maiden-name" class="form-control col-md-7 col-xs-12"
                                                       type="text"
                                                       name="maiden-name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Пол</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-primary active"
                                                           data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="unknown"> &nbsp; н/д
                                                        &nbsp;
                                                    </label>
                                                    <label class="btn btn-default" data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="male"> &nbsp; Муж
                                                        &nbsp;
                                                    </label>
                                                    <label class="btn btn-default " data-toggle-class="btn-primary"
                                                           data-toggle-passive-class="btn-default">
                                                        <input type="radio" name="gender" value="female" checked=""> Жен
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата рождения
                                            </label>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата выхода на
                                                пенсию
                                            </label>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Дата смерти
                                            </label>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="civil-phone"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Телефон</label>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <input id="civil-phone" class="form-control col-md-7 col-xs-12"
                                                       type="text"
                                                       name="civil-phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="civil-email"
                                                   class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <input id="civil-email" class="form-control col-md-7 col-xs-12"
                                                       type="email"
                                                       name="civil-email">
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
                        </div>
                    </div><!--/ Общая информация -->

                    <!-- Дополнительная информация -->
                    <div role="tabpanel" class="tab-pane fade" id="tabContentAdd" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Дополнительная информация</h2>
                                </div>
                                <div class="x_content">

                                    <form >
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Текстовый
                                                редактор</label>
                                            <div class="col-sm-10 col-xs-12">
                                                <textarea class="ckeditor" id="ckeditor"> </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group ckeditor-btn">
                                            <div class="col-sm-2 col-xs-12 col-sm-offset-2">
                                                <button type="submit" class="btn btn-success">Сохранить</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!--/Дополнительная информация -->

                    <!-- Должности -->
                    <div role="tabpanel" class="tab-pane fade" id="tabContentPositions" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Должности госслужащего
                                        <small>пустая таблица</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <div class="table-wrapper table-responsive">
                                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                            <thead>
                                            <tr class="headings">
                                                <th class="column-title">Организация</th>
                                                <th class="column-title">Должность</th>
                                                <th class="column-title">Рабочий телефон</th>
                                                <th class="column-title">Комментарий</th>
                                                <th class="column-title">Назначен</th>
                                                <th class="column-title">Уволен</th>
                                                <th class="column-title no-link last"><span class="nobr"></span></th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bs-example-modal-lg">Добавить должность
                                    </button>
                                </div>
                            </div>
                        </div> <!-- positions empty -->

                        <!-- Должности full -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Должности госслужащего
                                        <small>заполненная таблица</small>
                                    </h2>
                                </div>
                                <div class="x_content">

                                    <div class="table-wrapper table-responsive">
                                        <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                            <thead>
                                            <tr class="headings">
                                                <th class="column-title">Организация</th>
                                                <th class="column-title">Должность</th>
                                                <th class="column-title">Рабочий телефон</th>
                                                <th class="column-title">Комментарий</th>
                                                <th class="column-title">Назначен</th>
                                                <th class="column-title">Уволен</th>
                                                <th class="column-title no-link last" style="width: 15%"><span
                                                            class="nobr">Редактирование</span>
                                                </th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr class="even pointer">
                                                <td class=" ">Министерство</td>
                                                <td class=" ">Уборщик</td>
                                                <td class=" ">+375297777777</td>
                                                <td class=" ">Работал хорошо</td>
                                                <td class=" ">27.03.1977</td>
                                                <td class=" ">31.12.1987</td>
                                                <td class=" last">
                                                    <a href="#" class="btn btn-info btn-xs"><i class="fas fa-edit"></i>
                                                        Ред
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-xs"><i
                                                                class="far fa-trash-alt"></i></i>
                                                        Удалить
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="odd pointer">
                                                <td class=" ">Исполком</td>
                                                <td class=" ">кладовщик</td>
                                                <td class=" ">+375297777777</td>
                                                <td class=" ">Уволился со скандалом</td>
                                                <td class=" ">31.12.1987</td>
                                                <td class=" ">31.12.1989</td>
                                                <td class=" last">
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
                                                <td class=" ">Детский сад №333</td>
                                                <td class=" ">заведующий</td>
                                                <td class=" ">+375297777777</td>
                                                <td class=" ">знаки почета</td>
                                                <td class=" ">02.02.1989</td>
                                                <td class=" ">работает</td>
                                                <td class=" last">
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

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target=".bs-example-modal-lg">Добавить должность
                                    </button>
                                </div>
                            </div>
                        </div>     <!--/ Должности full -->
                    </div><!--/ Должности common -->


                    <!-- Загрузить фотографию -->
                    <div role="tabpanel" class="tab-pane fade" id="tabContentImages" aria-labelledby="profile-tab">
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Загрузить фотографию госслужащего</h2>
                                </div>
                                <div class="x_content">

                                    <p>Перетащите несколько файлов в поле ниже для многократной загрузки или нажмите,
                                        чтобы
                                        выбрать
                                        файлы.</p>
                                    <form action="choices/form_upload.html" class="dropzone"
                                          style="border: 1px solid #e5e5e5; height: 200px; ">
                                    </form>
                                    <div class="clearfix"></div>

                                    <div class="ln_solid"></div>
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

                    <!-- Обещания -->
                    <div role="tabpanel" class="tab-pane fade" id="tabContentPromises" aria-labelledby="profile-tab">
                        <div class="col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Выполнение обещаний</h2>
                                    <span class="good">Этот госслужащий выполняет обещания</span>
                                    <span class="bad">Этот госслужащий не выполняет обещания</span>
                                </div>
                                <div class="x_content">

                                    <form  class="case-promise-date">
                                        <div class="form-group">
                                            <label class="control-label col-md-2 col-sm-3 col-xs-12">Выберите дату
                                                проверки
                                                обещания
                                            </label>
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <input type="text" class="form-control date-picker" id="promiseFinish"
                                                       value="">
                                            </div>
                                        </div>
                                    </form>

                                    <form id="casePromise" class="civilPromise" >
                                        <p>Если есть необходимость добавить такую характеристику как "выполнение
                                            обещаний",
                                            то активируйте форму ниже и выберите нужный пункт.</p>
                                        <div class="col-md-2 col-sm-4 col-xs-12 promise-activate">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="activate" id="promiseActivate">
                                                    Активировать форму
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-8 col-xs-12 promise-radio">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promise" id="casePromiseYes" disabled>
                                                    Выполняет обещания
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="promise" id="casePromiseNo" disabled>
                                                    Не
                                                    выполняет обещания
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
                    </div><!-- / Promises -->

                </div><!-- / Tab content -->

            </div> <!-- / Tab wrapper -->

        </div> <!-- / row -->

    </div>

    <script>
        $(document).ready(function(){

           $('#promiseActivate').on('change', function() {
               if ( $(this).prop('checked') ) {
                   $('#casePromiseYes').prop('disabled', false);
                   $('#casePromiseNo').prop('disabled', false);
               }
               else
               {
                   $('#casePromiseYes').prop('disabled', true)
                   $('#casePromiseNo').prop('disabled', true)
               }
           });
        });
    </script>

    <!-- Modal New workplace -->
    <?php include 'new-workplace-modal.php'; ?>



  



