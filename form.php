<!doctype html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        textarea {
            resize: vertical;
        }
        body {
            direction: rtl;
        }
    </style>
</head>
<body>
<div>
    <div class="container">

        <form action="/" method="post">
            <div class="form-group has-success">
                <label class="form-control-label" for="name">שם</label>
                <input type="text" class="form-control form-control-success" id="name" name="name">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="phone">טלפון</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="email">דוא&quot;ל</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label class="form-control-label" for="message">הודעה</label>
                <textarea class="form-control" id="message" name="message"></textarea>
            </div>

            <button class="btn btn-primary" type="submit">שלח</button>
        </form>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>