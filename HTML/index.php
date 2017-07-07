<!DOCTYPE html>
<html>
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Jorge Mendes | Desenvolvedor Web </title>	

		<!-- Social -->
		<meta property="og:locale" content="pt_BR">
		<!-- SITE NORMAL -->
		<meta property="og:url" content="http://www.jorgemendes.com.br">
		<meta property="og:title" content="Jorge Mendes | Desenvolvedor Web ">
		<meta property="og:site_name" content="Jorge Mendes">
		<meta property="og:description" content="Me conheça, veja minhas habilidades e trabalhos realizados.">
		<meta property="og:image" content="http://www.jorgemendes.com.br/img/social.jpg">
		<meta property="og:image:type" content="image/jpg">
		<meta property="og:image:width" content="800"> 
		<meta property="og:image:height" content="600"> 
		<meta property="og:type" content="website">
		
		<meta name="keywords" content="Desenvolvedor, Desenvolvimento Web, Criação de sites, HTML5, Javascript, PHP, Front-end " />
		<meta name="description" content="Me conheça, veja minhas habilidades e trabalhos realizados.">
		<meta name="author" content="jorge">

		<!-- Social -->
		<!-- browser -->
		<meta name="theme-color" content="#61b6f8"> <!-- Chrome -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#61b6f8"> <!-- IOS -->
		<meta name="msapplication-navbutton-color" content="#61b6f8"> <!-- WinPhone -->
		<!-- browser -->
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
		<!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png"> -->
		<link rel="image_src" href="http://site.com/social.jpg" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<!-- <link rel="stylesheet" href="css/theme-blog.css"> -->
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skin-resume.css"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="css/demo-resume.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>
		<?php include_once("php/analyticstracking.php") ?>	
		<header>

		<div class="page-loader">
        	<div class="loader"></div>
        	<img src="img/loading.gif" class="img-loading">
        </div>

			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-perfil">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo, um quadrado amarelo formando um rosto"></a> -->
					</div>
					<div class="collapse navbar-collapse navbar-perfil">
						<ul class="nav navbar-nav">
							<li><a href="#topo">Home</a></li>
							<li><a href="#about-me">Sobre</a></li>
							<li><a href="#experience">Experiência</a></li>
							<li><a href="#education">Educação</a></li>
							<li><a href="#skills">Habilidades</a></li>
							<li><a href="#portfolio">Portifólio</a></li>
							<li><a href="#recommendations">Recomendações</a></li>
							<li><a href="#say-hello">Diga olá</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="body" id="topo">	
			<header id="header" class="header-floating hidden-sm hidden-xs" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav pt-xs">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-bars"></i>
										</button>
										<div class="header-nav-main collapse">
											<nav class="wrapper-spy">
												<ul class="nav" id="mainNav">
													<li>
														<a data-hash href="#about-me" class="text-color-dark background-color-primary">
															<i class="icon-home icons"></i>
															<span class="custom-tooltip">Sobre</span>
														</a>
													</li>
													<li>
														<a data-hash href="#experience" class="text-color-dark background-color-primary">
															<i class="icon-eye icons"></i>
															<span class="custom-tooltip">Experiência</span>
														</a>
													</li>
													<li>
														<a data-hash href="#education" class="text-color-dark background-color-primary">
															<i class="icon-briefcase icons"></i>
															<span class="custom-tooltip">Educação</span>
														</a>
													</li>
													<li>
														<a data-hash href="#skills" class="text-color-dark background-color-primary">
															<i class="icon-graduation icons"></i>
															<span class="custom-tooltip">Habilidades</span>
														</a>
													</li>
													<li>
														<a data-hash href="#portfolio" class="text-color-dark background-color-primary">
															<i class="icon-diamond icons"></i>
															<span class="custom-tooltip">Portifólio</span>
														</a>
													</li>
													<li>
														<a data-hash href="#recommendations" class="text-color-dark background-color-primary">
															<i class="icon-pencil icons"></i>
															<span class="custom-tooltip">Recomendações</span>
														</a>
													</li>
													<li>
														<a data-hash href="#say-hello" class="text-color-dark background-color-primary">
															<i class="icon-envelope-open icons"></i>
															<span class="custom-tooltip">Diga olá</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

			<section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="#">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-10 col-sm-offset-0 col-xs-offset-1 custom-sm-margin-bottom-1">
							<img src="img/img-perfil.jpg" class="img-responsive custom-border custom-image-position-2 custom-box-shadow-4" alt />
						</div>
						<div class="col-md-5 col-sm-8">
							<h1 class="text-color-primary custom-font-size-1">Jorge Mendes</h1>
							<p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Desenvolvedor Web</p>
							<span class="custom-about-me-infos">
								<!-- <span class="custom-text-color-1 text-uppercase">Greater New York area</span> -->
								<span class="custom-text-color-1 text-uppercase mb-md">Assistente Web Novacia</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">Anterior: </strong>
									Desenvolvedor Front-End na SRTI
									<a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs ml-sm">Ver Mais</a>
								</span>
								<span class="custom-text-color-1 text-uppercase">
									<strong class="text-color-light">Educação: </strong>
									Fatec São Roque
									<a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs ml-sm">Ver Mais</a>
								</span>
							</span>
						</div>
						<!-- <div class="col-md-3 hidden-sm hidden-xs">
							<img src="img/about-me/mouse.png" custom-anim class="img-responsive" alt />
						</div> -->
					</div>
				</div>
				<ul class="social-icons custom-social-icons">
					<li class="social-icons-facebook">
						<a href="https://www.facebook.com/jorgebill.silva" target="_blank" title="Facebook">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<!-- <li class="social-icons-twitter">
						<a href="http://www.twitter.com/" target="_blank" title="Twitter">
							<i class="fa fa-twitter"></i>
						</a>
					</li> -->
					<!-- <li class="social-icons-youtube">
						<a href="http://www.youtube.com/" target="_blank" title="Youtube">
							<i class="fa fa-youtube"></i>
						</a>
					</li> -->
				</ul>
			</section>

			<div class="custom-about-me-links">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-md-offset-4 col-sm-4 center custom-xs-border-bottom p-none">
							<a data-hash href="#say-hello" class="text-decoration-none">
								<span class="custom-nav-button text-color-dark">
									<i class="icon-earphones-alt icons text-color-primary"></i>
									Informações de Contato	
								</span>
							</a>
						</div>
						<div class="col-md-2 col-sm-4 center custom-xs-border-bottom p-none">
							<a data-hash href="#say-hello" class="text-decoration-none">
								<span class="custom-nav-button custom-divisors text-color-dark">
									<i class="icon-envelope-open icons text-color-primary"></i>
									Enviar E-mail	
								</span>
							</a>
						</div>
						<div class="col-md-3 col-sm-4 center p-none">
							<a target="_blank" href="documentos/Jorge_Mendes_Curriculum.pdf" class="text-decoration-none">
								<span class="custom-nav-button text-color-dark">
									<i class="icon-cloud-download icons text-color-primary"></i>
									Download Currículum	
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<section class="section section-no-border background-color-light m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<div class="custom-box-details background-color-light custom-box-shadow-1 col-md-6 ml-xlg mb-xlg pull-right clearfix">
								<h4>Detalhes Pessoais</h4>
								<div class="col-md-6 col-sm-6 p-none">
									<ul class="custom-list-style-1 p-none">
										<li>
											<span class="text-color-dark">Aniversário:</span>
											<span class="custom-text-color-2">04/06/1993</span>
										</li>
										<li>
											<span class="text-color-dark">Estado Cívil:</span>
											<span class="custom-text-color-2">Solteiro</span>
										</li>
										<li>
											<span class="text-color-dark">Nacionalidade:</span>
											<span class="custom-text-color-2">Brasileiro</span>
										</li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6 p-none">
									<ul class="custom-list-style-1 p-none">
										<li>
											<span class="text-color-dark">Linkedin:</span>
											<span class="custom-text-color-2"><a style="text-decoration: none;" class="custom-text-color-2" target="_blank" href="https://www.linkedin.com/in/jorge-mendes-83a572a7">Jorge Mendes</a></span>
										</li>
										<li>
											<span class="text-color-dark">GitHub:</span>
											<span class="custom-text-color-2"><a style="text-decoration: none;" class="custom-text-color-2" target="_blank" href="https://github.com/Jorge-Bill">Meus projetos</a></span>
										</li>
										<li>
											<span class="text-color-dark">E-mail:</span>
											<span class="custom-text-color-2"><a style="font-size: 8px;text-decoration: none;" class="custom-text-color-2" href="mailto:contato@jorgemendes.com.br">contato@jorgemendes.com.br</a></span>
										</li>
									</ul>
								</div>
							</div>

							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Sobre Mim</h2>
							
							<p class="custom-text-color-2">Meu nome é Jorge.</p>
							<p class="custom-text-color-2">Tenho contato com T.I, desde os meus doze anos, quando em meu primeiro contato com um computador desktop Semp Toshiba de processador Pentium 4, 256gb de memória Ram e HD de 80 gb, me fascinou e desde então não consegui me distanciar desta área deslumbrante.</p>

							<div class="about-me-more" id="aboutMeMore">
								<p class="custom-text-color-2">Fui realizando pequenos cursos, e em 2010 ingressei no curso técnico em informática, qual me proporcionou trabalhar com ferramentas que me permitiram avançar em conhecimento, com o qual trabalhei como freelancer por cerca de dois anos sem nunca parar de aprimorar minhas habilidades.</p>
								<p class="custom-text-color-2">No ano de dois mil e doze, iniciei minha carreira no estado, me permitindo desenvolver um projeto com os adolescentes da instituição trabalhando com Arduino, utilizando os princípios do kit básico em aplicações primárias permitindo aprendizado de conceitos de física e matemática.</p>
								<p class="custom-text-color-2">Pensando em galgar um nível mais alto busquei uma graduação, escolhi o curso de Sistemas para internet na Faculdade de Tecnologia de São Roque – Fatec, referência na região que detém profissionais de alta referência e know-how, contribuindo para uma melhor compreensão do mercado. </p>
							</div>

							<a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-xs">Ver Mais</a>

						</div>
					</div>
				</div>
			</section>

			<section id="experience" class="section section-secondary section-no-border m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experiência</h2>
							<section class="timeline custom-timeline" id="timeline">
								<div class="timeline-body">
									<article class="timeline-box right custom-box-shadow-2">
										<div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
											<span class="from text-color-dark text-uppercase">
												Dê
												<span class="font-weight-semibold">Out/2012</span>
											</span>
											<span class="to text-color-dark text-uppercase">
												Até
												<span class="font-weight-semibold">Mai/2016</span>
											</span>
											<p class="text-color-dark">(3 anos 8 meses)</p>
											<span class="company text-color-dark font-weight-semibold">
												Secretaria da Educação-SP
												<span class="company-location text-color-dark font-weight-normal text-uppercase"></span>
											</span>
										</div>
										<div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
											<h4 class="text-color-dark font-weight-semibold">Agente Organização Escolar</h4>
											<p class="custom-text-color-2">Minhas responsabilidades sempre foram cuidar do patrimônio público, estabelecer o contato entre os estudantes e a gestão da escola, resolver os conflitos entre professores e alunos.</p>
										</div>
									</article>
									<article class="timeline-box right custom-box-shadow-2">
										<div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
											<span class="from text-color-dark text-uppercase">
												Dê
												<span class="font-weight-semibold">Nov/2015</span>
											</span>
											<span class="to text-color-dark text-uppercase">
												Até
												<span class="font-weight-semibold">Mai/2016</span>
											</span>
											<p class="text-color-dark">(7 meses)</p>
											<span class="company text-color-dark font-weight-semibold">
												SRTI
												<!-- <span class="company-location text-color-dark font-weight-normal text-uppercase"></span> -->
											</span>
										</div>
										<div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
											<h4 class="text-color-dark font-weight-semibold">Estagiário</h4>
											<p class="custom-text-color-2">Trabalhei no desenvolvimento de aplicações web, sites responsivos, trabalhei principalmente com desenvolvimento front-end.</p>
										</div>
									</article>
									<article class="timeline-box right custom-box-shadow-2">
										<div class="experience-info col-md-3 col-sm-5 match-height background-color-primary">
											<span class="from text-color-dark text-uppercase">
												Dê
												<span class="font-weight-semibold">Mai/2016</span>
											</span>
											<span class="to text-color-dark text-uppercase">
												Até
												<span class="font-weight-semibold">Atual</span>
											</span>
											<p class="text-color-dark">(3 Years 9 Months)</p>
											<span class="company text-color-dark font-weight-semibold">
												Novacia
												<!-- <span class="company-location text-color-dark font-weight-normal text-uppercase"></span> -->
											</span>
										</div>
										<div class="experience-description col-md-9 col-sm-7 match-height background-color-light">
											<h4 class="text-color-dark font-weight-semibold">Assistente Web</h4>
											<p class="custom-text-color-2">Auxiliando no desenvolvimento de e-mail marketing e sites funcionais, responsivos, sob medida para nossos clientes.</p>
										</div>
									</article>
									<div class="timeline-bar"></div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>

			<section id="education" class="section section-no-border custom-background-color-1 m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-none">Educação</h2>
							<div class="owl-carousel nav-bottom custom-carousel-style-1 custom-item-padding custom-dots-style-1" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
								<div>
									<div class="col-md-4 col-sm-6">
										<div class="custom-box-details-2 background-color-light custom-box-shadow-3">
											<i class="icon-graduation icons text-color-primary"></i>
											<h4 class="font-weight-semibold text-color-dark m-none">Fatec São Roque</h4>
											<p class="custom-text-color-2 mb-xs">Sistemas para Internet </p>
											<strong class="text-color-primary">2014-2016</strong>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="custom-box-details-2 background-color-light custom-box-shadow-3">
											<i class="icon-graduation icons text-color-primary"></i>
											<h4 class="font-weight-semibold text-color-dark m-none">Etec São Roque</h4>
											<p class="custom-text-color-2 mb-xs">Técnico em Informática</p>
											<strong class="text-color-primary">2009-2010</strong>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="custom-box-details-2 background-color-light custom-box-shadow-3">
											<i class="icon-graduation icons text-color-primary"></i>
											<h4 class="font-weight-semibold text-color-dark m-none">E.E Prof Roque Bastos</h4>
											<p class="custom-text-color-2 mb-xs">Ensino Fundamental e Médio</p>
											<strong class="text-color-primary">2004-2010</strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="skills" class="section section-no-border background-color-light m-none">
				<div class="container">
					<div class="row custom-sm-flex-order">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Habilidades</h2>
							<div class="progress-bars custom-progress-bars">
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>HTML 5</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="60%"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>PHP</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="70%" data-appear-animation-delay="300"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>MySQL</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="70%" data-appear-animation-delay="600"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>CSS</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="90%" data-appear-animation-delay="900"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="progress-bars custom-progress-bars custom-md-margin-top-1">
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>Javascript</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="70%"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>GIT</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="80%" data-appear-animation-delay="300"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>OOP</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="70%" data-appear-animation-delay="600"></div>
								</div>
								<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-sm">
									<span>Bootstrap</span>
								</div>
								<div class="progress">
									<div class="progress-bar" data-appear-progress-animation="90%" data-appear-animation-delay="900"></div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="custom-box-details background-color-light custom-box-shadow-1">
								<h4 class="text-color-dark">Idiomas</h4>
								<ul class="custom-list-style-1 p-none">
									<li>
										<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-us mr-xs" alt="English">Inglês</span>
										<span class="custom-text-color-2">Avançado</span>
									</li>
									<li>
										<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-es mr-xs" alt="Spanish">Espanhol:</span>
										<span class="custom-text-color-2">Basico</span>
									</li>
									<!-- <li>
										<span class="font-weight-semibold custom-max-width-1 text-color-dark"><img src="img/blank.gif" class="flag flag-fr mr-xs" alt="Française">French:</span>
										<span class="custom-text-color-2">Basic</span>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="portfolio" class="section section-no-border background-color-secondary m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfólio</h2>
							<ul class="nav nav-pills sort-source custom-nav-sort mb-xlg" data-sort-id="portfolio" data-option-key="filter">
								<!-- <li data-option-value="*" class="active"><a href="#">Show All</a></li> -->
								<li data-option-value=".websites" class="active"><a href="#">Websites</a></li>
								<!-- <li data-option-value=".logos"><a href="#">Logos</a></li> -->
								<!-- <li data-option-value=".brands"><a href="#">Brands</a></li> -->
							</ul>
							<div class="row">
								<div class="sort-destination-loader sort-destination-loader-showing">
									<ul class="image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-1_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-1.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-2_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-2.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-3_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-3.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-4_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-4.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-5_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-5.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-6_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-6.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-7_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-7.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
										<li class="col-md-3 col-sm-6 col-xs-12 isotope-item websites">
											<div class="image-gallery-item">
												<a href="img/portfolio/portfolio-8_full.png" class="lightbox-portfolio">
													<span class="thumb-info custom-thumb-info-1">
														<span class="thumb-info-wrapper">
															<span class="thumb-info-plus"></span>
															<img src="img/portfolio/portfolio-8.jpg" class="img-responsive" alt="">
														</span>
													</span>
												</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="recommendations" class="section section-no-border background-color-primary m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recomendações</h2>
						</div>
						<div class="col-md-12 p-none">
							<div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-none" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
								<div>
									<div class="col-md-12">
										<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
											<blockquote class="pb-sm">
												<p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
											</blockquote>
											<div class="testimonial-author pull-left">
												<p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="col-md-12">
										<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-none">
											<blockquote class="pb-sm">
												<p class="custom-text-color-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapibus sodales. Sed placerat vitae dui vitae vehicula. Quisque in tincidunt ligula, nec dignissim arcu. Praesent aliquam velit vel libero dictum, non sollicitudin lectus mollis. Morbi sollicitudin auctor gravida.</p>
											</blockquote>
											<div class="testimonial-author pull-left">
												<p><strong class="text-uppercase">Bob Doe</strong><span class="custom-text-color-3">Director of Engineering</span></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<!-- <section id="blog" class="section section-no-border background-color-light m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>
						</div>
						<div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 custom-sm-margin-bottom-1">
							<article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
								<span class="thumb-info-wrapper">
									<a href="#">
										<img src="img/blog/blog-1.jpg" alt class="img-responsive" />
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h4 class="mb-sm">
											<a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
												Design Driven
											</a>
										</h4>
										<p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique nec. Nulla lobortis leo eget metus dapib...</p>
									</span>
									<hr class="solid m-none mt-xlg mb-sm">
									<span class="custom-blog-post-date text-uppercase font-weight-semibold text-color-dark">
										July 12-2017
									</span>
									<span class="custom-blog-post-share text-uppercase font-weight-semibold text-color-dark">
										Share:
										<ul>
											<li>
												<a class="item-facebook text-decoration-none" href="#" class="text-uppercase" title="Share on Facebook">Facebook</a>
											</li>
											<li>
												<a class="item-twitter text-decoration-none" href="#" class="text-uppercase" title="Share on Twitter">Twitter</a>
											</li>
											<li>
												<a class="item-google-plus text-decoration-none" href="#" class="text-uppercase" title="Share on Google Plus">Google Plus</a>
											</li>
										</ul>
									</span>
								</span>
							</article>
						</div>
						<div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0">
							<article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
								<span class="thumb-info-wrapper">
									<a href="#">
										<img src="img/blog/blog-2.jpg" alt class="img-responsive" />
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h4 class="mb-sm">
											<a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
												UI, UX Concepts
											</a>
										</h4>
										<p class="custom-text-color-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nulla tortor, a imperdiet enim tristique...</p>
									</span>
									<hr class="solid m-none mt-xlg mb-sm">
									<span class="custom-blog-post-date text-uppercase font-weight-semibold text-color-dark">
										July 12-2017
									</span>
									<span class="custom-blog-post-share text-uppercase font-weight-semibold text-color-dark">
										Share:
										<ul>
											<li>
												<a class="item-facebook text-decoration-none" href="#" class="text-uppercase" title="Share on Facebook">Facebook</a>
											</li>
											<li>
												<a class="item-twitter text-decoration-none" href="#" class="text-uppercase" title="Share on Twitter">Twitter</a>
											</li>
											<li>
												<a class="item-google-plus text-decoration-none" href="#" class="text-uppercase" title="Share on Google Plus">Google Plus</a>
											</li>
										</ul>
									</span>
								</span>
							</article>
						</div>
						<div class="col-md-12 col-sm-12 pt-xlg mt-xlg center">
							<a class="btn btn-primary btn-borders text-color-dark custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
						</div>
					</div>
				</div>
			</section> -->

			<div id="say-hello" class="container-fluid">
				<div class="row">
					<div class="col-md-6 p-none">
						<section class="section section-no-border match-height  m-none">
							<div class="row m-none">
								<div class="col-half-section col-half-section-right mr-md">
									<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Diga olá</h2>
									<form id="callSendMessage" class="custom-form-style" action="php/enviar-email.php" method="POST">
										<div class="form-content">
											<div class="form-control-custom">
												<input type="text" class="form-control" name="nome" placeholder="Nome *" data-msg-required="Campo Obrigatório" id="nome" required="" />
											</div>
											<div class="form-control-custom">
												<input type="text" class="form-control" name="email" placeholder="E-mail *" data-msg-required="Campo Obrigatório" id="email" required="" />
											</div>
											<div class="form-control-custom">
												<input type="text" class="form-control" name="assunto" placeholder="Assunto *" data-msg-required="Campo Obrigatório" id="assunto" required="" />
											</div>
											<div class="form-control-custom">
												<textarea maxlength="5000" data-msg-required="Mensagem." rows="10" class="form-control" name="mensagem" placeholder="Mensagem *" id="mensagem" required="" aria-required="true"></textarea>
											</div>
											<input type="submit" class="btn btn-quaternary text-color-light text-uppercase font-weight-semibold outline-none custom-btn-style-2 custom-border-radius-1" value="Enviar" />
										</div>
									</form>
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-6 p-none">
						<section class="section section-no-border match-height m-none" style="background: url(img/contato.png); background-size: cover; background-color: #000;">
							<div class="row m-none">
								<div class="col-half-section col-half-section-left ml-md">
									<a href="mailto:you@domain.com" class="text-decoration-none">
										<span class="feature-box custom-feature-box mb-xlg">
											<span class="custom-feature-box-icon">
												<i class="icon-envelope icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<label class="font-weight-semibold text-uppercase custom-text-color-1">E-mail</label>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">contato@jorgemendes.com.br</strong>
											</span>
										</span>
									</a>
									<!-- <a href="tel:+1234657890" class="text-decoration-none">
										<span class="feature-box custom-feature-box mb-xlg">
											<span class="custom-feature-box-icon">
												<i class="icon-phone icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<label class="font-weight-semibold text-uppercase custom-text-color-1">Telefone</label>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">(15) 99719-2948</strong>
											</span>
										</span>
									</a> -->
									<a target="_blank" style="text-decoration: none;" href="https://www.linkedin.com/in/jorge-mendes-83a572a7" class="text-decoration-none">
										<span class="feature-box custom-feature-box mb-xlg">
											<span class="custom-feature-box-icon">
												<i class="icon-social-linkedin icons text-color-light"></i>
											</span>
											<span class="feature-box-info">
												<label class="font-weight-semibold text-uppercase custom-text-color-1">Linkedin</label>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">Jorge Mendes</strong>
											</span>
										</span>
									</a>
									<span class="feature-box custom-feature-box mb-xlg">
										<span class="custom-feature-box-icon">
											<i class="icon-share icons text-color-light"></i>
										</span>
										<a target="_blank" href="https://www.facebook.com/jorgebill.silva" class="text-decoration-none">
											<span class="feature-box-info">
												<label class="font-weight-semibold text-uppercase custom-text-color-1">Me acompanhe</label>
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
											</span>
										</a>
										<a target="_blank" href="https://www.instagram.com/jorgebillsilva/" class="text-decoration-none">
											<span class="feature-box-info custom-both-side-border">
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">Instagram</strong>
											</span>
										</a>
										<a target="_blank" href="https://github.com/Jorge-Bill/" class="text-decoration-none hidden-sm hidden-xs">
											<span class="feature-box-info p-none">
												<strong class="font-weight-light text-color-light custom-opacity-effect-1">GitHub</strong>
											</span>
										</a>
									</span>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<footer id="footer" class="m-none p-none">
				<div class="footer-copyright background-color-light m-none">
					<div class="container">
						<div class="row">
							<div class="col-md-12 m-none">
								<p class="custom-text-color-2">© Copyright 2017. Todos os direitos reservados.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		<script src="vendor/imagesLoaded/imagesloaded.pkgd.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/view.contact.js"></script>

		<!-- Demo -->
		<script src="js/demo-resume.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
