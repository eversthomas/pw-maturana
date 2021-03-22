# about site profile "site-maturana"

* sass integration
* simple blog function
* a blog-sidebar to show the latest articles
* with or without sidebar
* template for metainformations in head
* a small card component
* osano cookie consent integration


## use with

* Sassify | maybe you have to install this again to work correctly
* MarkupSitemapXML
* MarkupMenuBuilder [http://processwire.com/talk/topic/4451-module-menu-builder/] | a beautiful menu module - single blog articles are pages and you maybe don't want to see them in an submenu
* ProcessFileEdit | i often work direct in a browser - maybe you have to actualize the folderstructure in this module to work
* repeater field

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

## why maturana?

Wow, Humberto Maturana (born September 14, 1928) is a Chilean biologist and philosopher: https://en.wikipedia.org/wiki/Humberto_Maturana
