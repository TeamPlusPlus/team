<!DOCTYPE html>
<html lang="<?php echo $site->language(); ?>">
	<head>
		<meta charset="utf-8">
		<title><?php echo $site->title(); ?> » <?php echo $page->title(); ?></title>
		
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<meta name="description" content="<?php echo $site->description(); ?>" />
		<link rel="index" title="<?php echo $site->title(); ?>" href="<?php echo url('/'); ?>">
		
		<?php echo css('assets/css/main.css'); ?>
		<?php echo js('assets/js/jquery.vendor.js#1.9.1'); ?>
		<?php echo js('assets/js/prefixfree.vendor.js#1.0.7'); ?>
		<?php echo js('assets/js/main.js'); ?>
		
		<link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png'); ?>">
		<link rel="apple-touch-icon" href="<?php echo url('assets/images/favicon.png'); ?>">
	</head>
	<body>
		<div class="wrapper">
			<header>
				<div class="center">
					<h1><a href="<?php echo url('/'); ?>"><img src="<?php echo url('assets/images/logo.png'); ?>" alt="<?php echo $site->title(); ?>"></a></h1>
				</div>