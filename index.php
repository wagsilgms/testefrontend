<?php get_header(); ?>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-12 divisao">Conteúdo Interno</div>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card_top">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card.jpg" alt="">
						</div>
						<div class="card_bottom">
							<span>Categoria A</span>
							<div class="titulo">Lorem ipsum dolor sit amet</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
							<div class="enviar"><button>Link Externo</button></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card_top">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card.jpg" alt="">
						</div>
						<div class="card_bottom">
							<span>Categoria B</span>
							<div class="titulo">Lorem ipsum dolor sit amet</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
							<div class="enviar"><button>Link Externo</button></div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card">
						<div class="card_top">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card.jpg" alt="">
						</div>
						<div class="card_bottom">
							<span>Categoria C</span>
							<div class="titulo">Lorem ipsum dolor sit amet</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br>
							<div class="enviar"><button>Link Externo</button></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider1.jpg" class="d-block w-100" alt="">
				</div>

				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider2.jpg" class="d-block w-100" alt="">
			  	</div>

				<div class="carousel-item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider3.jpg" class="d-block w-100" alt="">
			  	</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		</div>

		<div class="container">
			<form method="POST">
				<div class="row">
					<div class="col-12 divisao">Lorem ipsum dolor sit amet</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Seu nome">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="CEP">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Seu email">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Endereço">
						</div>
					</div>
					<div class="col-12 col-md-2">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Número">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Seu telefone">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Bairro">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Data de Nascimento">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Cidade">
						</div>
					</div>
					<div class="col-12 col-md-2">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Estado">
						</div>
					</div>
					<div class="col-12 enviar">
						<button type="submit">Enviar Dados</button>
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="card_bottom bandeiras">
						<div class="titulo">Lorem Ipsum Dolor Sit</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pt-br.png">
						Lorem ipsum dolo sit, 10<br>Lorem ipsum dolor sit, CEP: 0000000
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card_bottom bandeiras">
						<div class="titulo">Lorem Ipsum Dolor Sit</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pt-br.png">
						Lorem ipsum dolo sit, 10<br>Lorem ipsum dolor sit, CEP: 0000000
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="card_bottom bandeiras">
						<div class="titulo">Lorem Ipsum Dolor Sit</div>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/en	.png">
						Lorem ipsum dolo sit, 10<br>Lorem ipsum dolor sit, CEP: 0000000
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer(); ?>