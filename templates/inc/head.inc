<?php include("inc/setup.inc"); ?>

<!DOCTYPE html>
<html lang="de"> <!-- Set this to the main language of your site -->
<head>
    <meta charset="utf-8">

    <title><?php echo $site_title ?></title>
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $pages->get('/processwire/metainf/')->image->url; ?>">

    <!-- look for metainf template file -->
	<meta name="author" content="<?php echo $pages->get('1030')->author; ?>">
    <meta name="description" content="<?php echo $pages->get('1030')->metadescription; ?>">
	<meta name="keywords" content="<?php echo $pages->get('1030')->metakeywords; ?>">
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo $pages->get('/processwire/metainf/')->image->url; ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Include the site stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo Sassify::css('styles/sass/style.scss'); ?>">

    <!-- Include the HTML5 shiv print polyfill for Internet Explorer browsers 8 and below -->
    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all"></script><![endif]-->
</head>
<body>