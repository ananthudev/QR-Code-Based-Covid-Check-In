
<?php
include '../connection.php';
ob_start();
session_start();
$usr=$_SESSION['uid'];

$sel=  mysqli_query($dbcon,"select * from user_data where uid='$usr'");
                          $r=  mysqli_fetch_row($sel);
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
                    <span>FIND AND CONTACT</span>AMBULANCE</h3>
					<!---728x90--->
                    <div class="row choose-main mt-5">
                    <div class="col-lg-4 job_info_right">
                        <div class="widget_search" style="display:none;">
                        <div class="user-pic">
                            <center><img style="width: 200px;height: 200px" src="../img3/<?php echo $r[11] ?>" class="img-fluid rounded-circle" alt=""></center>
                        </div>
                        <div class="user-content-info emply-resume-info text-center mt-4">
                            <h4>
                                <a href="#"><?php echo $r[1] ?></a>
                            </h4>
                            <p class="mt-2">
                                <span><?php echo $r[9] ?></span>
                            
                            
                            
                            </p>
                            <p>
                                <i class="fas fa-map-marker-alt"></i> <?php echo $r[4] ?></p>
                            <ul class="links_bottom_emp mt-2">
                                <li>
                                    <a href="#">
                                        <i class="far fa-envelope"></i>
                                        <span class="icon_text"> <?php echo $r[8] ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-phone-square"></i>
                                        <span class="icon_text"><a href="tel:<?php echo $r[7] ?>"><?php echo $r[7] ?></a></span>
                                    </a>
                                </li>
                            </ul>
    </div>    
                        
                        </div>
                        <div class="alert alert-warning">
                        <div class="form-group">
                            <center>
                                <h6><b>SEARCH AMBULANCE</b></h6>
									<label>Search and double click on the map <br />to get Location Details</label>
                            </center>
									<input id="pac-input"  type="text" class="form-control" placeholder="Search Your Location...">
								</div><div class="form-group">
                                    <form>
									<label>Latitude</label>
									<input type="text" required="" class="form-control" name="t5"id="lat"placeholder="Double Click on the map" value="">
								</div>
                                                            <div class="form-group">
									<label>Longitude</label>
									<input type="text" class="form-control" name="t6"placeholder="Double Click on the map" id="lng" value="">
								</div><center>
                                <input type="submit" style="margin-bottom:5px;" name="sub" value="SEARCH" class="btn btn-sm btn-danger" />
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
                    <div class="col-lg-8 job_info_left">
                    <?php
                    function twopoints_on_earth($latitudeFrom, $longitudeFrom,$latitudeTo,  $longitudeTo)
                    {
                    $long1 = deg2rad($longitudeFrom);
                    $long2 = deg2rad($longitudeTo);
                    $lat1 = deg2rad($latitudeFrom);
                    $lat2 = deg2rad($latitudeTo);

                    //Haversine Formula
                    $dlong = $long2 - $long1;
                    $dlati = $lat2 - $lat1;

                    $val = pow(sin($dlati/2),2)+cos($lat1)*cos($lat2)*pow(sin($dlong/2),2);

                    $res = 2 * asin(sqrt($val));

                    $radius = 3958.756;

                    return ($res*$radius);
                    }

                    ?>
                        <br />
                        <?php
                        if(isset($_GET['t5']))
                        {
                            $lat=$_GET['t5'];
                            $lng=$_GET['t6'];
                            $selam=mysqli_query($dbcon,"SELECT id,lat, lng, SQRT(POW(69.1 * (lat - $lat), 2) + POW(69.1 * ($lng - lng) * COS(lat / 57.3), 2)) AS distance FROM ambulance HAVING distance < 25 ORDER BY distance");
                            if(mysqli_num_rows($selam)>0)
                            {
                                $i=0;
                                while($ram=mysqli_fetch_row($selam))
                                {
                                    $i++;
                                    $amb=mysqli_query($dbcon,"select * from ambulance where id='$ram[0]'");
                                    $ramb=mysqli_fetch_row($amb);
                                    ?>                                    
                                <div class="emply-resume-list row mb-3">                                
                            <div class="col-md-9 emply-info">
                                <div class="emply-img">
                                    <img style="width: 100%;" src="../img4/<?php echo $ramb[7] ?>" alt="" class="img-fluid">
                                </div>
                                
                                <div class="emply-resume-info">
                                    <a href="tel:<?php echo $ramb[3] ?>">
                                <div style="float:right; background-color:orangered; color:white; padding:10px;">
                                    <h3 class="fas fa-phone"></h3><br />
                                    CALL
                                </div></a>
                                <span data-toggle="modal" data-target="#myModal<?php echo $i ?>" style="cursor:pointer; background-color:blue; color:white; padding:10px; float:right; text-align:center;"><h3 class="fa fa-map-marker"></h3><br />TRACK</span>
                                <div id="myModal<?php echo $i ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe src="mapwithroute.php?la=<?php echo $lat ?>&lo=<?php echo $lng ?>&dla=<?php echo $ramb[8] ?>&dlo=<?php echo $ramb[9] ?>" style="width:100%; height:500px;"></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                                </div>
                                    <h4><?php echo $ramb[1] ?></h4>
                                
                                    <p><i class="fas fa-home"></i> <?php echo $ramb[2] ?></p>
                                    <p><a href="tel:<?php echo $ramb[3] ?>"><i class="fas fa-phone"></i> <span class="icon_text"><?php echo $ramb[4] ?></span></a>
                                    <p>
                                        <?php
                                        if($ramb[10]=="1")
                                        {
                                            echo"<span style='background-color:green; color:white; padding:3px;'>AVAILABLE</span>";
                                        }
                                        else
                                        {
                                            echo"<span style='background-color:red; color:white; padding:3px;'>NOT AVAILABLE</span>";
                                        }
                                        ?>
                                    </p>
                                    <p>
                                    <?php
                                       // $dis=twopoints_on_earth( $lat, $lng,$ramb[8],  $ramb[9]);
                                        //echo $dis
                                    ?>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                           
                        </div>
                                    <?php
                                }
                            }
                            else{
                                echo"No Ambulance Found.. Please search with Another Location";
                            }
                        }
                        else
                        {
                            ?>
                            <img src="../pic/ambulance.gif" />
                            <?php
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