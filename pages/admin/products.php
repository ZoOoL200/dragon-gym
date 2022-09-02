<?php error_reporting(0);
 session_start();
if($_SESSION['id']){?>
<?php  if(isset($_POST['log_out'])){header('location:../admin.php');
    session_destroy();}
    if(isset($_POST['return'])){header('location:adminshop.php');}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/shop.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products </title>
</head>
<body dir="rtl">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" dir="ltr">
        <button style=" height:30px; margin-top:10px;margin-left:5px;  border-radius: 5px; background:rgb(214, 204, 204); "  name="log_out"> LOG OUT</button><br>
        <button style=" height:30px; margin-top:10px;margin-left:5px;  border-radius: 5px; background:rgb(214, 204, 204); "  name="return"> Return</button>
    </form>
    <center class="titel">
        <h3>Admin control</h3>
    </center>
    <center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM products");
    while($row = mysqli_fetch_array($result)){ ?>
    
        <div class='product'>
            <div class='card' >
                <img src=<?php echo $row['image'] ;?> class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'><?php echo $row['name'] ; ?></h5>
                    <p class='card-text'><?php echo $row['category']; ?></p>
                    <p class='card-text'><?php echo "SDG" . " " . number_format( $row['price'],0, ".", ",") ; ?></p>
                    <p class='card-text'><?php echo $row['weghit'] ;?></p>
                    <p class='card-text' style='color:gold;'><?php echo $row['comment'] ;?></p>
                    <a href='delete.php? id=<?php echo $row['id'] ;?>' class='btn btn-danger'>حذف منتج</a>
                    <a href='update.php? id=<?php echo $row['id'] ;?>' class='btn btn-primary'>تعديل منتج</a>
                </div>
            </div>
        </div>
    <?php }
    ?>
    </center>
</body>
</html>
<?php }
else { echo "You are not allow to be here" ;
header('location:../admin.php');} ?>