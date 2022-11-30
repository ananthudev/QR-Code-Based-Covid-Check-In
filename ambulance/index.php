
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['amb'];


$act=mysqli_query($dbcon,"select * from ambulance where uid='$usr'");
  $amb=mysqli_fetch_row($act);
?>
<?php

if($usr=$_SESSION['amb'])
{
    
}
 else
     {
    header("location:../index.php");    
}
if(isset($_POST['sub']))
{
    $lat=$_POST['t5'];
    $lng=$_POST['t6'];
    $up=mysqli_query($dbcon,"update ambulance set lat='$lat', lng='$lng' where uid='$usr'");
    if($up>0)
    {
        header("location:index.php?suc=1");
    }
}
if(isset($_GET['t']))
{
    $up1=mysqli_query($dbcon,"update ambulance set st='2' where uid='$usr'");
    if($up1>0)
    {
        header("location:index.php?suc=1");
    }
}
if(isset($_GET['u']))
{
    $up1=mysqli_query($dbcon,"update ambulance set st='1' where uid='$usr'");
    if($up1>0)
    {
        header("location:index.php?suc=1");
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
            </div>
            <!--/banner-info-w3layouts-->
           
            <!--//banner-info-w3layouts-->
        </div>
    </div>
    
    <!-- banner-text -->
    <!--/process-->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
		
               
                    
                    <div class="col-lg-12 job_info_left">
                    <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search">
                        <div class="user-pic">
                            <center><img style="width: 200px;height: 200px" src="../img4/<?php echo $amb[7] ?>" class="img-fluid rounded-circle" alt=""></center>
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h4>
                            <a href="#"><?php echo $amb[1] ?></a>                            
                            </h4>
                            <?php echo $amb[2] ?><br />
                            Status: <?php
                            if($amb[10]=="1")
                            {
                                echo"<span style='background-color:green; color:white; padding:3px;'>AVAILABLE</span>";
                                ?><br /><br />
                                   <a href="index.php?t=1"> <span style='background-color:black; color:white; padding:3px;'><span class="fa fa-arrow-down"></span></span></a>
                                <?php
                            }
                            else{
                                echo"<span style='background-color:red; color:white; padding:3px;'>BUSY</span>";
                                ?><br /><br />
                                   <a href="index.php?u=1"> <span style='background-color:black; color:white; padding:3px;'><span class="fa fa-arrow-up"></span></span></a>
                                <?php
                            }
                            ?>
                            <br /><br />
                          <h5>Message from Health</h5>
                          <?php
                        $sel_tp=mysqli_query($dbcon,"select * from h_tips order by rand() limit 2");
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
                    <div class="col-lg-8 job_info_left">
                    <div class="alert alert-warning">
                        <div class="form-group">
                            <?php
                            
                            ?>
                            <center>
                                <h6><b>UPDATE YOUR LOCATION</b></h6>
									<label>Search and double click on the map to get Location Details</label>
                            </center>
									<input id="pac-input"  type="text" class="form-control" placeholder="Search Your Location...">
								</div><div class="form-group">
                                    <form method="post">
									<label>Latitude</label>
									<input type="text" required="" class="form-control" name="t5"id="lat"placeholder="Double Click on the map" value="">
								</div>
                                                            <div class="form-group">
									<label>Longitude</label>
									<input type="text" class="form-control" name="t6"placeholder="Double Click on the map" id="lng" value="">
								</div><center>
                                <input type="submit" style="margin-bottom:5px;" name="sub" value="UPDATE LOCATION" class="btn btn-sm btn-danger" />
                                <center>
                                </form>
                                <div id="map" style="width: 100%; height: 500px"></div>
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
          zoom: 16,
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