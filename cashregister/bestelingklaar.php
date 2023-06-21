<?php
//conect to database
$db = new SQLite3("dbMacMedia.db");
$db->busyTimeout(5000);

//create query and execute query to get all orders
$query = "SELECT * FROM Email";
$result = $db->query($query);

//send email to email adress
if(isset($_POST['send'])){
    $to = $_POST['email'];
    $subject = "MacMedia";
    $message = "Your order is ready, you can pick it up at the counter.";
    $headers = "From: MacMedia";
    mail($to, $subject, $message, $headers);

    //delete email from database with the same ID as the email that is send
    $ID = $_POST['ID'];
    $query = "DELETE FROM Email WHERE ID = '$ID'";
    $result = $db->query($query);

    //reload page
    header("Refresh:0");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bestellingen</title>
</head>
<body>
<!-- show the orders and put a button next to it that when you click it a email wil be send to the email of that order -->
<?php while($email = $result->fetchArray(SQLITE3_ASSOC)) {?>
    <h1>Bestellingen</h1>
    <h2>Bestelling van:</h2>
    <p><?php echo $email['Email']; ?></p>
    <h2>ID van bestelling</h2>
    <p><?php echo $email['ID']; ?></p>
    <form method="post">
        <input type="hidden" name="ID" value="<?php echo $email['ID']; ?>">
        <input type="hidden" name="email" value="<?php echo $email['Email']; ?>">
        <input type="submit" name="send" value="send">
    </form>
<?php }; ?>

</body>
</html>
