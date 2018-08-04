<?php 
require_once 'vendor/autoload.php';
require_once 'db.php';

function getTablesNames() {
    global $qb;
    $tablesquery = $qb->query("SELECT name FROM sqlite_master WHERE type='table';");
    $result = $tablesquery->get();
    return $result;
  }
$tableNames = getTablesNames();

function showTablesAsButtons($tables) {
    foreach ($tables as $row) {
      echo "<a href='home.php?$row->name=true'><input id=$row->name type='button' value=$row->name onclick=''></a>";
      
    }
};


function selectAllFromTable($tableName){
  // echo $tableName;
  global $qb;
  $sql = $qb->query("SELECT * FROM $tableName");
  $result = $sql->get();
  // print_r($result);
  
  return $result;
}

function getTableColumns($table){
  $columns = array();
  $i = 0;
  foreach ($table as $row) {
      if ($i == 0) {
        $i++;
          foreach ($row as $key => $value) {
            array_push($columns, $key);
          }
      }
  }
  return $columns;
};

function getTableColsAndTypes(){
  global $qb;
  $db = $qb;
  $cols = $db->fetchColumnTypes('albums', SQLITE_ASSOC);

  foreach ($cols as $column => $type) {
      echo "Column: $column  Type: $type\n";
  }
}



function showTable($table, $tableName){
  // print_r($table);
  echo "<table class='table' border='1'>";
  $i = 0;
  $idKey = null;
  foreach ($table as $row) 
  {
      if ($i == 0) {
        $i++;
        echo "<tr class='tableRow'>";
        foreach ($row as $key => $value) {
          echo "<th id=" . $key . " class='tableHeader'>" . $key . "</th>";
        }
        echo "</tr>";
      }
      echo "<tr>";
      foreach ($row as $value) {
        echo "<td id=" . $value . " class='tableValue'>" . $value . "</td>";
      }
      echo "</tr>";
  }
  echo "</table>";
};

function showAlbumsTable($table){
  // print_r($table);
  echo "<table class='table' border='1'>";
  $i = 0;
  global $idKeys;
  $idKeys = array();
  // echo gettype($idKeys);
  foreach ($table as $row) {
      if ($i == 0) {
        global $idKeys;
        echo "<tr class='tableRow'>";
        foreach ($row as $key => $value) {
          echo "<th id=" . $key . " class='tableHeader'>" . $key . "</th>";
          // echo gettype($idKeys);
          array_push($idKeys, $key);
        }
        echo "</tr>";
      }
      echo "<tr>";
      echo "<td id='AlbumId$i' class='tableValue'>$row->AlbumId</td><td id='' class='tableValue'>$row->Title</td><td id='ArtistsId$i' class='tableValue'>$row->ArtistId</td>";
      echo "</tr>";
      $i++;
  }
  echo "</table>";
};

function showArtistsTable($table){
  // print_r($table);
  echo "<table class='table' border='1'>";
  $i = 0;
  
  foreach ($table as $row) {
      if ($i == 0) {
        global $idKeys;
        $i++;
        echo "<tr class='tableRow'>";
        foreach ($row as $key => $value) {
          echo "<th id=" . $key . " class='tableHeader'>" . $key . "</th>";
          
        }
        echo "</tr>";
      }
      echo "<tr>";
      echo "<td id='ArtistId$i' class='tableValue'>$row->ArtistId</td><td id='' class='tableValue'>$row->Name</td>";
      echo "</tr>";
      $i++;
  }
  echo "</table>";
};


function addSelectOptions($arr){
  print_r($arr);
  foreach ($arr as $item) {
      echo "<option>'$item'</option>";
  }; 
};


function insertContact(){
    global $qb;
  $qb->query("INSERT INTO tests (fname, phone, email) VALUES ('nadav', 87564789, 'nadav@gamil.com')");
}

//   insertContact();
//   selectAllFromTable('tests');
function createModalButton($modalName, $tableName){
  echo "
<button id='addButton' type='button' class='btn btn-info btn-lg' data-toggle='modal' 
data-target='#$modalName' .'Modal'>Add $tableName</button>
";
}

function createinputs($arr) {
  foreach($arr as $input) {
    echo "
    <span class='inputName'> $input: </span><input type='text'><br> 
    ";
  };
}

function getAlbumsByArtistId($id){
  global $qb;
  $sql = $qb->query("SELECT * FROM albums WHERE ArtistId = '$id'");
  $result = $sql->get();
  // print_r($result);
  // echo $result->Title
  foreach($result as $album){
    echo $album->Title;
  }
  return $result;
}
