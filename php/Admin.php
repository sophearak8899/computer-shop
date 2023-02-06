
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="../js/Admin.js" defer></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</head>
<body>
    <!-- top menu pc shop -->
    <div class="top-menu-pc-shop" id="top">
        <div class="main-menu-pc-shop">
            <i class="fas fa-bars" id="icon-menu-pc-shop" style='font-size:34px;'></i>
            <div class="logo-pc-shop">
                <img src="../img/logo.jpg" alt="" >
            </div>
            <i class='fas fa-cart-plus' id="icon-my-order-list" style='font-size:34px;'></i>
        </div>
    </div>
    <a href="../php/FormInput.php">Input form</a>
    <!-- list menu pc shop -->
    <div class="list-menu-pc-shop">
        <div class="main-list-menu-pc-shop">
            <ul>
                <li id="home-list">
                    <i class="fas fa-home" style="margin-right:20px ;font-size:20px"></i><a href="../php/Admin.php">Home</a></li>
                <li id="laptop-list">
                    <i class="fas fa-laptop" style='font-size:20px;margin-right:18px ;margin-top: 4px;'></i>
                    <div class="list-my-laptop" style="color: blue;">Laptop
                        <ul class="list-computer" >
                            <li><a href="../php/Admin.php#asus-laptop">ASUS</a></li>
                            <li><a href="../php/Admin.php#dell-laptop">DELL</a></li>
                            <li><a href="../php/Admin.php#msi-laptop">MSI</a></li>
                        </ul>
                    </div>
                </li>
                <li id="desktop-list">
                    <i class="fas fa-desktop" style='font-size:20px;margin-right:20px ;'></i><a href="../php/Admin.php#dell-desktop">Desktop</a></li>
                <li id="accessories-list">
                    <i class="fas fa-cog" style='font-size:20px;margin-right:7px ; margin-top: 4px;'></i>
                    <div class="list-my-accessories" style="color: blue;">Accessories
                        <ul class="list-accessories" >
                            <li><a href="../php/Admin.php#accessories-headset">Headset</a></li>
                            <li><a href="../php/Admin.php#accessories-ssd">Storage</a></li>
                            <li><a href="../php/Admin.php#accessories-mouse">Mouse</a></li>
                            <li><a href="../php/Admin.php#accessories-keyboard">Keyboard</a></li>
                        </ul>
                    </div>
                </li>
                    
            </ul>
        </div>
    </div>

    <a href="#top"><i class="fas fa-long-arrow-alt-up" id="icon-go-to-top"></i></a>
    
    <!-- start main -->
    <div class="accessories-detail">
        <h2>DELL  DESKTOP</h2>
    </div>
    <div class="computer-container" id="dell-desktop">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'desktop';";
                $SelectDesktop=$conn->query($sql);
                if ($SelectDesktop->num_rows > 0) {
                    while($row = $SelectDesktop->fetch_assoc()) {   
                        echo   "
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete';><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>   

    <div class="accessories-detail">
        <h2>ASUS  LAPTOP</h2>
    </div>
    <div class="computer-container" id="asus-laptop">
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
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
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
    <div class="computer-container" id="msi-laptop">
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
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
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
    <div class="computer-container" id="dell-laptop">
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
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>MOUSE</h2>
    </div>
    <div class="computer-container" id="accessories-mouse">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'mouse';";
                $mouse=$conn->query($sql);
                if ($mouse->num_rows > 0) {
                    while($row = $mouse->fetch_assoc()) {   
                        echo   "
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>KEYBOARD</h2>
    </div>
    <div class="computer-container" id="accessories-keyboard">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'keyboard';";
                $keyboard=$conn->query($sql);
                if ($keyboard->num_rows > 0) {
                    while($row = $keyboard->fetch_assoc()) {   
                        echo   "
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>STORAGE</h2>
    </div>
    <div class="computer-container" id="accessories-ssd">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'ssd';";
                $ssd=$conn->query($sql);
                if ($ssd->num_rows > 0) {
                    while($row = $ssd->fetch_assoc()) {   
                        echo   "
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>

    <div class="accessories-detail">
        <h2>HEADSET</h2>
    </div>
    <div class="computer-container" id="accessories-headset">
        <?php
            $conn =new mysqli('localhost','root','DadA@8899','justtest');
            if (!$conn){
                echo "connection failed";
            }else{
                $sql="select ProID,ProName,ProImg,ProPrice,ProDetail from `product` where ProType like 'headset';";
                $headset=$conn->query($sql);
                if ($headset->num_rows > 0) {
                    while($row = $headset->fetch_assoc()) {   
                        echo   "
                            <div class=product  > 
                                <img src=$row[ProImg]>
                                <h3>$row[ProName]</h3>
                                <div class=detail>
                                    <p>$row[ProDetail]</p>
                                </div>
                                <hr>
                                <div class=price>
                                    <button id='btn-edit-show'><a href=../php/FormEdit.php?id=$row[ProID]>edit</a></button>
                                    <h3><span>$ $row[ProPrice].00</span></h3>
                                    <button id='btn-delete'><a href=../php/FormDelete.php?id=$row[ProID]>delete</a></button>
                                </div>
                            </div>
                        ";
                    }
                } 
            }
        ?>
    </div>
    <!-- end main -->


    <script type="text/javascript">
        //code for go to top
        window.addEventListener("scroll", ()=>{
            let scrolled=window.scrollY; 
            if(scrolled>=90){
                document.querySelector("#icon-go-to-top").style.display="flex";
            }else{
                document.querySelector("#icon-go-to-top").style.display="none";
            }  
        });        
    </script>

</body>
</html>