
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

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
    $upd1=mysqli_query($dbcon,"update c_test set res='Negative' where uid='$upd' and hid='$usr'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_data set covid='Negative'where uid='$upd'");
    
   
    if($upd2>0)
    {
       header("location:pen.php");
}
}                         
                            
}

?>
<?php
if(isset($_GET['del']))
{
    
    $upd=$_GET['del'];
   $upd1=mysqli_query($dbcon,"update c_test set res='Positive' where uid='$upd' and hid='$usr'");
    
   
    if($upd1>0)
    {
        $upd2=mysqli_query($dbcon,"update user_data set covid='Positive'where uid='$upd'");
    
   
    if($upd2>0)
    {
       header("location:pen.php");
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
                    <span>Covid Test</span>Positive Cases</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    
                    <div class="col-lg-12 job_info_left">
                       
                         <?php
                          $sel_gal1=mysqli_query($dbcon,"select * from c_test where hid='$usr' and res='Positive' order by id desc");
                                                       while($r_gal1=mysqli_fetch_row($sel_gal1))
                                                       {
                                                        $sel_gal=mysqli_query($dbcon,"select * from user_data where uid='$r_gal1[1]'");
                                                      $r_gal=mysqli_fetch_row($sel_gal);
                                                             $sel_gal2=mysqli_query($dbcon,"select * from hos_reg where em='$r_gal1[2]'");
                                                      $r_gal2=mysqli_fetch_row($sel_gal2);
                                                        ?>
                        
                        <div class="emply-resume-list row mb-3">
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img style="width: 200px;height: 200px" src="../img3/<?php echo $r_gal[11] ?>" alt="" class="img-fluid">
                                </div>
                                <div class="emply-resume-info">
                                    <h4><a href="user_dt.php?mid=<?php echo $r_gal[9] ?>"><?php echo $r_gal[1] ?></a></h4>
                                    <h5 class="mt-2">Covid Test</h5>
                                    <p><i class="fas fa-phone"></i> <?php echo $r_gal[7] ?></p>
                                    <ul class="links_bottom_emp mt-2">
                                        <li><a href="#"><i class="far fa-calendar"></i> <span class="icon_text"> <?php echo $r_gal1[4] ?></span></a></li>
                                        <li><a href="#"><i class="fas fa-hospital"></i> <span class="icon_text"><?php echo $r_gal2[1] ?></span></a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                           <div class="col-md-3 emp_btn text-right">
                               <a target="_blank" href="ac_shop.php?mid=<?php echo $r_gal1[0] ?>&uid=<?php echo $r_gal[9] ?>">Activity </a> &nbsp;&nbsp; <a href="loc_user.php?mid=<?php echo $r_gal[0] ?> ">Near by </a>
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