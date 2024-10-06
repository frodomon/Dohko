<?php //Template Name: Products Page
get_header();  ?>
<section>
	<h1 class="pad-bot-4x">Productos</h1>
	<div class="fullwidth group">
		<?php $url = home_url( '/' ); ?>
		<div class="col-3 col-tab-2 col-mob-4 left">
			<a href="<?php echo $url.'productos/pokemon' ?>" title="Pokémon">
				<img src="<?php print IMAGES.'/Pokemon TCG.png' ?>" alt="Pokémon"/>
			</a>
		</div>
		<div class="col-3 col-tab-2 col-mob-4 left">
			<a href="<?php echo $url.'productos/magic' ?>" title="Magic">
				<img src="<?php print IMAGES.'/Magic.png' ?>" alt="Magic"/>
			</a>
		</div>
		<div class="col-3 col-tab-2 col-mob-4 left">
			<a href="<?php echo $url.'productos/juegos-de-mesa' ?>" title="Juegos de Mesa">
				<img src="<?php print IMAGES.'/JuegosdeMesa.png' ?>" alt="Juegos de Mesa"/>
			</a>
		</div>
		<div class="col-3 col-tab-2 col-mob-4 left">
			<a href="<?php echo $url.'productos/accesorios' ?>" title="Accesorios">
				<img src="<?php print IMAGES.'/Accesorios.png' ?>" alt="Accesorios"/>
			</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>