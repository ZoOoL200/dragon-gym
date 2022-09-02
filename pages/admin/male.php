<?php error_reporting(0);
 session_start();
if($_SESSION['id']){?>
<?php  if(isset($_POST['log_out'])){header('location:../admin.php');
    session_destroy();}
 ?>
<?php function search_month() {if(isset($_POST['search'])){
    if($_POST['dd']!=""){include("config.php");
        $var=$_POST['dd'];
        $result = mysqli_query($con," SELECT * FROM `customer` Where date like '%$var%'");
        return $result;}
    elseif ($_POST['year']!=""){include("config.php");
          $var=$_POST['year'];
        $result = mysqli_query($con," SELECT * FROM `customer` Where date like '%$var%'");
        return $result;}
    elseif($_POST['month']){include("config.php");
        $var=$_POST['month'];
        $result = mysqli_query($con," SELECT * FROM `customer` Where date like '%$var%'");
        return $result ;}
        else{include("config.php");
            $result = mysqli_query($con," SELECT * FROM `customer` Where date like '%%'");
            return $result;}}
        else {include("config.php");
            $result = mysqli_query($con," SELECT * FROM `customer` Where date like '%%'");
            return $result;}
    }
?>
<?php function search_daily() {if(isset($_POST['search'])){
    if($_POST['dd']!=""){include("config.php");
        $var=$_POST['dd'];
        $result = mysqli_query($con," SELECT * FROM `daily` Where date like '%$var%'");
        return $result;}
    elseif ($_POST['year']!=""){include("config.php");
          $var=$_POST['year'];
        $result = mysqli_query($con," SELECT * FROM `daily` Where date like '%$var%'");
        return $result;}
    elseif($_POST['month']){include("config.php");
        $var=$_POST['month'];
        $result = mysqli_query($con," SELECT * FROM `daily` Where date like '%$var%'");
        return $result ;}
        else{include("config.php");
            $result = mysqli_query($con," SELECT * FROM `daily` Where date like '%%'");
            return $result;}}
        else {include("config.php");
            $result = mysqli_query($con," SELECT * FROM `daily` Where date like '%%'");
            return $result;}
    }
?>
<?php function search_expenses() {if(isset($_POST['search'])){
    if($_POST['dd']!=""){include("config.php");
        $var=$_POST['dd'];
        $result = mysqli_query($con," SELECT * FROM `expenses` Where date like '%$var%'");
        return $result;}
    elseif ($_POST['year']!=""){include("config.php");
          $var=$_POST['year'];
        $result = mysqli_query($con," SELECT * FROM `expenses` Where date like '%$var%'");
        return $result;}
    elseif($_POST['month']){include("config.php");
        $var=$_POST['month'];
        $result = mysqli_query($con," SELECT * FROM `expenses` Where date like '%$var%'");
        return $result ;}
        else{include("config.php");
            $result = mysqli_query($con," SELECT * FROM `expenses` Where date like '%%'");
            return $result;}}
        else {include("config.php");
            $result = mysqli_query($con," SELECT * FROM `expenses` Where date like '%%'");
            return $result;}
    }
?>
<?php
function month(){
    $f_result =search_month();
    while($row=mysqli_fetch_array($f_result)){ 
        
    ?>
    <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["gender"] ?></td>
        <td><?php echo $row["type"] ?></td>
        <td><?php echo $row["type_of_pay"] ?></td>
        <td><?php echo $row["cash"] ?></td>
        <td><?php echo $row["card_id"] ?></td>
        <td><?php echo $row["phone"] ?></td>
        <td><?php echo $row["checkin"] ?></td>
        <td><?php echo date("Y/m/d", strtotime($row['date']))?></td>
        <td><?php echo $row["comment"] ?></td>
    </tr>
    <?php };}?>

<?php function day(){
    $f_result =search_daily();
    while($row=mysqli_fetch_array($f_result)){ 

    ?>
        <tr>
        <td><?php echo $row["id"] ?></td>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["gender"] ?></td>
        <td><?php echo $row["type_of_pay"] ?></td>
        <td><?php echo $row["cash"] ?></td>
        <td><?php echo date("Y/m/d", strtotime($row['date']))?></td>
        <td><?php echo $row["comment"] ?></td>
    </tr>
    <?php };}?>
<?php function expenses(){$f_result =search_expenses();
    while($row=mysqli_fetch_array($f_result)){ 

                ?>
                    <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["type"] ?></td>
                    <td><?php echo $row["cash"] ?></td>
                    <td><?php echo date("Y/m/d", strtotime($row['date']))?></td>
                    <td><?php echo $row["comment"] ?></td>
                </tr>
                <?php };}
?>
<?php function month_total(){ 
    $total=0;
    $f_result =search_month();
    while($row=mysqli_fetch_array($f_result)){ 
        $total=$total+$row['cash'];}
        return $total ;
    } 
?>
<?php function daily_total(){ 
    $total=0;
    $f_result =search_daily();
    while($row=mysqli_fetch_array($f_result)){
        $total=$total+$row['cash'];}
        return $total ;
    } 
?>
<?php function month_MBOK(){ 
    $total=0;
    $f_result =search_month();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="MBOK"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function month_CASH(){ 
    $total=0;
    $f_result =search_month();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="Cash"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function month_FAWYRE(){ 
    $total=0;
    $f_result =search_month();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="Fawyre"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function daily_MBOK(){ 
    $total=0;
    $f_result =search_daily();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="MBOK"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function daily_CASH(){ 
    $total=0;
    $f_result =search_daily();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="Cash"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function daily_FAWYRE(){ 
    $total=0;
    $f_result =search_daily();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type_of_pay']=="Fawyre"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function expenses_total(){ 
    $total=0;
    $f_result =search_expenses();
    while($row=mysqli_fetch_array($f_result)){
        $total=$total+$row['cash'];}
        return $total ;
    } 
?>
<?php function expenses_RENT(){ 
    $total=0;
    $f_result =search_expenses();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type']=="إيجار"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function expenses_WAGE(){ 
    $total=0;
    $f_result =search_expenses();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type']=="راتب"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function expenses_ELSE(){ 
    $total=0;
    $f_result =search_expenses();
    while($row=mysqli_fetch_array($f_result)){
        if($row['type']=="أخر"){
        $total=$total+$row['cash'];}}
        return $total ;
    } 
?>
<?php function proft_total(){ 
    $total=0;
    $mtotal=0;
    $dtotal=0;
    $etotal=0;
    include("config.php");
    $m_result =search_month();
    while($row=mysqli_fetch_array($m_result)){
        $mtotal=$mtotal+$row['cash'];}
    $d_result =search_daily();
    while($row=mysqli_fetch_array($d_result)){
        $dtotal=$dtotal+$row['cash'];}
    $e_result =search_expenses();
    while($row=mysqli_fetch_array($e_result)){
        $etotal=$etotal+$row['cash'];}
    $total= $mtotal + $dtotal - $etotal;
    return $total;
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Male subscribe | الاشتراكات الرجالية</title>
    <link rel="stylesheet" href="../css/reports.css">
    <script src="./java/jquery-3.6.0.min.js"></script>
    <style>@media only screen and (max-width:1000px)
    { #info { width: 98%; margin-right: 1%;  }
    #main { width: 98%; overflow-x: auto; height: 90vh; margin-left:1%;}
    #main table {width: 100%;}
    #main center {width: 100%;}}</style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <button style=" height:30px; margin-top:10px;margin-left:5px;  border-radius: 5px; background:rgb(214, 204, 204); "  name="log_out"> LOG OUT</button>
    </form>

        <center><select name="select" id="select_table" onchange="gender()">
            <option   value="male"  > Male</option>
            <option   value="female"> Female</option>
        </select></center>
        <script>
         function gender(){ if(document.getElementById('select_table').value=="male") {window.open("male.php","_self")}
        else {window.open("female.php","_self")}}</script>
    <section id="info">
        <div class="">
            <h1>reports</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <h3  >: Enter The Year </h3>
                <input  type="text" name="year" id="year">
                <select name="month" id="select_month" onchange="select_month()">

                    <option  value="" name="all">All</option>
                    <option  value="-01-" name="Jan">Jan</option>
                    <option  value="-02-" name="Feb">Feb</option>
                    <option  value="-03-" name="March">March</option>
                    <option  value="-04-" name="April">April</option>
                    <option  value="-05-" name="May">May</option>
                    <option  value="-06-" name="Jun">Jun</option>
                    <option  value="-07-" name="July">July</option>
                    <option  value="-08-" name="August">August</option>
                    <option  value="-09-" name="Sep">Sep</option>
                    <option  value="-10-" name="Oct">Oct</option>
                    <option  value="-11-" name="Nov">Nov</option>
                    <option  value="-12-" name="Dec">Dec</option>
                <script> function select_month(){
                  var month=  document.getElementById('year').value + document.getElementById('select_month').value ;
                   return month;}
                </script>

                </select>  
                <br> <br>
                <input  type="date" name="dd" id="date"> 
                <center><button type="submit" name="search">Enter</button></center>
                <div id="monthily">
                     <hr>
                    <h3>مجموع الاشتراكات الشهرية :</h3>
                    <input type="text"  value="<?php echo "SDG" . " " . number_format( month_total(),0, ".", ",") ; ?>">
                    <div>
                        <label>بنكك :</label>
                        <input class="details_input" type="text"  value="<?php echo "SDG" . " " . number_format( month_MBOK(),0, ".", ",") ; ?>"><br>
                        <label>كاش :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( month_CASH(),0, ".", ",") ; ?>"><br>
                        <label>فوري :</label>
                        <input class="details_input" type="text" value="<?php echo   "SDG" . " " . number_format( month_FAWYRE(),0, ".", ",") ; ?>"><br><br>
                    </div>
                </div>
                <div id="daily"> <br>
                    <hr>
                    <h3>مجموع الاشتراكات اليومية :</h3>
                    <input type="text" value="<?php echo   "SDG" . " " . number_format( daily_total(),0, ".", ",") ; ?>">
                    <div>
                        <label>بنكك :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( daily_MBOK(),0, ".", ",") ; ?>"> <br>
                        <label>كاش :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( daily_CASH(),0, ".", ",") ; ?>"><br>
                        <label>فوري :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( daily_FAWYRE(),0, ".", ",") ; ?>" > <br>
                    </div>
                    <br>
                </div>
                <div id="exp"><br>
                    <hr>
                <h3>مجموع المنصرفات :</h3><br>
                <input type="text"  value="<?php echo   "SDG" . " " . number_format( expenses_total(),0, ".", ",") ; ?>" > <br><br>
                <div>
                        <label>إيجار :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( expenses_RENT(),0, ".", ",") ; ?>"> <br>
                        <label>راتب :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( expenses_WAGE(),0, ".", ",") ; ?>"><br>
                        <label>أخر :</label>
                        <input class="details_input" type="text"  value="<?php echo   "SDG" . " " . number_format( expenses_ELSE(),0, ".", ",") ; ?>" > <br>
                    </div>
                    <br>
                </div>
                <div id="proft"><br>
                    <h3>الصافي :</h3>
                    <input type="text"  value="<?php echo   "SDG" . " " . number_format( proft_total(),0, ".", ",") ; ?>"> <br> <br>
                </div>



            </form>
        </div>
    </section>
    <section id="main">
        <br>
        <center >
            
            <table class="table" >
                <caption>Monthily Subscribtion</caption> 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Type of Pay</th>
                    <th>Cash</th>
                    <th>Card ID</th>
                    <th>Phone</th>
                    <th>Check</th>
                    <th>Date</th>
                    <th>Comment</th>
                </tr>
                <?php month(); ?>
               
            </table>
        </center>

        <center>
            
            <table class="table" >
                <caption>Daily Subscribtion</caption> 
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Type of Pay</th>
                    <th>Cash</th>
                    <th>Date</th>
                    <th>Comment</th>
                </tr>
                <?php day(); ?>
                    
            
                
            </table>
        </center>

        <center>
            
            <table class="table" >
                <caption>Expenditure </caption> 
                <tr>
                    <th>ID</th>
                    <th>Expenses Name</th>
                    <th>Type</th>
                    <th>Cash</th>
                    <th>Date</th>
                    <th>Comment</th>
                </tr>
                <?php expenses(); ?>
            </table>
        </center>
    </section>

    
    
</body>
</html>
<?php }
else { echo "You are not allow to be here" ;
header('location:../admin.php');} ?>