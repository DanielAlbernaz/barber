<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700|PT+Sans:400,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assests/site/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assests/site/css/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('assests/site/css/dark.css') }}" type="text/css" />

	<!-- Barber Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assests/site/css/barber/barber.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/barber/css/fonts.css') }}" type="text/css" />
	<!-- / -->

    <link rel="stylesheet" href="{{ asset('assests/site/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assests/site/css/magnific-popup.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assests/site/css/one-page/css/et-line.css') }}" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assests/site/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    {{-- <link rel="stylesheet" href="{{ asset('assests/site/css/colors.php?color=BF9456') }}" type="text/css" /> --}}

	<!-- Document Title
	============================================= -->
	<title> Barber </title>

	<style>
		/* Page Loading Style */
		.css3-spinner {height:100vh; -webkit-box-align:center; -ms-flex-align:center; align-items:center; display:-webkit-box; display:-ms-flexbox; display:flex; -webkit-box-pack:center; -ms-flex-pack:center; justify-content:center; background-color: #bF9456; } @keyframes pulse {0% {opacity: 0; -webkit-transform: scale3d(.8, .8, .8); transform: scale3d(.8, .8, .8); } 50% { opacity: 1; } } .infinite.animated.pulse { -webkit-animation-duration: 1.7s; animation-duration: 1.7s; }
	</style>

</head>

<body class="stretched page-transition" data-loader-html="<img class='infinite animated pulse' src='{{ asset('assests/site/css/barber/images/slider-logo.svg') }}' width='300'>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header dark header-size-md" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="60" data-responsive-class="not-dark" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container px-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo"><img src="{{ asset('assests/site/css/barber/images/sticky-logo.png') }} " alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo"><img src="{{ asset('assests/site/css/barber/images/sticky-logo@2x.png') }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu not-dark text-lg-center">

							<ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1300" data-offset="60">
								<li class="menu-item active"><a class="menu-link" href="#" data-href="#wrapper">Home</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-offset="56" data-href="#service">Serviço</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#price">Preço</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#shop">Comprar</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#testimonial">Feedbacks</a></li>
								<li class="menu-item"><a class="menu-link" href="#" data-href="#contact">Contato</a></li>
								<li class="menu-item">
									<a href="#" data-scrollto="#contact" data-offset="62" data-easing="easeInOutExpo" data-speed="1300" class="button button-color reverse"><i class="icon-calendar2"></i> Agendamento</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax page-section min-vh-60 min-vh-md-100 include-header">
			<div class="slider-inner" style="background: url('{{ asset('assests/site/css/barber/images/hero/hero.jpg') }} ') center center no-repeat; background-size: cover;">

				<div class="vertical-middle">
					<div class="text-center py-5 py-md-0">
						<img src="{{ asset('assests/site/css/barber/images/slider-logo.svg') }}" alt="Logo" height="180">

						<!-- Slider Navigation
						============================================= -->
						<nav class="custom-hero-nav">
							<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1300" data-offset="60">
								<li class="active"><a href="#" data-href="#slider">Home</a></li>
								<li><a href="#" data-offset="56" data-href="#service">Serviço</a></li>
								<li><a href="#" data-href="#price">Preço</a></li>
								<li><a href="#" data-href="#shop">Comprar</a></li>
								<li><a href="#" data-href="#testimonial">Feedback</a></li>
								<li><a href="#" data-href="#contact">Contato</a></li>
							</ul>
						</nav>
					</div>
				</div>

				<div class="video-wrap">
					<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
				</div>

				<!-- Slider Appointment Button
				============================================= -->
				<a href="#" class="button button-large button-color button-appointment d-none d-lg-block" data-scrollto="#contact" data-offset="62" data-easing="easeInOutExpo" data-speed="1300"><i class="icon-calendar2"></i> Faça um Agendamento</a>

				<!-- Slider Social Icons
				============================================= -->
				<div class="slider-social d-none d-lg-block clearfix">
					<a href="https://facebook.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-facebook">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="https://twitter.com/__semicolon" target="_blank" class="social-icon si-small si-borderless si-twitter">
						<i class="icon-twitter"></i>
						<i class="icon-twitter"></i>
					</a>
					<a href="https://instagram.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-instagram">
						<i class="icon-instagram"></i>
						<i class="icon-instagram"></i>
					</a>
					<a href="https://youtube.com/semicolonweb" target="_blank" class="social-icon si-small si-borderless si-youtube">
						<i class="icon-youtube"></i>
						<i class="icon-youtube"></i>
					</a>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content" style="border-top: 8px solid #bf9456">

			<div class="content-wrap py-0">

				<!-- About Section
				============================================= -->
				<div id="about" class="section m-0 bg-transparent page-section" style="padding: 150px 0">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-md-3 col-6 d-none d-md-block">
								<img src="{{ asset('assests/site/css/barber/images/about/1.jpg') }}" alt="Image">
							</div>
							<div class="col-md-6 col-12 center" style="padding: 0 50px;">
								<img src="{{ asset('assests/site/css/barber/images/icons/cs.svg') }}" alt="Image" height="60" style="margin-bottom: 20px">
								<div class="heading-block bottommargin-sm">
									<h2>Sobre nós</h2>
								</div>
								<p> A Barber Shop é a barbearia da sua época. Focada em excelência, a Barber conta com tudo que o homem moderno precisa. Um ambiente confortável, descontraído e exclusivamente masculino, com cuidados para todos os estilos de barba e cabelo, além de serviços como massagem, podologia, estética masculina e dia do noivo. Uma barbearia premium, para cuidar do visual, tomar uma cerveja gelada, assistir aos seus esportes favoritos ou jogar uma partida de sinuca.</p>
								<img src="{{ asset('assests/site/css/barber/images/about/sign.png') }}" alt="Image" width="200">
							</div>
							<div class="col-md-3 col-6 d-none d-md-block">
								<img src="{{ asset('assests/site/css/barber/images/about/2.jpg') }}" alt="Image">
							</div>
						</div>
					</div>
				</div>

				<!-- Service Page Section
				============================================= -->
				<div id="service" class="section page-section bg-transparent p-0 mt-0 clearfix">

					<div class="row align-items-stretch clearfix bottommargin">

						<!-- Service Image
						============================================= -->
						<div class="col-lg-6 center col-padding parallax" style="background-image: url('{{ asset('assests/site/css/barber/images/sections/1.jpg') }}');" data-bottom-top="background-position:0px 100px;" data-top-bottom="background-position:0px -300px;">
							<div class="vertical-middle dark">
								<div class="heading-block border-0 center">
									<h2 class="nott ls0" style="font-size: 54px">Como fazemos</h2>
								</div>
							</div>
						</div>

						<!-- Service Featured Boxes
						============================================= -->
						<div class="col-lg-6 col-padding" style="background-color: #F9F9F9">
							<div>
								<div class="row clearfix" style="padding: 20px 0">
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('assests/site/css/barber/images/icons/scessior.svg') }}" alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>Barbeiros bem treinados</h3>
												<p>Certificados com toda qualificação necessária para todos os estilos de cabelo e barba.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('assests/site/css/barber/images/icons/moustache.svg') }}" alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>10 anos de Experiência</h3>
												<p>Somos uma equipe de barbeiros profissionais que através da marca Barbers Shop , pretendemos construir autoridade em serviços de barbearia na grande vitória. Oferecemos uma grande variedade de serviços e produtos e recebemos nossos clientes em um ambiente aconchegante, climatizado e caracterizado. </p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('assests/site/css/barber/images/icons/comb.svg') }} " alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>Produtos de Marca</h3>
												<p>Trabalhamos com os melhores do produtos de excelência de barbearia. </p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8 bottommargin">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('assests/site/css/barber/images/icons/time.svg') }}" alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>ótima localização</h3>
												<p>Estamos localizado em um ótimo ponto, de fácil acesso.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-10 col-md-8">
										<div class="feature-box fbox-plain">
											<div class="fbox-icon">
												<a href="#"><img src="{{ asset('assests/site/css/barber/images/icons/drier1.svg') }}" alt="Image"></a>
											</div>
											<div class="fbox-content">
												<h3>serviços customizados</h3>
												<p>Além de muitos estilos de cortes de cabelos e barba, também temos outros serviços como massagem, podologia, estética masculina e dia do noivo.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container topmargin-lg clearfix">

						<div class="row">
							<!-- Barber Category 1
							============================================= -->
							<div class="col-md-4 center bottommargin-lg">
								<div class="feature-box media-box">
									<div class="fbox-media" style="padding: 0 40px;">
										<a href="#"><img class="rounded-circle img-thumbnail" src="{{ asset('assests/site/css/barber/images/features/shave.jpg') }}" alt="Why choose Us?"><span>Barbear</span><div class="sale-flash badge bg-warning text-dark py-2 px-3 rounded-0">-30% OFF*</div></a>
									</div>
									<div class="fbox-content">
										<h3><span class="ls0 subtitle font-primary">Sua barba em ótimas mãos.</span></h3>
										<p>O mais perfeito ritual de barbear. Tradicional toalha quente, óleo e espuma QOD, seguido de navalha e aplicação de loção pós-barba.

										</br>Tempo: Aprox. 35 minutos</p>
										<a href="#" class="more-link text-uppercase ls1 fw-bold" style="margin: 20px 0 0 0; font-style: normal;">Saiba mais</a>
									</div>
								</div>
							</div>

							<!-- Barber Category 2
							============================================= -->
							<div class="col-md-4 center bottommargin-lg">
								<div class="feature-box media-box">
									<div class="fbox-media" style="padding: 0 40px;">
										<a href="#"><img class="rounded-circle img-thumbnail" src="{{ asset('assests/site/css/barber/images/features/haircut.jpg') }}" alt="Effective Planning"><span>Corte de Cabelo</span></a>
									</div>
									<div class="fbox-content">
										<h3><span class="ls0 subtitle font-primary">Processo de corte organizado.</span></h3>
										<p>Corte de cabelo no estilo clássico, simétrico com linhas precisas e limpas, ou do seu jeito preferido. Além disso, os fios são lavados com o shampoo QBS ideal e finalizados com pomadas QBS de acordo com seu estilo.

										</br>Tempo: Aprox. 45 minutos</p>
										<a href="#" class="more-link text-uppercase ls1 fw-bold" style="margin: 20px 0 0 0; font-style: normal;">Saiba mais</a>
									</div>
								</div>
							</div>

							<!-- Barber Category 3
							============================================= -->
							<div class="col-md-4 center bottommargin-lg">
								<div class="feature-box media-box">
									<div class="fbox-media" style="padding: 0 40px;">
										<a href="#"><img class="rounded-circle img-thumbnail" src="{{ asset('assests/site/css/barber/images/features/hairwash.jpg') }}" alt="Why choose Us?"><span>Lavagem de Cabelo</span></a>
									</div>
									<div class="fbox-content">
										<h3><span class="ls0 subtitle font-primary">Nós temos um excelente preparo.</span></h3>
										<p>Lavagem de cabelo com produtos de linha profissional, contando também com uma massagem relaxante.
											
										</br>Tempo: Aprox. 15 minutos</p>
										<a href="#" class="more-link text-uppercase ls1 fw-bold" style="margin: 20px 0 0 0; font-style: normal;">Saiba mais</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<!-- Price Page Section - Parallax
				============================================= -->
				<div id="price" class="section page-section parallax pb-0 mb-0 dark" style="background-image: url('{{ asset('assests/site/css/barber/images/sections/3.jpg') }}'); background-size: cover; height: 600px" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;"></div>

				<div class="container bottommargin dark clearfix" style="margin-top: -500px">
					<div class="heading-block bottommargin-lg center clearfix">
						<img src="{{ asset('assests/site/css/barber/images/icons/wallet-white.svg') }}" alt="Image" height="40" style="margin-bottom: 20px">
						<h2>Preços</h2>
					</div>

					<!-- Price Items
					============================================= -->
					<div class="row dark col-padding clearfix" style="background-color: #121212">
						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Corte de Cabelo</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$39</div>
							</div>
							<p class="price-desc">Corte de cabelo no estilo atual , simétrico com linhas precisas + Lavagem com shampoo QBS ideal e finalizado com pomadas QBS de acordo com seu estilo.</p>
						</div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Lavagem de Cabelo</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$42</div>
							</div>
							<p class="price-desc">Lavagem com shampoo QBS + Massagem relaxande no couro + pomada QBS. </p>
						</div>

						<div class="w-100 clear"></div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Barbear</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$29</div>
							</div>
							<p class="price-desc">Tradicional toalha quente, óleo e espuma QOD + aplicação de loção pós-barba.</p>
						</div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Pintar Cabelo</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$30</div>
							</div>
							<p class="price-desc">Todos os modelos de luzes, mechas e estilos.</p>
						</div>

						<div class="w-100 clear"></div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Bigode</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$39</div>
							</div>
							<p class="price-desc">No estilo de sua preferência, com estilo e autenticidade. </p>
						</div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Sobrancelha</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$30</div>
							</div>
							<p class="price-desc">Designer da sobrancelha de acordo com seu estilo.</p>
						</div>

						<div class="w-100 clear"></div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Facial</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$29</div>
							</div>
							<p class="price-desc">Hidratação da pele e pelos (barbar e sombrancelha). </p>
						</div>

						<div class="col-lg-6 price-wrap">
							<div class="price-header">
								<div class="price-name">
									<a href="#" class="color">Massagem na Cabeça</a>
								</div>
								<div class="price-dots">
									<span class="separator-dots"></span>
								</div>
								<div class="price-price">R$20</div>
							</div>
							<p class="price-desc">Uma massagem relaxante de 15 minutos no couro cabeludo.</p>
						</div>

						<div class="col-12 center">
							<a href="#" class="button button-large button-color d-none d-lg-block "><i class="icon-calendar2"></i> Agendamento</a>
						</div>
					</div>

				</div>

				<!-- Shop Page Section
				============================================= -->
				<div id="shop" class="section m-0 page-section bg-transparent">

					<div class="container">
						<div class="heading-block center">
							<img src="{{ asset('assests/site/css/barber/images/icons/comb3.svg') }}" alt="Image" height="40" style="margin-bottom: 20px">
							<h2>Comprar</h2>
						</div>

						<div class="row col-mb-50 mb-0">
							<!-- Shop Item 1
							============================================= -->
							<div class="col-lg-3 col-md-6">
								<div class="product">
									<div class="product-image">
										<a href="#"><img src="{{ asset('assests/site/css/barber/images/shop/1.jpg') }}" alt="High-Heel Girl's Sandals"></a>
										<a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
									</div>
									<div class="product-desc center">
										<div class="product-price"><ins>R$21.49</ins></div>
										<div class="product-title"><h3><a href="#">Navalha</a></h3></div>
									</div>
								</div>
							</div>

							<!-- Shop Item 2
							============================================= -->
							<div class="col-lg-3 col-md-6">
								<div class="product">
									<div class="product-image">
										<a href="#"><img src="{{ asset('assests/site/css/barber/images/shop/2.jpg') }}" alt="High-Heel Girl's Sandals"></a>
										<a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
									</div>
									<div class="product-desc center">
										<div class="product-price"><ins>R$12.49</ins></div>
										<div class="product-title"><h3><a href="#">Escova de Barbear</a></h3></div>
									</div>
								</div>
							</div>


							<!-- Shop Item 3
							============================================= -->
							<div class="col-lg-3 col-md-6">
								<div class="product">
									<div class="product-image">
										<a href="#"><img src="{{ asset('assests/site/css/barber/images/shop/3.jpg') }}" alt="High-Heel Girl's Sandals"></a>
										<a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
									</div>
									<div class="product-desc center">
										<div class="product-price"><ins>R$21.99</ins></div>
										<div class="product-title"><h3><a href="#">Óleo de Barba</a></h3></div>
									</div>
								</div>
							</div>

							<!-- Shop Item 4
							============================================= -->
							<div class="col-lg-3 col-md-6">
								<div class="product">
									<div class="product-image">
										<a href="#"><img src="{{ asset('assests/site/css/barber/images/shop/4.jpg') }}" alt="High-Heel Girl's Sandals"></a>
										<div class="sale-flash badge bg-success p-2">-50%*</div>
										<a href="#" class="shop-icon"><i class="icon-shopping-cart"></i></a>
									</div>
									<div class="product-desc center">
										<div class="product-price"><del>R$24.99</del> <ins>R$19.49</ins></div>
										<div class="product-title"><h3><a href="#">Escova de Cabelo</a></h3></div>
									</div>
								</div>
							</div>
						</div>

						<div class="center">
							<a href="#" class="button button-large button-color">+ Mais Produtos</a>
						</div>

					</div>
				</div>

				<!-- Testimonial Page Section
				============================================= -->
				<div id="testimonial" class="section page-section parallax pb-0 dark clearfix" style="background-image: url('{{ asset('assests/site/css/barber/images/sections/2.jpg') }}'); background-size: cover;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
					<div class="container clearfix">

						<div class="heading-block center">
							<img src="{{ asset('assests/site/css/barber/images/icons/stars.svg') }}" alt="Image" height="50" style="margin-bottom: 20px">
							<h3 class="ls2">Feedback</h3>
						</div>

						<!-- Testimonial Slider
						============================================= -->
						<div class="fslider testimonial testimonial-full bg-transparent border-0 shadow-none p-0 bottommargin-sm mx-auto center clearfix" data-arrows="false" style="max-width: 700px">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide">
										<div class="testi-content">
											<p>Um excelente trabalho feito pela Barbers shop, com muita dedicação e excelência de seus barbers. Indico a todos que desejam um momento de  total qualidade.</p>
											<div class="testi-meta">
												Jhonatan Lima
												<span class="ls0"> TD Inc.</span>
											</div>
										</div>
									</div>
									<div class="slide">
										<div class="testi-content">
											<p>Um momento de relachamento com muita satisfação do trabalho realizado pela equipe Barbers Shop.</p>
											<div class="testi-meta">
												João freitas
												<span class="ls0">AJF Inc.</span>
											</div>
										</div>
									</div>
									<div class="slide">
										<div class="testi-content">
											<p>A qualidade do serviço sempre me surpreende, tanto no quesito profissionais, quanto nos produtos ultilizado para o serviço. Muito satisfeito.</p>
											<div class="testi-meta">
												John Doe
												<span class="ls0">BORN Inc.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<!-- Clients Logo Carousel Area
					============================================= -->
					<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget topmargin-lg mb-0" data-margin="0" data-nav="false" data-pagi="false" data-autoplay="3000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="6" data-loop="true" style="z-index: 2; padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.15);">

						<!-- Clients items
						============================================= -->
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/1.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/4.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/6.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/2.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/3.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/5.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/7.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/8.png') }}" alt="Brands"></a></div>
						<div class="oc-item"><a href="#"><img src="{{ asset('assests/site/css/barber/images/clients/9.png') }}" alt="Brands"></a></div>

					</div>

					<div class="video-wrap" style="position: absolute; height: 100%; z-index: 1;">
						<div class="video-overlay" style="background: rgba(0,0,0,0.7);"></div>
					</div>

				</div>

				<!-- Barber Teams
				============================================= -->
				<div class="section bg-transparent mb-0 topmargin-sm clearfix">

					<div class="container clearfix">

						<div class="heading-block center">
							<img src="{{ asset('assests/site/css/barber/images/icons/team.svg') }}" alt="Image" height="50" style="margin-bottom: 20px">
							<h3 class="ls2">Nossos Barbeiros</h3>
							<span>Profissionais certificados e qualificados com um excelente trabalho.</span>
						</div>

						<div class="row">
							<!-- Team 1
							============================================= -->
							<div class="col-md-4 bottommargin">
								<div class="team">
									<div class="team-image">
										<img src="{{ asset('assests/site/css/barber/images/barbers/1.jpg') }}" alt="John Doe">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
												<div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
													<a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="gplus">
														<i class="icon-gplus"></i>
														<i class="icon-gplus"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
														<i class="icon-instagram"></i>
														<i class="icon-instagram"></i>
													</a>
												</div>
												<a href="#" class="button button-large button-color m-0 w-100 text-center" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">Appointment</a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>John Doe</h4><span>Expert</span></div>
									</div>
								</div>
							</div>

							<!-- Team 2
							============================================= -->
							<div class="col-md-4 bottommargin">
								<div class="team">
									<div class="team-image">
										<img src="{{ asset('assests/site/css/barber/images/barbers/2.jpg') }}" alt="Josh Thompson">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
												<div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
													<a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="gplus">
														<i class="icon-gplus"></i>
														<i class="icon-gplus"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
														<i class="icon-instagram"></i>
														<i class="icon-instagram"></i>
													</a>
												</div>
												<a href="#" class="button button-large button-color m-0 w-100 text-center" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">Appointment</a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Josh Thompson</h4><span>Barber</span></div>
									</div>
								</div>
							</div>

							<!-- Team 3
							============================================= -->
							<div class="col-md-4 bottommargin">
								<div class="team">
									<div class="team-image">
										<img src="{{ asset('assests/site/css/barber/images/barbers/3.jpg') }}" alt="Mary Jane">
										<div class="bg-overlay">
											<div class="bg-overlay-content p-2 flex-column-reverse justify-content-between align-items-center">
												<div class="d-flex mb-3" data-hover-animate="fadeInUp" data-hover-animate-out="fadeOutDown" data-hover-speed="400" data-hover-parent=".team">
													<a href="#" class="social-icon si-rounded si-colored si-small si-facebook" title="Facebook">
														<i class="icon-facebook"></i>
														<i class="icon-facebook"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-gplus" title="gplus">
														<i class="icon-gplus"></i>
														<i class="icon-gplus"></i>
													</a>
													<a href="#" class="social-icon si-rounded si-colored si-small si-instagram" title="instagram">
														<i class="icon-instagram"></i>
														<i class="icon-instagram"></i>
													</a>
												</div>
												<a href="#" class="button button-large button-color m-0 w-100 text-center" data-hover-animate="fadeInDown" data-hover-animate-out="fadeOutUp" data-hover-speed="400" data-hover-parent=".team">Appointment</a>
											</div>
											<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="400" data-hover-parent=".team"></div>
										</div>
									</div>
									<div class="team-desc">
										<div class="team-title"><h4>Mary Jane</h4><span>Junior Barber</span></div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>

				<!-- Contact Page Section
				============================================= -->
				<div id="contact" class="row align-items-stretch page-section pt-0 clearfix">

					<div class="col-lg-6 px-0 d-none d-md-block">
						<div class="gmap h-100" data-address="Ibiza, Spain" data-zoom="5" data-markers='[{ address: "Ibiza, Spain", icon:{ image: "{{ asset('assests/site/css/barber/images/map-marker.png') }}", iconsize: [32, 39], iconanchor: [16,36] } }]' data-styles='[{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]'></div>
					</div>

					<div class="col-lg-6 col-padding" style="background-color: #F9F9F9;">
						<div>
							<h3 class="text-uppercase">Nossa Rede</h3>
							<div class="row topmargin-sm clearfix" style="font-size: 16px; line-height: 1.7;">
								<div class="col-lg-6">
									<address style="line-height: 1.7;">
										<strong>Brasil</strong><br>
										Folsom Apena, N° 256 Quadra 15<br>
										São Paulos<br>
									</address>
								</div>
								<div class="col-lg-6">
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (11) 98596-9632<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> barbershop@gmail.com
								</div>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 form-group">
											<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control border-form-control required" placeholder="Name" />
										</div>
										<div class="col-md-6 form-group">
											<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control border-form-control" placeholder="Email Address" />
										</div>

										<div class="w-100"></div>

										<div class="col-md-4 form-group">
											<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control border-form-control" placeholder="Phone" />
										</div>

										<div class="col-md-8 form-group">
											<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control border-form-control" placeholder="Subject" />
										</div>

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<textarea class="required sm-form-control border-form-control" id="template-contactform-message" name="template-contactform-message" rows="7" cols="30" placeholder="Your Message"></textarea>
										</div>

										<div class="col-12 form-group">
											<button class="button button-large button-color ms-0 topmargin-sm" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar Mensagem</button>
										</div>

										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>
									</div>

									<input type="hidden" name="prefix" value="template-contactform-">

								</form>

							</div>
						</div>
					</div>

				</div>

				<a href="#" class="button button-full bg-color font-secondary center" style="padding: 60px 0; background-image: url('{{ asset('assests/site/css/barber/images/sections/4.jpg') }}'); background-repeat: no-repeat; background-position: 10% 50%; background-size: cover;">
					<div class="container clearfix">
						Reserve sua visita e ganhe <strong>25% Desconto</strong> &rarr;
					</div>
				</a>

			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #121212; padding: 60px 0">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap center clearfix">

					<img src="{{ asset('assests/site/css/barber/images/slider-logo.svg') }}" width="200" alt="Image">

					<div class="topmargin-lg clearfix">
						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-facebook">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-twitter">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-gplus">
							<i class="icon-gplus"></i>
							<i class="icon-gplus"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-pinterest">
							<i class="icon-pinterest"></i>
							<i class="icon-pinterest"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-vimeo">
							<i class="icon-vimeo"></i>
							<i class="icon-vimeo"></i>
						</a>

						<a href="#" class="social-icon si-small si-rounded si-borderless inline-block si-instagram">
							<i class="icon-instagram"></i>
							<i class="icon-instagram"></i>
						</a>
					</div>

					<div class="text-uppercase ls3" style="color: #333; margin-top: 10px">&copy; ALBERNCAMP Inc. 2021. All Rights Reserved.</div>

				</div>

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('assests/site/js/jquery.js') }}"></script>
	<script src="{{ asset('assests/site/js/plugins.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
    <script src="{{ asset('assests/site/js/functions.js') }}"></script>

</body>
</html>
