<style>
@import url('https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&family=Rubik+Moonrocks&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Edu+SA+Beginner:wght@500&family=Rubik+Moonrocks&display=swap');
    /* admin page */
    body{margin: 0; padding: 0; background-color:black;  position: relative;
        direction: rtl;  font-family: Arial, Helvetica, sans-serif;
    }
    .contirn{
        width: 80%; margin: auto; overflow:hidden;
    }
    ul{margin: 0; padding: 0; }
    header{ 
        background: #353637;
        color: #ffffff;
        padding-top: 0px; 
        border-bottom: goldenrod 5px solid;
        box-shadow: 1px 1px 20px goldenrod;
        height: auto;
    }
    header div embed{border-radius: 5px 5px 5px 5px;
        box-shadow: 1px 1px 10px goldenrod;
    }
    header a{font-family: 'Edu SA Beginner', cursive;
        color: aquamarine;
        text-decoration: none;
        font-size: 30px;
        transition: 0.5s;
        }
    header a:hover{color: white; font-weight: bolder;
    }
    .onit{ color: goldenrod; font-family: 'Edu SA Beginner', cursive;
    }
    header li{
        float: right; display: inline; padding: 0 20px 0 20px;
    }
    header h1{  float: left; color: goldenrod; font-family: 'Rubik Moonrocks', cursive;
        font-size: 50px;
        cursor: default;
        transition: 3s;
    }
    header h1:hover{text-shadow: 1px 1px 20px goldenrod;}
    header nav{ margin-top: 15%;}

    footer{text-align: center; color: goldenrod; background-color: #353637; position: relative;
    margin-top: 50px; width: 100%;}


    footer a button{background-color:#ffffff; color:#353637;
        border: none;
        border-radius: 100%;
        font-size: 25px; font-weight: bold;
        width: 30px;
        text-align: center;
        cursor: pointer;
        margin-left: 10px;
        text-shadow: 1px 1px 15px #353637;
        transition: 2.5s;
    }
    footer a button:hover{background-color: goldenrod;
        transform: rotate(360deg);
    }
    footer  h3{font-family: 'Bebas Neue', cursive; 
        font-size: 24px; margin-top: 10px;
    }
    #fot-detalis { position: absolute; top: 10px; left: 5px; text-align: left; color: #131313; width: 35%;}
    #fot-detalis h4 {display: inline;}
    #map{text-decoration: none; color:#131313; transition: 2s; display: block; font-weight: bold; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
    #map:hover {cursor: pointer; text-shadow: 1px 1px 20px black;}
    footer a img  , #tel { width: 25px;}
    
     
    /* Feel free to change duration  */ 
    .animated  {
        -webkit-animation-duration : 1000 ms  ;
        animation-duration : 1000 ms  ;
        -webkit-animation-fill-mode : both  ;
        animation-fill-mode : both  ;
    }  
    /* .owl-animated-out - only for current item */ 
    /* This is very important class. Use z-index if you want move Out item above In item */ 
    .owl-animated-out {
        z-index : 1 
        }
    /* .owl-animated-in - only for upcoming item
    /* This is very important class. Use z-index if you want move In item above Out item */ 
    .owl-animated-in {
        z-index : 0 
        }
    /* .fadeOut is style taken from Animation.css and this is how it looks in owl.carousel.css:  */ 
    .fadeOut  {
        -webkit-animation-name : fadeOut  ;
        animation-name : fadeOut  ;
    }  
    @-webkit-keyframes  fadeOut  {
        0% {
        opacity : 1   ;
        }  
        100% {
        opacity : 0   ;
        }  
    }
    @keyframes  fadeOut  {
        0% {
        opacity : 1   ;
        }  
        100% {
        opacity : 0   ;
        }  
    }
    .cards{ margin-top: 50px; direction: ltr; width:99%;}
    .cards h1 {color: #ffffff; margin-top: 20px;}
    .card { position: relative; height: 450px; background-color:#353637; width: 15rem;  margin: 40px 30px 20px 30px;  border: #353637 2px solid; border-radius: 10px; box-shadow: 1px 1px 20px goldenrod;}
    .card img {border-radius: 5px;  border-bottom: 1px solid goldenrod;}
    .card h5{color:goldenrod}
    .card h6 { color: #ffffff; display: inline; }
    .card p {font-size: large; color: #ffffff;}
    .card a button {background-color: goldenrod; border: none;}
    .card a {background-color: goldenrod; position: absolute; top: 90%; left: 2px;}
    .price {   position: absolute;
        top:15px; left:-30px;
        transform: rotateZ(-40deg);
        padding:1px 14px;
        border-radius: 5px;
        background-color: orange;
        color:white;
        font-size: 20px;}
    .item {display:inline-block;  margin-bottom: 50px;}
    .category h1 {margin-left: 10px;}
    #category1 ,#category2 , #category3 , #category4 ,#category5  {display:none;}
    .category { border-radius: 5px; box-shadow: 1px 1px 5px wheat; margin-right: 1%;}
    .category h1 {margin-left: 10px;}
    @media only screen and (max-width:1000px){
    #photo{margin-top: 50%;}
    #useer,#pass{width:50%} 
    .card{ width: 14rem; }
    .select { margin-top: 210px; margin-bottom: -350px;}
    }
    @media only screen and (max-width:700px){.form-container form input:placeholder-shown , #btn {font-size: small;}
    #btn {width: 40%;}
    .form-container {margin-top: -50px; height: 900px;}
    .form-container img  { margin-top: 25%;  width: 100%;}}
    </style>
