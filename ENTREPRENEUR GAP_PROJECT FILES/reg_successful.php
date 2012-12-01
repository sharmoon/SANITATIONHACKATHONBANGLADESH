<?php
	include 'common.php';
	error_reporting(0);
	session_start();
	$timezone_offset = 6;
	$systemDate = gmdate('d', time()+$timezone_offset*60*60);
	$systemMonth = gmdate('m', time()+$timezone_offset*60*60);
	$systemYear = gmdate('Y', time()+$timezone_offset*60*60);
	$checkRow = "SELECT * FROM registrationmaster";
	$checkRowQuery = mysql_query($checkRow);
	$checkNumRow = mysql_num_rows($checkRowQuery);
	if($checkNumRow==0){
		$Id=$systemYear."-".$systemMonth."-".$systemDate."-01";	
	}
	else{
		$number = $checkNumRow+1;
		if($number < 10){
			$number = "0".$number;
		}				
		$Id=$systemYear."-".$systemMonth."-".$systemDate."-".$number;
	}
	//exit;
	$uniName=$_SESSION['unionId'];
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$dob=$_POST['year']."-".$_POST['month']."-".$_POST['date'];
	$village=$_POST['village'];
	$po=$_POST['po'];
	$wno=$_POST['wno'];
	$mbn=$_POST['mbn'];
	$natIno=$_POST['natIno'];
	$rdate=$_POST['ryear']."-".$_POST['rmonth']."-".$_POST['rdate'];
	$btype=$_POST['btype'];
	$hno=$_POST['hno'];
	$sql = "INSERT INTO registrationmaster (ApplicantId,ApplicantName,FathersName,MothersName,DOB,Village,Post,WardNo,UnionId,MobileNo,NationalID,Remarks,ApplicationDate,ApplicationType) 
		VALUES ('$Id','$name', '$fname', '$mname', '$dob', '$village', '$po', '$wno', '$uniName','$mbn', '$natIno','','$rdate','N')";		
	$sqlQuery = mysql_query($sql);
	
	$insertToRegistrationdetails = "INSERT INTO registrationdetails (ApplicantId,Status,HoldingNo,BusinessType) VALUES ('$Id','p','$hno','$btype')";
	$insertToRegistrationdetailsQuery = mysql_query($insertToRegistrationdetails);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Registration</title>



    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>

</head>
<body>
<div id="art-page-background-glare-wrapper">
    <div id="art-page-background-glare"></div>
</div>
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-header">
                <div class="art-headerobject"></div>
                        <div class="art-logo">
                                                 <h1 class="art-logo-name"><a href="#">Entrepreneur Gap </a></h1>
                                                                         <h2 class="art-logo-text">Solved at Hackathon </h2>
                                                </div>
                
            </div>
            <div class="cleared reset-box"></div>
<div class="art-bar art-nav">
<div class="art-nav-outer">
	<ul class="art-hmenu">
		<li>
			<a href="index.php" class="active">হোম </a>
		</li>	
		<li>
			<a href="#">Menu Item</a>
	
		</li>
		
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1">
<div class="art-box art-vmenublock">
    <div class="art-box-body art-vmenublock-body">
                <div class="art-bar art-vmenublockheader">
                    <h3 class="t">Vertical Menu</h3>
                </div>
                <div class="art-box art-vmenublockcontent">
                    <div class="art-box-body art-vmenublockcontent-body">
                <ul class="art-vmenu">
	<li>
		<a href="#">Item</a>
        <ul>
			<li>
                <a href="#">Top 10</a>

            </li>
		</ul>
		
	</li>	
	<li>
		<a href="#">News</a>
		
	</li>	
	<li>
		<a href="#">Video</a>
	</li>	
	<li>
		<a href="#">Archive</a>
   </li>
			
</ul>
                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Search</h3>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                <form class="art-search" method="get" name="searchform" action="javascript:void(0)">
  <div><input class="art-search-text" type="text" value="" name="s" /></div>
  <input class="art-search-button" type="submit" value="" />
