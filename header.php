<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<script src="https://kit.fontawesome.com/c10afa9ecd.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_am.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Menu 2</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Menu 3</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Busca" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" style="height:20px;width: auto;"></button>
		    </form>
		  </div>
		</nav>
		<!-- <div class="menutopo">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-8">
						<ul class="menu">
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_am.png" alt=""></li>
							<li>Home</li>
							<li>Menu 2</li>
							<li>Menu 3</li>
						</ul>
					</div>
					<div class="col-12 col-md-4">
						<span class="busca">
							<form method="POST" id="form_topo">
								<input type="text" name="busca" class="input_busca" placeholder="Buscar">
								<button type="submit"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png"></button>
							</form>
						</span>
					</div>
				</div>
			</div>
		</div> -->
		<div class="banner">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg">
		</div>
	</header>