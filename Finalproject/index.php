<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>  
        <link rel="shortcut icon" href="img/summer-fashion-logo-template.jpg" />
        <title>Project Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>

        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>
    <body>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell the best outfit all town .</h1>
                       <p>Guaranteed quality on all premium brands.</p>
                       <br><br>
                       <a href="products.php" class="effect1">Shop Now<span class="bg"></span></a>
                   </div>
                   </center>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy Project Store. All Rights Reserved. | Contact Us: +62 1234 5678 0</p>
                   <p>This website is developed by Azril and Tiara</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>