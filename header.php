<!DOCTYPE HTML>
<html>
	<head>
		<title>Bella & Ousada</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php 
			wp_head();
		?>
	</head>
	<body class="body-color">
		<div class="container-banner">
			<div class="banner-anuncio">
				<img src="<?php echo get_stylesheet_directory_uri().'/images/anuncio.jpg';?>">
			</div>
		</div>
		<div class="container-4rodas">
			<nav class="navbar navbar-default mega_menu">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="glyphicon glyphicon-remove close-menu-colapse hidden"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri().'/images/logo.png';?>"></a>
						<i class="fa fa-search icon-search-custom-smartphone hidden-sm hidden-md hidden-lg" aria-hidden="true"></i>
						<form class="navbar-form navbar-right btn-assine-mobile hidden-xs">
							<div class="input-group">
							  <span class="input-group-btn">
								<button class="btn btn-default btn-assine" type="button">ASSINE</button>
							  </span>
							</div>
						</form>
						<form class="navbar-form navbar-right search-mobile hidden-xs" role="search">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="PESQUISAR">
							  <span class="input-group-btn">
								<button class="btn btn-default btn-search" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							  </span>
							</div>
						</form>
						<form class="navbar-form navbar-right search-mobile-custom hidden-sm hidden-md hidden-lg search-custom-smartphone" role="search">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="">
							</div>
						</form>
					</div>
					<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="icon-social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/images/facebook_icon.png';?>"></a></li>
							<li class="icon-social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/images/instagram_icon.png';?>"></a></li>
							<li class="icon-social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/images/twitter_icon.png';?>"></a></li>
							<li class="icon-social"><a href="#"><img src="<?php echo get_stylesheet_directory_uri().'/images/abril_icon.png';?>"></a></li>
							<li class="dropdown mega_menu-fw">
								<a href="#">CARROS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown-menu">
									<div class="row">
										<div class="col-md-2">
											<button class="show-all-cars">Ver todos os carros</button>
										</div>
										<div class="dropdown-content carros">
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left"><a href="#">Audi</a></p>
													<p class="text-left label-car"><a href="#">Bentley</a></p>
													<p class="text-left label-car"><a href="#">BMW</a></p>
													<p class="text-left label-car"><a href="#">Chevrolet</a></p>
												</div>
											</div>	
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left"><a href="#">Chrysler</a></p>
													<p class="text-left label-car"><a href="#">Chevrolet</a></p>
													<p class="text-left label-car"><a href="#">Dodge</a></p>
													<p class="text-left label-car"><a href="#">Ferrari</a></p>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left"><a href="#">Fiat</a></p>
													<p class="text-left label-car"><a href="#">Ford</a></p>
													<p class="text-left label-car"><a href="#">Honda</a></p>
													<p class="text-left label-car"><a href="#">Hyundai</a></p>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left"><a href="#">JAC Motos</a></p>
													<p class="text-left label-car"><a href="#">Jaguar</a></p>
													<p class="text-left label-car"><a href="#">Jeep</a></p>
													<p class="text-left label-car"><a href="#">Kia</a></p>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left"><a href="#">Lamborghini</a></p>
													<p class="text-left label-car"><a href="#">Mercedes-Benz</a></p>
													<p class="text-left label-car"><a href="#">Mitsubishi</a></p>
													<p class="text-left label-car"><a href="#">Volkswagen</a></p>
												</div>
											</div>
										</div>
									</div>
								</ul>
							</li>
							<li class="dropdown mega_menu-fw">
								<a href="#">TESTES <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown-menu">
									<div class="row">
										<div class="col-md-2 dropdown-submenu">
											<li class="tudo active"><a href="#">Ver tudo de testes <i class="fa fa-angle-right active" aria-hidden="true"></i></a></li>
											<li class="comparativos"><a href="#">Comparativos <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
											<li class="impressoes"><a href="#">Impressões <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
											<li class="longa-duracao"><a href="#">Longa duração <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
											<li class="teste-de-pista"><a href="#">Teste de pista <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
										</div>
										<div class="dropdown-content testes tudo">
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<img src="<?php echo get_stylesheet_directory_uri().'/images/car1.jpg';?>" alt="Ford Focus Fastback Titanium Plus">
													<p class="text-left">Ford Focus Fastback Titanium Plus</p>
												</div>
											</div>	
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<img src="<?php echo get_stylesheet_directory_uri().'/images/car2.jpg';?>" alt="Audi A6 2.0 TFSI">
													<p class="text-left">Audi A6 2.0 TFSI</p>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<p class="text-left">Ford EcoSport 1.6 Powershift</p>
													<span class="text-left">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</span>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<img src="<?php echo get_stylesheet_directory_uri().'/images/car3.jpg';?>" alt="Audi Q3 1.4">
													<p class="text-left">Audi Q3 1.4</p>
												</div>
											</div>
											<div class="col-md-2 text-center no-padding">
												<div class="thumbs">
													<img src="<?php echo get_stylesheet_directory_uri().'/images/car4.jpg';?>" alt="BMW 420i Cabriolet">
													<p class="text-left">BMW 420i Cabriolet</p>
												</div>
											</div>
										</div>
										<div class="col-md-10 dropdown-content comparativos hidden"></div>
										<div class="col-md-10 dropdown-content impressoes hidden"></div>
										<div class="col-md-10 dropdown-content longa-duracao hidden"></div>
										<div class="col-md-10 dropdown-content teste-de-pista hidden"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#">NOTÍCIAS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li class="dropdown">
								<a href="#">AUTO-SERVIÇO <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li class="dropdown">
								<a href="#">GUIA DE COMPRAS <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li class="dropdown">
								<a href="#">TABELA FIPE <i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li><a href="#">ASSINE</a></li>
						</ul>
						<form class="navbar-form navbar-right btn-assine-desk">
							<div class="input-group">
							  <span class="input-group-btn">
								<button class="btn btn-default btn-assine" type="button">ASSINE</button>
							  </span>
							</div>
						</form>
						<form class="navbar-form navbar-right search-desk" role="search">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="PESQUISAR">
							  <span class="input-group-btn">
								<button class="btn btn-default btn-search" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
							  </span>
							</div>
						</form>
						
						<!--accordion -->
						<div class="panel-group menu-accordion" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											CARROS<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div class="panel-body">
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											TESTES<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div class="panel-body">
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFour">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											NOTÍCIAS<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									<div class="panel-body">
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingFive">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											AUTO-SERVIÇO<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									<div class="panel-body">
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSix">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											GUIA DE COMPRAS<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
									<div class="panel-body">
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingSeven">
									<h4 class="panel-title">
										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											TABELA FIPE<i class="fa fa-angle-down icon-drop" aria-hidden="true"></i>
										</a>
									</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
									<div class="panel-body">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<div class="head-mais-acessados">
				<span class="label-mais-acessados">
					<span class="plus">+</span> ACESSADOS
				</span>
				<i class="fa fa-caret-right" aria-hidden="true"></i>
				<i class="seta fa fa-angle-right" aria-hidden="true"></i>
				<a href="#">SALÃO DO AUTOMÓVEL</a>
				<a href="#">RENEGADE</a>
				<a href="#">NOVO SANDERO</a>
				<a href="#">NOVO FOX</a>
				<a href="#">NOVO KA</a>
				<a href="#">HB 20</a>
				<a href="#">DUSTER</a>
				<a href="#">GOLF</a>
				<a href="#">COROLLA</a>
				<a href="#">CIVIC</a>
				<a href="#">| A - Z |</a>
			</div>