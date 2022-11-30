<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];
 $date=date('Y-m-d');
date_default_timezone_set("Asia/Kolkata"); 
$tim=date("H:i:sa");
$sel=  mysqli_query($dbcon,"select * from hos_reg where em='$usr'");
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
 if(isset($_GET['report']))
 {
       $pr=$_GET['code'];
       $log=mysqli_query($dbcon,"select * from user_data where uid='$pr'");
if(mysqli_num_rows($log)>0)
{
    $r1=  mysqli_fetch_row($log);
   if($r1[12]=="Positive")
       
       
   {
      $ins1=mysqli_query($dbcon,"insert into entry values('','$pr','$tim','','$date','$usr','3')");
        if($ins1>0)
        { 
     header("location:scan.php?war=1");
            
        }
   }
 else {
       
   
    $log1=mysqli_query($dbcon,"select * from entry where uid='$pr' and cid='$usr' and dt='$date' and st='0'");
if(mysqli_num_rows($log1)>0)
{
   $upd1=mysqli_query($dbcon,"update entry set st='1',ex='$tim' where  uid='$pr' and cid='$usr' and dt='$date' and st='0'");
    
   
    if($upd1>0)
    {
    
    header("location:scan.php?ex=1");
    
}
    
    }
 else {
       $ins1=mysqli_query($dbcon,"insert into entry values('','$pr','$tim','','$date','$usr','0')");
        if($ins1>0)
        { 
     header("location:scan.php?en=1");
            
        }
    
    
    
 }

                         
 }
}
else {
   echo '<script>alert("Error Scaning Card")</script>'; 
}
 }
 
?>

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $title ?> | Contact :: Trinity Technologies</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Replenish a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
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
        <style type="text/css">

img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 100%;
}

#mainbody{
    background: white;
    width:100%;
	display:none;
}
#footer{
    background:white;
}
#v{
    width:32px;
    height:24px;
}
#qr-canvas{
    display:none;
}
#qrfile{
    width:320px;
    height:240px;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#imghelp{
    position:relative;
    left:0px;
    top:-160px;
    z-index:100;
    font:18px arial,sans-serif;
    background:#f0f0f0;
	margin-left:35px;
	margin-right:35px;
	padding-top:10px;
	padding-bottom:10px;
	border-radius:20px;
}
.selector{
    margin:0;
    padding:0;
    cursor:pointer;
    margin-bottom:-5px;
}
#outdiv
{
    width:32px;
    height:24px;
	border: solid;
	border-width: 3px 3px 3px 3px;
}
#result{
    border: solid;
	border-width: 1px 1px 1px 1px;
	padding:20px;
	width:70%;
}

ul{
    margin-bottom:0;
    margin-right:40px;
}



#footer a{
	color: black;
}
.tsel{
    padding:0;
}

</style>
<script>
							$( "span.menu" ).click(function() {
							  $( ".top-menu" ).slideToggle( "slow", function() {
								// Animation complete.
							  });
							});
						</script>
<script type="text/javascript" src="llqrcode.js"></script>
<script type="text/javascript" src="js/plusone.js"></script>
<script type="text/javascript" src="webqr.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24451557-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
	<!-- contact -->
	<section class="banner-bottom-wthree pt-lg-5 pt-md-3 pt-3">
		<div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
		<!---728x90--->
			<h3 class="tittle text-center mb-lg-5 mb-3">
				<span>Qrcode Card</span>Entry Report</h3>
				
                <div class="container">
                
                    <h3>Total Count:-
                        <b> <?php
                     $co=mysqli_query($dbcon,"select * from entry where cid='$usr'");
                     $co1=  mysqli_num_rows($co);
                     echo"$co1";
                    ?>
                        </b>
                    </h3>
                 <?php
                        
                                                        $sel_gal=mysqli_query($dbcon,"select * from entry where cid='$usr'");
                                                        if(mysqli_num_rows($sel_gal)>0)
                                                        {$i=0;
                                                        ?>
                                    <table class="table table-bordered">
                                    <thead>
                                        
                                        <tr>
                                            <th scope="col">#</th>
                                            
                                            <th scope="col">Name</th>
                                             <th scope="col">Contact</th>
                                              
                                            <th scope="col">Entry</th>
                                            <th scope="col">Exit</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                       
                                    </thead>
                                    
                                    <tbody>
                                         <?php
                                                            while($r_gal=mysqli_fetch_row($sel_gal))
                                                            {
                                                                $sel1=  mysqli_query($dbcon,"select * from user_data where uid='$r_gal[1]'");
                          $r1=  mysqli_fetch_row($sel1);
                                                                $i++;
                                                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $i ?></th>
                                            
                                            <td><?php echo $r1[1] ?></td>
                                            <td><?php echo $r1[7] ?></td>
                                            <td><?php echo $r_gal[2] ?></td>
                                            <td><?php echo $r_gal[3] ?></td>
                                            <td><?php echo $r_gal[4] ?></td>
                                            
                                        </tr>
                                        <?php
                                        
                                        
                                                            }
                                                            ?>
                                    </tbody>
                                </table>
                                    <?php
                                                        }
                                                        ?>
                </div>
                </div>
	</section>
	<!-- //contact -->
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
	
	<!--//Login-->
	<!--/Register-->
	
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
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!-- password-script -->
	<script>
		window.onload = function () {
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
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<script>
		$(document).ready(function () {
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