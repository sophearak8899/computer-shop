
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
        //$sql="delete from `product` where ProID=$ID";
        //$result=$conn->query($sql);
        echo "deleted";
        echo $ID;
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
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
                confirmButtonText: '<a href="#2#">LINK</a>',
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
    </script>
</head>
<body>
    
</body>
</html>