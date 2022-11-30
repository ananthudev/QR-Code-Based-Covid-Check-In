
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
                    <span>TRACK</span>USER</h3>
					<!---728x90--->
                <div class="row choose-main mt-5">
                    
                    <div class="col-lg-12 job_info_left">
                       <table style="width:100%;"> 
                            <tr>
                            <td style="width:30%"></td>
                            <td style="width:40%">
                            <form>
                                USER IDENTITY 
                                <input type="text" name="uid" class="form-control" />
                                <center>
                                    <input type="submit" name="sub" value="TRACK NOW" class="btn btn-sm btn-success" style="margin-top:10px;" />
                                </center>
                            </form>
                            </td>
                            <td></td>
                            </tr>
                       </table>
                         <?php
                         if(isset($_GET['uid']))
                         {
                             $udata=$_GET['uid'];
                            $selu=mysqli_query($dbcon,"select * from user_data where uid='$udata'");
                            if(mysqli_num_rows($selu)>0)
                            {
                                $seldt=mysqli_query($dbcon,"select distinct dt from entry where uid ='$udata' order by dt desc");
                                if(mysqli_num_rows($seldt)>0)
                                {
                                    ?>
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>#</td>
                                            <td>Available at</td>
                                            <td>Time In</td>
                                            <td>Time Out</td>                                            
                                        </tr>
                                        <?php
                                        while($rdt=mysqli_fetch_row($seldt))
                                        {
                                        ?>
                                        <tr>
                                            <td colspan="4"><?php echo date("d-M-Y", strtotime($rdt[0])) ?></td>
                                        </tr>
                                        <?php
                                        $i=0;
                                        $seldata=mysqli_query($dbcon,"select * from entry where uid='$udata' and dt='$rdt[0]'");
                                        while($rdata=mysqli_fetch_row($seldata))
                                        {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td>
                                                    <?php
                                                    $selcl=mysqli_query($dbcon,"select * from client_reg where em='$rdata[5]'");
                                                    $rcl=mysqli_fetch_row($selcl);
                                                    echo "<b>$rcl[1]</b><br />";
                                                    echo $rcl[3]."<br />";
                                                    echo "call :".$rcl[4];
                                                    ?>
                                                </td>
                                                <td><?php echo $rdata[2] ?></td>
                                                <td><?php echo $rdata[3] ?></td>
                                            </tr>
                                            <?php
                                        }
                                        }
                                        ?>
                                    </table>                                        
                                    <?php
                                }
                                else
                                {
                                    echo"No data Found";
                                }
                            }
                            else
                            {
                                ?>
                                <h3 style="background-color:red; color:white; padding:5px; text-align:center;">Invalid User Data</h3>
                                <?php
                            }
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