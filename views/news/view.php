<!DOCTYPE HTML>
<html>
	<head>
		<title>Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/template/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">introspect</a>
					<nav id="nav">
						<a href="#">Home</a>
						<a href="#">Generic</a>
						<a href="#">Elements</a>
					</nav>
				</div>
			</header>
			<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Introspect: <span>A free + fully responsive<br />
					site template by TEMPLATED</span></h1>
					<ul class="actions">
						<li><a href="#" class="button alt">Get Started</a></li>
					</ul>
				</div>
			</section>
	<!-- end #header -->

	<!-- MAIN -->

			<section id="one">
						<div class="inner">
							<header>
								<h2><?php echo $newsItem['title'].' # '.$newsItem['id'];?></h2>
							</header>
							<div class="image fit">
								<img src="template/images/pic01.jpg" alt="" />
							</div>
							<p><?php echo $newsItem['short_content'];?></p>
							<ul class="actions">
								<li><a href='/news/<?php echo $newsItem['id'] ;?>' class="button alt">Read More</a></li>
							</ul>
						</div>
			</section>
		

			<section id="footer">
				<div class="inner">
					<header>
						<h2>Get in Touch</h2>
					</header>
					<form method="post" action="#">
						<div class="field half first">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" />
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input type="text" name="email" id="email" />
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6"></textarea>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="alt" /></li>
						</ul>
					</form>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<script src="template/js/jquery.min.js"></script>
			<script src="template/js/skel.min.js"></script>
			<script src="template/js/util.js"></script>
			<script src="template/js/main.js"></script>

	</body>
</html>
