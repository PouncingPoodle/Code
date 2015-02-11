<!-- rddebtcounselling.co.za -->



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
            
                <!-- Testimonial slider -->
                    
                    <!-- Scripts in head -->
                        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
                        <script src="scripts/jquery.bxslider.min.js"></script>
                    <!-- / Scripts in head -->
                    
                    <div class="testimonials-slider">
                        
                        <div class="slide">
                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">Daan</div>
                                <div class="testimonials-carousel-content"><p>I was retrenched after applying and then found another job and you helped my wife and I through a very stressful time.</p></div>
                            </div>
                        </div>
                        
                        <div class="slide">
                            <div class="testimonials-carousel-context">
                                <div class="testimonials-name">Sipho</div>
                                <div class="testimonials-carousel-content"><p>Thank You, the process was easy and I am not receiving any more phonecalls.</p></div>
                            </div>
                        </div>
                                
                    </div>
                    
                    <script>
                        $('.testimonials-slider').bxSlider({
                            minSlides: 1,
                            maxSlides: 1,
                            slideMargin: 32,
                            auto: true
                        });
                    </script>
                    
                <!-- / Testimonial slider -->
            
            </div>
        
        </div>
    <!-- / BODY -->


    <!-- INCLUDE Bootstrap JS files -->
        <?php include "include/bootstrapjsadd.php" ?>
    <!-- / INCLUDE Bootstrap JS files -->

</body>

</html>
