	<?php 
		// Obteniendo enlaces del customizer
		$social = get_theme_mod('dohko_social_settings');
    if ( !empty($social['facebook']) ) { $facebook = $social['facebook'];}
    if ( !empty($social['instagram']) ) { $instagram = $social['instagram'];}
    if ( !empty($social['youtube']) ) { $youtube = $social['youtube'];}
    if ( !empty($social['linkedin']) ) { $linkedin = $social['linkedin'];}
    if ( !empty($social['twitter']) ) { $twitter = $social['twitter'];}
    if ( !empty($social['whatsapp']) ) { $whatsapp = $social['whatsapp'];}
    if ( !empty($social['pinterest']) ) { $pinterest = $social['pinterest'];}
    if ( !empty($social['googleplus']) ) { $googleplus = $social['googleplus'];} 
    if ( !empty($social['discord']) ) { $discord = $social['discord'];}
    if ( !empty($social['twitch']) ) { $twitch = $social['twitch'];}
    $business = get_theme_mod('dohko_business_settings');
    if ( !empty($business['address_l1']) ) { $address_line_1 = $business['address_l1'];}
    if ( !empty($business['address_l2']) ) { $address_line_2 = $business['address_l2'];}
    if ( !empty($business['telephone']) ) { $telephone = $business['telephone'];}
    if ( !empty($business['mobile']) ) { $mobile = $business['mobile'];}
    if ( !empty($business['email']) ) { $email = $business['email'];}
    if ( !empty($business['work_days_1']) ) { $working_days_1 = $business['work_days_1'];}
    if ( !empty($business['work_hours_1']) ) { $working_hours_1 = $business['work_hours_1'];}
    if ( !empty($business['work_days_2']) ) { $working_days_2 = $business['work_days_2'];}
    if ( !empty($business['work_hours_2']) ) { $working_hours_2 = $business['work_hours_2'];}
    if ( !empty($business['work_days_3']) ) { $working_days_3 = $business['work_days_3'];}
    if ( !empty($business['work_hours_3']) ) { $working_hours_3 = $business['work_hours_3'];}
    if ( !empty($business['gmaps']) ) { $gmaps = $business['gmaps'];}
    $brand = get_theme_mod('dohko_brand_settings');
    if ( !empty($brand['logo_footer']) ) { $logo_footer = $brand['logo_footer'];}
    else { $logo_footer = IMAGES.'/dohko logo inv.png';}
	?>
<div class="follow-ig fullwidth flex-center-row pad-bot-2x">
		<p>Síguenos en Instagram  <a  href="<?php print $instagram; ?>" target="_blank">@eltablerodeotto</a></p>
</div>
<div>
	<?php echo do_shortcode('[instagram-feed]'); ?>
