<?php error_reporting(0);
 session_start();
if($_SESSION['id']){?>
<?php  if(isset($_POST['log_out'])){header('location:../admin.php');
    session_destroy();}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | تعديل منتج</title>
    <link rel="stylesheet" href="../css/shop.css">
    <script src="../java/jquery-3.6.0.min.js"></script>
    <style>#category{display: block;}
    #category select {width: 40%; height: 30px; text-align: center; font-size: 20px;
    background-color:rgb(214, 204, 204); font-weight: bold; outline: none; border-radius: 5px 5px 5px 5px;}</style>
</head>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button style=" height:30px; margin-top:10px;margin-left:5px;  border-radius: 5px; background:rgb(214, 204, 204); "  name="log_out"> LOG OUT</button>
    </form>
    <?php
        include('config.php');
        $ID=$_GET['id'];
        $up = mysqli_query($con, "select * from products where id =$ID");
        $data = mysqli_fetch_array($up);
        $_SESSION['image'] = $data['image']
        
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">
                <h2>تعديل المنتجات</h2>
                <input type="text" name='id' value='<?php echo $data['id']?>'  style='display:none;'>
                <div><h3>Product</h3><input id="name_product" type="text" name='product' value='<?php echo $data['name']?>'></div>
                <div><h3>Price </h3><input type="text" name='price' value='<?php echo $data['price']?>'></div>
                <div><h3>weghit </h3><input id="name_product" type="text" name='weghit' value='<?php echo $data['weghit']?>'></div>
                <div><h3>Comment </h3><input id="name_product" type="text" name='comment' value='<?php echo $data['comment']?>'></div>
                <div id="category"><h3>category </h3><select id="cate" type="text" name='category' onchange="f_category()" >
                    <option value='<?php echo $data['category']?>'><?php echo $data['category']?></option>
                    <option value="تضخيم">تضخيم</option>
                    <option value="تخسيس">تخسيس</option>
                    <option value="مستلزمات رياضية">مسلتزمات رياضية</option>
                    <option value="القوة و النشاط">القوة و النشاط</option>
                    <option value="فايتمينات و معادن">فايتمينات و معادن</option>
                </select>
                <script> function f_category(){
                    var category= document.getElementById('cate').value ;
                     return category;}
                  </script>

                </div>
                <div>
                <input type="file" id="file" name='image' src="<?php echo $_SESSION['image'] ?>" style='display:none;'>
                <label for="file"> تحديث صورة المنتج</label>
                <button name='update' type='submit'>تعديل المنتج</button>
                </div>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
    </center>
</body>
</html>
<?php }
else { echo "You are not allow to be here" ;
header('location:../admin.php');} ?>