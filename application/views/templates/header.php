<!doctype html>
<html lang="en" id="page-top">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">

	<link href="<?= base_url('assets/'); ?>img/favicon.ico" rel="icon">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	
	<title>InstaGan | <?= $title; ?></title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><i class="fab fa-instagram ig"></i>InstaGan</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<?php foreach ($menu as $m): ?>
						<?php if($title == $m['menu_name']): ?>
							<a class="nav-item nav-link small active" href="<?= base_url($m['url']); ?>"><?= $m['menu_name'] ?></a>
							<?php else: ?>
								<a class="nav-item nav-link small" href="<?= base_url($m['url']); ?>"><?= $m['menu_name'] ?></a>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</nav>

