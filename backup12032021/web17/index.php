<!DOCTYPE html>
<html>
<head>
<title>ChassiLeyzer | Web Site | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>
<!--/fonts-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>
<!--start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->

</head>
<body>
	<!-- banner -->
	<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.html"><img src="images/original1.png" alt="" /></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom active"><a href="index.html" class="scroll">Início<i><img src="images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="#perfil" class="scroll">Perfil<i><img src="images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="#servicos" class="scroll" >Serviços<i><img src="images/nav-but3.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="#local" class="scroll">Local<i><img src="images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="#contato" class="scroll">Contato<i><img src="images/nav-but5.png" alt=""/></i></a></li>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
		<div class="container">
				<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
			 <div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
								<h2>  <span>  </span> </h2>  
								<div class="line"> </div>
								<p></p>
						</div>
					</li>
										
				</ul>
			</div> 
		</div>
	</div>
	<!-- //banner -->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<!-- container -->
		<div class="container" id="perfil">
			<div class="banner-bottom-grids">
				<div class="col-md-7 banner-bottom-grid-text">
					<div class="jumbotron banner-bottom-left wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;	">
					  <h3>Perfil</h3>
						<h5>A empresa fundada em 1989 é pioneira no ramo no norte do Paraná.</h5>
						<p>Hoje a empresa atende todo o estado do Paraná, inclusive parte do estado de São Paulo. Há mais de 30 anos no mercado a Chassi Leyzer possui grande experiência e tecnologia para atender os mais diversos casos. Focada no futuro, a empresa tem procurado o que há de mais moderno no mercado, oferecendo aos seus clientes tecnologia de ponta.</p>
						<div class="see-button">
							<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal" role="button" style="color: white;">ChassiLeyzer 30 Anos</a>
							<br>
							<br>
							<div class="col-md-9 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="images/firma2.jpg" alt=""/>
				</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="images/chassileyzerfaixada2.png" alt=""/>
				</div>
		<span style="color:transparent;">.</span>
					
				<div class="col-md-5 banner-bottom-right wow fadeInRight animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
					<img src="images/firma.jpg" alt=""/>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner-bottom -->
	<!-- specialty -->
	<div class="specialty">
		<!-- container -->
		<div class="container" id="servicos">
			<div class="col-md-5 specialty-info wow fadeInLeft animated" data-wow-delay="0.5s" style="visibility: visible; -webkit-animation-delay: 0.5s;">
				<h3>Serviços</h3>
				
				<p>

				<br>
<br>

				
				<b>Desempenamento e Alinhamento</b> de chassi de veículos leves e pesados para todas as marcas. Sistema de alinhamento totalmente a frio, contando com 3 alinhadores e utilizando de tecnologia de ponta.
<br>
					<br>
					<b>Desempenamento de caçamba agrícola e de transporte de areia.</b>
Sistema de desempenamento totalmente a frio, utilizando equipamento computadorizado.

					<br>
					<br><b>Serviços de molejos, molas, pinos, buchas, tirantes, balanças e suporte em geral.</b>
					<br>
					<br><b>Soldas, alongamentos, reforços e troca de suportes e travessas do chassi.</b>
					<br>
					<br><b>Serviços de auto-socorro Com dois guinchos pesados.</b>
					<br>
					<br>
					


				</p>
				<div class="see-button">
					<a class="btn btn-primary btn-lg see-button hvr-shutter-out-horizontal specialty-button" href="#local" role="button">Peça um Orçamento</a>
				</div>
			</div>
			<div class="col-md-7 specialty-grids">
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/1.png" alt="" />
						</figure>
						<h5>Balanceamento de Rodas</h5>
						<p>Serviços altamente profissionais de balanceamento, com utilização de modernos equipamentos.</p>
					</div>
					<div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/2.png" alt="" />
						</figure>
						<h5>Geometria de Eixos de Carretas</h5>
						<p>Geometria e Direção (Caster, Câmber e Convergência com correção a frio).</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/3.png" alt="" />
						</figure>
						<h5>Molas</h5>
						<p>Serviços de molejos, caixas, balanças e tirantes.</p>
					</div>
					<div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/2.png" alt="" />
						</figure>
						<h5>Quinta Roda</h5>
						<p>Serviços de troca, recuperação e revisão de quinta roda.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<br>
				<div class="specialty-grids-top">
					<div class="col-md-6 service-box wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/3.png" alt="" />
						</figure>
						<h5>Peças de reposição</h5>
						<p>Possuímos peças de reposição em geral Parte de chassi Suporte e travessas em geral</p>
					</div>
					<div class="col-md-6 service-box wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<figure class="icon">
							<img src="images/4.png" alt="" />
						</figure>
						<h5>Serviços de recuperação</h5>
						<p>Caçambas canavieiras, dole e julietas.
Sistema de desempenamento totalmente a frio, utilizando equipamento totalmente digital computadorizado.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //specialty -->
	<!-- testimonials -->
		<!-- mail -->
	<div class="mail">
		<!-- container -->
		<div class="container" id="local">
			<div class="map footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.2057462643097!2d-51.85400898502426!3d-23.453041884736823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecc5354ec2c9f9%3A0x860e80e3d414360d!2sChassi+Leyzer!5e0!3m2!1spt-BR!2sbr!4v1501850562141"frameborder="0" style="border:0"></iframe>
			</div>
			<div class="mail-grids">
				<div class="col-md-6 mail-grid-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<h3>Contato & Orçamento</h3>
					<h5>Contato para orçamentos, preencha os dados no campo a direita  </h5>
					<h4>Endereço</h4>
					<p>Av: Antonio Volpato, 4136, PARQUE INDUSTRIAL.
						<span>BR 376</span>
						CEP 87111-011
						SARANDI - PR
	
			</p>
					<h4>Entre em contato:</h4>
					<p>Telefone: (044) 3264-2200
						<span>SARANDI - PR</span>
						E-mail: <a href="mailto:contato@chassileyzer.com.br">contato@chassileyzer.com.br</a>
					</p>
				</div>
				
				
				<div class="col-md-6 contact-form wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<form action="envia.php" method="post" >
						<input type="text" placeholder="Name" name="nome" required>
						<input type="text" placeholder="Email" name="email" required>
						<input type="text" placeholder="Título" name="titulo" required>
						<textarea placeholder="Mensagem" name="mensagem" required></textarea>
						<input type="submit" value="Enviar">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //mail -->
	

	<!-- //testimonials -->
	
	<!-- footer -->
	


		<?php
			include('includes/footer.php');
		?>

	<!-- //footer -->
	<div class="copyright">
		<!-- container -->
		<div class="container">
		
			<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
		<!-- //container -->
	</div>
</body>
</html>