<!DOCTYPE html>
<html>
	<head>
		<title>FCGI Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<style>
			.post h4:first-child
			{
				margin-top: 0px;
				margin-bottom: 0px;
			}
			.post hr
			{
				margin: 0px -9px 5px;
				border-top: 1px solid #e3e3e3;
				border-bottom: 1px solid #e3e3e3;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-static-top">
			<div class="navbar-inner">
				<a class="brand" href="#">FCGI Blog</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="span8">
					<br/>
				<?php foreach($blogs as $blog) { ?>
					<?= $blog ?>
				<?php } ?>
				</div>
			</div>
		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>