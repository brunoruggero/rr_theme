<?php
		$title =  get_the_title();
?>

	<footer <?php if($title == 'Contato'){echo 'style="padding:20px 0;"';} ?>>
	<?php
		if($title != 'Contato' && $title != 'Política de privacidade' && is_404() == false){ //&& $title != 'Sobre'
	?>
	<section class="metodologia">
		<div class="center">
			<h2><?php the_field('camada_metodologia');?></h2>
			<p><?php the_field('descricao_metodologia');?></p>
			<a href="/rr_wordpress/contato"><?php the_field('botao_metologia');?></a>
		</div>
	</section>
	<?php
		}
	?>
		<div class="center">
			<div class="col-footer">
				<h2>Institucional</h2>
				<a href="<?php echo get_site_url(); ?>/">Home</a>
				<a href="<?php echo get_site_url(); ?>/sobre">Sobre</a>
				<a href="<?php echo get_site_url(); ?>/politica">Politica de Privacidade</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="<?php echo get_site_url(); ?>/contato">Contato</a>
			</div>
			<div class="col-footer">
				<h2>Atendimento</h2>
				<p>Horário de Atendimento</p>
				<p>Telefone: (xx) xxxx-xxxx</p>
				<p>WhatsApp: (xx) xxxxx-xxxx</p>
				<p></p>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/logo-footer.png" />
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_theme_root_uri(); ?>/rr_theme/js/jquery.js"></script>
<script src="<?php echo get_theme_root_uri(); ?>/rr_theme/js/slick.min.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
<script src="<?php echo get_theme_root_uri(); ?>/rr_theme/js/map.js"></script>
<script type="text/javascript">
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimentos-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    slidesToShow: 1,
	    centerMode:false
	});
</script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>
</body>
</html>