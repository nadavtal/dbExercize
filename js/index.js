$( document ).ready(function() {
// alert('here');
    $(".sideMenuItem").click(function(event) {
        // alert('here');
        var tableName = event.currentTarget.id;
        // var tableName = $(<?= $tableNames[1]->name  ?>).attr('id');
        // // alert(tableName);
        $.ajax({
            url: "getTable.php",
            type: "POST",
            data:{"tableName":tableName}
        }).done(function(result) {
            $("#tableDisplay").html(result);
        });
    });


    $("#albums").click(function(event) {
        // alert('here');
        var id = event.currentTarget.id;
        // var tableName = $(<?= $tableNames[1]->name  ?>).attr('id');
        // // alert(tableName);
        $.ajax({
            url: "albums.php",
            type: "POST",
            data:{"tableName":'albums'}
        }).done(function(result) {
            $("#tableDisplay").html(result);
        });
    });

    $("#artists").click(function(event) {
        // alert('here');
        var id = event.currentTarget.id;
        // var tableName = $(<?= $tableNames[1]->name  ?>).attr('id');
        // // alert(tableName);
        $.ajax({
            url: "artists.php",
            type: "POST",
            data:{"tableName":'artists'}
        }).done(function(result) {
            $("#tableDisplay").html(result);
        });
    });


    $(".tableValue").click(function(event) {
        alert('here');
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
});