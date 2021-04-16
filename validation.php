<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
       
	<title>Registration | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">	
</head>

<?php
    $fname = $lname = $email = $phone = $allergic = " ";
?>

<body> 
    <div class="container-fluid site-title">
    <!-- <div class=""> -->
        <div class="container">
            <div class="row">
                <h3>L1-Team3</h3>
            </div>
        </div>
    </div>
  
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html">
                            Home						</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer-BioNTech				</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            Sputnik V					</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            Sinovac						</a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link active" href="page4.php">
                            Registration Form			</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
	       
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
    
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            
            <div class="row">
            
                <div class="col content">
                
                    <div class="row">
                        <br>
                        <h2 id="content" class="open d-lg-block">Registration Confirmed</h2>
                        <br>
                        <br>
                        <br>
                        
                    </div>
                    <div class="cdc-2020-bar container">
							
                    </div>
                 
                    <div class="syndicate">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="row-fluid">
                                    <div class="vc_empty_space col-12 pt-3 pb-3">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="card border-0 rounded-0">
                                    <div class="card-body bg-quaternary">
                                        <h2 class="card-title h3 mb-3 text-left">Form Details:</h2>
											<table id="confirmform">
												<label>First Name: </label><?php echo $fname;?>
												<label>Last Name: </label><?php echo $lname;?>
												<label>Email: </label><?php echo $email;?>
												<label>Phone: </label><?php echo $phone;?>
												<label>Allergies: </label><br><?php echo $allergic;?>	
										        <br>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
							
          <br>
          <br>
          <br>
     
        </main>
    						
    </div> 
    
            
    <div class="container-fluid">
        <div class="container">
        
            <div class="card-body bg-quaternary">
                    
                <h5>Disclaimer</h5>
                <p style="font-size:14px;">This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.</p>
                
            </div>
        </div>
    </div>
    
</body>
</html>