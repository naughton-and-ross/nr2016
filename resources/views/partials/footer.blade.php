<div id="outdated"></div>

<footer>
			<div class="content">
				<article>
					<i class="fa fa-facebook btn btn-social"></i>
				  	<i class="fa fa-envelope-o btn btn-social"></i>
				</article>
				<article>
					<h4>William Naughton-Gravette</h4>
					<h6>Partner</h6>
					<a href="mailto:william@n-r.co"><p>william@n-r.co</p></a>
					<p>0430 113 345</p>
						<p>
							<i class="fa fa-twitter"></i>
							<i class="fa fa-instagram"></i>
							<i class="fa fa-globe"></i>
						</p>

				</article>
				<article>
					<h4>Tom Ross</h4>
					<h6>Partner</h6>
					<p>tom@n-r.co</p>
					<a href="tel:+6403515789"><p>0403 515 789</p></a>
					<p>
						<i class="fa fa-twitter"></i>
						<i class="fa fa-instagram"></i>
						<i class="fa fa-globe"></i>
					</p>
				</article>
			</div>
</footer>

	<script>
			jQuery(document).ready(function(){
        jQuery('#menu-btn-open,#menu-btn-close,#btnmove').on('click', function(event) {
             jQuery('#nav-overlay,#nav-overlay-inner').fadeToggle('show');
        });
    })
		</script>
		<script>
			$('.btnmove').click (function(){
			  $(this).toggleClass('open');
			});
  </script>
  <script src="http://tomross.me/v3/file/outdatedbrowser/outdatedbrowser.min.js"></script>
  <script>
  $( document ).ready(function() {
    outdatedBrowser({
        bgColor: '#f25648',
        color: '#ffffff',
        lowerThan: 'transform',
        languagePath: 'http://tomross.me/v3/file/outdatedbrowser/lang/en.html'
    })
})
</script>
