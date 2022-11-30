
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['hdep'];
$mid=$_GET['mid'];
$uid=$_GET['uid'];


$act=mysqli_query($dbcon,"select * from c_test where id='$mid'");
  $act1=mysqli_fetch_row($act);
  $date1=date("Y-m-d", strtotime("-3 days", strtotime($act1[4])));

?>
<?php

if($usr=$_SESSION['hdep'])
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
    $uid=$_GET['uid'];  
    $upd=$_GET['upd'];
    $upd1=mysqli_query($dbcon,"update client_reg set st='1' where id='$upd'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_log set st='1'where uid='$uid'");
    
   
    if($upd2>0)
    {
       header("location:client_enq.php");
}
}                         
                            
}

?>
<?php
if(isset($_GET['del']))
{
    $uid=$_GET['uid'];  
    $upd=$_GET['del'];
    $upd1=mysqli_query($dbcon,"update client_data set st='2' where id='$upd'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_log set st='2'where uid='$uid'");
    
   
    if($upd2>0)
    {
       header("location:client_enq.php");
}
}                         
                            
}

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
                    <span>Patient</span>Activity</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    
                    <div class="col-lg-12 job_info_left">
                       
                         <?php
                         
                         
                                                        $sel_gal1=mysqli_query($dbcon,"select * from entry where uid='$uid'and st='1' and dt BETWEEN '$date1' and '$act1[4]'");
                                                       while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                            {
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from client_reg where em='$r_gal1[5]'");
                                                      $r_gal=mysqli_fetch_row($sel_gal);
                                                            
                                                        ?>
                        
                        <div class="emply-resume-list row mb-3">
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img style="width: 100%;height: 150px" src="../img2/<?php echo $r_gal[7] ?>" alt="" class="img-fluid">
                                </div>
                                <div class="emply-resume-info">
                                    <h4><a href="#"><?php echo $r_gal[1] ?></a></h4>
                                    <h5 class="mt-2">Controller:-<?php echo $r_gal[2] ?></h5>
                                    <p><i class="fas fa-map-marker-alt"></i> <?php echo $r_gal[3] ?></p>
                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="#"><i class="far fa-envelope"></i> <span class="icon_text"> <?php echo $r_gal[5] ?></span></a></li>
                                        <li><a href="tel:<?php echo $r_gal[4] ?>"><i class="fas fa-phone"></i> <span class="icon_text"><?php echo $r_gal[4] ?></span></a></li>
                                    
                                    
                                    </ul>
                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="#"><i > In:</i> <span class="icon_text"> <?php echo $r_gal1[2] ?></span></a></li>
                                        <li><a href="#"><i > Out:</i> <span class="icon_text"> <?php echo $r_gal1[3] ?></span></a></li>
                                    
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-3 emp_btn text-right">
                               <a target="_blank" href="ac_user.php?mid=<?php echo $r_gal1[0] ?>&uid=<?php echo $uid ?>">Possible Contact </a>
                            </div>
                        </div>
                       
                        
                        
                        
                        <?php
                                                            }
                                                            ?>
                        
                        <!--// Emply List3 -->
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