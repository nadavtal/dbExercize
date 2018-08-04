<?php
    include 'index.php';
    // print_r ($tableNames[0]);

?>

<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a class="menuitem">Menu 1</a>
                    <ul class="submenu">
                        <li class="sideMenuItem"id="<?= $tableNames[0]->name  ?>"><a><?= $tableNames[0]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[1]->name  ?>"><a><?= $tableNames[1]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[2]->name  ?>"><a><?= $tableNames[2]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[3]->name  ?>"><a><?= $tableNames[3]->name  ?> </a> </li>                       
                        
                    </ul>
                </li>
                <li><a class="menuitem">Menu 2</a>
                    <ul class="submenu">
                        <li class="sideMenuItem"id="<?= $tableNames[4]->name  ?>"><a><?= $tableNames[4]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[5]->name  ?>"><a><?= $tableNames[5]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[6]->name  ?>"><a><?= $tableNames[6]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[7]->name  ?>"><a><?= $tableNames[7]->name  ?> </a> </li>   
                    </ul>
                </li>
                <li><a class="menuitem">Menu 3</a>
                    <ul class="submenu">
                        <li class="sideMenuItem"id="<?= $tableNames[8]->name  ?>"><a><?= $tableNames[8]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[9]->name  ?>"><a><?= $tableNames[9]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[10]->name  ?>"><a><?= $tableNames[10]->name  ?> </a> </li>
                        <li class="sideMenuItem"id="<?= $tableNames[11]->name  ?>"><a><?= $tableNames[11]->name  ?> </a> </li>   
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<script>
    
</script>