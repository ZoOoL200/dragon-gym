<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content= "الصفحة الرئيسية">
    <title>Dragon Gym</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src=".//java/micron.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="./css/styshop.css">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <style>.card { position: relative; height: 450px; background-color:#353637;
     width: 16rem;  margin: 40px 38px 20px 35px;  border: #353637 2px solid;
     border-radius: 10px; box-shadow: 1px 1px 20px goldenrod;}
        @media only screen and (max-width:1000px){
            footer{margin-top:57%; } 
            .card{ margin-left: 50px; width: 14rem; }
            .category{height: 350px; margin-top: 20%;}
            }
            </style>
</head>
<body>
    <header>
        <div class="contirn"> 
            <h1> Dragon Gym <embed src="./imo/damb.jpg" width="35" > </h1>
                <nav><ul>
                    <li><a href="home1.html" >Home</a></li>
                    <li><a href="shop.php" class="onit">Shopping</a></li>
                    <li><a href="admin.php"  target="_self"> Admin</a></li>
                </ul></nav>
        </div>
    </header>
    <form method="GET">

        <div class="category">
            <button name="musel-bulid">
                <div class="category-image"> <img src="./imo/musel-removebg-preview.jpg" ></div>
            </button>
            <a href="?musel-bulid="> Musel <br> Bulid</a>
        </div>


        <div class="category">
            <button name="weight-loss">
                <div class="category-image"> <img src="./imo/whigh loss-removebg-preview-removebg-preview.jpg" ></div>
            </button>
            <a href="?weight-loss="> Weight <br> Loss</a>
        </div>

        <div class="category" >
            <button name="increase-weight">
                <div class="category-image"> <img src="./imo/wight increase-removebg-preview.jpg" ></div>
            </button>
            <a href="?increase-weight="> Increase <br> Weight </a>
        </div>

        <div class="category"  style="margin-right:5.2%;">
            <button name="sporting-goods">
                <div class="category-image"> <img src="./imo/shaker-removebg-preview-removebg-preview.jpg" ></div>
            </button>
            <a href="?sporting-goods="> Sporting <br> Goods</a>
        </div>

        <div class="category"  style="margin-right: 35%;">
            <button name="vitamins">
                <div class="category-image"> <img src="./imo/enrgy-removebg-preview-removebg-preview.jpg" ></div>
            </button>
            <a href="?vitamins="> & Energy  <br> Vitamins</a>
        </div>
    </form>


    <!--  cards -->
    <?php if(isset($_GET['musel-bulid'])) { ?>
    <div class="cards">
        <div class="category-card">
            <h1>Muscle Bulid</h1>
        <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){ if($row['category']=="بناء العضلات"){ ?>
                    <div class="item"><div class="card" >
                        <img  height="215" src="admin/<?php echo $row['image']; ?>" alt="">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Weight <h6><?php echo $row['weghit']; ?></h6></p>
                        <p class="card-text"><?php echo $row['comment']; ?> </p>
                        <a href="https://api.whatsapp.com/send/?phone=249907859091&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary">Book now</a>
                        </div><div class="price"><?php echo $row['price']; ?> SDG</div>
                    </div> 
                </div>
            
            <?php } };?>
            </div>
            <?php } ?>

            <?php if (isset($_GET["weight-loss"])) { ?>
            <div class="category-card">
                <h1>Weight loss</h1>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if($row['category']=="إنقاص الوزن") {?>
            
                <div class="item"><div class="card" >
                        <img  height="215" src="admin/<?php echo $row['image']; ?>" alt="">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Weight <h6><?php echo $row['weghit']; ?></h6></p>
                        <p class="card-text"><?php echo $row['comment']; ?> </p>
                        <a href="https://api.whatsapp.com/send/?phone=249907859091&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary">Book now</a>
                        </div><div class="price"><?php echo $row['price']; ?> SDG</div>
                    </div> 
                </div>
            
            <?php }}; ?>
            </div>
            <?php }; ?>

            <?php  if (isset($_GET["increase-weight"])) {    ?>
            <div class="category-card">
                <h1>Increase Weight</h1>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if ($row['category']=="زيادة الوزن") { ?>
            
                <div class="item"><div class="card" >
                        <img  height="215" src="admin/<?php echo $row['image']; ?>" alt="">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Weight <h6><?php echo $row['weghit']; ?></h6></p>
                        <p class="card-text"><?php echo $row['comment']; ?> </p>
                        <a href="https://api.whatsapp.com/send/?phone=249907859091&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary">Book now</a>
                        </div><div class="price"><?php echo $row['price']; ?> SDG</div>
                    </div> 
                </div>
                <script> $(document).ready(function(){$("#category3").show()});
                </script>
            
            <?php } };?>
            </div>
            <?php };?>

            <?php if (isset($_GET["sporting-goods"])) {  ?>
            <div class="category-card" >
                <h1>Sporting Goods</h1>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if ($row['category']=="مستلزمات رياضية") { ?>
            
                    
                    <div class="item"><div class="card" >
                        <img  height="215" src="admin/<?php echo $row['image']; ?>" alt="">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                        <p class="card-text">Weight <h6><?php echo $row['weghit']; ?></h6></p>
                        <p class="card-text"><?php echo $row['comment']; ?> </p>
                        <a href="https://api.whatsapp.com/send/?phone=249907859091&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary">Book now</a>
                        </div><div class="price"><?php echo $row['price']; ?> SDG</div>
                    </div> 
                </div> 
            <?php } };
            ?>
            </div>
            <?php } ;?>

            <?php if (isset($_GET["vitamins"])) { ?>
            <div class="category-card">
            <h1>Power & Vitamins</h1> 
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if($row['category']=="الطاقة و الفايتمينات"){?>
                <div class="item">
                    <div class="card" >
                            <img  height="215" src="admin/<?php echo $row['image']; ?>" alt="">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name']; ?></h5>
                            <p class="card-text">Weight <h6><?php echo $row['weghit']; ?></h6></p>
                            <p class="card-text"><?php echo $row['comment']; ?> </p>
                            <a href="https://api.whatsapp.com/send/?phone=249907859091&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-primary">Book now</a>
                            </div><div class="price"><?php echo $row['price']; ?> SDG</div>
                        </div> 
                    </div>
                
                <?php }};?>
                </div>
                <?php } ;?>
        
            

    

    
