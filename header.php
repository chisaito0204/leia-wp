<!doctype html>
<html lang="ja">

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, minimum-scale=1, user-scalable=yes" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Leia Dance Studio</title>
	<meta property="og:title" content="Leia Dance Studio" />
	<meta property="og:site_name" content="Leia Dance Studio" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo esc_url(get_theme_file_uri('/assets/img/ogp.png')); ?>" />
	<meta property="og:url" content="https://leia-dance.jp/" />
	<meta property="og:description" content="Leia Dance Studioのサイト" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/style.css')); ?>">
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/swiper-bundle.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/assets/css/simplebar.min.css')); ?>" />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800&family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Oooh+Baby&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caramel&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
	<?php wp_head(); ?>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XWSVZB2L6S"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'G-XWSVZB2L6S');
</script>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header class="header">
			<div class="header__content">
				<div class="header__logo">
					<a href="/">
						<figure class="logo">
							<img src="/assets/img/common/lds_logo-pink.png" alt="" width="147" height="28" />
						</figure>
					</a>
				</div>
				<nav id="controls" class="header__nav lg-only">
					<ul class="header__nav__list">
						<li class="header__nav__item"><a href="/">Home</a></li>
						<li class="header__nav__item ja"><a href="/about">5つの魅力</a></li>
						<li class="header__nav__item ja"><a href="/class">クラス</a></li>
						<li class="header__nav__item ja"><a href="/teacher">教師</a></li>
						<li class="header__nav__item ja"><a href="/contact">お問合せ</a></li>
						<li class="header__nav__item"><a href="/blog">Blog</a></li>
						<li class="header__nav__item"><a href="/faq">Faq</a></li>
						<li class="header__nav__item"><a href="/gallery">ダンスギャラリー</a></li>
					</ul>
				</nav>
				<div class="header__spMenuBtn sm-only">
					<div class="header__spMenuBtn--box">
						<span class="header__spMenuBtn--bar"></span>
						<span class="header__spMenuBtn--bar"></span>
						<span class="header__spMenuBtn--bar"></span>
					</div>
				</div>
				<div class="header__spSideMenu sm-only">
					<div class="header__spSideMenu--container">
						<ul class="header__spSideMenu__list">
							<figure class="logo">
								<img src="/assets/img/common/lds_logo-white.png" alt="" width="165" height="37">
							</figure>
							<li class="header__spSideMenu__item en">
								<a href="/">Home</a>
							</li>
							<li class="header__spSideMenu__item">
								<a href="/about">5つの魅力</a>
							</li>
							<li class="header__spSideMenu__item">
								<a href="/class">クラス</a>
							</li>
							<li class="header__spSideMenu__item">
								<a href="/teacher">教師</a>
							</li>
							<li class="header__spSideMenu__item">
								<a href="/contact">お問合せ</a>
							</li>
							<li class="header__spSideMenu__item en">
								<a href="/blog">Blog</a>
							</li>
							<li class="header__spSideMenu__item en">
								<a href="/faq">Faq</a>
							</li>
							<li class="header__spSideMenu__item">
								<a href="/gallery">ダンスギャラリー</a>
							</li>
						</ul>
						<div class="header__spSideMenu__sns">
							<a href="https://x.com/leiadancestudio" target="_blank"><img src="/assets/img/common/x.svg" alt="X" width="24" height="24" /></a>
							<a href="https://www.instagram.com/leia_dance_studio/" target="_blank"><img src="/assets/img/common/instagram.svg" alt="Instagram" width="24" height="24" /></a>
							<a href="https://www.facebook.com/leia.dance.studio/" target="_blank"><img src="/assets/img/common/facebook.svg" alt="facebook" width="24" height="18" /></a>
						</div>
						<p class="header__spSideMenu__txt">見学、体験レッスンは<a href="/lp">こちら</a>から！</p>
					</div>
				</div>
			</div>
		</header>


		<div id="content" class="site-content">