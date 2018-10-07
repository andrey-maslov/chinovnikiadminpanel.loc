 <!-- Modal New workplace -->
 <div class="modal fade new-workplace" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title">Новая должность госслужащего</h4>
      </div>
      <div class="modal-body">
        <form data-parsley-validate class="form-horizontal form-label-left">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add-civil-org">Организация <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="add-civil-org" id="add-civil-org" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add-civil-position">Должность <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="add-civil-position" id="add-civil-position" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add-civil-start">Назначение
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" class="form-control" data-toggle="tooltip" id="add-civil-start" name="add-civil-start" title="Можно указать неполную дату. Например, только год, если не известно остальное">
            </div> 
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="add-civil-end">Увольнение
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="add-civil-end" id="add-civil-end" class="form-control" data-toggle="tooltip" title="Можно указать неполную дату. Например, только год, если не известно остальное">
            </div> 
          </div>
          <div class="form-group">
            <label for="add-civil-phone" class="control-label col-md-3 col-sm-3 col-xs-12">Рабочий телефон</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input class="form-control col-md-7 col-xs-12" type="tel" name="add-civil-phone" id="add-civil-phone">
            </div>
          </div>
          <div class="form-group">
            <label for="add-civil-comment" class="control-label col-md-3 col-sm-3 col-xs-12">Комментарий</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea class="form-control" rows="3" name="add-civil-comment" id="add-civil-comment"></textarea>
            </div>
          </div>
       
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="submit" class="btn btn-success">Сохранить</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>