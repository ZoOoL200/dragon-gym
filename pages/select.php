<?php error_reporting(0);
 session_start();
 if($_SESSION['id']){ 
    if(isset($_POST['back'])){header('location:admin.php');
        session_destroy();}
        if(isset($_POST['report'])){header('location:admin/male.php');}
        if(isset($_POST['shop'])){header('location:admin/adminshop.php');}
  
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="الموقع الرسمي لصالة Dragon Gym">
    <title>Dragon Gym | Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>#foot{position: absolute; top: 100%; width: 100%;}</style>
    <script src=".//java/jquery-3.6.0.min.js"></script>
    <script src=".//java/micron.min.js"></script>
    <link rel="stylesheet" href="./java/link-micron.min.css">
</head>
<body>
    <header>
        <div class="contirn"> 
            <h1> Dragon Gym <embed src="./imo/damb.jpg" width="35" > </h1>
                <nav><ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="shop.html">Shopping</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="admin.php" class="onit" target="_self"> Admin</a></li>
                </ul></nav>
        </div>
    </header>
    <section id="main" class="select">
        <div class="contirn" align="center" >
            <h2>Select</h2>
            <form method="post" action=" "> 
                <button style="display:inline-block;" name ="report" class="button" data-microtime="jelly" >Reports</button>
                <button  style="display:inline-block;margin:0px 20px ;" data-micron="jelly" name="shop" class="button">Shopping</button>
                <button  style="display:block;" data-micron="jelly" name="back" class="button">Back</button>
            </form> 
        </div>
    </section>
    
    <center id="photo"><img src="./imo/dragon.png" ></center>
        
    
</body>
<div id="foot">
    <footer >
        <div id="fot-detalis">
            <a id="map" target="_blank" href="https://www.google.com/maps/place/DRAGON+GYM/@15.5233506,32.500222,17z/data=!4m12!1m6!3m5!1s0x168e85f46a81c79f:0xd58983cc7450846a!2sDRAGON+GYM!8m2!3d15.5234188!4d32.4980208!3m4!1s0x168e85f46a81c79f:0xd58983cc7450846a!8m2!3d15.5234188!4d32.4980208">
            شرق تقاطع ماثيو ( شارع جبرة الرئيسي مع الكلاكلة شرق) <img src="./imo/map.jpg"></a>
            <div style="margin-top:5px ;">
            <h4> 249993720256+ </h4> <img id ="tel" src="./imo/telphone.jpg" alt=""></div>
            </div>
            <h3>Dragon Gym &copy;</h3>
            <a href="https://twitter.com/home" target="_blank"><button title="Twitter">t</button></a>
            <a href="https://www.facebook.com/" target="_blank"><button title="Facebook">f</button></a>
            
    </footer>
    </div>
</html>
<?php }
else {header('location:admin.php');} ?>