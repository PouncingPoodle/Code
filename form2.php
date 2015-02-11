<!-- rddebtcounselling.co.za CALL BACK FORM (footer) -->



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




<div class="col-md-3 col-sm-3 col-xs-12 space">                    
    <h1>REQUEST A CALL BACK<br></h1>
    <div id="big-form">
        <form name="big-form" class="big-form" action="scripts/callback.php" method="post">
            <div>
                <label>Name and Surname  <br><input type="text" name="namesurname"></label>
            </div>
            <div>
                <label>Email address  <br><input type="text" name="email"></label>
            </div>
            <div>
                <label>Contact number  <br><input type="text" name="phone"></label>
            </div>
            <input id="submit" type="submit" name="submit" value="Send">
            
        </form>
    </div>
</div>

    <!-- INCLUDE Bootstrap JS files -->
        <?php include "include/bootstrapjsadd.php" ?>
    <!-- / INCLUDE Bootstrap JS files -->

</body>

</html>
