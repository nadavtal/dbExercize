<?php include ('form_process.php');
        // include ('index.php');
?>

<div>
    <div class="container">

        <form action="/" method="post">
        <p><b>Start typing a name in the input field below:</b></p>
        
        First name: <input type="text" onkeyup="showHint(this.value)">
        </form>
        <p>Suggestions: <span id="txtHint"></span></p>


        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 
            <div class="form-group has-success">
                <label class="form-control-label" for="name">שם</label>
                <input type="text" class="form-control form-control-success" id="name" name="name">
                <span class="error"><?= $name_error ?></span>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="phone">טלפון</label>
                <input type="text" class="form-control" id="phone" name="phone">
                <span class="error"><?= $phone_error ?></span>
            </div>
            <div class="form-group">
                <label class="form-control-label" for="email">דוא&quot;ל</label>
                <input type="text" class="form-control" id="email" name="email">
                <span class="error"><?= $email_error ?></span>
            </div>
            

            <button class="btn btn-primary" type="submit">שלח</button>
        </form>
        <button class="btn btn-success" type="button" onclick='updateTable()'>עדכן רשומים</button>
        <!-- <div class="table" id="tableDisplay">

        </div> -->
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script>
function showHint(str) {
    alert(str);
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}

function updateTable() {
    alert('here');
    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tableDisplay").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getTable.php", true);
        xmlhttp.send();
}
</script>
</body>
</html>