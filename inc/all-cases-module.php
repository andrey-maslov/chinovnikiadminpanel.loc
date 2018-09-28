<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Все публикации</h3>
            </div>
        </div>

        <!--row Последние опубликованные случаи -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Показать публикации за выбранный период
                            <small>по умолчанию - за 1 месяц</small>
                        </h2>
                    </div>
                    <div class="x_content">
                        <!-- Выбор временного промежутка -->
                        <form id="common-info" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">С
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control date-picker" id="start">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control date-picker" id="end">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Показать</button>
                            </div>
                        </form><!-- / Выбор временного промежутка -->
                        <div class="table-wrapper table-responsive">
                            <table id="allCases" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">Название</th>
                                    <th class="column-title">Дата</th>
                                    <th class="column-title">Время</th>
                                    <th class="column-title last">Редактор</th>
                                    <th class="column-title last">Операции</th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr class="even pointer">
                                    <td class=" ">Пожар в лесном огороде</td>
                                    <td class=" ">27.03.2017</td>
                                    <td class=" ">13:05</td>
                                    <td class=" ">Михаил Задорнов</td>
                                    <td class=" last">
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                        </a>
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ред </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Удалить
                                        </a>
                                    </td>
                                </tr>
                                <tr class="odd pointer">
                                    <td class=" ">Пожар в лесном огороде</td>
                                    <td class=" ">27.03.2017</td>
                                    <td class=" ">13:05</td>
                                    <td class=" ">Михаил Задорнов</td>
                                    <td class=" last">
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                        </a>
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ред </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Удалить
                                        </a>
                                    </td>
                                </tr>
                                <tr class="even pointer">
                                    <td class=" ">Пожар в лесном огороде</td>
                                    <td class=" ">27.03.2017</td>
                                    <td class=" ">13:05</td>
                                    <td class=" ">Михаил Задорнов</td>
                                    <td class=" last">
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                        </a>
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> Ред </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> Удалить
                                        </a>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>     <!--/row Последние публикации -->