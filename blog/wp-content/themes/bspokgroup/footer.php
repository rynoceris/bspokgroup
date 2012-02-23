<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
</div> <!-- / #copy -->
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
            <p>Licensing: <a href="/#">Affinity</a> | <a href="/#">LRG</a> | <a href="/#">CLC</a></p>
            <p>Associations: <a href="/#">PPAI</a> | <a href="/#">Sage</a> | <a href="/#">ASI</a></p>
        </div>
        
        <div class="col1-4">
            <h3>Privacy policy</h3>
            
            <p>Your personal information is not shared, rented, or sold to any other party or group.</p>
			<p class="read-more"><a href="/privacy-policy.html">Read more...</a></p>
        </div>
        
        <div class="col1-4">
            <h3>Follow us</h3>
            
            <p class="followUs clearFix">
                <a href="http://www.facebook.com/bspokgroup" class="facebook">Facebook</a>
                <a href="http://twitter.com/bspokgroup" class="twitter">Twitter</a>
				<a href="http://www.linkedin.com/company/bsp-k-group" class="linkedin">LinkedIn</a>
                <a href="/blog/?feed=rss2" class="rss">RSS</a>
                <a href="http://vimeo.com/bspokgroup" class="vimeo">Vimeo</a>
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
	<!--</div>--><!-- #main -->

	<!--<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
			//	if ( ! is_404() )
			//		get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<?php// do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php// echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php// esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php// printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
	</footer>--><!-- #colophon -->
<!--</div>--><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>