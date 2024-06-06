<!DOCTYPE html><html lang="fa"><head>
    <title> ورود نرم افزار انبار داری  انباربان</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="images/anbarban-logo.jpg" type="image/x-icon">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css">

</head>

<body id="top" dir="rtl">
<div class="page_loader"></div>

<!-- Login 15 start -->
<div class="login-15">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 pad-0">
                <div class="form-section align-self-center">
                    <div class="logo">
                        <a href="login-15.html">
                            <img src="images/anbarban-logo.jpg" alt="logo">
                        </a>
                    </div>
                    <h3>ورود به حساب کاربری</h3>
                   
                    <div class="clearfix"></div>
                    <form action="./control.php/login.php" method="POST">
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"]==2){
                                    echo '<span style="color: red;">نام کاربری یا رمز عبور اشتباه است</span>';
                                    
                                }else{
                                    echo '<span style="color: red;">لطفا هر دو ورودی را پر کنید</span>';
                                }
                            }elseif(isset($_GET["exit"])){

                                setcookie("username", "", time()-3600*24,"/");

                            }


                        ?>
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="نام کاربری" aria-label="Full Name">
                        </div>
                        <div class="form-group clearfix">
                            <input name="password" type="password" class="form-control" autocomplete="off" placeholder="رمز عبور" aria-label="Password">
                        </div>
                        <div class="form-group clearfix">
                            <input type="submit"class="btn btn-lg btn-primary btn-theme" value="ورود" name="submit">
                            <a href="#" class="forgot-password">فراموشی رمز عبور</a>
                        </div>
                    </form>
					<p>حساب کاربری ندارید؟ <a href="#">با پشتیبانی تماس بگیرید</a></p>
                </div>
            </div>
            <div class="col-lg-6 align-self-center pad-0 bg-img">
                <div class="info clearfix">
                    <div class="logo-2">
                        <a href="#">
                            <img src="images/anbarban-logo.jpg" alt="logo">
                        </a>
                    </div>
                    <h3>انباربان</h3>
                  
                </div>
            </div>
        </div>
    </div>
    <div class="animation-container">
        <div class="lightning-container">
            <div class="lightning white"></div>
            <div class="lightning red"></div>
        </div>
        <div class="boom-container">
            <div class="shape circle big white"></div>
            <div class="shape circle white"></div>
            <div class="shape triangle big yellow"></div>
            <div class="shape disc white"></div>
            <div class="shape triangle blue"></div>
        </div>
        <div class="boom-container second">
            <div class="shape circle big white"></div>
            <div class="shape circle white"></div>
            <div class="shape disc white"></div>
            <div class="shape triangle blue"></div>
        </div>
    </div>
</div>
<!-- Login 15 end -->

<!-- External JS libraries -->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/app.js"></script>
<!-- Custom JS Script -->



</body></html>