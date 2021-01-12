
<?php
$user  = 'sql12386296';
$pass = 'sv7MrdWWXH';
$db = 'sql12386296';
$conn = mysqli_connect("sql12.freesqldatabase.com",$user,$pass,"sql12386296") ;
mysqli_set_charset($conn,"utf8");
    $query = "select * from data";
    $result = mysqli_query($conn,$query );
  
  

       



?>


<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <title> موقع معلومات </title>
    <link rel = "Stylesheet" type = "text/css" href = "style.css">

    <style type="text/css">
    </style>
</head>
<body>
    <!-------------------- Header -------------------->
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Search -->
            <ul class="nav navbar-nav pull-xs-right" style="background-color: or">
                <form class="form-inline my-2 my-lg-0" action="Search.php" method="POST">
                    <input class="form-control mr-sm-2" type="text" placeholder="كلمات مفتاحية ..">
                    <button class="btn btn-success " type="submit">بحث</button>
                </form>
            </ul>
            <!-- Links -->
            <ul class="navbar-nav sticky-top mr-auto">
                <li class="nav-item"><a class="nav-link" >الإستفسارات</a></li>
                <li class="nav-item"><a class="nav-link" >أحدث المواضيع</a></li>
                <li class="nav-item"><a class="nav-link">التصنيفات</a></li>
                <li class="nav-item"><a class="nav-link" >الرئيسية</a></li>
            </ul>
            <!-- Logo -->
            <a class="navbar-brand" href="Home.html">
                <img src="Images/Logo.png" alt="logo" style="width:130px;">
            </a>
        </nav>
    </header>
    <!-------------------- Body -------------------->
    <div class="row">
        <div class="side">
            <center>
            <h3>الكاتب :</h3>
            <img src="Img.jpg" alt="صورة الكاتب" width="100px" height="100px">
            <p>بعض الملومات عن الكاتب ...</p><br /><hr /><br />
            <h3>مواضيع ذات صله :</h3>
            <img src="Img1.jpg" alt="logo" width="100px">
            <h6>عنوان الموضوع</h6><hr style="width: 50%;"/>
            <img src="Img2.jpg" alt="logo" width="100px">
            <h6>عنوان الموضوع</h6><hr style="width: 50%;"/>
            <img src="Img3.jpg" alt="logo" width="100px">
            <h6>عنوان الموضوع</h6><br /><hr /><br />
            <h3> الإعلانات :</h3>
            </center>
            
        </div>
        <div class="main">
            
            <?php   while($row = mysqli_fetch_array($result)){ ?>

            <div class="topic">
                <img src="Img2.jpg" alt="صورة الموضوع" class="image">
                <div class="text">
                    <h2 class="arabic"><?php echo $row["title"] ?></h2>
                    <h5 class="arabic"><?php echo $row["date"] ?></h5>
                    <p class="arabic">بعض المعلومات ...<br /><br /></p>
                </div>
            </div>
            <br /><hr /><br />

            <?php } ?>
           
        </div>
    </div>
    <!-------------------- Footer -------------------->
    <br />
    <br />
    <footer>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav sticky-top mr-auto">
                <li class="nav-item"><a class="nav-link" href="www.twitter.com"><img src="twitter.png" alt="logo" style="width:10%;"> تويتر</a></li>
                <li class="nav-item"><a class="nav-link" href="www.facebook.com"><img src="facebook.png" alt="logo" style="width:10%;"> فيسبوك</a></li>
                <li class="nav-item"><a class="nav-link" href="www.instagram.com"><img src="instagram.png" alt="logo" style="width:10%;"> انستقرام</a></li>
                <li class="nav-item"><a class="nav-link" href="www.google.com"><img src="google.png" alt="logo" style="width:10%;"> +جوجل</a></li>
            </ul>
        </nav>
        <div style="color:rgb(139, 139, 139); background-color:rgb(39, 39, 39); text-align: center;">
            © 2020 Copyright: <a href="www.mie-squ.com" style="color: white;">mie-squ.com</a>
        </div>
    </footer>
</body>
</html>
