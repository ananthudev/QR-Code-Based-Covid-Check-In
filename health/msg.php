
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['hdep'];
if(isset($_POST['sub']))
{
    $tit=$_POST['tit'];
    $typ=$_POST['ctype'];
    $msg=addslashes(nl2br($_POST['msg']));
    $dt=date('Y-m-d');
    $insm=mysqli_query($dbcon,"INSERT INTO `h_tips`(`title`, `msg`, `mtype`, `dt`) VALUES ('$tit','$msg','$typ','$dt')");
    if($insm>0)
    {
        header("location:msg.php");
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
                    <span>MANAGE</span>HEALTH DEPARTMENT</h3>
					<!---728x90--->
                    <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                            <img src="../pic/hdep.png" class="img img-responsive" />
                        </div>
                        
                        <?php
                        
                        $chk=mysqli_query($dbcon,"select * from hdep");
                        if(mysqli_num_rows($chk)>0)
                        {
                            $rchk=mysqli_fetch_row($chk);
                            ?>
                            <div class="alert alert-success">
                           <b><?php echo $rchk[1] ?></b><br />
                            <span class="fa fa-mobile"></span> <?php echo $rchk[2] ?><br />
                            <span class="fa fa-user"></span> <?php echo $rchk[3] ?>
                        </div>
                            <?php
                        }
                        
                        ?>
                        
                        

                    </div>
                    <div class="col-lg-8 job_info_left">
                        
                        <form method="post">
                        <table style="width:100%">
                        <tr>
                            <td>
                                    Title
                                    <input type="text" name="tit" class="form-control" required="required" />
                                </td>
                                <td>
                                    Category
                                    <select name="ctype" class="form-control" required="required">
                                    <option>Tips</option>
                                    <option>Emergency-Alert</option>                                    
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    Type Message Here
                                    <textarea name="msg" class="form-control"></textarea>
                                </td>
                            </tr>                            
                            <tr>
                                    <td colspan="2">
                                        <center>
                                            <input type="submit" name="sub" value="ADD MESSAGE" class="btn btn-success" />
                                         </center>
                                    </td>
                            </tr>
                        </table>
                        </form>
                        <?php
                       
                        ?><br />
                        <h3 style="background-color:blue; color:white; padding:3px; text-align:center;">Tips and Messages from Health Department</h3><br />
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