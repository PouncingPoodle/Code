<!-- rddebtcounselling.co.za CONTACT FORM (sidebar) -->


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




<div class="container">
        
        <div class="row col-md-3 hidden-sm" id="sidebar contactpage">                
            <div id="big-form">
                <h1 style="margin:15px 0 20px 0;">SEND US A MESSAGE</h1>
                <p>If you require any Debt Counselling information, send us a message.  Existing and new clients will receive a call or mail back.</p>
                <form name="big-form" action="scripts/contactform.php" method="post">
                    <div>
                        <label>Firstname  <br><input type="text" name="firstname"></label>
                    </div>
                    <div>
                        <label>Lastname  <br><input type="text" name="lastname"></label>
                    </div>
                    <div>
                        <label>Email address  <br><input type="text" name="email"></label>
                    </div>
                    <div>
                        <label>Contact number  <br><input type="text" name="phone"></label>
                    </div>
                    <div>
                        <label>Best contact time <br>
                            <select name="time">
                                <option value="9:00 - 12:00" selected>9:00 - 12:00</option>
                                <option value="12:00 - 14:00">12:00 - 14:00</option>
                                <option value="14:00 - 17:00">14:00 - 17:00</option>
                                <option value="Afterhours">Afterhours</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>Message  <br><textarea name="message" rows="5"></textarea></label>
                    </div>
                    
                    <fieldset>
                        <label><input id="checkbox" type="checkbox" name="checkbox" checked>Send me information about Debt Counselling.</label>
                    </fieldset>
                    
                    <input type="submit" name="submit" value="Send">
                    
                </form>
            </div>
        </div>


    <!-- INCLUDE Bootstrap JS files -->
        <?php include "include/bootstrapjsadd.php" ?>
    <!-- / INCLUDE Bootstrap JS files -->

</body>

</html>
