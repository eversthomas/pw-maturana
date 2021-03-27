
	<h3>latest Article</h3>
	
	<?php
			$readmore = 'more';
			// Render navigation for all child pages below this one
			$features = $page->children("sort=-created");
			foreach($features as $child) {
			  echo "
			  	<h4><a href='$child->url'>$child->title</a></h4>
				<a href='$child->url' class='button'>$readmore</a><hr>
				";
			}
		?>