<?php error_reporting(0);
session_start();

if(isset($_POST['log_in'])){ $_SESSION['id']= rand();
    
     
    check();}
           
function check(){ if($_POST['useer']== "ahmed@dragon.com" && $_POST['pass']=="12345"){ 
                $_SESSION['check'] = $_SESSION['id'];
                header('location:select.php');}}
 
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
    
    <script src=".//java/sweetalert.min.js"></script>
    <script src=".//java/sweetalert2.all.min.js"></script>
    <script>
            function show(){
                $('#pass').show(1000)}
            function hide(){
                if(document.getElementById('useer').value==""){
                $('#pass').hide(2000)}
            }
            
                </script>
                


    <header>
        <div class="contirn"> 
            <h1> Dragon Gym <embed src="./imo/damb.jpg" width="35" > </h1>
                <nav><ul>
                    <li><a href="home1.html">Home</a></li>
                    <li><a href="shop.php">Shopping</a></li>
                    <li><a href="admin.php"  class="onit" > Admin</a></li>
                </ul></nav>
        </div>
    </header>

    <center id="photo"><img src="./imo/dragon.png" ></center>
        <section id="main">
            <div class="contirn" align="center" >
                <h2>Admin</h2>
                <form method="post" action=""> 
                <input type="email" name="useer" id="useer" placeholder="Email " onfocus='show()' onfocusout="hide()">
                <input type="password" name="pass"  id="pass" placeholder="password"> 
                <button type="submit" data-micron="jelly" name="log_in" class="button">Log in</button>
                </form> 
            </div>
            <?php  if(isset($_POST['log_in'])){if (!check()){ echo "<script>Swal.fire({title:'<h1 style=color:red>Wrong</h1>', icon:'erorr', html:'<span style=color:red>wrong password or email</span>', background:'#353637',
                        width:'500px'})</script>";}}
            ?>
        </section>
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
