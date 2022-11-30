
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

?>
<?php
if(isset($_POST['sub']))
{
    $cn=$_POST['cn'];
    $con=$_POST['con'];
    $uid=$_POST['uid'];
    $pas=$_POST['pas'];
    $ins=mysqli_query($dbcon,"INSERT INTO `hdep`(`cnme`, `con`, `uid`, `st`) VALUES ('$cn','$con','$uid','1')");
    if($ins>0)
    {
        $ins1=mysqli_query($dbcon,"INSERT INTO `user_log`(`uid`, `pwd`, `utyp`, `st`) VALUES ('$uid','$pas','hdep','1')");
        if($ins1>0)
        {
            header("location:hdep.php");
        }
    }
}
if(isset($_POST['sub1']))
{
    $cn=$_POST['cn1'];
    $con=$_POST['con1'];
    $uid=$_POST['uid1'];
    $pas=$_POST['pas1'];
    $up=mysqli_query($dbcon,"update hdep set cnme='$cn', con='$con' where uid='$uid'");
    if($up>0)
    {
        $up1=mysqli_query($dbcon,"update user_log set pwd='$pas' where uid='$uid'");
        if($up1>0)
        {
            header("location:hdep.php");
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
                    <span>MANAGE</span>HEALTH DEPARTMENT</h3>
					<!---728x90--->
                    <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                            <img src="../pic/hdep.png" class="img img-responsive" />
                        </div>
                        
                        
                        

                    </div>
                    <div class="col-lg-8 job_info_left">
                        <?php
                        if(isset($_GET['edit']))
                        {
                            $chk=mysqli_query($dbcon,"select * from hdep");
                            $rchk=mysqli_fetch_row($chk);
                            $spas=mysqli_query($dbcon,"select * from user_log where uid='$rchk[3]'");
                            $rpas=mysqli_fetch_row($spas);
                            ?>
                            <form method="post">
                        <table style="width:100%">
                        <tr>
                            <td>
                                    Controller Name
                                    <input type="text" name="cn1" value="<?php echo $rchk[1] ?>" class="form-control" required="required" />
                                </td>
                                <td>
                                    Contact Number
                                    <input type="text" name="con1" value="<?php echo $rchk[2] ?>" class="form-control" required="required" />
                                </td>
                            </tr>
                            <tr>
                            <td>
                                    Login ID
                                    <input type="text" readonly name="uid1" value="<?php echo $rchk[3] ?>" class="form-control" required="required" />
                                </td>
                                <td>
                                    Password
                                    <input type="text" name="pas1" value="<?php echo $rpas[2] ?>" class="form-control" required="required" />
                                </td>
                            </tr>
                            <tr>
                                    <td colspan="2">
                                        <center><br />
                                            <input type="submit" name="sub1" value="UPDATE DETAILS" class="btn btn-warning" />
                                         </center>
                                    </td>
                            </tr>
                        </table>
                        </form>
                            <?php                            
                        }
                        else
                        {
                        $chk=mysqli_query($dbcon,"select * from hdep");
                        if(mysqli_num_rows($chk)>0)
                        {
                            $rchk=mysqli_fetch_row($chk);
                            ?>
                            <a href="hdep.php?edit=1"><span style="float:right;"><span class="fa fa-edit"></span> Edit</span></a>
                        <table style="width:100%;" border="1" cellpadding="10">
                        <tr>
                            <td style="width:50%;">
                                    Controller Name<br />
                                    <span style="margin-left:30px;"><b><?php echo $rchk[1] ?></b></span>
                                </td>
                                <td>
                                    Contact Number<br />
                                    <span style="margin-left:30px;"><b><?php echo $rchk[2] ?></b></span>
                                </td>
                            </tr>
                            <tr>
                            <td>
                                    Login ID<br />
                                    <span style="margin-left:30px;"><b><?php echo $rchk[3] ?></b></span>
                                </td>
                                <td>
                                    Password<br />
                                    <span style="margin-left:30px;"><b>********</b></span>                                    
                                </td>
                            </tr>                            
                        </table>
                            <?php
                        }
                        else
                        {
                        ?>
                        <form method="post">
                        <table style="width:100%">
                        <tr>
                            <td>
                                    Controller Name
                                    <input type="text" name="cn" class="form-control" required="required" />
                                </td>
                                <td>
                                    Contact Number
                                    <input type="text" name="con" class="form-control" required="required" />
                                </td>
                            </tr>
                            <tr>
                            <td>
                                    Login ID
                                    <input type="text" name="uid" class="form-control" required="required" />
                                </td>
                                <td>
                                    Password
                                    <input type="password" name="pas" class="form-control" required="required" />
                                </td>
                            </tr>
                            <tr>
                                    <td colspan="2">
                                        <center><br />
                                            <input type="submit" name="sub" value="ADD DEPARTMENT" class="btn btn-success" />
                                         </center>
                                    </td>
                            </tr>
                        </table>
                        </form>
                        <?php
                        }
                    }
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