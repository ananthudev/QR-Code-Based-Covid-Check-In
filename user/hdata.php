
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

$sel=  mysqli_query($dbcon,"select * from user_data where uid='$usr'");
                          $r=  mysqli_fetch_row($sel);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $title ?> | Employer list:: Trinity Technologies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="../temp/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../temp/css/style6.css" rel='stylesheet' type='text/css' />
    <link href="../temp/css/style.css" rel='stylesheet' type='text/css' />
    <link href="../temp/css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
    <!-- banner-inner -->
    <div id="demo-1" class="page-content">
        <div class="dotts">
            <div class="header-top">
                <?php
                include 'menu.php';
                
                ?>
            </div>
            <!--/banner-info-w3layouts-->
            <div class="banner-info-w3layouts text-center">
            </div>
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
		
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>TIPS AND ALERTS</span>HEALTH DEPARTMENT</h3>
					<!---728x90--->
                    <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                        <div class="user-pic">
                            <center><img style="width: 200px;height: 200px" src="../img3/<?php echo $r[11] ?>" class="img-fluid rounded-circle" alt=""></center>
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h4>
                                <a href="#"><?php echo $r[1] ?></a>
                            </h4>
                            <p class="mt-2">
                                <span><?php echo $r[9] ?></span>
                            
                            
                            
                            </p>
                            <p>
                                <i class="fas fa-map-marker-alt"></i> <?php echo $r[4] ?></p>
                            <ul class="links_bottom_emp mt-2">
                                <li>
                                    <a href="#">
                                        <i class="far fa-envelope"></i>
                                        <span class="icon_text"> <?php echo $r[8] ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-phone-square"></i>
                                        <span class="icon_text"><a href="tel:<?php echo $r[7] ?>"><?php echo $r[7] ?></a></span>
                                    </a>
                                </li>
                            </ul>
    </div>    
                        
                        </div>
                        <?php
                        
                        $chk=mysqli_query($dbcon,"select * from hdep");
                        if(mysqli_num_rows($chk)>0)
                        {
                            $rchk=mysqli_fetch_row($chk);
                            ?><br />
                        <div class="alert alert-danger">
                            <center><h5>HEALTH DEPARTMENT</h5></center>
                                    Controller Name<br />
                                    <span style="margin-left:30px;"><b><?php echo $rchk[1] ?></b></span><br />
                               
                                    Contact Number<br />
                                    <span style="margin-left:30px;"><b><?php echo $rchk[2] ?></b></span>
                        </div>
                            <?php
                        }
                        
                        ?>
                        
                        

                    </div>
                    <div class="col-lg-8 job_info_left">
                        <br />
                        <?php
                        $sel_tp=mysqli_query($dbcon,"select * from h_tips order by id desc");
                        if(mysqli_num_rows($sel_tp)>0)
                        {
                            while($tp=mysqli_fetch_row($sel_tp))
                            {
                                ?>
                            <div style="border:1px solid black; box-shadow:0px 0px 3px black; padding:5px; margin-top:3px;">
                            <div style="background-color:orangered; color:white; padding:3px;">
                                Posted On : <?php echo date("d-M-Y",strtotime($tp[4])) ?>
                                <span style="float:right;">Type: <?php echo $tp[3] ?></span>
                            </div>
                                <h4 style="color:green"><?php echo $tp[1] ?></h4>
                                <p style="text-align:justify; color:black;"><?php echo $tp[2] ?></p>
                            </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--//preocess-->
<!---728x90--->
    <!--footer -->
    <footer class="footer-emp-w3layouts bg-dark dotts py-lg-5 py-3">
        <div class="container-fluid px-lg-5 px-3">
            
            <div class="copyright mt-4">
                <p class="copy-right text-center ">&copy; 2021<?php echo $title ?>. All Rights Reserved | Design by
                    <a href="#">Trinity Technologies </a>
                </p>
            </div>
        </div>
    </footer>
   
    
    
    <script src="../temp/js/jquery-1.11.1.min.js"></script>
    <script src="../temp/js/modernizr-2.6.2.min.js"></script>
    <!--//slider-->
    <!--search jQuery-->
    <script src="../temp/js/classie-search.js"></script>
    <script src="../temp/js/demo1-search.js"></script>
    <!--//search jQuery-->

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- password-script -->
    <script>
        window.onload = function() {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- //password-script -->
    <!-- //js -->
    <script src="../temp/js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="../temp/js/move-top.js"></script>
    <script src="../temp/js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>

</html>