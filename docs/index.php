<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/projecticon.jpg" />    <!-- tilte bar icon -->
        <title>A(rtificial) Coffee Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- responsiveness -->
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS own css from scratch -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!--chatbot-->
        <script type="text/javascript" src="chatbot.js"></script>
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage" style="background-image: url('img/coffee.jpg');">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Enjoy Coffee in a heartly way</h1>
                       <a href="products.php" class="btn btn-danger">Order Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/coffee_main.jpeg" alt="Coffee_main">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Coffee</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/desert_main.jpg" alt="Deserts_main ">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Deserts</p>
                                    <p>Enjoy your deserts with the best sweetness.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/food_main.jpeg" alt="Spicy">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Best Eats</p>
                                   <p>Our exquisite collection of spicy eatables to munch.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy 2019. All Rights Reserved.</p>
                   <p>This website is developed by Intelligensia</p>
               </center>
               </div>
           </footer>
        <script type="text/javascript" src="chatbot.js"></script>
        </div>
    </body>
</html>