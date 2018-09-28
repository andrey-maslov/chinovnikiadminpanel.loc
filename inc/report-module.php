<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Отчет по редакторам</h3>
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

                        <!-- Таблица правок -->
                        <div class="col-xs-12">
                            <div class="table-wrapper table-responsive">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title" style="width: 25%">Редактор</th>
                                        <th class="column-title">Организации <br> Внесено/создано правок</th>
                                        <th class="column-title">Госслужащие <br> Внесено/создано правок</th>
                                        <th class="column-title no-link last">Публикации <br> Внесено/создано правок
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="even pointer">
                                        <td class=" ">Юзер 1</td>
                                        <td class=" "> 55/ 88</td>
                                        <td class=" "> 11 / 1</td>
                                        <td class=" last"> 1 / 1</td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class=" ">Юзер 2</td>
                                        <td class=" ">33 / 55</td>
                                        <td class=" ">55 / 22</td>
                                        <td class=" last">21 / 55</td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class=" ">Юзер 3</td>
                                        <td class=" ">33 / 88</td>
                                        <td class=" "> 0 / 4</td>
                                        <td class=" last">78 / 0</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ln_solid"></div>
                            <p class="number-votes">Проголосовали <span>5389</span> раз</p>
                        </div><!-- / Таблица правок -->


                    </div>


                </div>
            </div>
        </div>     <!--/row Общая информация -->




  



