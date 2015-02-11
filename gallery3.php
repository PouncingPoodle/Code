<!-- Gallery3 -->

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
    
    
    
    <link rel="stylesheet" type="text/css" href="css/galleries/styles.css">
    
    <!-- ENLARGE IMG - GALLERY - FANCYBOX -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>        
        <script type="text/javascript" src="scripts/galleries/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>        
        <link rel="stylesheet" href="scripts/galleries/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="scripts/galleries/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>        
        <link rel="stylesheet" href="scripts/galleries/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <script type="text/javascript" src="scripts/galleries/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="scripts/galleries/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>        
        <link rel="stylesheet" href="scripts/galleries/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
        <script type="text/javascript" src="scripts/galleries/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>        
        <script type="text/javascript">
			$(document).ready(function() {
				$(".fancybox").fancybox();
			});
        </script>
    <!-- ENLARGE IMG - GALLERY - FANCYBOX -->
    
</head>

<body>
    
    <!-- INCLUDE HEADER -->
    	<?php include "include/header.php" ?>
    <!-- / INCLUDE HEADER -->
    
    
    
    
    
    <!-- id=block -->
    <div id="block">
    
            <!-- ENLARGE IMG - GALLERY - FANCYBOX -->            
            <div id="gallery">
                <ul>
                    <li>
                        <a class="fancybox" rel="group" href="images/galleries/asus_800.jpg"><img src="images/galleries/asus_150.jpg" alt="Asus Graphics card" /></a>
                        <p>Asus Graphics card</p>
                    </li>
                    <li>
                        <a class="fancybox" rel="group" href="images/galleries/DellTablet_800.jpg"><img src="images/galleries/DellTablet_150.jpg" alt="Dell Tablet" /></a>
                        <p>Dell Tablet</p>
                    </li>
                    <li>
                        <a class="fancybox" rel="group" href="images/galleries/EVGA_800.jpg"><img src="images/galleries/EVGA_150.jpg" alt="EVGA Motherboard" /></a>
                        <p>EVGA Motherboard</p>
                    </li>
                    <li>                    
                        <a class="fancybox" rel="group" href="images/galleries/inteli7_800.jpg"><img src="images/galleries/inteli7_150.jpg" alt="Intel CPU" /></a>        
                        <p>Intel CPU</p>
                    </li>
                    <li>
                        <a class="fancybox" rel="group" href="images/galleries/samsungScreen_800.jpg"><img src="images/galleries/samsungScreen_150.jpg" alt="Samsung Screen" /></a>
                        <p>Samsung Screen</p>
                    </li>
                    <li>                    
                        <a class="fancybox" rel="group" href="images/galleries/samsungTablet_800.jpg"><img src="images/galleries/samsungTablet_150.jpg" alt="Samsung Tablet" /></a>    
                        <p>Samsung Tablet</p>
                    </li>
                </ul>
            </div>
        
    </div>
    <!-- / id=block -->
    
    
    
    
            
</body>

</html>
