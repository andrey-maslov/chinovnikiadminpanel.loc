<!-- new organization area -->
<div class="right_col" role="main">
    <div class="">

        <div class="page-title">
            <div class="title_left">
                <h3>Новая организация</h3>
            </div>
        </div>

        <!--row Общая информация -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Общая информация</h2>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="org-name">Название <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="org-name" required="required"
                                           class="form-control col-md-7 col-xs-12" autofocus>
                                </div>
                            </div>

                            <!-- doubles -->
                            <div class="col-md-8 col-xs-12 col-md-offset-2 double">
                                <div class="x_title">
                                    <h2><span class="label label-danger double-danger">!</span> Такая организация уже
                                        есть в базе
                                        <small> Убедитесь, что не создаете дубликат</small>
                                    </h2>
                                </div>
                                <div class="org-doubles">
                                    <div class="table-wrapper table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Название</th>
                                                <th>Населенный пункт пункт</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>ДЭУ №8</td>
                                                <td>Чашники</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Исполком</td>
                                                <td>Новолукомль</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Лукашенко Александр Григорьевич</td>
                                                <td>Могилев</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="org-index">Индекс
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" id="org-index" name="org-index" required="required"
                                           class="form-control col-md-7 col-xs-12" data-inputmask="'mask': '999999'">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="org-location">Местоположение
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="org-location" name="org-location" required="required"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="org-adress" class="control-label col-md-3 col-sm-3 col-xs-12">Адрес</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-adress" class="form-control col-md-7 col-xs-12" type="text"
                                           name="org-adress">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="org-type" class="control-label col-md-3 col-sm-3 col-xs-12">Тип
                                    организации</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-type" class="form-control col-md-7 col-xs-12" type="text"
                                           name="org-type">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="org-upper" class="control-label col-md-3 col-sm-3 col-xs-12">Вышестоящая
                                    организация</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-upper" class="form-control col-md-7 col-xs-12" type="text"
                                           name="org-upper">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="org-email" class="control-label col-md-3 col-sm-3 col-xs-12">Электронная
                                    почта</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-email" class="form-control col-md-7 col-xs-12" type="email"
                                           name="org-email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="org-website" class="control-label col-md-3 col-sm-3 col-xs-12">Веб
                                    сайт</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-website" class="form-control col-md-7 col-xs-12" type="url"
                                           name="org-website">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="org-date-create" class="control-label col-md-3 col-sm-3 col-xs-12">Дата
                                    создания
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="org-date-create" name="org-date-create" type="tel" class="form-control">
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
        </div>     <!--/row Общая информация -->



      



       