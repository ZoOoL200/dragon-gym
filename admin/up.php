<?php
session_start();

include('config.php');

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME  = $_POST['product'];
    $PRICE = $_POST['price'];
    $WEGHIT=$_POST['weghit'];
    $COMMENT=$_POST['comment'];
    $CATEGORY=$_POST['category'];
    $IMAGE = $_FILES['image'];
    $IMAGE1= $_SESSION['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'.$image_name);
    if($IMAGE ['name']!=""){
    $image_up = "images/".$image_name;}
    else {$image_up= $IMAGE1;}
    $update = "UPDATE products SET name='$NAME' , price='$PRICE', image='$image_up' , weghit='$WEGHIT' , comment='$COMMENT' , category='$CATEGORY' WHERE id=$ID";
    mysqli_query($con, $update);

    header('location: products.php');
}
?>