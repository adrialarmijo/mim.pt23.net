<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include('include/head.inc.php');?>
	<meta name="description" content="Home Page">
	<title>Make. Inspire. Motivate. - MIM</title>

	<!--- Page Specific Resources -->
	<link href="style.css" type="text/css" rel="stylesheet"/>

</head>
<body>
	<article>
		<b>This site is currently under maintanence, please excuse minor bugs!</b>
	</article>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none">Make.Inspire.Motivate</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<span class="d-xs-block d-sm-block d-md-block d-lg-none d-xl-none float-right">
				<img class="img-profile rounded-circle mx-auto mb-2" src="/pngFiles/bigkitty.png" alt="MIM Picture" id="mobileProfilePic">
			</span>
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="/projects" id="navbarDropDownMenuProjects" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuProjects">
						<a class="dropdown-item" href="">Game Programming</a>
						<a class="dropdown-item" href="https://github.com/adrialarmijo/CPSC481-Project">Algorithms & Artificial Intelligence</a>
						<a class="dropdown-item" href="http://pt23.net">Database & Networking</a>
					</div>
				</li>
				<li class ="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropDownMenuAbout" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuAbout">
						<a class="dropdown-item" href="#mission-statement">Mission Statement</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid p-0">
		<section class="home-section p-3 p-lg-5 d-flex d-column">
			<div>
				<h1 class="mb-0">MIM
					<span class="text-primary">Make.Inspire.Motivate</span>
				</h1>
			</div>
			<section class="home-section p-3 p-lg-5 d-flex d-column">
				<div class="card" style="width: 18rem;">
					<img class="card-img-top" src="/about/me.jpg" alt="Adrial">
					<div class="card-body">
						<h5 class="card-title">About the Author</h5>
						<p class="card-text">View a living resume for Adrial Armijo. Printable version is also available through this link, simply click the print icon on the next page.</p>
						<a href="/about/" class="btn btn-primary">View Resume</a>
					</div>
				</div>
			</section>
		</section>
	</div>
	<div class="container-fluid p-0">
		<div class="container-fluid p-0">
				<img class="img-fluid" src="/pngFiles/bigkitty.png" alt="MIM Logo">
		</div>
		<section class="home-section p-3 p-lg-5 d-flex d-column" id="mission-statement">
			<h2 class="mb-5">Mission Statement</h2>
			<blockquote class="blockquote">
			<p><b>MIM</b> is created to promote progress towards diversifying minds in our technical industry.</br>As our world moves towards innovation as a service, programmers must learn to expand their reach.</br>We can no longer rely solely on our knowledge to perform work; we must learn to <b>dream</b></p>
			</blockquote
		</section>
	</div>
	<div id="footer">
		<p>&copy; Copyright MIM 2018</p>
	</div>
</body>
</html>
