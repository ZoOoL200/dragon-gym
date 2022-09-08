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
                <li><a href="ARhome.html" class="onit">الصفحة الرئيسية</a></li>
                    <li><a href="ARshop.php">المتجر</a></li>
                    <li><a href="ARadmin.php"  target="_self"> المسؤول</a></li>
                </ul></nav>
        </div>
    </header>

    <center id="photo"><img src="./imo/dragon.png" ></center>
        <section id="main">
            <div class="contirn" align="center" >
                <h2>المسؤول</h2>
                <form method="post" action=""> 
                <input type="email" name="useer" id="useer" placeholder="Email " onfocus='show()' onfocusout="hide()">
                <input type="password" name="pass"  id="pass" placeholder="password"> 
                <button type="submit" data-micron="jelly" name="log_in" class="button">تسجيل الدخول</button>
                </form> 
            </div>
            <?php  if(isset($_POST['log_in'])){if (!check()){ echo "<script>Swal.fire({title:'<h1 style=color:red>Wrong</h1>', icon:'erorr', html:'<span style=color:red>wrong password or email</span>', background:'#353637',
                        width:'500px'})</script>";}}
            ?>
        </section>
</body>
<div id="foot">
    <footer >
            <h3>Dragon Gym &copy;</h3>
            <a href="https://twitter.com/home" target="_blank"><button title="Twitter">t</button></a>
            <a href="https://www.facebook.com/" target="_blank"><button title="Facebook">f</button></a>
            <div  style="text-align:right; margin-right:50px; "> <a style="font-size:x-large; color:black; " href="./admin.php">English</a> </div>
            
    </footer>
</div>

</html>
