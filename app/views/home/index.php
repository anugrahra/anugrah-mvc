<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$data['title'];?></title>
    <meta name="description" content="Website Anugrah Ramadhan" property="og:description">
	<link rel="stylesheet" type="text/css" href="<?=ASSETS;?>/css/style.css">
    <link rel="icon" href="<?=ASSETS;?>/icon/favicon.ico" type="image/x-icon">
</head>
<body>
	<div class="container">
		<div class="isi">
			<header class="headerhome">
				<h1 id="typewriter"></h1>
			</header>
			<main>
				<div class="tagline">
					<p>a plumber who learns coding</p>
				</div>
				<nav class="homemenu">
					<ul>
						<li><a href="<?=BASEURL;?>/blog">blog</a></li>
						<li><a href="<?=BASEURL;?>/podcast">podcast</a></li>
						<li><a href="<?=BASEURL;?>/life">me?</a></li>
					</ul>

					<!-- thanks to freepik -->
					<a href="mailto:dialog.anugrah@gmail.com" class="sosmed">
						<img src="<?=ASSETS;?>/img/gmail-icon.png" alt="dialog.anugrah@gmail.com" class="sosmed">
					</a>
					<a href="https://github.com/anugrahra" class="sosmed">
						<img src="<?=ASSETS;?>/img/github-icon.png" alt="github.com/anugrahra" class="sosmed">
					</a>
					<a href="https://twitter.com/dekadensiotak" class="sosmed">
						<img src="<?=ASSETS;?>/img/twitter-icon.png" alt="twitter.com/dekadensiotak" class="sosmed">
					</a>
					
				</nav>
			</main>
			<br>
			<footer class="footerhome">
				<p><i>dekadensiotak</i> &copy; 2017 - present.</p>
			</footer>
		</div>		
	</div>
	
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<script src="<?=ASSETS;?>/js/script.js"></script>
</body>
</html>