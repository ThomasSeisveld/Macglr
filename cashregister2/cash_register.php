<!DOCTYPE html>
<html>
<head>
    <title>MacMedia Cash Register</title>
    <style>
        #info{
            width: 100%;
            height: 100px;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <h1>Welcome to MacMedia</h1>
    <?php
        //Connect to database
        $db = new SQLite3("dbMacMedia.db");
        $db->busyTimeout(5000);
        

        $query = "SELECT * FROM snacks";
        $result = $db->query($query);

        if(!$result){
            echo $db->lastErrorMsg();
        }

        if(isset($_POST['info'])){
            //get info from textarea
            $info = $_POST['info2'];
            $to = $_POST['email'];
            $subject = "MacMedia";
            $message = "Your order is being prepaired you wil get a nother mail if your order is done." . "\r\n" . "you ordered, " . $info . "\r\n" . "\r\n";
            $headers = "From: MacMedia";
            $email = $_POST['email'];
            $query = "INSERT INTO Email (Email) VALUES ('$email')";
            $result = $db->query($query);
            mail($to, $subject, $message, $headers);
        }
    ?>

    <table>
    <?php
        //Read results from query and create the button, number and price field for each result
        while($snack = $result->fetchArray(SQLITE3_ASSOC)) {?>
            <tr>
                <td>
                    <button type="button" class="snackButton" onclick="addSnack('<?php echo $snack['snackName']?>', <?php echo $snack['snackPrice']?>)" id="<?php echo $snack['ID']; ?>">
                        <?php echo $snack['snackName']; ?>
                    </button>
                </td>
                <td>
                    <input type="number" id="<?php echo $snack['snackName']; ?>" name="<?php echo $snack['snackName']; ?>" value="0" disabled>
                </td>
                <td>
                    <input type="text" class="snackPrice" id="<?php echo $snack['ID']; ?>" value="<?php echo $snack['snackPrice']; ?>" disabled>
                </td>
            </tr>
    <?php }; ?>
    </table>

    <form method="post">

        <textarea id="info" name="info2"></textarea>
        <input type="button" value="send info" onclick="showinfo()">
        <strong>Total amount for this order:</strong>
        <input type="text" id="totalOrderAmount" disabled>
        please enter your email address:
        <input type="text" id="email" name="email">

        <input type="submit" name="info" value="send mail">
    </form>

 </body>

<script src="cash_register.js"></script>
</html>
