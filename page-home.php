<?php
	//Template Name: Home
?>
<?php get_header(); ?>

		<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2><?php the_field('chamada_topo'); ?></h2>
				<p><?php the_field('sub_chamada'); ?></p>
				<a target="_blank" href="https://rrstecnologia.com.br"><?php the_field('botao_topo'); ?></a>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src="<?php the_field('imagem_topo'); ?>" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>
	<section class="conteudo-da-pagina">
	</section>



	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/walmart.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/amazon.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/costco.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/dominos.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/uber.jpg" />
			<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/walmart.jpg" />
		</div>
		</div><!--center-->
	</section>

	<section class="diferenciais">
			<div class="center">
				<h2><?php the_field('chamada_contribuimos');  ?></h2>	
				<div class="icons-diferenciais">
					<div class="box-single-diferenciais">
						<img src="<?php the_field('imagem_um'); ?>" />
						<h3 style="margin-top: 17px;"><?php the_field('titulo_um');  ?></h3>
						<p><?php the_field('descricao_um');  ?></p>
					</div><!--box-single-diferenciais-->
					<div class="box-single-diferenciais">
						<img src="<?php the_field('imagem_dois'); ?>" />
						<h3><?php the_field('titulo_dois');  ?></h3>
						<p><?php the_field('descricao_dois');  ?></p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="<?php the_field('imagem_tres'); ?>" />
						<h3><?php the_field('titulo_tres');  ?></h3>
						<p><?php the_field('descricao_tres');  ?></p>
					</div><!--box-single-diferenciais-->
				</div><!--icons-diferenciais-->
			</div>
	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2><?php the_field('sobre_titulo');  ?></h2>
				<p><?php the_field('sobre_home');  ?></p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="<?php the_field('imagem_sobre'); ?>" />
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="depoimentos">
		<div class="center">
			<h2><?php the_field('chamada_depoimentos');?></h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>"<?php the_field('depoimento_um');?>"</p>
					<p><?php the_field('nome_depoimento_um');?></p>
					<img src="<?php the_field('imagem_depoimento_um'); ?>" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"<?php the_field('depoimento_dois');?>"</p>
					<p><?php the_field('nome_depoimento_dois');?></p>
					<img src="<?php the_field('imagem_depoimento_dois'); ?>" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"<?php the_field('depoimento_tres');?>"</p>
					<p><?php the_field('nome_depoimento_tres');?></p>
					<img src="<?php the_field('imagem_depoimento_tres'); ?>" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>

	<?php get_footer(); ?>
