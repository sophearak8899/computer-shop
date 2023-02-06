
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormInput</title>
    <link rel="stylesheet" href="../css/FormInput.css">
</head>
<body>

    <div class="main-input-form-product">
        <div class="co-main-input-form-product">
            <div class="header-input">
                <h1>INPUT PRODUCT</h1>
            </div>
            <div class="side-input-product">
                <form action="../php/SqlInsert.php" method="post" enctype="multipart/form-data">
                    <label for="name" style="margin-left: 30px; font-size: 20px;">Product Name</label> <br>
                    <input type="text" name="name" id="name" style="width: 87%;margin-left: 30px;"> <br>
                    <label for="price" style="margin-left: 30px; font-size: 20px;">Product Price</label> <br>
                    <input type="text" name="price" id="price" style="width: 87%;margin-left: 30px;"> <br>
                    <label for="detail" style="margin-left: 30px; font-size: 20px;">Product Detail</label> <br>
                    <textarea name="detail" id="detail" cols="30" rows="3" style="width: 87%;margin-left: 30px;"></textarea><br>
                    <label style="margin-left: 30px; font-size: 20px;">Product Type</label> <br>
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
                                <input type="radio" name="type" value="ssd" style="margin-left: 20px;"> Storage <br>
                            </div>
                        </div>
                    </div>
                    <label for="picture" style="margin-left: 30px; font-size: 20px;">Product Image</label> <br>
                    <input type="file" name="f" id="choose-image-product"> <br>
                    <div class="btn-bottom-form">
                        <div class="left-bottom">
                            <input type="submit" name="" id="btn-submit-product" value="SUBMIT">
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