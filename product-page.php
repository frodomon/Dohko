<?php //Template Name: Product Page
	get_header();  
	$gameline = get_the_title();
	$social = get_theme_mod('dohko_social_settings');
	if ( !empty($social['whatsapp']) ) { $whatsapp = $social['whatsapp'];}
?>
	<section id="products" class="group">
		<h1 class="pad-bot-4x">Productos - <?php echo $gameline; ?></h1>
		<div class="fullwidth pad-bot-4x group">
			<?php 
      	$products= query_posts(array(
        	'post_type' => 'products',
        	'order'=>'ASC',
        	'posts_per_page' => '120',
        	'tax_query' => array(
        		array(
        			'taxonomy' => 'gamelines',
        			'field' => 'slug',
        			'limit' => '120',
        			'terms' => $gameline
        		))
        ));
      	foreach ($products as $product) :  setup_postdata($product); 
	      	$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($product->ID) ); 
	      	$custom = get_post_custom($product->ID);
	      	$name = get_the_title($product->ID);
	    		if (isset($custom['shortname'])) { $shortname = $custom["shortname"][0];}
	    		if (isset($custom['description'])) {$description = $custom["description"][0];}
	    		if (isset($custom['preciofull'])) {$preciofull = $custom["preciofull"][0];}
	    		if (isset($custom['precioprevta'])) {$precioprevta = $custom["precioprevta"][0];}
	    		if (isset($custom['preciooferta'])) {$preciooferta = $custom["preciooferta"][0];}
	      ?>
	      <div id='product' class="col-3 col-tab-2 col-mob-4 pad-bot-2x left">
		      <div class="product">
		      	<div class="thumbnail">
							<img src="<?php echo $post_thumbnail_url; ?>" /> 
						</div>      		
		    		<div class="product-description pad-bot-2x">
		    			<div class='fullwidth'>
		    				<h4 class='pad-bot-2x'><?php echo $name; ?></h4>
		    			</div>
		    			<div class='fullwidth group'>
		    				<?php if( !empty($preciooferta) || !empty($precioprevta)){ ?>
		        			<div class='col-6 left alignleft'>
		    						<p class='full old' style='text-decoration: line-through;'>S/ <?php echo $preciofull; ?></p>
		    					</div>
		    					<div class='col-6 left alignright'>
		    						<?php 
		    							if (!empty($preciooferta)){ ?><p class='offer'><strong>S/ <?php echo $preciooferta; ?></strong></p><?php }
			        				if (!empty($precioprevta)){ ?><p class='presale'><strong>S/ <?php echo $precioprevta; ?></strong></p><?php }	
			        			?>
		    					</div>
			        	<?php } else { ?>
			    				<div class='col-6 left alignleft'></div>
			    				<div class='col-6 right alignright'>
			    					<p class='pad-bot full'>S/ <?php echo $preciofull; ?></p>
			    				</div>
			    			<?php } ?>
		    			</div>
		    			<div class="fullwidth group">
		    				<div class='col-6 left'></div>
		    				<div class='col-6 right alignright'>
		    					<?php 
		    						if( !empty($preciooferta) || !empty($precioprevta)){
		    							if (!empty($preciooferta)){ $dscto = ($preciofull - $preciooferta) / $preciofull*100;}
		    							if (!empty($precioprevta)){ $dscto = ($preciofull - $precioprevta) / $preciofull*100;} ?>
		    							<p class='dscto'><?php echo round($dscto,2); ?>%</p>
		    					<?php	} ?>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
	      </div>
    <?php 
    	$preciooferta = null;
    	$precioprevta = null;
	  	endforeach;  
	    wp_reset_postdata(); ?>
			</div>
			<div class="fullwidth flex-center-row">
				<div class='col-2 col-mob-2 col-tab-2 left'>
					<a href= '<?php echo esc_url("https://www.eltablerodeotto.com/productos/"); ?>'><p class='back_btn aligncenter'>Regresar</p></a>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>
