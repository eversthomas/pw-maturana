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

```php
prependTemplateFile = 'inc/head.inc';
appendTemplateFile = 'inc/foot.inc';
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
