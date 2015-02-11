<!-- rddebtcounselling.co.za REVIEW FORM -->
 
 
 
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
 
        
        <div class="container"><!-- container -->
             <div class="col-md-12 col-sm-12 col-xs-12 space" style="margin-right:0px;padding-right:0px;"><!-- col-md-12 -->
                <h1 style="text-align:center;">FREE REVIEW</h1>
                <p style="text-align:center;">Fill in your details and we will mail you your confidential debt assessment and our recommendations.</p>
                
<div style="margin-top:50px;" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"><!-- panel-group -->
                
  <div class="panel panel-default"><!-- panel panel-default -->
    <div class="panel-heading" role="tab" id="headingOne"><!-- headingTwo -->
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-align:center;">
          Personal Details
        </a>
      </h4>
    </div><!-- / headingTwo -->
    <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne"><!-- collapseOne --> <!--class=" in"-->
      <div class="panel-body"><!-- panel-body --> 
                    <div class="col-md-12 col-sm-12 col-xs-12" id="big-form"><!-- big-form -->
                        <form name="big-form" class="big-form" action="scripts/reviewpi.php" method="post">
                        	<div class="row">
                                <div class="col-md-6">
                                    <label>Firstname  <br><input type="text" name="firstname"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Lastname  <br><input type="text" name="lastname"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Cell number  <br><input type="text" name="cellphone"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Landline  <br><input type="text" name="landline"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Email address  <br><input type="text" name="email"></label>
                                </div>
                                <div class="col-md-6">
                                    <label>Marital Status <br>
                                        <select name="marital">
                                            <option value="Single / Divorced" selected>Single / Divorced</option>
                                            <option value="Married COP">Married COP</option>
                                            <option value="Married ANC">Married ANC</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <label>Number of dependent kids  <br><input type="text" name="kids"></label>
                                </div>
                            </div>
                            
                            <div class="row col-md-4 space" style="float:right;">
                                <div class="col-md-6 space" style="float:right;padding-right:0px;">
                                <input id="submit" type="submit" name="submit" value="Submit">
                                </div>
                            </div>
                            
                        </form>
                    </div><!-- / big-form -->
        
      </div><!-- / panel-body --> 
    </div><!-- / collapseOne --> 
  </div><!-- / panel panel-default -->
  
  <div class="panel panel-default"><!-- panel panel-default -->
    <div class="panel-heading" role="tab" id="headingTwo"><!-- headingTwo -->
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="text-align:center;">
          Debt Commitments
        </a>
      </h4>
    </div><!-- / headingTwo -->
    <div id="collapseTwo" class="panel-collapse" role="tabpanel" aria-labelledby="headingTwo"><!-- collapseTwo --> 
      <div class="panel-body"><!-- panel-body --> 
                    <div class="col-md-12 col-sm-12 col-xs-12" id="big-form"><!-- big-form -->
                        <form name="big-form" class="big-form" action="scripts/reviewdc.php" method="post">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 space" style="margin-bottom:0px;">
                                    <h3><label>Debt Commitments</label></h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <h3><label>Which bank / Credit Provider</label></h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <h3><label>Monthly Repayment - not arrangement</label></h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <h3><label>Total Outstanding <br>- if available</label></h3>
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="debtcom1" value="1   Home Loan">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="bank1">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="repayment1" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="outstanding1" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="debtcom2" value="2   Home Loan">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="bank2">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="repayment2" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="outstanding2" value="R ">
                                </div>
                            </div>
                            
                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-6 col-sm-6 col-xs-6 space" style="margin-bottom:0px;">
                                    <h3><label>Vehicle Finanace  <br></label></h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="vehicle1" value="1   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vbank1">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vrepayment1" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="voutstanding1" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="vehicle2" value="2   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vbank2">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vrepayment2" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="voutstanding2" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="vehicle3" value="3   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vbank3">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="vrepayment3" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="voutstanding3" value="R ">
                                </div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-md-6 col-sm-6 col-xs-6 space" style="margin-bottom:0px;">
                                    <h3><label>All other accounts  <br></label></h3>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space" style="margin-bottom:0px;">
                                    <label></label>
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts1" value="1   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank1">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments1" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding1" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts2" value="2   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank2">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments2" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding2" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts3" value="3   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank3">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments3" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding3" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts4" value="4   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank4">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments4" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding4" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts5" value="5   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank5">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments5" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding5" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts6" value="6   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank6">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments6" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding6" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts7" value="7   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank7">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments7" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding7" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts8" value="8   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank8">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments8" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding8" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts9" value="9   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank9">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments9" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding9" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts10" value="10   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank10">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments10" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding10" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts11" value="11   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank11">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments11" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding11" value="R ">
                                </div>
                            </div>
                            <div class="row" id="marg">
                                <div class="col-md-6 col-sm-6 col-xs-6 space">
                                    <input type="text" name="oaccounts12" value="12   ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="obank12">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="orepayments12" value="R ">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 space">
                                    <input type="text" name="ooutstanding12" value="R ">
                                </div>
                            </div>
    
                            <div class="row col-md-4 space" style="float:right;">
                                <div class="col-md-6 space" style="float:right;padding-right:0px;">
                                <input id="submit" type="submit" name="submit" value="Submit">
                                </div>
                            </div>
    
                        </form>
                    </div><!-- / big-form -->
      </div><!-- / panel-body -->
    </div><!-- / collapseTwo -->
    </div><!-- / panel panel-default -->
  
  <div class="panel panel-default"><!-- panel panel-default -->
    <div class="panel-heading" role="tab" id="headingThree"><!-- headingThree -->
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="text-align:center;">
          Income and Expenses
        </a>
      </h4>
    </div><!-- / headingThree -->
    <div id="collapseThree" class="panel-collapse" role="tabpanel" aria-labelledby="headingThree"><!-- collapseThree -->
        <div class="panel-body"><!-- panel-body --> 
            <div id="big-form"><!-- big-form --> 
                <form name="big-form" class="big-form" action="scripts/reviewie.php" method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 space" style="margin-bottom:0px;">
                            <h3><label>Income</label></h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space" style="margin-bottom:0px;">
                            <h3><label>Client</label></h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space" style="margin-bottom:0px;">
                            <h3><label>Spouse</label></h3>
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="income1" value="Nett Salary">Nett Salary</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="iclient1" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="ispouse1" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="income2" value="Overtime">Overtime</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="iclient2" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="ispouse2" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="income3" value="Any other income(rent, maintenance, policy)">Any other income(rent, maintenance, policy)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="iclient3" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="ispouse3" value="R ">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 space" style="margin-bottom:0px;">
                            <h3><label>Monthly expenditure</label></h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space" style="margin-bottom:0px;">
                            <h3><label>Client</label></h3>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space" style="margin-bottom:0px;">
                            <h3><label>Spouse</label></h3>
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense" value="House Rent">House Rent </label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient1" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse1" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense2" value="Rate and taxes (If property owned)">Rate and taxes (If property owned)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient2" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse2" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense3" value="Water & Electricity">Water & Electricity</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient3" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse3" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense4" value="Security Services (ADT etc)">Security Services (ADT etc)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient4" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse4" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense5" value="Vehicle 1(Maintenance, not repayments)">Vehicle 1(Maintenance, not repayments)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient5" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse5" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense6" value="Vehicle 2">Vehicle 2</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient6" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse6" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense7" value="Tracker">Tracker</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient7" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse7" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense8" value="Petrol expenses / Transport">Petrol expenses / Transport</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient8" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse8" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense9" value="Car and house insurance">Car and house insurance</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient9" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse9" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense10" value="Groceries (include toiletries, hair etc">Groceries (include toiletries, hair etc)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient10" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse10" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense11" value="Clothing(include school clothes)">Clothing(include school clothes)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient11" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse11" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense12" value="Maintenance paid">Maintenance paid</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient12" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse12" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense13" value="Medical Aid (if not taken off salary)">Medical Aid (if not taken off salary)</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient13" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse13" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense14" value="Cell Phone">Cell Phone</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient14" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse14" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense15" value="Telephone">Telephone</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient15" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2 space">
                            <input type="text" name="espouse15" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense16" value="Life Insurence / Pension">Life Insurence / Pension</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient16" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse16" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense17" value="TV Licence">TV Licence</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient17" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse17" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense18" value="ASDL / Internet">ASDL / Internet</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient18" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse18" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense19" value="School Fees">School Fees</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient19" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse19" value="R ">
                        </div>
                    </div>
                    <div class="row" id="marg">
                        <div class="col-md-6 col-sm-6 col-xs-6 space">
                            <label name="expense20" value="Other expenses">Other expenses</label>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="eclient20" value="R ">
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3 space">
                            <input type="text" name="espouse20" value="R ">
                        </div>
                    </div>
                    
                    <div class="row col-md-4 space" style="float:right;">
                        <div class="col-md-6 space" style="float:right;padding-right:0px;">
                        <input id="submit" type="submit" name="submit" value="Submit">
                        </div>
                    </div>
    
                </form>    
            </div>  <!-- / big-form --> 
             
      </div><!-- / panel-body --> 
    </div><!-- / collapseThree -->
  </div><!-- / panel panel-default -->
  
  </div>
</div><!-- / panel-group -->

</div><!-- / col-md-12 -->
</div><!-- / container -->




    <!-- INCLUDE Bootstrap JS files -->
        <?php include "include/bootstrapjsadd.php" ?>
    <!-- / INCLUDE Bootstrap JS files -->

</body>

</html>
