<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">
		<title><?php wp_title(); ?> test site</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Noto+Sans+JP:wght@500;600;700&family=Oswald:wght@500&display=swap" rel="stylesheet">
		
    <?php wp_head(); ?>
	</head>
	<body class="">
		<header class="header">
			<a href="<?php echo esc_url(home_url('/')); ?>" id="HeaderTitle" class="header__title">
				<img class="header__title--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/title-logo.png" alt="LAVORO">
				<img class="header__title--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-img/Footer-logo.png" alt="LAVORO">
			</a>
			<nav class="header__nav">
				<ul id="NavList" class="nav-list">

					<li id="header-about" class="nav-list-item-acodion">
						<a class="nav-list-link" href="#">
							ABOUT
						</a>
						<ul>
							<li>
								<a class="nav-list-link-chiled" href="#">
								代表挨拶
								</a>
							</li>
							<li>
								<a class="nav-list-link-chiled" href="#">
								企業理念
								</a>
							</li>
							<li>
								<a class="nav-list-link-chiled" href="#">
								会社概要
								</a>
							</li>
						</ul>
					</li>
					<li id="header-buisiness" class="nav-list-item-acodion">
						<a class="nav-list-link" href="#">
							BUISINESS
						</a>
						<ul>
							<li>
								<a class="nav-list-link-chiled-large" href="#">
								コンテンツ制作事業
								</a>
							</li>
							<li>
								<a class="nav-list-link-chiled-large" href="#">
								アプリ/業務システム開発
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-list-item-acodion">
						<a class="nav-list-item--link" href="<?php echo esc_url(home_url('/workspage')); ?>">
							WORKS
						</a>
					</li>

					<li class="nav-list-item-acodion">
						<a class="nav-list-item--link" href="#">
							NEWS
						</a>
					</li>

					<li class="nav-list-item-color-white">
						<a class="nav-list-item-color-white--link" href="<?php echo esc_url(home_url('/recruitpage')); ?>">
							RECRUIT
						</a>
					</li>
					<li class="nav-list-item-color-blue">
						<a class="nav-list-item-color-blue--link" href="<?php echo esc_url(home_url('/contactpage')); ?>">
							CONTACT
						</a>
					</li>
				</ul>
			</nav>
			<button id="NavButton" class="nav-button">
				<span class="nav-button--line1"></span>
				<span class="nav-button--line2"></span>
				<span class="nav-button--line3"></span>
			</button>
		</header>