</div>
<footer>
	<div class="footer-top group">
		<div class="col-3 col-mob-4 col-tab-4 float-footer-l flex-top-row fullheight flex-center-row">
			<div class="fullwidth flex-center-row pad-bot">
				<img id="footer-logo" src="<?php echo $logo_footer ?>">
			</div>
			<div class="fullwidth flex-center-row pad-bot">
				<?php if(isset($facebook)): ?><a class='social' href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fa fa-facebook footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($instagram)): ?><a class='social' href="<?php echo esc_url($instagram); ?>" target="_blank"><i class="fa fa-instagram footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($youtube)): ?><a class='social' href="<?php echo  esc_url($youtube); ?>" target="_blank"><i class="fa fa-youtube footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($linkedin)): ?><a class='social' href="<?php echo  esc_url($linkedin); ?>" target="_blank"><i class="fa fa-linkedin footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($twitter)): ?><a class='social' href="<?php echo  esc_url($twitter); ?>" target="_blank"><i class="fa fa-twitter footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($whatsapp)): ?><a class='social' href="https://wa.me/51<?php print $whatsapp; ?>" target="_blank"><i class="fa fa-whatsapp footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($pinterest)): ?><a class='social' href="<?php echo  esc_url($pinterest); ?>" target="_blank"><i class="fa fa-pinterest footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($googleplus)): ?><a class='social' href="<?php echo esc_url($googleplus); ?>" target="_blank"><i class="fa fa-google-plus-official footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($discord)): ?><a class='social' href="<?php echo esc_url($discord); ?>" target="_blank"><i class="fab fa-discord footer_icon" aria-hidden="true"></i></a><?php endif; ?>
				<?php if(isset($twitch)): ?><a class='social' href="<?php echo  esc_url($twitch); ?>" target="_blank"><i class="fa fa-twitch footer_icon" aria-hidden="true"></i></a><?php endif; ?>
			</div>
			<?php if($address_line_1): ?> 
			<div class='fullwidth flex-center-row pad-bot'>
				<table>
				  <tr>
				    <td><i class="fa fa-map-marker table_icon" aria-hidden="true"></i></td>
				    <td><?php if(isset($address_line_1)): ?><p><a href="<?php print $gmaps; ?>" target='_blank'><?php print $address_line_1; ?></a></p><?php endif; ?></td>
				  </tr>
				  <tr>
				    <td></td>
				    <td><?php if(isset($address_line_2)): ?><p><a href="<?php print $gmaps; ?>" target='_blank'><?php print $address_line_2; ?></a></p><?php endif; ?></td>
				  </tr>
				</table>
			</div>
			<?php endif; ?>
			<?php if(isset($telephone )): ?> 
			<div class="ffullwidth flex-center-row pad-bot">
				<table>
				  <tr>
				    <td><i class="fa fa-phone table_icon" aria-hidden="true"></i></td>
				    <td><p><a href="tel:<?php print $telephone; ?>"> <?php print $telephone; ?></a></p></td>
				  </tr>
				</table>
			</div>
			<?php
			endif;
			if(isset($mobile)): ?> 
			<div class="fullwidth flex-center-row pad-bot">
				<table>
				  <tr>
				    <td><i class="fa fa-mobile table_icon" aria-hidden="true"></td>
				    <td><p><a href="tel:<?php print $mobile; ?>"><?php print $mobile; ?></a></p></td>
				  </tr>
				</table>
			</div>
			<?php endif; ?> 
			<?php if(isset($email)): ?> 
				<div class="fullwidth flex-center-row pad-bot">
					<table>
					  <tr>
					    <td><i class="fa fa-envelope table_icon" aria-hidden="true"></i></td>
					    <td><p><a href='mailto: <?php print $email; ?>'> <?php print $email; ?></a></p></td>
					  </tr>
					</table>
				</div>
			<?php endif; 	?>
			<?php if(isset($working_days_1)): ?> 
				<div class='fullwidth flex-center-row pad-bot'>
					<table>
					  <tr>
					    <td><i class="fa fa-clock-o table_icon" aria-hidden="true"></i></td>
					    <td><p>Horario de atención</p></td>
					  </tr>
					</table>
				</div>
				<div class='fullwidth flex-center-col pad-bot aligncenter'>
					<?php if(isset($working_days_1)): ?><p><?php print $working_days_1; ?></p><?php endif; ?>
					<?php if(isset($working_hours_1)): ?><p><?php print $working_hours_1; ?></p><?php endif; ?>
				</div>
				<div class='fullwidth flex-center-col pad-bot aligncenter'>
					<?php if(isset($working_days_2)): ?><p><?php print $working_days_2; ?></p><?php endif; ?>
					<?php if(isset($working_hours_2)): ?><p><?php print $working_hours_2; ?></p><?php endif; ?>
				</div>
				<div class='fullwidth flex-center-col pad-bot aligncenter'>
					<?php if(isset($working_days_3)): ?><p><?php print $working_days_3; ?></p><?php endif; ?>
					<?php if(isset($working_hours_3)): ?><p><?php print $working_hours_3; ?></p><?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
		<div class='col-3 col-mob-4 col-tab-4 float-footer-r flex-top-row flex-center-row'>
			<div class="mailchimp">
				<?php echo do_shortcode('[mc4wp_form id="1755"]'); ?>
			</div>
		</div>
		<div class="col-3 col-mob-4 col-tab-4 float-footer-l footer-menu flex-top-row fullheight flex-center-row">
			<?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
		</div>
		<div class="col-3 col-mob-4 col-tab-4 float-footer-r footer-menu flex-top-row fullheight flex-center-row">
			<div>
				<div class="fullwidth pad-bot">
					<h4>Compra segura</h4>
					<p>Paga con tu tarjeta de débito o crédito</p>	
				</div>
				
				<div class="fullwidth flex-left-row pad-bot">
					<i class="fa fa-cc-visa footer_icon" aria-hidden="true"></i>
					<i class="fa fa-cc-mastercard footer_icon" aria-hidden="true"></i>
					<i class="fa fa-cc-amex footer_icon" aria-hidden="true"></i>
					<i class="fa fa-cc-paypal footer_icon" aria-hidden="true"></i>
				</div>
			</div>	
		</div>
		
		
	</div>
	<div class='footer-bottom fullwidth group'>
		<div class='col-6 col-mob-4 left'>
			<p class='copyright alignleft'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
		</div>
		<div class='col-6 col-mob-4 left'>
			<p class='copyright alignright'>Desarrollado por <a href='https://www.alfredovasquezalcala.com' title='Alfredo Vásquez' target="_blank">Alfredo Vásquez</a></p>
		</div>		
	</div>	
</footer>
<!-- End Footer Information -->
<?php wp_footer(); ?>  
</body>
</html>