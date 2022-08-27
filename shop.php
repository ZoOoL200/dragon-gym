<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content= "الموقع الرسمي لصالة Dragon Gym">
    <title>Dragon Gym</title>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src=".//java/micron.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
    <?php include("./css/style2.php") ?>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
</head>
<body>
    
    <header>
        <div class="contirn"> 
            <h1> Dragon Gym <embed src="./imo/damb.jpg" width="35" > </h1>
                <nav><ul>
                    <li><a href="home.html" class="onit">Home</a></li>
                    <li><a href="shop.html">Shopping</a></li>
                    <li><a href="admin.php"  target="_self"> Admin</a></li>
                    <li><a href="client.php">Log in</a></li>
                </ul></nav>
        </div>
    </header>
    <div class="cards">
        <div class="category" id="category1">
            <h1>Muscle Mass</h1>
        <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){ if($row['category']=="تضخيم"){ ?>
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
                <script> $(document).ready(function(){$("#category1").show()});
                </script>
            
            <?php } };?>
            </div>
            <div class="category" id="category2">
                <h1>Weight loss</h1>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if($row['category']=="تخسيس") {?>
            
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
                <script> $(document).ready(function(){$("#category2").show()});
                </script>
            
            <?php }}; ?>
            </div>
            <div class="category" id="category3">
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
                <script> $(document).ready(function(){$("#category3").show()});
                </script>
            
            <?php } };?>
            </div>
            <div class="category" id="category4">
                <h1>Power and activity</h1>
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if ($row['category']=="القوة و النشاط") { ?>
            
                    
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
                <script> $(document).ready(function(){$("#category4").show()});
                </script>
                
            <?php } };
            ?>
            </div>
            <div class="category" id="category5">
            <h1>Vitamins</h1> 
            <?php
            include('config.php');
            $result = mysqli_query($con, "SELECT * FROM products");      
            while($row = mysqli_fetch_array($result)){
            if($row['category']=="فايتمينات و معادن"){?>
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
                    <script> $(document).ready(function(){$("#category5").show()});
                </script>
                
                <?php }};?>
                </div>
        
            </div>
    

</body>
<footer >
    <div id="fot-detalis">
        <a id="map" target="_blank" href="https://www.google.com/maps/place/DRAGON+GYM/@15.5233506,32.500222,17z/data=!4m12!1m6!3m5!1s0x168e85f46a81c79f:0xd58983cc7450846a!2sDRAGON+GYM!8m2!3d15.5234188!4d32.4980208!3m4!1s0x168e85f46a81c79f:0xd58983cc7450846a!8m2!3d15.5234188!4d32.4980208">
        شرق تقاطع ماثيو ( شارع جبرة الرئيسي مع الكلاكلة شرق) <img src="./imo/map.jpg"></a>
        <div>
        <h4> 249993720256+ </h4> <img id ="tel" src="./imo/telphone.jpg" alt=""></div>
        </div>
        <h3>Dragon Gym &copy;</h3>
        <a href="https://twitter.com/home" target="_blank"><button title="Twitter">t</button></a>
        <a href="https://www.facebook.com/" target="_blank"><button title="Facebook">f</button></a>
        
</footer>

</html>
    