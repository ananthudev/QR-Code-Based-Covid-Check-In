<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];


$sel=  mysqli_query($dbcon,"select * from user_data where uid='$usr'");
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
                 
                    if(isset($_POST['b1']))
 {
     
    $t1=$_POST['t1'];
    
   $t2=$_POST['t2'];
    $t3=$_POST['t3'];
    $t4=$_POST['t4'];
    
     $t5=$_POST['t5'];
    $t6=$_POST['t6'];
     
    $ins=mysqli_query($dbcon,"update user_data set nme='$t1',addr='$t2',la='$t3',lo='$t4',cont='$t5',em='$t6' where uid='$usr'");
    
    if($ins>0)
    {
      
                echo '<script>alert("Update Complete")</script>';
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
        <script type="text/javascript">
    function nme(b2)
{
var k5=b2.length;
var ch2=/([a-z])$/;
if(ch2.test(b2)==false)
{
document.getElementById("np3").innerHTML="<font color='red'>*Only Alphabets*</font>";
$("#btn").hide();
return false;
}

else
{
  document.getElementById("np3").innerHTML="";  
  $("#btn").show();
}
}
  
  
  
    
    function chkc(b2)
{
var k5=b2.length;
var ch2=/([0-9])$/;
if(ch2.test(b2)==false)
{
document.getElementById("o3").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=10)
{
document.getElementById("o3").innerHTML="<font color='red'>*Please Check Your Mobile Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o3").innerHTML="";  
  $("#btn").show();
}
}

 function chkc1(b21)
{
var k5=b21.length;
var ch21=/([0-9])$/;
if(ch21.test(b21)==false)
{
document.getElementById("o31").innerHTML="<font color='red'>*Only Numbers*</font>";
$("#btn").hide();
return false;
}
else if(k5!=12)
{
document.getElementById("o31").innerHTML="<font color='red'>*Please Check Your Addhar Number*</font>";
$("#btn").hide();
return false;
}
else
{
  document.getElementById("o31").innerHTML="";  
  $("#btn").show();
}
}

 function chkp(c)
{
var s=document.getElementById("p10").value;

if(s==c)
{
document.getElementById("p").innerHTML="<font color='Green'>*Password is Correct*</font>";
$("#btn").show();
return false;
}
else
{
document.getElementById("p").innerHTML="<font color='red'>*Verfy Password*</font>";
$("#btn").hide();
}
}





function vem(a)  
     {  
          //var a = document.myform.email.value;  
          var atposition = a.indexOf("@");  
          var dotposition = a.lastIndexOf(".");  
          if (atposition<1 || dotposition<atposition+2 || dotposition+2>=a.length) 
          {  
               document.getElementById("em").innerHTML="<font color='red'>*Please Check Your Email Address*</font>";
                $("#btn").hide();  
          }  
          else
{
                document.getElementById("em").innerHTML="";  
  $("#btn").show();
}
     }  
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
				<span>Update Profile</span>User</h3>
				<!---728x90--->
				
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-md-6 main_grid_contact">
						<div class="form">
							<h4 class="mb-4 text-left">Enter Details</h4>
							<form method="post"enctype="multipart/form-data">
								<div class="form-group">
									<label class="my-2">Name</label>
									<input class="form-control" value="<?php echo $r[1] ?>" type="text" name="t1" placeholder="" required=""onkeyup="nme(this.value)" /><span id="np3"></span>
								</div>
                                                            
                                                            
                                                            
                                                            <div class="form-group">
									<label>Address</label>
									<textarea id="textarea" placeholder=""name="t2" ><?php echo $r[4] ?></textarea>
								</div>
                                                            
                                                            <div class="form-group">
									<label>Search and double click on the map to get Location Details</label>
									<input id="pac-input"  type="text" class="form-control" placeholder="Search Your Location...">
								</div><div class="form-group">
									<label>Latitude</label>
									<input type="text" required="" class="form-control" name="t3"id="lat"placeholder="Double Click on the map" value="">
								</div>
                                                            <div class="form-group">
									<label>Longitude</label>
                                                                        <input type="text"required="" class="form-control" name="t4"placeholder="Double Click on the map" id="lng" value="">
								</div>
                                                            <div class="form-group">
									<label>Contact</label>
									<input class="form-control" type="text"value="<?php echo $r[7] ?>" name="t5" placeholder="" required=""onkeyup="chkc(this.value)" /><span id="o3"></span>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="t6"value="<?php echo $r[8] ?>" placeholder="" required=""onkeyup="vem(this.value)" /><span id="em"></span>
								</div>
                                                            
								
								<div class="input-group1">
									<input class="form-control" type="submit" id="btn" name="b1" value="Submit">
								</div>
							</form>
						</div>
					</div>
                                    
                                    
                                    <div class="col-md-6 map">
                                           
								
                    
                    
                
                
            
            <div id="map" style="width: 100%; height: 1600px"></div>
            <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 8.490001, lng: 76.95397},
          zoom: 18,
          mapTypeId: 'roadmap'
        });
        google.maps.event.addListener(map, 'dblclick', function (e) {
                //alert("Latitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
                document.getElementById("lat").value=e.latLng.lat();
                document.getElementById("lng").value=e.latLng.lng();
            });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        //map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDge58kDZRSDquz16IhEFQZMzHjMpFWwlw&libraries=places&callback=initAutocomplete"
         async defer></script>
        
           
                
								
							

					</div>
				</div>
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