<?php
// Include WordPress 
define('WP_USE_THEMES', false);
require('./blog/wp-load.php');
query_posts('showposts=4');
?>

<!DOCTYPE html>
<html lang="cs"><head><meta charset="utf-8">
	<title>bspōk group - your team. your passion. your brand.</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	<link rel="stylesheet" href="css/main.css?v=1.0" media="screen,projection">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="js/jquery.relatedtweets-1.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/home.custom.js" type="text/javascript" charset="utf-8"></script>
	<!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script src="js/analytics.js" type="text/javascript" charset="utf-8"></script>
</head><body>            
        
        <header><div class="wrap">
                <div id="header">   

                    <a id="logo" href="./" title="bspok group"><img src="img/bspok-group.png" width="212" height="78" alt="Bspok Group"></a>
                    
                    <hr><nav><ul id="nav">
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
                        </ul></nav></div> <!-- / #header -->

                <hr>
				<div id="intro">
                    
  					<ul id="slides">
						<li>
                    		<h1>What's in a name?</h1>

		                    <h2>Who we are.</h2>
                    
		                    <p>bspōk group is a custom apparel and promotional products company.</p>
                    
		                    <a href="about.html" class="button" title="More About Us"><span>MORE ABOUT US</span></a>
                    
		                    <div id="macbook"><img src="./tmp/screen.png" alt="bspōk definition"/></div>
						</li>
						<li>
                    		<h1>Gear, Goods, &amp; Swag.</h1>

		                    <h2>What we offer.</h2>
                    
		                    <p>bspōk group is a custom apparel and promotional products company.</p>
                    
		                    <a href="products.html" class="button" title="Our Products"><span>OUR PRODUCTS</span></a>
                    
		                    <div id="products"><img src="./img/products-combined.png" alt="Our Products"/></div>
						</li>
						<li>
                    		<h1>All under one roof.</h1>

		                    <h2>What we do.</h2>
                    
		                    <p>bspōk group is a custom apparel and promotional products company.</p>
                    
		                    <a href="#services-list" class="button" title="Our Services"><span>OUR SERVICES</span></a>
                    
		                    <div id="services"><img src="./img/services-combined2.png" alt="Our Services"/></div>
						</li>
						<li>
                    		<h1>A creative touch.</h1>

		                    <h2>See our work.</h2>
                    
		                    <p>bspōk group is a custom apparel and promotional products company.</p>
                    
		                    <a href="design-archive.html" class="button" title="Design Archive"><span>DESIGN ARCHIVE</span></a>
                    
		                    <div id="design-vault"><img src="./img/design-vault.png" alt="Design Vault"/></div>
						</li>
						<li>
                    		<h1>Say hello!</h1>

		                    <h2>Get in touch.</h2>
                    
		                    <p>bspōk group is a custom apparel and promotional products company.</p>
                    
		                    <a href="contact.php" class="button" title="Say Hello"><span>SAY HELLO</span></a>
                    
		                    <div id="contact-us"><img src="./img/contact.png" alt="Say Hello"/></div>
						</li>
					</ul>

                </div> <!-- / #intro -->
                
            </div>
        </header><hr><div id="container">
            <div id="content" class="wrap">                
                
                <div class="cols marginBottom30 clearFix services" id="services-list">
					<h2 class="separate">In-house Services</h2>

					<div class="col1-3 first">
                        <h2>Direct to Garment</h2>
                        <div class="content withIcon icon4">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a href="dtg.html">Read more...</a>
						</div>
                    </div>                    

                    <div class="col1-3">
                        <h2>Screen Printing</h2>
                        <div class="content withIcon icon1">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a href="screenprint.html">Read more...</a>
						</div>
                    </div>
                    
                    <div class="col1-3">
                        <h2>Embroidery</h2>
                        <div class="content withIcon icon2">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a href="embroidery.html">Read more...</a>
						</div>
                    </div>
                    
                    <div class="col1-3">
                        <h2>Laser Engraving</h2>
                        <div class="content withIcon icon3">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a href="laser-engraving.html">Read more...</a>
						</div>
                    </div>

					<div class="col1-3">
                        <h2>Design</h2>
                        <div class="content withIcon icon5">
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
							<a href="design.html">Read more...</a>
						</div>
                    </div>
                    
                </div>

				<hr><div id="subIntro">
                        
                    <div class="floatLeft">
                        <h2>Check out our work.</h2>                    
                        <p class="large">Visit our design archive today to see examples of our work from our in-house creative team.</p>
                    </div>
                    
                    <a href="design-archive.html" class="button floatRight" title="DESIGN ARCHIVE"><span>DESIGN ARCHIVE</span></a>

                </div> <!-- / #subIntro -->                             
                
                <hr><h2 class="separate">Featured designs</h2>
                
                <div class="marginBottom30 clearFix">
                    
                    <div class="col1-4">
                        <h3>Client work</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus. Aenean commodo ligula eget dolor. Aenean massa.</p>
                        <a href="featured-designs.html" class="more" title="View details">View details</a>
                    </div>
                    
                    <div class="col3-4">
                        <p class="gallery clearFix">
                            <a class="photo" href="./img/classic_arch_template.png"><img src="./img/classic_arch_template-thumb.png" alt=""/></a>
                            <a class="photo" href="./img/classic_arch_template.png"><img src="./img/classic_arch_template-thumb.png" alt=""/></a>
                            <a class="photo" href="./img/classic_arch_template.png"><img src="./img/classic_arch_template-thumb.png" alt=""/></a>
                        </p>
                    </div>
                    
                </div>
                
                <hr><h2 class="separate">Recent blog posts</h2>
                
                <div class="marginBottom30 clearFix">
                    <?php while (have_posts()): the_post(); ?>
						<div class="col1-4">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<small class="date">by <?php the_author(); ?> on <?php the_date(); ?></small>
							<?php the_excerpt(); ?>
						</div>
					<?php endwhile; ?>                    
                </div>
                
                <p><a href="/blog" class="more" title="View blog">View blog</a></p>                                                
                
            </div> <!-- / .wrap -->
        </div> <!-- / #container -->        
        
        <hr><div id="twitterBar">
            <div class="wrap">
                <span class="icon"></span>
                <div id="tweets">Loading...</div>
            </div>
        </div>
        
        <footer><div id="footer">
                
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
                    
                </div>
                
            </div>
        </footer></body></html>
