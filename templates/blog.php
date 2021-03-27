<?php include('template-parts/_header.php'); ?>

<main role="main">
	<article>
		<h2><?php echo $page->title; ?></h2>
		<p>Wilkommen in meinem Blog</p>
		
		<?php
			$readmore = 'more';
			// Render navigation for all child pages below this one
			$features = $page->children("sort=-created");
			foreach($features as $child) {
			  echo "
			  	<h3><a href='$child->url'>$child->title</a></h3>
				$child->blog_excerpt<br>
				<a href='$child->url' class='button'>$readmore</a><hr>
				";
			}
		?>
		
	</article>
</main>

<aside role="complementary">
	<?php include("template-parts/_blog-sidebar.php"); ?>
</aside>