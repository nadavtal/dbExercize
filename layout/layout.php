<?php

include_once 'header.php';
// print_r($tableNames);

?>
<div class="container">
    <?php include_once 'navMenu.php'?>
    <div class="row">
        <div class="col-sm-2">
            <?php include_once 'sideMenu.php'; ?>
        </div>
        <div class="col-sm-8 tableDisplay" id="tableDisplay">
            
        </div>
        <div class="col-sm-2">
            <form action="/" method="post">
            Search: <input type="text" onkeyup="showHint(this.value)">
            </form>
            <p>Suggestions: <span id="txtHint"></span></p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addArtistModal" value="">Add Artist</button>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addAlbumsModal" value="">Add Album</button>
              
        </div>
    </div>
    <?php  include_once './modals/Modals.php'; ?>
</div>


    <?php include_once 'footer.php';?>