<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME  = $_POST['product'];
    $PRICE = $_POST['price'];
    $WEGHIT=$_POST['weghit'];
    $COMMENT=$_POST['comment'];
    $IMAGE = $_FILES['image'];
    $CATEGORY = $_POST['category'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    move_uploaded_file($image_location,'images/'. $image_name);
    $image_up = "images/".$image_name;
    $insert = "INSERT INTO  products (name, price ,image , weghit , comment ,category) VALUES ('$NAME','$PRICE','$image_up','$WEGHIT' , '$COMMENT' , '$CATEGORY')";
    mysqli_query($con, $insert);
    header('location:adminshop.php');
    
}
?>