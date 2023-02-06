
<?php
    $ID="";
    $NAME = "";
    $PRICE="";
    $TYPE = "";
    $DETAIL = "";
    $PICTURE=  "";
    $conn =new mysqli('localhost','root','DadA@8899','justtest');
    if (!$conn){
        echo "connection failed";
    }else{
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $ID=$_GET["id"];
            $sql="select * from `product` where ProID=$ID";
            $result=$conn->query($sql);
            $row=$result->fetch_assoc();

            $NAME = $row["ProName"];
            $PRICE=$row["ProPrice"];
            $TYPE = $row["ProType"];
            $DETAIL = $row["ProDetail"];
            $PICTURE=  $row["ProImg"];
        } 
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormEdit</title>
    <link rel="stylesheet" href="../css/FormEdit.css">
</head>
<body>
    
    <div class="main-input-form-product">
        <div class="co-main-input-form-product">
            <div class="header-input">
                <h1>EDIT PRODUCT</h1>
                <img src="<?php echo $PICTURE ?>" width="30%" alt="">
            </div>
            <div class="side-input-product">
                <form action="../php/SqlEdit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value=" <?php echo $ID?> ">
                    <label for="name" style="margin-left: 30px; font-size: 20px;">Product Name</label> <br>
                    <input type="text" name="name" value="<?php echo $NAME?>" id="name" style="width: 87%;margin-left: 30px;"> <br>              
                    <label for="price" style="margin-left: 30px; font-size: 20px;">Product Price</label> <br>
                    <input type="text" name="price" value="<?php echo $PRICE?>" id="price" style="width: 87%;margin-left: 30px;"> <br>             
                    <label for="detail" style="margin-left: 30px; font-size: 20px;">Product Detail</label> <br>
                    <textarea name="detail" id="detail" cols="30" rows="3" style="width: 87%;margin-left: 30px;"><?php echo $DETAIL?></textarea><br> 
                    <label style="margin-left: 30px; font-size: 20px;">Product Type</label> <br>
                    
                    <?php 
                    if($TYPE == "desktop") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;" checked>DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } 
                    elseif($TYPE == "mouse") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;" checked> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        } 
                    elseif($TYPE == "keyboard")
                        { 
                        ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;" checked> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    elseif($TYPE == "headset") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;" checked> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        } 
                    elseif($TYPE == "ssd") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;" checked> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        } 
                    elseif($TYPE == "asus") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;" checked> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    elseif($TYPE == "dell") 
                        { ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;" checked> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;"> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php 
                        }
                    else 
                        { 
                        ?>
                            <div class="main-product-type">
                                <div class="co-main-product-type">
                                    <div class="left-product-type">
                                        <div class="co-left-product-type">
                                            <input type="radio" name="type" value="desktop" id=""style="margin-left: 20px;">DESKTOP <br>
                                            <label style="margin-left: 20px;">LAPTOP</label> <br>
                                            <input type="radio" name="type" value="asus" style="margin-left: 30px;"> Asus <br>
                                            <input type="radio" name="type" value="dell" style="margin-left: 30px;"> Dell <br>
                                            <input type="radio" name="type" value="msi" style="margin-left: 30px;" checked> MSI <br>
                                        </div>
                                    </div>
                                    <div class="right-product-type">
                                        <label >ACCESSORIES</label> <br>
                                        <input type="radio" name="type" value="mouse" style="margin-left: 20px;"> Mouse <br>
                                        <input type="radio" name="type" value="keyboard" style="margin-left: 20px;"> Keyboard <br>
                                        <input type="radio" name="type" value="headset" style="margin-left: 20px;"> Headset <br>
                                        <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                                    </div>
                                </div>
                            </div>
                        <?php 
                    }   
                    ?>

                    <label for="picture" style="margin-left: 30px; font-size: 20px;">Product Image</label> <br>
                    <input type="file" name="f" id="choose-image-product" onchange='A(event)'> <br>
                    <div class="btn-bottom-form">
                        <div class="left-bottom">
                            <input type="submit" name="" id="btn-submit-product" value="EDIT">
                        </div>
                        <div class="right-bottom">
                            <a href="../php/Admin.php" style="text-decoration: none;">
                                <h3 id="btn-back-home">BACK </h3>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>