<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
$mid=$_GET['mid'];

$sel=  mysqli_query($dbcon,"select * from user_data where uid='$mid'");
                          $r=  mysqli_fetch_row($sel);
?>
<?php

if($usr=$_SESSION['uid'])
{
    
}
 else
     {
    header("location:../index.php");    
}
?>
<?php
                 
                    if(isset($_GET['upd']))
 {
   $upd=$_GET['upd'];
   $date=date('Y-m-d');
      $ins1=mysqli_query($dbcon,"insert into c_test values('','$upd','$usr','pending','$date','0')");
        if($ins1>0)
        {
                header("location:pen.php");
            }
    }
       
        ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title><?php echo $title ?> | Candidates Single:: Trinity Technologies</title>
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
                <div class="single-user-candidate">
                    <div class="user-detail-info text-center">
                        <div class="user-pic">
                            <img style="width: 200px;height: 200px" src="../img3/<?php echo $r[11] ?>" class="img-fluid rounded-circle" alt="">
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
                            <div class="skills-info my-4">
                               
                                <a  href="#"> <span style="background-color: lightskyblue"  class="mx-3">Info </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!--row -->
                <div class="row qualification-details mt-5">
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="far fa-user-circle"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Age</h4>
                            <p>
                                
                                <?php
                            
                            $date1 = date('Y-m-d');
$date2 = "$r[3]";

$diff = abs(strtotime($date2) - strtotime($date1));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf( $years);
                            
                            
                            ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-transgender"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Gender</h4>
                            <p><?php echo $r[2] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-heart"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Blood Type</h4>
                            <p><?php echo $r[13] ?></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3 qual-grid">
                        <div class="qual-icon text-center">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="qual-info">
                            <h4>Covid</h4>
                            <p>
                                
                                
                                <?php
                                if($r[12]=="Negative")
                                {
                                ?>
                                
                                
                                <b style="color: green">Negative</b>
                                
                                <?php
                                }
                                else
                                    
                                { ?>
                                 <b style="color: red">Positive</b>
                                 <?php
                                }
                                ?>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--row -->
                <!--/about -->
                <div class="candidate-ab-info mt-5">
                    <h5 class="j-b mb-3">Location</h5>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=myMap"></script>
    <script type="text/javascript">
    
    
    
    
   function initMap() {
        var uluru = {lat: <?php echo $r[5]?>, lng: <?php echo $r[6]?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
    
  </script>
             <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&callback=initMap">
    </script>
     <div id="map" style="width: 100%; height: 500px;"></div>
                                                
                
                </div>
               
            </div>
        </div>
    </section>
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
    <!-- //footer -->

    <!--model-forms-->
    <!--/Login-->
    
    
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->
    <!-- js -->
    <!--/slider-->
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