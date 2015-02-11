<!--  -->

<!doctype html>
<html>

<head>
	
    <title>Each page spesific title</title>
    
    <!-- must have meta data -->
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- / must have meta data -->
        
    <!-- Favicon add -->
    	<link rel="shortcut icon" href="images/rddc/favicon.ico" >
    <!-- / Favicon add -->
    
    <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/rddc/custom.css" rel="stylesheet">
        <script src="js/respond.js"></script>
    <!-- / Bootstrap -->
	
</head>

<body>

    <!-- INCLUDE HEADER -->
    	<?php include "include/header.php" ?>
    <!-- / INCLUDE HEADER -->

    <!-- BODY -->
        <div class="container">
        
            <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	
                <!-- GLYPHICONS -->
            	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                	
                    <h1>CONTACT US<br></h1>
                    <p>
                        <span class="glyphicon glyphicon-earphone"></span>   011 421 2918<br>
                        <span class="glyphicon glyphicon-print"></span>  086 546 5986<br>
                        <span class="glyphicon glyphicon-envelope"></span>  info@rddebt.co.za
                    </p>
                    
                </div>
                <!-- / GLYPHICONS -->
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    
                    <a id="review" class="btn btn-primary btn-lg" href="review.php" role="button"><h1>GET A FREE REVIEW</h1></a>
                    <img src="images/galleries/asus_800.jpg" class="full" alt="Asus"/>
                    
                </div>
                
                <!-- GOOGLE MAPS -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                	
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                    <div style="overflow:hidden;height:400px;width:100%;">
                        <div id="gmap_canvas" style="height:400px;width:100%;"></div>
                    </div>
                    <script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(-26.19069,28.30365000000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-26.19069, 28.30365000000006)});infowindow = new google.maps.InfoWindow({content:"<b>RD Debt Counselling</b><br/>133 Newlands Ave Benoni<br/> Benoni" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                    
                </div>
                <!-- / GOOGLE MAPS -->
            
            </div>
        
        </div>
    <!-- / BODY -->

    <!-- INCLUDE Bootstrap JS files -->
        <?php include "include/bootstrapjsadd.php" ?>
    <!-- / INCLUDE Bootstrap JS files -->

</body>

</html>
