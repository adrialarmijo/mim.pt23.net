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


<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/">MIM</a>
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="/projects" id="navbarDropDownMenuProjects" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuProjects">
					<a class="dropdown-item" href="https://github.com/adrialarmijo/CPSC489_Project">Game Programming</a>
					<a class="dropdown-item" href="https://github.com/adrialarmijo/CPSC481-Project">Algorithms & Artificial Intelligence</a>
					<a class="dropdown-item" href="http://pt23.net">Database & Networking</a>
				</div>
			</li>
			<li class ="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropDownMenuAboutMe" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Me</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuAboutMe">
					<a class="dropdown-item" href="/about">Resume</a>
					<a class="dropdown-item" href="https://www.facebook.com/adrial.armijo">Interests</a>
				</div>
			</li>
		</ul>
</nav>

<div class="container" style="margin-top:50px">
	<h1>Adrial Armijo | Software Developer & Information Technology</h1>
	<p>I'm <b>Adrial Armijo</b>, here to <b> make, inspire and motivate</b> through programming</p>
	<div class="container">
	<h2>How I can help you</h2>
		<div class="row">
			<div class="col-sm-4">
				<h3>Game Programming</h3>
			</div>
			<div class="col-sm-4">
				<h3>Algorithms & Artificial Intelligence</h3>
			</div>
			<div class="col-sm-4">
				<h3>Database & Networking</h3>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<p>&copy; Copyright MIM 2018</p>
</div>
</body>
</html>
