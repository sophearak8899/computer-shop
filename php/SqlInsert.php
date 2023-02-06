<!--start input data to mysql -->
<?php

$conn =new mysqli('localhost','root','DadA@8899','justtest');
if (!$conn){
    echo "connection failed";
}else{
    $NAME = $_POST['name'];
    $PRICE=$_POST['price'];
    $TYPE = $_POST['type'];
    $DETAIL = $_POST['detail'];
    $PICTURE0=  $_FILES['f']['name'];
    if(empty($NAME) || empty($PRICE) || empty($TYPE) || empty($DETAIL) || empty($PICTURE0)){
        echo "All the fields are required";
    }else{
        $PICTURE = "../img/".$PICTURE0;
        move_uploaded_file($_FILES['f']['tmp_name'],'../img/'.$_FILES['f']['name']);
        $InsertProduct="INSERT INTO `product` (`ProName`,`ProImg`,`ProPrice`,`ProDetail`,`ProType`) VALUES('$NAME','$PICTURE','$PRICE','$DETAIL','$TYPE')";
        $conn->query($InsertProduct);
        echo "successed";
        echo "<a href=../php/FormInput.php>back to input</a>";
    }
}
mysqli_close($conn);
?>
<!--end input data to mysql -->
