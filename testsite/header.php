<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>">
		<title><?php wp_title(); ?>LAVORO</title>
		<meta name="keywords" content="インターネット事業,ウェブ制作,ウェブ運用,内装事業,地方創生事業">
		<meta name="description" content="ものづくりをもっと楽しくする、ものづくりで今までにない体験をつくる">
		
		<meta property="og:title" content="lavoro">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://www.lavoro-inc.com">
		<meta property="og:site_name" content="LAVORO">
		<meta property="og:description" content="ものづくりをもっと楽しくする、ものづくりで今までにない体験をつくる">
		<meta property="og:image" content="https://www.lavoro-inc.com/wp-content/themes/lavoro/assets/img/ogp.png">

		<link rel="shortcut icon" href="https://www.lavoro-inc.com/wp-content/themes/lavoro/assets/favicon/favicon.ico">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Noto+Sans+JP:wght@500;600;700&family=Oswald:wght@500&display=swap" rel="stylesheet">
		
    <?php wp_head(); ?>
	</head>
	<body id="body">
		<header id="Header" class="header">
			<a href="<?php echo esc_url(home_url('/')); ?>" id="HeaderTitle" class="header__title">
				<img class="header__title--pc" src="<?php echo get_stylesheet_directory_uri(); ?>/images/SVGKV/lavoroB.svg" alt="LAVORO">
				<img class="header__title--sp" src="<?php echo get_stylesheet_directory_uri(); ?>/images/SVGKV/lavoroW.svg" alt="LAVORO">
			</a>
			<nav class="header__nav">
				<ul id="NavList" class="nav-list">

					<li id="header-about" class="nav-list-item-acodion btmabout">
						<a class="nav-list-link" href="<?php echo esc_url(home_url('/aboutpage')); ?>">
							ABOUT
						</a>
						<ul>
							<li>
								<a class="nav-list-link-chiled golink1" href="<?php echo esc_url(home_url('/aboutpage')); ?> #01">
								代表挨拶
								</a>
							</li>
							<li>
								<a class="nav-list-link-chiled golink2" href="<?php echo esc_url(home_url('/aboutpage')); ?> #02">
								企業理念
								</a>
							</li>
							<li>
								<a class="nav-list-link-chiled golink3" href="<?php echo esc_url(home_url('/aboutpage')); ?> #03">
								会社概要
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-list-item-acodion business-nav">
						<a class="nav-list-item--link" href="<?php echo esc_url(home_url('/businesspage')); ?>">
							BUISINESS
						</a>
					</li>
					<li class="nav-list-item-acodion">
						<a class="nav-list-item--link" href="<?php echo esc_url(home_url('/workspage')); ?>">
							WORKS
						</a>
					</li>

					<li class="nav-list-item-acodion">
						<a class="nav-list-item--link" href="<?php echo esc_url(home_url('/newspage')); ?>">
							NEWS
						</a>
					</li>

					<li class="nav-color-white">
						<a class="nav-color-white--link" href="<?php echo esc_url(home_url('/recruitpage')); ?>">
							RECRUIT
						</a>
					</li>
					<li class="nav-color-blue">
						<a class="nav-color-blue--link" href="<?php echo esc_url(home_url('/contactpage')); ?>">
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