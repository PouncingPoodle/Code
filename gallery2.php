<!-- Gallery2 -->

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
    
    <!-- SMALL THUMBS WITH BIG DISPLAY - GALLERY -->
        <link href="css/galleries/demo4.css" type="text/css" rel="stylesheet" />
        <script src="scripts/galleries/jquery-1.5.1.min.js" type="text/javascript"></script>
        <script src="scripts/galleries/jquery.exposure.js" type="text/javascript"></script>
        <script src="scripts/galleries/expj.js" type="text/javascript"></script>
    <!-- SMALL THUMBS WITH BIG DISPLAY - GALLERY -->
    
</head>

<body>
    
    <!-- INCLUDE HEADER -->
    	<?php include "include/header.php" ?>
    <!-- / INCLUDE HEADER -->
    
    
    
    
    
    <!-- id=block -->
    <div id="block">
    
            <!-- SMALL THUMBS WITH BIG DISPLAY - GALLERY -->       
            <div id="main">
                <div id="exposure"></div>
                <div class="clear"></div>	
            </div>

            <div id="top">
                <div class="panel">	
                    <div id="left"><a href="javascript:void(0);" onclick="$.exposure.nextImage();return true;"><img src="images/galleries/left.png" alt="Previous" /></a></div>				
                    <ul id="images">
                        <li><a href="images/galleries/asus_800.jpg"><img src="images/galleries/asus_150.jpg" title="Asus Graphics card"  alt="Asus Graphics card"/></a></li>
                        <li><a href="images/galleries/DellTablet_800.jpg"><img src="images/galleries/DellTablet_150.jpg" title="Dell Tablet"  alt="Dell Tablet"/></a></li>
                        <li><a href="images/galleries/EVGA_800.jpg"><img src="images/galleries/EVGA_150.jpg" title="EVGA Motherboard"  alt="EVGA Motherboard"/></a></li>
                    </ul>	
                    <div id="right"><a href="javascript:void(0);" onclick="$.exposure.prevImage();return true;"><img src="images/galleries/right.png" alt="Next" /></a></div>
                    <div class="clear"></div>
                </div>
            </div>
        	<!-- SMALL THUMBS WITH BIG DISPLAY - GALLERY --> 
        
    </div>
    <!-- / id=block -->
    
    
</body>

</html>
