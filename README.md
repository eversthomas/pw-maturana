# about site profile "site-maturana"

* sass integration
* simple blog function
* a blog-sidebar to show the latest articles
* with or without sidebar
* template for metainformations in head
* a small card component
* osano cookie consent integration
* responsive navigation with a hamburger menu


## use with

* Sassify | maybe you have to install this again to work correctly
* MarkupSitemapXML
* MarkupMenuBuilder [http://processwire.com/talk/topic/4451-module-menu-builder/] | a beautiful menu module - single blog articles are pages and you maybe don't want to see them in an submenu
* ProcessFileEdit | i often work direct in a browser - maybe you have to actualize the folderstructure in this module to work
* repeater field

## setup as a page

You find a setup.php where you can define some fine variables. It's included before head.inc:

```php
<?php
/**
 * some site configurations
 * 
 */
	$home	=	$pages->get("/"); // page url
	$site_title = "MyHomepage"; // site title
	$title = $page->title(); // page title
	$body	=	$page->body; // full body
?>
```

## output strategy

In the config.php a head.inc is prepended and a foot.inc is appended.

```php
prependTemplateFile = 'inc/head.inc';
appendTemplateFile = 'inc/foot.inc';
```

In addition i have a header.php, a home-header.php (frontpage), a sidebar.php.

See here the home.php with included cards Component:

```php
<?php include('inc/_header-home.php'); ?>

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
		<h2><?php echo $title ?></h2>
		<?php echo $page->pagebody; ?>
	</article>
</main>
```

## small blog function

Just create a new page as a subpage of "blog" with the "article" template. Not elegant but simple for small use cases. See the blog.php:

```php
<?php include('inc/_header.php'); ?>

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
	<?php include("inc/_blog-sidebar.php"); ?>
</aside>
```

## sass structure

```sass
// base
@import 'base/config';
@import 'base/mixins';
@import 'base/base';
@import 'base/fonts';
@import 'base/typo';

// layout
@import 'layout/layout';

// elements
@import 'elements/hamburger';
@import 'elements/navigation';
@import 'elements/form';
@import 'elements/link';
@import 'elements/button';
@import 'elements/list';
@import 'elements/card';
@import 'elements/code';
@import 'elements/blockquote';
@import 'elements/hero-image';

// helpers
@import 'helpers/screenreader';
@import 'helpers/osano-cookie';
@import 'helpers/helpers';
```

## my use case

I use processwire instead of a static homepage. This site-profile is a good base for me to start.

## why maturana?

Wow, Humberto Maturana (born September 14, 1928) is a Chilean biologist and philosopher: https://en.wikipedia.org/wiki/Humberto_Maturana
