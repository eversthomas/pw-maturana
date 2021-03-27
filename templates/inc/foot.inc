</div><!-- class page -->

<footer role="contentinfo">
	<div class="wrapper">
		<div class="footer-widgets">
			<div class="footer-widget">
				<?php echo $pages->get('/footer-widgets/')->footer_widget_1; ?>
			</div>
			<div class="footer-widget">
				<?php echo $pages->get('/footer-widgets/')->footer_widget_2; ?>
			</div>
			<div class="footer-widget">
				<?php echo $pages->get('/footer-widgets/')->footer_widget_3; ?>
			</div>
		</div>
		<hr>
		<div class="site-information">
			<address>
				<p>For further information, please contact <a href="mailto:admin@example.com">Max Mustermann</a>.</p>
			</address>
			<small>Copyright &copy; <time>2018</time></small>
		</div>
	</div>
</footer>

<!-- scripts -->
  	<script async type="text/javascript" src="<?php echo $config->urls->templates; ?>scripts/main.js" ></script>
	<script type="text/javascript" src="<?php echo $config->urls->templates; ?>scripts/osano-cookie.min.js" data-cfasync="false"></script>
	<script>
	window.cookieconsent.initialise({
	  "palette": {
		"popup": {
		  "background": "#edeff5",
		  "text": "#838391"
		},
		"button": {
		  "background": "#4b81e8"
		}
	  },
	  "type": "opt-in",
	  "content": {
		"href": "processwire.end-linkage.de/datenschutz"
	  }
	});
	</script>

</div><!-- id page -->
</body>
</html>
