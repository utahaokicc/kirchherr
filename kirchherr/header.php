<?php wp_head(); ?>
<!doctype html>
<html lang="ja-JP">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no, email=no, address=no">
<?php if ( is_home() || is_front_page() ) : ?>
<title>KIRCHHERR | キルヒヘア</title>
<?php else : ?>
<title><?php wp_title('',true,'')?> | KIRCHHERR-キルヒヘア</title>
<?php endif; ?>
	
<meta name="keywords" content="キルヒヘア,KIRCHHERR,浜松,ライブ,LIVE,イベント,EVENT" />
<meta name="description" content="浜松市田町のライブハウスKIRCHHERRの公式サイト。公演スケジュール、イベント情報などをご覧いただけます。" />
	
<meta property="og:title" content="KIRCHHERR" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://kirchherr.xyz/" />
<meta property="og:image" content="https://kirchherr.xyz/img/ogp.jpg" />
<meta property="og:site_name" content="KIRCHHERR" />
<meta property="og:description" content="浜松市田町のライブハウスKIRCHHERRの公式サイト。公演スケジュール、イベント情報などをご覧いただけます。" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="浜松市田町のライブハウスKIRCHHERRの公式サイト。公演スケジュール、イベント情報などをご覧いただけます。" />
<meta itemprop="image" content="https://kirchherr.xyz/img/ogp.jpg" />

<link rel="apple-touch-icon" href="<?php echo home_url("/"); ?>img/fav.png">
<link rel="shortcut icon" href="<?php echo home_url("/"); ?>img/favicon.ico">
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo home_url("/"); ?>img/favicon.ico">

<link rel="stylesheet" type="text/css" href="<?php echo home_url("/"); ?>css/import.css">
<link rel="stylesheet" type="text/css" href="<?php echo home_url("/"); ?>css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js" type="text/javascript"></script>
<script src="<?php echo home_url("/"); ?>js/common/desvg.js" type="text/javascript"></script>
<script src="<?php echo home_url("/"); ?>js/common/common.js" type="text/javascript"></script>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-167133272-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-167133272-1');
</script>

</head>
	
<body>
	
<div id="wrapper">
	
	<header>
		<nav id="toggle">
			<div id="nav-toggle">
				<div>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</nav>
	</header>
		<div id="gloval-nav">
			<nav>
				<ul class="worksans">
					<li><a href="<?php echo home_url("/"); ?>">KIRCHHERR</a></li>
					<li><a href="<?php echo home_url("/"); ?>#news">NEWS</a></li>
					<li><a href="<?php echo home_url("/"); ?>#schedule">SCHEDULE</a></li>
					<li><a href="<?php echo home_url("/"); ?>#info">INFORMATION</a></li>
					<li><a href="<?php echo home_url("/"); ?>#sis">SISTER STORE</a></li>
				</ul>
			</nav>
		</div>