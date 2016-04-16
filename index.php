<?php
$dbh = new PDO('mysql:host=localhost;dbname=Subscription_Project', 'root', 'root');
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


?>
<!DOCTYPE html>
<head>
    <title> You </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<center>
    <div id="title">
        <h1>BeautifullyYou</h1>
    </div>
    <div id="green">
        <a href="index.php">
            <button class="button button1">Home</button>
        </a>
        <a href="subscribe.php">
            <button class="button button1">Subscribe</button>
        </a>
        <a href="login.php">
            <button class="button button1">Login</button>
        </a>
        <a href="cart.php">
            <button class="button button1">Cart</button>
        </a>
    </div>
</center>

<br></br>

<div class="form-style-8">

<h1 style="font-size: 200%; float: right">We've been open since 1990s that have always served <br>
    the best cosmetics and health products to our costumers </h1>
    <center>
        <form id="bob" style="float: left">
            <input type="text" name="firstName" placeholder="First Name"/><br></br>
            <input type="email" name="lastName" placeholder="Last Name"/><br></br>
            <input type="url" name="Email" placeholder="Email"/><br></br>
            <input type="button" value="submit" placeholder="Sign Up " style="background-color: lightyellow"/>
        </form>
    </center>
</div>

<script type="text/javascript">
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight) + "px";
    }
</script>

</body>
</html>
