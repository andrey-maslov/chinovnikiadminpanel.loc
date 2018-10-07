<script src="js/bootstrap.min.js"></script>

<!-- daterangepicker -->
<script src="js/moment/moment.min.js"></script>
<script src="js/datepicker/daterangepicker.js"></script>
<!-- input mask -->
<script src="js/input_mask/jquery.inputmask.js"></script>
<!-- select2 -->
<script src="js/select/select2.full.js"></script>


<!--    Datatable new-->
<script src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<!--User scripts-->
<script src="js/custom.js"></script>

<!-- input mask -->
<script>
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>

<!-- dropzone -->
<script src="js/dropzone/dropzone.js"></script>

<script>
    $(document).ready(function() {
        $('.date-picker').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4",
            "locale": {
        "format": "MM.DD.YYYY",
        "separator": " - ",
        "applyLabel": "Применить",
        "cancelLabel": "Закрыть",
        "fromLabel": "С",
        "toLabel": "По",
        "customRangeLabel": "Custom",
        "weekLabel": "Н",
        "daysOfWeek": [
            "Вс",
            "Пн",
            "Вт",
            "Ср",
            "Чт",
            "Пт",
            "Сб"
        ],
        "monthNames": [
            "Январь",
            "Февраль",
            "Март",
            "Апрель",
            "Май",
            "Июнь",
            "Июль",
            "Август",
            "Сентябрь",
            "Октябрь",
            "Ноябрь",
            "Декабрь"
        ],
        "firstDay": 1
    },
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });

    });
</script>

<!-- select2 -->
<script>
    $(document).ready(function() {
        $(".select2_single").select2({
            placeholder: "Select a state",
            allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
            maximumSelectionLength: 9,
            placeholder: "Максимум 4 варианта",
            language: "ru",
            width: "100%",
            allowClear: true
        });
    });
</script>
<!-- /select2 -->

<!-- pace Page loader -->
<script src="js/pace/pace.min.js"></script>

<!--    Datatable new-->
<script>
    $(document).ready( function () {
        $('#allCases').DataTable({
            responsive: true,
            language: {
                "processing": "Подождите...",
                "search": "Поиск:",
                "lengthMenu": "Показать _MENU_ записей",
                "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                "infoEmpty": "Записи с 0 по 0 из 0 записей",
                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                "infoPostFix": "",
                "loadingRecords": "Загрузка записей...",
                "zeroRecords": "Записи отсутствуют.",
                "emptyTable": "В таблице отсутствуют данные",
                "paginate": {
                    "first": "Первая",
                    "previous": "Предыдущая",
                    "next": "Следующая",
                    "last": "Последняя"
                },
                "aria": {
                    "sortAscending": ": активировать для сортировки столбца по возрастанию",
                    "sortDescending": ": активировать для сортировки столбца по убыванию"
                }
            }
        });
        $('#allManagers').DataTable({
            responsive: true,
            "pageLength": 15,
            language: {
                "processing": "Подождите...",
                "search": "Поиск по записям:",
                "lengthMenu": "Показать _MENU_ записей",
                "info": "Записи с _START_ по _END_ <strong>из _TOTAL_ записей</strong>",
                "infoEmpty": "Записи с 0 по 0 из 0 записей",
                "infoFiltered": "(отфильтровано из _MAX_ записей)",
                "infoPostFix": "",
                "loadingRecords": "Загрузка записей...",
                "zeroRecords": "Записи отсутствуют.",
                "emptyTable": "В таблице отсутствуют данные",
                "paginate": {
                    "first": "Первая",
                    "previous": "Предыдущая",
                    "next": "Следующая",
                    "last": "Последняя"
                },
                "aria": {
                    "sortAscending": ": активировать для сортировки столбца по возрастанию",
                    "sortDescending": ": активировать для сортировки столбца по убыванию"
                }
            }
        });
    } );
</script>