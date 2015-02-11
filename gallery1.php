<!-- Gallery1 -->

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
    
    <!-- GALLERY SLIDER -->
        <link rel="stylesheet" href="css/galleries/layout.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="css/galleries/jd.gallery.css" type="text/css" media="screen" charset="utf-8" />
        <script src="scripts/galleries/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
        <script src="scripts/galleries/mootools-1.2-more.js" type="text/javascript"></script>
        <script src="scripts/galleries/jd.gallery.js" type="text/javascript"></script>
    <!-- /GALLERY SLIDER -->
    
</head>

<body>
    
    <!-- INCLUDE HEADER -->
    	<?php include "include/header.php" ?>
    <!-- / INCLUDE HEADER -->
    
    
    
    
    
    <!-- id=block -->
    <div id="block">
    
        <!-- IMAGE SLIDER -->
        <script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: true
				});
			}
			window.addEvent('domready',startGallery);
        </script>
        
        <div class="content">
            <div id="myGallery">
            
                <div class="imageElement">
                    <h3>Asus Graphics Card</h3>
                    <p>Asus</p>
                    <a href="#" title="open image" class="open"></a>
                    <img src="images/galleries/asus_800.jpg" class="full" alt="Asus"/>
                    <img src="images/galleries/asus_150.jpg" class="thumbnail"  alt="Asus"/>
                </div>
                
                <div class="imageElement">
                    <h3>Dell Tablet</h3>
                    <p>Dell Tablet</p>
                    <a href="#" title="open image" class="open"></a>
                    <img src="images/galleries/DellTablet_800.jpg" class="full"  alt="Dell Tablet"/>
                    <img src="images/galleries/DellTablet_150.jpg" class="thumbnail"  alt="Dell Tablet"/>
                </div>
                
                <div class="imageElement">
                    <h3>EVGA Motherboard</h3>
                    <p>EVGA Motherboard<</p>
                    <a href="#" title="open image" class="open"></a>
                    <img src="images/galleries/EVGA_800.jpg" class="full"  alt="EVGA Motherboard<"/>
                    <img src="images/galleries/EVGA_150.jpg" class="thumbnail"  alt="EVGA Motherboard<"/>
                </div>
            
            </div>
        </div>
    	<!-- IMAGE SLIDER -->
        
    </div>
    <!-- / id=block -->
    
    
    
    
        
</body>

</html>
