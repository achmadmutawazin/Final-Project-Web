<?php
    session_start();
    require 'check_if_added.php';
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
        <div id="bannerImage2">
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron jumbotron-fluid" style="color: black;">
                    <h1>Welcome to Project Store!</h1>
                    <p style="font-weight: normal;">We have the best outfit for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/1/p/8685/309/427/8685309427_2_2_8.jpg" alt="jeans" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;"> five pocket design <br><br> length: 71.9 cm. </div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Skinny Jeans</h3>
                                    <p>Price: Rp500.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/2/p/8676/522/505/8676522505_2_6_8.jpg" alt="trousersmen" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;"> Cargo running pants <br><br> length: 68 cm. </div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cargo Pants</h3>
                                    <p>Price: Rp600.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/1/p/8696/201/800/8696201800_2_6_8.jpg" class="imeji" alt="trouserwomen">
                                <div class="middle"><div class="text" style="font-size:larger;"> five-pocket design <br><br>length: 27 cm. </div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Denim Shorts</h3>
                                    <p>Price: Rp380.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/1/p/4399/301/700/4399301700_2_6_8.jpg" alt="shorts" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">  patchwork detailing <br><br> length: 35 cm.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Grid Mini Skirt</h3>
                                    <p>Price: Rp450.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/2/p/8711/560/707/8711560707_2_6_8.jpg" alt="jacket" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   faux fleece lining <br><br> size: XL.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Trucker Suede Jacket</h3>
                                    <p>Price: Rp2.000.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/2/p/8711/702/251/8711702251_2_6_8.jpg" alt="blazer"class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   hood, pockets, zip and cuffs <br><br> size: XL.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sport Jacket for Men</h3>
                                    <p>Price: Rp600.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/0/2/p/8591/568/500/8591568500_2_6_8.jpg" alt="hoodie"class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   Blue hoodie with contrast slogan detail <br><br> size: XXL.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Hoodie Unisex</h3>
                                    <p>Price: Rp650.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/1/2/p/2605/840/001/2605840001_2_3_8.jpg" alt="sandals" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   Flat PlayStation slide <br><br> size: 37.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sandals</h3>
                                    <p>Price: Rp200.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/1/2/p/2003/840/040/2003840040_2_3_8.jpg" alt="boots" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   Corset style lace up boots  <br><br> size: 42.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Boots</h3>
                                    <p>Price: Rp1.000.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/1/1/p/1852/840/001/1852840001_2_2_8.jpg" alt="shoes" class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   Lilo & Stitch licensed casual sneakers <br><br> size: 38.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Shoes</h3>
                                    <p>Price: Rp1.500.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/1/1/p/1888/840/040/1888840040_2_2_8.jpg" alt="bootswomen"class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">   Cowboy style black knee-length boots. <br><br> size: 37.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Long Boots</h3>
                                    <p>Price: Rp2.500.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                            <div class="mockup">
                                <img src="https://static.pullandbear.net/2/photos//2021/I/1/2/p/2353/840/001/2353840001_2_3_8.jpg" alt="shoesmen"class="imeji">
                                <div class="middle"><div class="text" style="font-size:larger;">  White cloth Marvel sneakers.  <br><br> size: 40.</div></div></div>
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Shoes for Men</h3>
                                    <p>Price: Rp2.000.000</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
               <center>
                   <p>Copyright &copy Project Store. All Rights Reserved. | Contact Us: +62 1234 56789</p>
                   <p>This website is developed by Azril and Tiara</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
