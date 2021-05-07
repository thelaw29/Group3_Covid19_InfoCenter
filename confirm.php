<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/footerstyle.css">
       
	<title>Registration Confirmed | COVID-19 Info Center</title>
    <meta name="description" content="">
    <meta name="keywords" content="">	
</head>

<body>
 
 <?php
 
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$nric  = $_POST['nric'];
	$email = $_POST['contactemail'];
    $phone = $_POST['phone'];
	$allergic = $_POST ['addAllergic'];
	
	if (file_exists($nric . '.txt')){     //Check for filename with given nric
            echo '<h3>You are already registered!</h3>';
        }
		else{   //filename not found, write to file
            
           $content_to_write = "First Name: " . $fname . "\n";
           $content_to_write .= "Last Name: " . $lname . "\n";
           $content_to_write .= "NRIC: " . $nric . "\n";
           $content_to_write .= "Contact: " . $email . "\n";
           $content_to_write .= "Phone: " . $phone . "\n";
           $content_to_write .= "Allergies: " . $allergic . "\n";
           file_put_contents($nric . '.txt', $content_to_write);
           echo '<h3>Registration is successful!</h3>';
        }
?>  
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
                                        <h2 class="card-title h3 mb-3 text-left">Thank you!</h2>
											<table class="table">
												<th>Description</th>
                                                <th>Details</th>
												<tr>
													<td>First name</td>
													<td><?php echo $fname;?></td>
												</tr>
	
												<tr>
													<td>Last Name</td>
													<td><?php echo $lname;?></td>
												</tr>
												
												<tr>
													<td>NRIC</td>
													<td><?php echo $nric;?></td>
												</tr>
												
												<tr>
													<td>Email</td>
													<td><?php echo $email;?></td>
												</tr>

                                                <tr>
													<td>Phone Number</td>
													<td><?php echo $phone;?></td>
												</tr>
				
												<tr>
													<td>Allergic</td>
													<td><?php echo $allergic;?></td>
												</tr>
											</table>
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
            
    <footer>
        <div class="footer_container">
            <div class="footernav">
                <div class="footernav_head">
                    <h1>Index</h1>
                </div>
                <div class="footernav_list">
                    <ul class="footerlist">
                    <li class="list_content"><a href="home.html">Home</a></li>
                    <li class="list_content"><a href="page4.php">Vaccine Registration</a></li>
                    </ul>
                </div>
            </div>
            <div class="footernav">
                <div class="footernav_head">
                    <h1>Vaccines</h1>
                </div>
                <div class="footernav_list">
                    <ul class="footerlist">
                    <li class="list_content"><a href="page1.html">Pfizer-BioNTech</a></li>
                    <li class="list_content"><a href="page2.html">Sputnik V</a></li>
                    <li class="list_content"><a href="page3.html">Sinovac</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="disclaimer">
            <h2>Disclaimer</h2>
            <p>This website is created mainly for educational and non-commercial use only. It is a 
                partial fulfillment for completion of unit SWE20001 - Development Project 1 offered in 
                Swinburne University of Technology, Sarawak Campus. The web-master and author(s) do not 
                represent the business entity. The content of the pages of this website might be out-dated 
                or inaccurate, thus, the author(s) and web-master does not take any responsibility for 
                incorrect information disseminated or cited from this website.
            </p>
        </div>
    </footer>
    
</body>
</html>