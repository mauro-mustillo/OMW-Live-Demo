		<?php echo do_shortcode( '[content_block id=85]' );?>	
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">

			
			
			
				<div class="container">
				
				<div class="row">
			
			<div class="contact-info"><?php echo do_shortcode( '[content_block id=82]' );?></div>
		</div>	
				
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright Shift3 Technologies. All Rights Reserved
				</p>
				<!-- /copyright -->
</div>
			</footer>
			<!-- /footer -->

		
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		
	
         <script>
jQuery(window).scroll(function() {    
    var scroll = jQuery(window).scrollTop();
if (scroll >= 100) {
 jQuery("header").addClass("transparent");
  
 } else {
 jQuery("header").removeClass("transparent");
}
});
</script>     
              
              
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
