<?php include('template-parts/_header-home.php'); ?>

<main role="main">
	
	<div class="cards">
		<?php
			foreach($page->cards as $card) {
				echo "<div class=\"card\">";
					echo "<img src='{$card->card_image->url}' alt='{$card->card_image->name}'>"; 
					echo "<h3>" . $card->card_header . "</h3>";
					echo "<p>" . $card->card_body . "</p>";
					echo "<a class=\"button\" href=\"$card->card_link\">read more</a>";
				echo "</div>";
			}
		?>
	<article>
		<h2><?php echo $page->title; ?></h2>
		<?php echo $page->pagebody; ?>
	</article>
</main>
