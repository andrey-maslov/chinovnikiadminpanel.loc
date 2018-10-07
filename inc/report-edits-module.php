<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Отчет по правкам</h3>
            </div>
        </div>

        <!--row Общая информация -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Показать данные за отчетный период</h2>
                    </div>
                    <div class="x_content">
                        <br/>
                        <!-- Выбор редактора -->


                        <!-- Выбор временного промежутка  и редактора -->
                        <form data-parsley-validate class="form-horizontal form-label-left report-date">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Выберите редактора
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-6 col-xs-12 col-md-offset-3 col-sm-offset 6">
                                <p>Выберите временной промежуток</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">С
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control date-picker">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">По
                                </label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control date-picker">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Показать</button>
                            </div>

                        </form><!-- / Выбор временного промежутка -->

                        <!-- Таблица правок -->
                        <div class="col-xs-12">
                            <div class="table-wrapper table-responsive">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title" style="width: 25%">Редактор</th>
                                        <th class="column-title">Дата правки</th>
                                        <th class="column-title">Время правки</th>
                                        <th class="column-title no-link last">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="even pointer">
                                        <td>Евгений Петров</td>
                                        <td> 23.07.2018</td>
                                        <td>11:05</td>
                                        <td class=" last">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td>Евгений Петров</td>
                                        <td>23.07.2018</td>
                                        <td>23:25</td>
                                        <td class="last">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td>Евгений Петров</td>
                                        <td>23.07.2018</td>
                                        <td> 00:04</td>
                                        <td class="last">
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Смотреть
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ln_solid"></div>
                        </div><!-- / Таблица правок -->
                    </div>
                </div>
            </div>
        </div>     <!--/row Общая информация -->