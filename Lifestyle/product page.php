 <?php
require 'include/common.php';
?>
<html>
    <head>
        <title>Welcome|Lifestyle Store</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        
    </head>
    <body>
        <?php
        include 'include/header.php';
        include 'include/check_if_added.php';
        ?>
        <div class="container">
            <br>
            <br>
        <div class="jumbotron">
            
            <h1>Welcome to Lifestyle Store</h1><br>
            We have the best cameras, wactches, and shirts for you. No need to hunt around, we have all in one place.
        </div>
        </div>
        <div class="container">
            <div class="row row-style text-center" id="camera">
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="camera/canon eos.jpg">
                    <h3>Cannon EOS</h3>
                    Price Rs.36000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(1))
                        {                          
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {                  
                            ?>
                    <a href="include/cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                    
                            
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="camera/sony.jpg">
                    <h3>Sony DSLR</h3>
                    Price Rs.40000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(3))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="camera/nikon.jpg">
                    <h3>Nikon DSlR</h3>
                    Price Rs.50000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(2))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="camera/olympus.jpg">
                    <h3>Olympus</h3>
                    Price Rs.55000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(4))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
            <div class="row row-style text-center" id="watches">
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Watches/rolex.jpg">
                    <h3>Rolex</h3>
                    Price Rs.80000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(5))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Watches/titan.jpg">
                    <h3>TITAN</h3>
                    Price Rs.3000.00<br>
                   <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(6))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Watches/Faber luba.jpg">
                    <h3>Faber Luba</h3>
                    Price Rs.18000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(7))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Watches/Favre-leuba.jpg">
                    <h3>Favre Lueba</h3>
                    Price Rs.30000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(8))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
            <div class="row row-style text-center" id="shirts">
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Shirt/Allen-soly.jpg">
                    <h3>Allen Solly</h3>
                    Price Rs.1500.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(9))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Shirt/Grasim.jpg">
                    <h3>Grasim</h3>
                    Price Rs.2000.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(10))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Shirt/shirt.jpg">
                    <h3>H&W</h3>
                    Price Rs.1800.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(11))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="thumbnail">
                    <img src="Shirt/Luis.jpg">
                    <h3>Luis Phillipe</h3>
                    Price Rs.1500.00<br>
                    <?php
                    if(!isset($_SESSION['email']))
                    {?>
                    <a href="login.php?flag=0" role="button" class="btn btn-primary btn-block">Buy Now</a>
                    <?php 
                    }
                    else
                    {
                        if(checkifadded(12))
                        {
                            ?>
                    <a href="#" class="btn btn-block btn_primary" disabled>Added to cart</a>
                            <?php
                        }
                        else
                        {
                            ?>
                    <a href="include/cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                   
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
       
         <div class="navbar navbar-inverse navbar-fixed-bottom">
            <center>Copyright © Lifestyle Store. All Rights
Reserved Contact Us: +91 90000 00000 Devloper:Darkcoderz</center>
        </div>
        
    </body>
</html>