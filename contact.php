<!DOCTYPE html>
<html lang="cs">
	<head>
		<meta charset="utf-8">
		<title>bspōk group - Contact - Get in touch.</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="css/main.css" media="screen,projection">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script src="js/jquery.relatedtweets-1.0.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/validate.js" type="text/javascript" charset="utf-8"></script>
		<!--[if lt IE 9]>
	        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	    <![endif]-->
		<script src="js/analytics.js" type="text/javascript" charset="utf-8"></script>
	</head>
	<body>

        <header><div class="wrap">
                <div id="header">   

                    <a id="logo" href="./" title="bspok group"><img src="img/bspok-group.png" width="212" height="78" alt="Bspok Group"></a>
                    
                    <hr>
					<nav>
						<ul id="nav">
							<li>
                                <a href="about.html" title="About Us">
                                    <strong>About Us</strong>
                                    <span>Who we are.</span>
                                </a>
                            </li>

							<li>
                                <a href="products.html" title="Products">
                                    <strong>Products</strong>
                                    <span>What we offer.</span>
                                </a>
                            </li>
							
							<li>
                                <a href="/#services-list" title="Services">
                                    <strong>Services</strong>
                                    <span>What we do.</span>
                                </a>
                            </li>
                            <li>
                                <a href="design-archive.html" title="Design Archive">
                                    <strong>Design Archive</strong>
                                    <span>See our work.</span>
                                </a>
                            </li>                        
                            <li>
                                <a href="contact.php" title="Contact">
                                    <strong>Contact</strong>
                                    <span>Get in touch.</span>
                                </a>
                            </li>
                        </ul>
					</nav>
				</div> <!-- / #header -->

                <hr>
                
            </div> <!-- / .wrap -->
        </header> <!-- / header -->

		<hr>
		
		<div id="container-interior">
            <div id="content" class="wrap">                             
                
                <hr><h2 class="contact">Get in touch.</h2>
				<div id="breadcrumb"><p class="breadcrumb"><a href="/">home</a> &gt; contact</p></div>
				<span class="divider separate"></span>
                
                <div class="marginBottom30 clearFix">
					<div id="contact-form">
						<form action="#" method="post" accept-charset="utf-8" class="validate">
							<fieldset>
								<input name="yourname" id="yourname" type="text" class="textbox personname validate" onclick="this.value = ''" onblur="if (!this.value) this.value = 'Your Name'" value="Your Name"/>
							</fieldset>
							<fieldset>
								<input name="youremail" id="youremail" type="text" class="textbox email validate" onclick="this.value = ''" onblur="if (!this.value) this.value = 'Your E-mail'" value="Your E-mail"/>
							</fieldset>
							<fieldset>
								<textarea name="yourmessage" id="yourmessage" class="message validate" onclick="this.value = ''" onblur="if (!this.value) this.value = 'Your Message'" value="Your Message">Your Message</textarea>
							</fieldset>
							<div class="send-to">
								<p class="to"><span class="bold">To:</span><br />bspōk group<br />2240 Distributors Drive<br />Indianapolis, IN 46241<br /><a href="mailto:info@bspokgroup.com">info@bspokgroup.com</a><br />1-800-433-7289</p>
								<input id="contact-submit" type="submit" class="submit" value="Say Hello!"/>
							</div>
						</form>
						<?php 
						$send = true;
						$messageValid = true;
						$fromNameValid = true;
						$fromEmailValid = true;

						function check_email_address($email) {
						// First, we check that there's one @ symbol, and that the lengths are right
						if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
						// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
						return false;
						}
						// Split it into sections to make life easier
						$email_array = explode("@", $email);
						$local_array = explode(".", $email_array[0]);
						for ($i = 0; $i < sizeof($local_array); $i++) {
						if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i])) {
						return false;
						}
						}  
						if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
						$domain_array = explode(".", $email_array[1]);
						if (sizeof($domain_array) < 2) {
						return false; // Not enough parts to domain
						}
						for ($i = 0; $i < sizeof($domain_array); $i++) {
						if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i])) {
						return false;
						}
						}
						}
						return true;
						}

						if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						$to = "ryan@bspokgroup.com";
						$fromName = $_POST['yourname'];
						$subject = "Inquiry from bspokgroup.com contact form from $fromName";

						$message = $_POST['yourmessage'];
						if (ereg("/\w+/", $message)) {
						$send = false;
						$messageValid = false;
						}

						$fromEmail = $_POST['youremail'];
						if (check_email_address($fromEmail)) { 
						$headers = "From: $fromEmail";
						}
						else {
						$send = false;
						$fromEmailValid = false;
						}

						if ($send) {
						//All checked valid
						$sent = mail($to,$subject,$message,$headers);
						}
						/*else { //For Debugging
							if (!$messageValid) { echo '<div class="error">message invalid</div>'; }
							if (!$fromNameValid) { echo '<div class="error">from name invalid</div>'; }
							if (!$fromEmailValid) { echo '<div class="error">from email invalid</div>'; }
						}*/
						}
						?>
					</div>
					<div id="map">
						<iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2240+Distributors+Drive,+Indianapolis,+IN&amp;aq=0&amp;oq=2240+distributors+drive,+India&amp;sll=37.0625,-95.677068&amp;sspn=58.72842,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=2240+Distributors+Dr,+Indianapolis,+Marion,+Indiana+46241&amp;t=m&amp;ll=39.744748,-86.257181&amp;spn=0.019799,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2240+Distributors+Drive,+Indianapolis,+IN&amp;aq=0&amp;oq=2240+distributors+drive,+India&amp;sll=37.0625,-95.677068&amp;sspn=58.72842,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=2240+Distributors+Dr,+Indianapolis,+Marion,+Indiana+46241&amp;t=m&amp;ll=39.744748,-86.257181&amp;spn=0.019799,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					</div>
                </div>
				
            </div> <!-- / .wrap -->
        </div> <!-- / #container-interior -->        
        
        <hr>
		
		<div id="twitterBar">
            <div class="wrap">
                <span class="icon"></span>
                <div id="tweets">Loading...</div>
            </div>
        </div> <!-- / #twitterBar -->
        
        <footer>
			<div id="footer">
                
                <div class="wrap clearFix">
                    
                    <div class="col1-4">
                        <a href="./" id="footerLogo">bspōk group</a>
                        
                        <p class="light">&copy; 2012 bspōk group, All Rights Reserved.</p>
                        <p>Licensing: <a href="#">Affinity</a> | <a href="#">LRG</a> | <a href="#">CLC</a></p>
                        <p>Associations: <a href="#">PPAI</a> | <a href="#">Sage</a> | <a href="#">ASI</a></p>
                    </div>
                    
                    <div class="col1-4">
                        <h3>Privacy policy</h3>
                        
                        <p>Your personal information is not shared, rented, or sold to any other party or group.</p>
						<p class="read-more"><a href="privacy-policy.html">Read more...</a></p>
                    </div>
                    
                    <div class="col1-4">
                        <h3>Follow us</h3>
                        
                        <p class="followUs clearFix">
                            <a href="http://www.facebook.com/bspokgroup" class="facebook">Facebook</a>
                            <a href="http://twitter.com/bspokgroup" class="twitter">Twitter</a>
							<a href="http://www.linkedin.com/company/bsp-k-group" class="linkedin">LinkedIn</a>
                            <a href="./" class="rss">RSS</a>
                            <a href="./" class="vimeo">Vimeo</a>
                        </p>                                                
                    </div>
                    
                    <div class="col1-4">
                        <!-- Begin MailChimp Signup Form -->
						<div id="mc_embed_signup">
						<form action="http://bspokgroup.us4.list-manage2.com/subscribe/post?u=bd42793e00db6483f5189af02&amp;id=23334efa5d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
							<label for="mce-EMAIL">Stay updated</label>
							<input type="email" value="" name="EMAIL" class="email text" id="mce-EMAIL" placeholder="Your E-mail" required>
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button submit">
						</form>
						</div>

						<!--End mc_embed_signup-->
                    </div>
                    
                </div> <!-- / .wrap -->
                
            </div> <!-- / #footer -->
        </footer>
	</body>
</html>