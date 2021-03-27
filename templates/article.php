<?php include('template-parts/_header.php'); ?>

<main role="main">
	<article>
		<h2><?php echo $page->title; ?></h2>
		<p>Article written on <?php echo $page->blog_article_date; ?></p>
		<?php echo $page->blog_excerpt; ?>
		<hr>
		<?php echo $page->blog_article_body; ?>
		<p>Article posted in <?php echo $page->blog_article_category; ?></p>
	</article>
</main>

<aside role="complementary">
	<h3>latest Article</h3>
	
	<?php
			$readmore = 'more';
			// Render navigation for all child pages below this one
			$features = $page->siblings("sort=-created");
			foreach($features as $child) {
			  echo "
			  	<h4><a href='$child->url'>$child->title</a></h4>
				<a href='$child->url' class='button'>$readmore</a><hr>
				";
			}
		?>
</aside>