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
    <title> Admin | Adding products</title>
    <link rel="stylesheet" href="../css/shop.css">
    <script src="../java/jquery-3.6.0.min.js"></script>
    <style>#category{display: block;}
    #category select {width: 40%; height: 30px; text-align: center; font-size: 20px;
    background-color:rgb(214, 204, 204); font-weight: bold; outline: none; border-radius: 5px 5px 5px 5px;}</style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button style=" height:30px; margin-top:10px;margin-left:5px;  border-radius: 5px; background:rgb(214, 204, 204); "  name="log_out"> LOG OUT</button>
    </form>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>إضافة منتجات</h2>
                <img src="../imo/logo.png" alt="logo" > 
                <div ><h3>Product</h3><input id="name_product" type="text" name='product'></div>
                <div><h3>Price </h3><input type="text" name='price'></div>
                <div><h3>weghit </h3><input id="name_prod" type="text" name='weghit'></div>
                <div><h3>Comment </h3><input id="name_product" type="text" name='comment'></div>
                <div id="category"><h3>category </h3><select id="cate" type="text" name='category' onchange="f_category()">
                    <option value="بناء العضلات">بناء العضلات</option>
                    <option value="زيادة الوزن">زيادة الوزن</option>
                    <option value="إنقاص الوزن">إنقاص الوزن</option>
                    <option value="الطاقة و الفايتمينات">الطاقة و الفايتمينات</option>
                    <option value="مستلزمات رياضية">مسلتزمات رياضية</option>
                </select>
                <script> function f_category(){
                    var category= document.getElementById('cate').value ;
                     return category;}
                  </script>

                </div>
                <div>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file"> اختيار صورة للمنتج</label>
                <button name='upload'>رفع المنتج ✅</button></div>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        
    </center>
</body>
</html>
<?php }
else {header('location:../admin.php');} ?>