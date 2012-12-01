<?php
	include 'common.php';
	error_reporting(0);
	session_start();
	$loginCorrect = $_GET['loginInfo'];	
	session_destroy(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Home</title>



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
			<a href="#" class="active">হোম </a>
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
      <a href="registation.php">রেজিস্ট্রশনের জন্য ক্লিক করুন</a> 
    </li>
    <li>
      <a href="#" title="All News">National Web Portal</a> 
    </li>
    <li>
      <a href="#" title="Best of the Year">LGD</a> 
    </li>
    <li>
      <a href="#" title="Hyperlink">Water Supply and Sanitation</a> 
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
                                
            <div class="art-postcontent">
                <p> <h1>আবেদনের লিস্টঃ</h1></p>
					<div class="applicant">
                    	<table style="font-size:11px; text-align:right;width:100%;" >
                        	<tr style="background-color:#CCC;">
                            	<td>আবেদন নং </td>
                                <td>নাম</td>
                                <td>বাবার নাম   </td>
                                <td>ওয়ার্ড নং </td>
                                <td>হোল্ডিং নং</td>
                                <td>ব্যবসার ধরণ</td>
                                <td> নতুন/পুরাতন</td>
                            
                            </tr>
                            <tr style="">
                            	<td><a href="#">২০১২১২০১০০০১</a></td>
                                <td>আশিকুজ্জামান </td>
                                <td> ওয়াজেদ মিয়া </td>
                                <td>৪</td>
                                <td> ৮২ </td>
                                <td> পাইকারি</td>
                                <td>নতুন</td>
                            
                            </tr>
                            <tr style="">
                            	<td><a href="#">২০১২১২০১০০০১</a></td>
                                <td>আশিকুজ্জামান </td>
                                <td> ওয়াজেদ মিয়া </td>
                                <td>৪</td>
                                <td> ৮২ </td>
                                <td> পাইকারি</td>
                                <td>নতুন</td>
                            
                            </tr>
                            <tr style="">
                            	<td><a href="#">২০১২১২০১০০০১</a></td>
                                <td>আশিকুজ্জামান </td>
                                <td> ওয়াজেদ মিয়া </td>
                                <td>৪</td>
                                <td> ৮২ </td>
                                <td> পাইকারি</td>
                                <td>নতুন</td>
                            
                            </tr>
                            
                        
                        </table>
                    </div>
                </div>
                <div class="cleared"></div>
                                
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
