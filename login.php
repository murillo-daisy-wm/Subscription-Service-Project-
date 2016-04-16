<?php
$dbh = new PDO('mysql:host=localhost;dbname=Subscription_Project', 'root', 'root');
//theoretically all of this PHP should work but it doesn't & everything is in it's place and should work
print_r($_POST);
if (@$_POST['submit'] == "Submit") {
    print_r($_POST);
    $errorMessage = " ";
    if (empty($_POST['firstName'])) {
        $errorMessage = "<li>You forgot to enter your first name.</li>";
    }
    if (empty($_POST['lastName'])) {
        $errorMessage = "<li>You forgot to enter your last name.</li>";
    }
    if (empty($_POST['Email'])) {
        $errorMessage = "<li>You forgot to enter a password</li>";
    }

    $stmt = $dbh->prepare("INSERT INTO Users(firstName, lastName, Email) VALUES (?, ?, ?)");
    $result = $stmt->execute(array($_POST['firstName'], $_POST['lastName'], $_POST['Email']));
    if (!$result) {
        print_r($dbh->errorInfo());
    }
    if (!empty($errorMessage)) {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }
}
//end of php
?>
<!DOCTYPE html>
    <head>
    <title> You </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<h1> Profile </h1>


</body>

    </html>