</body>

<footer >
    <h3 >Dragon Gym &copy;</h3>
    <div class="foot-loc">
        <h1 style="font-size:large ; ">About</h1>
        <div class="foot-img"> 
        <img style="width:100% ;" src="./imo/footer.jpg" >
        </div>
        <div id="fot-detalis">
            <a id="map" target="_blank" href="https://www.google.com/maps/place/DRAGON+GYM/@15.5233506,32.500222,17z/data=!4m12!1m6!3m5!1s0x168e85f46a81c79f:0xd58983cc7450846a!2sDRAGON+GYM!8m2!3d15.5234188!4d32.4980208!3m4!1s0x168e85f46a81c79f:0xd58983cc7450846a!8m2!3d15.5234188!4d32.4980208">
                <img src="./imo/map.jpg"> شرق تقاطع ماثيو ( شارع جبرة الرئيسي مع الكلاكلة شرق) </a>
            <div>
                <img id ="tel" src="./imo/telphone.jpg" alt="">  <h4> 249993720256+ </h4> 
            </div>
        </div>
    </div>
    <div class="soical">
        <h1 style="font-size:large ;  margin-bottom:20px;">Social media</h1>
        <a href="https://twitter.com/home" target="_blank"><button title="Twitter">t</button></a>
        <a href="https://www.facebook.com/" target="_blank"><button title="Facebook">f</button></a>
    </div>
   
</footer>

</html>