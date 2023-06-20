<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Dev.css">
    <link rel="stylesheet" href="CSS/privacy.css">
    <link rel="stylesheet" href="CSS/footer.css">
</head>
<body>
<?php
include_once 'PHP/header.php';
?>

<div class="container">
    <div class="flexbox">
        <div1>
            <a href="burgers.php?id=huis1"><img src="img/huis1.jpeg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Zijdeweg 26</h4>
            <p class="huis">2244 BG Wassenaar</p>
            <p class="huis"><b>€ 1.365.000</b></p>
        </div1>
        <div1>
            <a href="burgers.php?id=huis2"><img src="img/huis2.jpeg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Botersloot 545</h4>
            <p class="huis">3011 HE Rotterdam</p>
            <p class="huis"><b>€ 1.570.000</b></p>
        </div1>
        <div1>
            <a href="burgers.php?id=huis3"><img src="img/huis3.jpeg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Botersloot 547</h4>
            <p class="huis">3011 HE Rotterdam</p>
            <p class="huis"><b>€ 1.975.000</b></p>
        </div1>
        <div1>
            <a href="burgers.php?id=huis4"><img src="img/huis4.jpeg" alt="huis" class="huis-img"></a>
            <h4 class="huis" style="color: #2AA2D6;">Wijnhaven 73 X</h4>
            <p class="huis">2244 WK Rotterdam</p>
            <p class="huis"><b>€ 1.850.000 </b></p>
        </div1>
    </div>
</div>




<div class="main-info">
    <h2><b>Welkom bij onze website van Macglr!</b></h2>
    <br>

</div>


<div class="footer">
    <hr class="hr-top">
    <img src="img/logo.png" id="logo-footer" alt="logo">
    <div class="footer-text">
        <a href="pages.php?id=conditions">Conditions</a>
        <a href="pages.php?id=cookies">Cookies</a>

        &copy2023Villa4u

        <a href="pages.php?id=privacy">Privacy</a>
        <a href="contact.html">Contact</a>
    </div>

    <hr class="hr-bottom">
</div>
<script src="cashregister/cash_register.js"></script>
</body>
</html>