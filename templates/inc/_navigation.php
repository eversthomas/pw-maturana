<nav role="navigation" id="site-navigation" class="main-navigation">
	<button class="menu-toggle hamburger hamburger--spin" aria-label="main menu" aria-controls="primary-menu" aria-expanded="false">
		<span class="hamburger-box">
			<span class="hamburger-inner"></span>
		</span>
	</button>
	<div class="wrapper">
		<?php
			$menu = $modules->get('MarkupMenuBuilder');// $menu is an example
			echo $menu->render('main');// render the menu by title
		?>
	</div>
</nav><!-- #site-navigation -->

