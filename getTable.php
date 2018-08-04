<?php
include 'functions.php';

$tableName = isset($_REQUEST['tableName'])? $_REQUEST['tableName']: "";

$modal = $tableName . 'modal';

createModalButton($modal, $tableName);
$table = selectAllFromTable($tableName);
$columnsNames = getTableColumns($table);
showTable($table, $tableName);

?>

<div id="<?= $modal ?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h1>add <?= $tableName ?> </h1>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <!-- <select class="selectpicker">
                        <option>asdsd</option>
                    </select> -->
                </div>
            <div class="modal-body">
                <form>
                    <?= createinputs($columnsNames); ?>
                </form>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-default" data-dismiss="modal">Add</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>

    <script>
// $(".tableValue").click(function(event) {
//         // alert('here');
//         var id = event.currentTarget.id;
//         // var tableName = $(<?= $tableNames[1]->name  ?>).attr('id');
//         alert(id);
//         // $.ajax({
//         //     url: "getTable.php",
//         //     type: "POST",
//         //     data:{"tableName":tableName}
//         // }).done(function(result) {
//         //     $("#tableDisplay").html(result);
//         // });
//     });
    </script>