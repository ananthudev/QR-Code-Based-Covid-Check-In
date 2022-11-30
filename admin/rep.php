
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
<?php
                 
                    if(isset($_POST['b1']))
 {
    $t1=$_POST['t1'];
                header("location:print1.php?mid=$t1");
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
    <section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Positive cases </span>Report</h3>
				<!---728x90--->
				
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 map">
                                            <img style="width: 100%;height: 500px" src="../pic/medical-record-health-patient.jpg">

					</div>
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Enter Details</h4>
							<form method="post"enctype="multipart/form-data">
								<div class="form-group">
									<label class="my-2">Month</label>
									<input class="form-control" type="month" name="t1" placeholder="" required="">
								</div>
                                                           <div class="input-group1">
									<input class="form-control" type="submit" id="btn" name="b1" value="Search">
								</div>
							</form>
						</div>
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