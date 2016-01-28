<div id="outdated"></div>

<footer>
	<div class="content">
		<article>
			<h4>
				<div class="stroke"></div>
				Studio
				<br>
				Naughton & Ross 2016
			</h4>
		</article>
		<article>
			<h4>
				<div class="stroke"></div>
				Email
				<br>
				<a href="mailto:hello@n-r.co">hello@n-r.co</a>
			</h4>
		</article>
		<article class="phone">
			<h4>
				<div class="stroke"></div>
				Phone
				<br>
				<a href="tel:+61403515789">0403 515 789</a> or <a href="tel:+61430113345">0430 113 345</a>
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
  <script src="{{asset('outdatedbrowser/outdatedbrowser.min.js')}}"></script>
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