</form>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">Links</h3>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
               
<ul>
  <li>
    <a href="#" title="All News">National Web Portal</a> 
  </li>
  <li>
    <a href="#" title="Best of the Year">LGD</a> 
  </li>
  <li>
    <a href="#" title="Hyperlink">WSS</a> 
  </li>
  
</ul>
                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                               
     <div>
     <fieldset>
     <legend>আবেদন সম্পূর্ণ হয়েছে</legend>
             <table border="0" cellspacing="0" cellpadding="0">
             <tr>
             	<td>আপনার রেজিস্ট্রেশন কোডটি সংরক্ষণ করুনঃ</td>
                <td><?php echo $Id; ?></td>  
                <td></td>
                <td></td>          
             </tr>
             
             <tr>
             	<td>নামঃ</td>
                <td><?php echo $name; ?></td>  
                <td></td>
                <td></td>          
             </tr>
             <tr>
             	<td>বাবার নামঃ</td>
                <td><?php echo $fname; ?></td>  
                <td></td>  
                <td></td>
             
             </tr>
             <tr>
             	<td>মায়ের নামঃ</td>
                <td><?php echo $mname; ?></td> 
                <td></td>
                <td></td>
             
             </tr>
             <tr>
         		<td>জন্ম তারিখ</td>
                <td><?php echo $dob; ?></td>  
                <td></td>
                <td></td>             
             </tr>
             <tr>
             	<td>গ্রামঃ</td>
                <td><?php echo $village; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>পোস্ট অফিসঃ</td>
                <td><?php echo $po; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>ওয়ার্ড নংঃ</td>
                <td><?php echo $wno; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>হোল্ডিং নংঃ</td>
                <td><?php echo $hno; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>ব্যবসার ধরনঃ</td>
                <td>
					<?php 
					if($btype=='r'){
						echo "খুচরা";
					}
					else{
						echo "পাইকারি";
					}
					?>
                </td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
            	<td>মোবাইল নাম্বারঃ</td>
                <td><?php echo $mbn; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
      			<td>জাতিও পরিচয় নাম্বারঃ</td>
                <td><?php echo $natIno; ?></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>আবেদনের তারিখঃ</td>
                <td><?php echo $rdate; ?></td>  
                <td></td>
                <td></td>            
             </tr>            
             
             </table>
             </fieldset>
             </div>     
     </div>
</div>
                                                                
                                
   			</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                
                                                                <div class="art-postheadericons art-metadata-icons">
                   
                </div>
                <div class="art-postcontent">


                </div>
                <div class="cleared"></div>
                                <div class="art-postfootericons art-metadata-icons">
                    
                </div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                        <div class="art-layout-cell art-sidebar2">
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                <div id="borendro">
                    <h3 class="t">বরেন্দ্র রেডিও</h3>
                    <img src="images/barendro.jpg" height="50px" width="186px"/><br />
                   <a href="#"> <img src="images/audio-player-400x300.png" height="50px" width="185px"/></a>
                    <ul>
  <li>
    <a href="#" title="November 2008">motivating Song 1 </a>
  </li>
  <li>
    <a href="#" title="October 2008">motivating Song 2</a>
  </li>
  <li>
    <a href="#" title="September 2008">motivating Song 3</a>
  </li>
  
</ul>
                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                
					</div>
                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="art-box art-block">
    <div class="art-box-body art-block-body">
                <div class="art-bar art-blockheader">
                    <h3 class="t">login</h3>
                    <form action="login.php" method="post">
                        Username: <input type="text" name="username" maxlength="13" />
                        <br />
                        Password: <input type="password" name="password" maxlength="13" />
                        <br />
                        <input type="submit" value="Log In" />
                </form>

                </div>
                <div class="art-box art-blockcontent">
                    <div class="art-box-body art-blockcontent-body">
                      
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>

                          <div class="cleared"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                <p><br /></p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"></p>
    <div class="cleared"></div>
</div>

</body>
</html>
