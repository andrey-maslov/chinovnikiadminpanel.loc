

<script src="js/bootstrap.min.js"></script>

<script src="js/nicescroll/jquery.nicescroll.min.js"></script>

<!-- daterangepicker -->
<script src="js/moment/moment.min.js"></script>
<script src="js/datepicker/daterangepicker.js"></script>
<!-- input mask -->
<script src="js/input_mask/jquery.inputmask.js"></script>
<!-- select2 -->
<script src="js/select/select2.full.js"></script>

<script src="js/custom.js"></script>

<!--    Datatable new-->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


<script type="text/javascript">
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ckeditor' );
    CKEDITOR.replace( 'ckeditor2' );
</script>

<!-- input mask -->
<script>
    $(document).ready(function() {
        $(":input").inputmask();
    });
</script>

<!-- dropzone -->
<script src="js/dropzone/dropzone.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.date-picker').daterangepicker({
            singleDatePicker: true,
            calender_style: "picker_4",
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