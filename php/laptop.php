


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptop</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="../js/home.js" defer></script>
    
</head>

<body onload="getAllPage()">

    <!-- top menu pc shop -->
    <div class="top-menu-pc-shop" id="top">
        <div class="main-menu-pc-shop">
            <i class="fas fa-bars" id="icon-menu-pc-shop" style='font-size:34px'></i>
            <div class="logo-pc-shop">
                <img src="../img/logo.jpg" alt="" >
            </div>
            <i class='fas fa-cart-plus' id="icon-my-order-list" style='font-size:34px'></i>
        </div>
    </div>
    <a href="#top"><i class="fas fa-long-arrow-alt-up" id="icon-go-to-top"></i></a>

    <!-- sesion for menu pc shop -->
    <div class="list-menu-pc-shop">
        <div class="main-list-menu-pc-shop">
            <ul>
                <li id="home-list">
                    <i class="fas fa-home" style="margin-right:20px ;font-size:20px"></i><a href="home.php">Home</a></li>
                <li id="laptop-list">
                    <i class="fas fa-laptop" style='font-size:20px;margin-right:18px ;margin-top: 4px;'></i>
                    <div class="list-my-laptop" style="font-size: 24px;color: blue;">Laptop
                        <ul class="list-computer" >
                            <li><a href="laptop.php#laptop-asus">ASUS</a></li>
                            <li><a href="laptop.php#laptop-Dell">DELL</a></li>
                            <li><a href="laptop.php#laptop-msi">MSI</a></li>
                        </ul>
                    </div>
                </li>
                <li id="desktop-list">
                    <i class="fas fa-desktop" style='font-size:20px;margin-right:20px ;'></i><a href="desktop.php">Desktop</a></li>
                <li id="accessories-list">
                    <i class="fas fa-cog" style='font-size:20px;margin-right:7px ; margin-top: 4px;'></i>
                    <div class="list-my-accessories" style="font-size: 24px;color: blue;">Accessories
                        <ul class="list-accessories" >
                            <li><a href="accessories.php#accessories-headset">Headset</a></li>
                            <li><a href="accessories.php#accessories-ssd">Hard Disk</a></li>
                            <li><a href="accessories.php#accessories-mouse">Mouse</a></li>
                            <li><a href="accessories.php#accessories-keyboard">Keyboard</a></li>
                        </ul>
                    </div>
                </li>
                    
            </ul>
        </div>
    </div>
   
    <video width="100%" height="" autoplay muted loop>
        <source src="../vdo/asus1.mp4" type="video/mp4">
    </video>

    <h2>OUR PRODUCT</h2>

    <div class="accessories-detail">
        <h2>ASUS  LAPTOP</h2>
    </div>
    <div class="computer-container" id="laptop-asus">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'asus';";
                $asus=$conn->query($sql);
                if ($asus->num_rows > 0) {
                    while($row = $asus->fetch_assoc()) {   
                        echo   "
                        <div class=product>
                        <img src=$row[ProImg] class='product-img' >
                        <h3 class='product-name' >$row[ProName]</h3>
                        <div class=detail>
                            <p>$row[ProDetail]</p>
                        </div>
                        <hr>
                        <div class=price>   
                            <h3 class='product-price' >$ $row[ProPrice]</h3>
                            <i class='fas fa-cart-plus' id=icon-add-product-to-cart data-id=$row[ProID]></i>
                        </div>
                    </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>DELL  LAPTOP</h2>
    </div>
    <div class="computer-container" id="laptop-Dell">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'dell';";
                $dell=$conn->query($sql);
                if ($dell->num_rows > 0) {
                    while($row = $dell->fetch_assoc()) {   
                        echo   "
                        <div class=product>
                        <img src=$row[ProImg] class='product-img' >
                        <h3 class='product-name' >$row[ProName]</h3>
                        <div class=detail>
                            <p>$row[ProDetail]</p>
                        </div>
                        <hr>
                        <div class=price>   
                            <h3 class='product-price' >$ $row[ProPrice]</h3>
                            <i class='fas fa-cart-plus' id=icon-add-product-to-cart data-id=$row[ProID]></i>
                        </div>
                    </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>MSI  LAPTOP</h2>
    </div>
    <div class="computer-container" id="laptop-msi">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'msi';";
                $msi=$conn->query($sql);
                if ($msi->num_rows > 0) {
                    while($row = $msi->fetch_assoc()) {   
                        echo   "
                        <div class=product>
                        <img src=$row[ProImg] class='product-img' >
                        <h3 class='product-name' >$row[ProName]</h3>
                        <div class=detail>
                            <p>$row[ProDetail]</p>
                        </div>
                        <hr>
                        <div class=price>   
                            <h3 class='product-price' >$ $row[ProPrice]</h3>
                            <i class='fas fa-cart-plus' id=icon-add-product-to-cart data-id=$row[ProID]></i>
                        </div>
                    </div>
                        ";
                    }
                } 
            }
        ?>
    </div>
    
    <div class="order-list-container">
        <!-- = card in js -->
        <div class="main-order-list">
            <div class="top-order-list">
                <h3>My Order</h3>
                <i class="fas fa-times" id="icon-close-order-list"></i>
            </div>
            <div class="amount-order-product">
                <!-- <div class="each-order-product" id="koko">
                    <div class="photo-product">
                        <img src="img/dell1.PNG" alt="" width="12%" class="cart-img">
                        <h4 class="cart-product-title">Dell Vos</h4>
                    </div>
                    <div class="center-of-each-product">
                        <h4 class="cart-price">$100</h4>
                        <div class="number-of-qty">
                            <input type="number" value="1" class="cart-quantity">
                        </div>
                    </div>
                    <i class='fa fa-trash cart-remove'style='font-size:20px'></i>
                </div>         -->
            </div>
            <hr>
            <div class="button-order-list">
                <input type="submit" name="" class="btn-buy" value="Buy Now">
                <div class="total">
                    <h4 class="total-title">Total : </h4>
                    <h4 class="all-total-price">$0</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="button-foot-pc reveal3" id="koko">
        <div class="main-footer-pc-shop">
            <div class="left-footer-pc">  
                <h3>ABOUT US</h3>
                <div class="body-left-footer-pc">
                    <p>
                        <span style="color:rgb(22, 5, 83) ;font-weight:bold;">Tra Tech Co.,Ltd.</span> offer Installation & Maintenance for Digital technologies, 
                        provide excellent quality of product from the No1 Security Camera system Brand 
                        in the world HIKVISION. Currently working to be the top Digital Tech co, in Cambodia.
                    </p>
                </div>
            </div>
            <div class="center-footer-pc">  
                <h3>CONTACT US</h3>
                <div class="body-center-footer-pc">
                    <div class="phone-pc-shop" style="margin-bottom: 3px;">
                        <i class="fa fa-phone-square">  012 555 888 / 098 555 888 / 068 555 888</i>
                    </div>
                    <div class="phone-pc-shop" style="margin-bottom: 3px;">
                        <i class="fa fa-envelope">  computershop@gmail.com</i>
                    </div>
                    <div class="phone-pc-shop" style="margin-bottom: 3px;">
                        <i class="fa fa-map-marker-alt"> No.222, Street 132, Toul Kork, Phnom Penh</i>
                    </div>   
                </div>
                <div class="my-location-pc-shop" style="text-align: center; margin-top: 3px;">
                    <a href="https://www.google.com/maps/place/Tra+Tech+Co.,+Ltd./@11.5654948,104.8903706,17z/data=!3m1!4b1!4m5!3m4!1s0x310951e62347fddf:0x4fafd47babcc7504!8m2!3d11.5655125!4d104.8925575"><i class="fas fa-map-marked-alt" id="map-pc"></i></a>
                </div>
            </div>
            <div class="right-footer-pc">  
                <h3>FOLLOW US</h3>
                <div class="body-right-footer-pc" style="text-align: center;">
                    <i class="fab fa-facebook-square">  </i>
                    <i class="fab fa-youtube">  </i>
                    <i class="fab fa-instagram-square"> </i>
                    <i class="fab fa-twitter-square"> </i>
                    <i class="fab fa-line"></i>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        //code for footer in each page
        window.addEventListener("scroll", ()=>{
            let scrolled=window.scrollY;
            let She=document.getElementsByClassName("button-foot-pc");
            let Him=document.getElementById("koko");
            
            if(scrolled>=90){
                document.querySelector("#icon-go-to-top").style.display="flex";
            }else{
                document.querySelector("#icon-go-to-top").style.display="none";
            }

            if((Him.offsetTop-(665))<=scrolled ){
                for(const F of She){
                   F.classList.add("activefooter");
                }
            }else{
                for(const F of She){
                   F.classList.remove("activefooter");
                }
            }
        });  
    </script>

</body>

</html>