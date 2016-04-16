<?php
$dbh = new PDO('mysql:host=localhost;dbname=Subscription_Project', 'root', 'root');
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
<body>
<h1> Subscribe </h1>
<form id="bob" style="width: 300px; height: 300px">
    <input type="text" name="field1" placeholder="First Name" /><br></br>
    <input type="email" name="field2" placeholder="Last Name" /><br></br>
    <input type="url" name="field3" placeholder="Email" /><br></br>
    <input type="button" value="Submit"/>
</form>

</body>

</html>

