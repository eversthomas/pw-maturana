<?php include('template-parts/_header.php'); ?>

<main role="main">
	<article>
		<h2><?php echo $page->title; ?></h2>
		<?php echo $page->pagebody; ?>
	</article>
</main>

<aside role="complementary">
	
	<?php echo $page->sidebar; ?>
	
	<?php if($page->image) echo "<img src='{$page->image->url}' alt='{$page->image->description}'>"; ?>
	
</aside>