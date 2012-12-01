<?php
	include 'common.php';
	error_reporting(0);
	session_start();
	$_SESSION['unionId']=$_POST['uniName'];
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
                <a href="index.php">হোমে</a>

            </li>
		
	<li>
		<a href="registation.php">রেজিস্ট্রেশান -১</a>
		
	</li>	
	<li>
		<a href="registration_main.php">রেজিস্ট্রেশান -২</a>
	</li>	
	<li>
    	<a href="reg_successful.php">রেজিস্ট্রেশান কনফার্ম</a>
		
   </li>
		
   <li>
		<a href="adminPage.php">এডমিন পেজ</a>
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
     <legend>আবেদন ফর্ম</legend>
     <form action="reg_successful.php" method="post">
             <table border="0" cellspacing="0" cellpadding="0">
             
             <tr>
             	<td>নামঃ</td>
                <td><input name="name" type="text" value="" /></td>  
                <td></td>
                <td></td>          
             </tr>
             <tr>
             	<td>বাবার নামঃ</td>
                <td><input name="fname" type="text" value="" /></td>  
                <td></td>  
                <td></td>
             
             </tr>
             <tr>
             	<td>মায়ের নামঃ</td>
                <td><input name="mname" type="text" value="" /></td> 
                <td></td>
                <td></td>
             
             </tr>
             <tr>
         		<td>জন্ম তারিখ</td>
                <td>
                	<select name="date">
                        <option>--দিন--</option>
                        <?php
						for($i=1;$i<=31;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>  
                <td>
                	<select name="month">
                        <option>--মাস--</option>
                        <?php
						for($i=1;$i<=12;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>
                <td>
                	<select name="year">
                        <option>--বছর--</option>
                        <?php
						for($i=1970;$i<=2000;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>             
             </tr>
             <tr>
             	<td>গ্রামঃ</td>
                <td><input name="village" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>পোস্ট অফিসঃ</td>
                <td><input name="po" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>ওয়ার্ড নংঃ</td>
                <td><input name="wno" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>হোল্ডিং নংঃ</td>
                <td><input name="hno" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>ব্যবসার ধরনঃ</td>
                <td>
                	<select name="btype">
                    	<option value="r">খুচরা</option>
                       	<option value="h">পাইকারি</option>
                    </select>
                </td>  
                <td></td>
                <td></td> 
             
             </tr>           
             <tr>
            	<td>মোবাইল নাম্বারঃ</td>
                <td><input name="mbn" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
      			<td>জাতিও পরিচয় নাম্বারঃ</td>
                <td><input name="natIno" type="text" value="" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             <tr>
             	<td>আবেদনের তারিখঃ</td>
                <td>
                	<select name="rdate">
                        <option>--দিন--</option>
                        <?php
						for($i=1;$i<=31;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>  
                <td>
                	<select name="rmonth">
                        <option>--মাস--</option>
                        <?php
						for($i=1;$i<=12;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>
                <td>
                	<select name="ryear">
                        <option>--বছর--</option>
                        <?php
						for($i=1970;$i<=2000;$i++){
						?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php
						}
						?>
                    </select>
                </td>
             
             
             </tr>
             <tr>
             	<td></td>
                <td><input type="submit" value="submit" /></td>  
                <td></td>
                <td></td> 
             
             </tr>
             
             </table>
             </form>
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
