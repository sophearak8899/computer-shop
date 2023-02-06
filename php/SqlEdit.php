
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
        $ID=$_POST["id"];
        $NAME = $_POST['name'];
        $PRICE=$_POST['price'];
        $TYPE = $_POST['type'];
        $DETAIL = $_POST['detail'];
        $PICTURE0=  $_FILES['f']['name'];
        //echo $_FILES['f']['tmp_name'];
        if(empty($NAME) || empty($PRICE) || empty($TYPE) || empty($DETAIL)){
            echo "All the fields are required";
                
        }else{
            if($_FILES['f']['tmp_name']== '') {
                
                //$sql="UPDATE `product` SET `ProName`='$NAME',`ProPrice`='$PRICE',`ProDetail`='$DETAIL',`ProType`='$TYPE' WHERE ProID=$ID";
                //$updateProduct=$conn->query($sql);
                echo "edited with no file";
            } else {
                
                $PICTURE = "../img/".$PICTURE0;
                move_uploaded_file($_FILES['f']['tmp_name'],'../img/'.$_FILES['f']['name']);
                
                //$sql="UPDATE `product` SET `ProName`='$NAME',`ProImg`='$PICTURE',`ProPrice`='$PRICE',`ProDetail`='$DETAIL',`ProType`='$TYPE' WHERE ProID=$ID";
                //$updateProduct=$conn->query($sql);
                echo "edited with file";
            }


            
        }   
    }
    mysqli_close($conn);
?>