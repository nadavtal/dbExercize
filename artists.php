<?php
include './functions.php';

$table = selectAllFromTable('artists');
showArtistsTable($table);
?>

<script>
   $(".tableValue").click(function(event) {
        // alert('here');
        var id = event.currentTarget.id;
        // var tableName = $(<?= $tableNames[1]->name  ?>).attr('id');
        alert(id);
        // $.ajax({
        //     url: "getTable.php",
        //     type: "POST",
        //     data:{"tableName":tableName}
        // }).done(function(result) {
        //     $("#tableDisplay").html(result);
        // });
    });
</script>