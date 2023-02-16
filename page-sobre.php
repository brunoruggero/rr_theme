<?php
	//Template Name: Sobre

	get_header();
?>
</div>
</section>
	<section class="sobre-equipe">
	<div class="center">
		<div class="w50 equipe-sobre-texto">
			<h2><?php the_field('chamada_sobre');  ?></h2>
			<p><?php the_field('pagina_sobre_descricao');  ?></p>
		</div>
		<div class="w50">
			<img src="<?php the_field('imagem_sobre');  ?>">
		</div>
		<div class="clear"></div>
	</div>
	</section>

	<section class="sobre-imagens">
		<div class="center">
			<div class="img-sobre">
				<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/imagem-sobre.jpg" />
			</div>
			<div class="img-sobre">
				<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/imagem-sobre.jpg" />
			</div>
			<div class="img-sobre">
				<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/imagem-sobre.jpg" />
			</div>
			<div class="img-sobre">
				<img src="<?php echo get_theme_root_uri(); ?>/rr_theme/images/imagem-sobre.jpg" />
			</div>
		</div>
	</section>



<?php get_footer(); ?>