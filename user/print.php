<!DOCTYPE html>


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
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="temp/assets/images/favicon.png">
    <title>Print ID</title>
    <!-- Bootstrap Core CSS -->
    <link href="temp/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    
    
    <style>
        
        
        
        body {
			
			font-family:'verdana';
		}
		.id-card-holder {
			width: 225px;
		    padding: 4px;
		    margin: 0 auto;
		    background-color: #1f1f1f;
		    border-radius: 5px;
		    position: relative;
		}
		.id-card-holder:after {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    border-radius: 0 5px 5px 0;
		}
		.id-card-holder:before {
		    content: '';
		    width: 7px;
		    display: block;
		    background-color: #0a0a0a;
		    height: 100px;
		    position: absolute;
		    top: 105px;
		    left: 222px;
		    border-radius: 5px 0 0 5px;
		}
		.id-card {
			
			background-color: #fff;
			padding: 10px;
			border-radius: 10px;
			text-align: center;
			box-shadow: 0 0 1.5px 0px #b9b9b9;
		}
		.id-card img {
			margin: 0 auto;
		}
		.header img {
			width: 100px;
    		margin-top: 15px;
		}
		.photo img {
			width: 80px;
    		margin-top: 15px;
		}
		h2 {
			font-size: 15px;
			margin: 5px 0;
		}
		h3 {
			font-size: 12px;
			margin: 2.5px 0;
			font-weight: 300;
		}
		.qr-code img {
			width: 50px;
		}
		p {
			font-size: 5px;
			margin: 2px;
		}
		.id-card-hook {
			background-color: #000;
		    width: 70px;
		    margin: 0 auto;
		    height: 15px;
		    border-radius: 5px 5px 0 0;
		}
		.id-card-hook:after {
			content: '';
		    background-color: #d7d6d3;
		    width: 47px;
		    height: 6px;
		    display: block;
		    margin: 0px auto;
		    position: relative;
		    top: 6px;
		    border-radius: 4px;
		}
		.id-card-tag-strip {
			width: 45px;
		    height: 40px;
		    background-color: #0950ef;
		    margin: 0 auto;
		    border-radius: 5px;
		    position: relative;
		    top: 9px;
		    z-index: 1;
		    border: 1px solid #0041ad;
		}
		.id-card-tag-strip:after {
			content: '';
		    display: block;
		    width: 100%;
		    height: 1px;
		    background-color: #c1c1c1;
		    position: relative;
		    top: 10px;
		}
		.id-card-tag {
			width: 0;
			height: 0;
			border-left: 100px solid transparent;
			border-right: 100px solid transparent;
			border-top: 100px solid #0958db;
			margin: -10px auto -30px auto;
		}
		.id-card-tag:after {
			content: '';
		    display: block;
		    width: 0;
		    height: 0;
		    border-left: 50px solid transparent;
		    border-right: 50px solid transparent;
		    border-top: 100px solid #d7d6d3;
		    margin: -10px auto -30px auto;
		    position: relative;
		    top: -130px;
		    left: -50px;
		}
    </style>
</head>


                                    
                                    <?php
                                             
                                                    $sel_u=mysqli_query($dbcon,"select * from user_data where uid='$usr'");
                                                    
                                                   if($r= mysqli_fetch_row($sel_u))
                                                    {
                                                        ?>
                                    
                                    
                                    
                                    
	<div class="id-card-hook"></div>
	<div class="id-card-holder">
		<div class="id-card">
			<div class="header">
                            <img style="width: 200px;height: 60px" src="../pic/ministry-of-health-and-family-department-logo.jpg">
			</div>
			<div class="photo">
                            <img src="../img3/<?php echo $r[11] ?>"style="width: 110px;height: 120px">
			</div>
			<h2><?php echo $r[1] ?></h2>
			<div class="qr-code">
				<iframe src="amr\qrcode.php?id=<?php echo $usr ?>" style='border:none; width: 90px; height: 88px;'></iframe>
			</div>
			<h3>Covid19 card</h3>
			<hr>
			<p>Government of india<p>
			<p>CARD: <strong>Covid19 card</strong></p>
                        <p>Ph:0471 2298844, 77, 99, +918547048882</p><p> E-mail: govindia@gmail.com</p>

		</div>
	</div>
                                    
                                    <?php
                                                    }
                                                    
                                                    else
                                                    {
                                                        echo "No data Found";
                                                    }
                                                    ?>
                                
           
</body>

</html>
<script>
    window.print();
    </script>