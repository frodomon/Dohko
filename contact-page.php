<?php //Template Name: Contact Page
get_header();  ?>
<section id="contact_us">
	<div class='contact-top'>
		<h1 class='page-title'><?php the_title(); ?></h1>
		<div id='contact-info' class='group'>
			<div class='contact-left col-xl-4 col-lg-4 col-md-4 col-12'>
				<?php 
						$address_line_1 = get_option('dohko_address_line_1');
						$address_line_2 = get_option('dohko_address_line_2');
						$address_line_3 = get_option('dohko_address_line_3');
				
					if($address_line_1): ?> 
						<div class='contact-address group'>
							<div class='contact-content'>
								<p class='negrita padding-abajo'><i class="fa fa-map-marker" aria-hidden="true"></i> Encuéntranos</p>
								<?php if($address_line_1): ?><p><?php print $address_line_1; ?></p><?php endif; ?>
								<?php if($address_line_2): ?><p><?php print $address_line_2; ?></p><?php endif; ?>
								<?php if($address_line_3): ?><p><?php print $address_line_3; ?></p><?php endif; ?>
							</div>
						</div>
					<?php endif; ?>
			</div>
			<div class='contact-center col-xl-4 col-lg-4 col-md-4 col-12'>
				<?php 
						$telephone = get_option('dohko_telephone');
						$mobile = get_option('dohko_mobile');
						$whatsapp = get_option('dohko_whatsapp');
					
						if($telephone ): ?> 
							<div class="contact-phone group">
								<div class='contact-content'>
									<p class="padding-abajo negrita"><i class="fa fa-phone" aria-hidden="true"></i> Llámanos:</p>
									<p><a href="tel:<?php print $telephone; ?>"><?php print $telephone; ?></a></p>
									<p><a href="tel:<?php print $mobile; ?>"><?php print $mobile; ?></a></p>
								</div>
							</div>
						<?php	endif; ?>
			</div>
			<div class='contact-right col-xl-4 col-lg-4 col-md-4 col-12'>
				<?php 
					$email = get_option('dohko_email');

					if($email): ?> 
							<div class="contact-email group">
								<div class='contact-content'>
									<p class="padding-abajo negrita"><i class="fa fa-envelope" aria-hidden="true"></i> Escríbenos:</p>
									<p><a href='<?php print $email; ?>'><?php print $email; ?></a></p>
								</div>
							</div>
					<?php endif; 	?>
			</div>
		</div>
		<div class='working_days group'>
			<?php 
					$working_days_1 = get_option('dohko_working_days_1');
					$working_days_2 = get_option('dohko_working_days_2');
					$working_days_3 = get_option('dohko_working_days_3');
					$working_hours_1 = get_option('dohko_working_hours_1');
					$working_hours_2 = get_option('dohko_working_hours_2');
					$working_hours_3 = get_option('dohko_working_hours_3');

					$days = 0;
					if($working_days_1){ $days += 1; }
					if($working_days_2){ $days += 1; }
					if($working_days_3){ $days += 1; }

					if($working_days_1): ?> 
						<div class='contact-working_days group'>
							<p class="padding-abajo negrita"><i class="fa fa-map-marker" aria-hidden="true"></i> Visítanos</p>
							<p class="padding-abajo">Nuestro Horario de Atención es:</p>
							<div class='working_hours group'>
								<?php if($days = 1){ ?>
									<div class='wh_left col-xl-12 col-lg-12 col-md-12 col-12'>
								<?php } elseif($days = 2){ ?>
									<div class='wh_left col-xl-6 col-lg-6 col-md-6 col-12'>
								<?php } elseif($days = 3){ ?>
									<div class='wh_left col-xl-4 col-lg-4 col-md-4 col-12'>
								<?php } ?>
										<?php if($working_days_1): ?><p><?php print $working_days_1; ?></p><?php endif; ?>
										<?php if($working_hours_1): ?><p class="padding-abajo"><?php print $working_hours_1; ?></p><?php endif; ?>
									</div>
								<?php if($working_days_2){ 
									if($days = 2){ ?>
										<div class='wh_center col-xl-6 col-lg-6 col-md-6 col-12'>
									<?php } elseif($days = 3){ ?>
										<div class='wh_center col-xl-4 col-lg-4 col-md-4 col-12'>
									<?php } ?>
											<?php if($working_days_2): ?><p><?php print $working_days_2; ?></p><?php endif; ?>
											<?php if($working_hours_2): ?><p class="padding-abajo"><?php print $working_hours_2; ?></p><?php endif; ?>
										</div>
								<?php } ?>
								<?php if($working_days_3){ ?> 
									<div class='wh_right col-xl-4 col-lg-4 col-md-4 col-12'>
										<?php if($working_days_3): ?><p><?php print $working_days_3; ?></p><?php endif; ?>
										<?php if($working_hours_3): ?><p><?php print $working_hours_3; ?></p><?php endif; ?>
									</div>
								<?php } ?>
							</div>
						</div>
				<?php endif; ?>
		</div>
	</div>
	<div class="contact-middle group">
		<div class='gmaps'>			
			<iframe class="gm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6405979924034!2d-77.07896888600206!3d-12.068231145584065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c914fe661ed9%3A0xbab84830072d24be!2sEl+Tablero+de+Otto!5e0!3m2!1ses-419!2spe!4v1488544967431"  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class='contact-form'>
			<p class="padding-abajo negrita"><i class="fa fa-envelope" aria-hidden="true"></i> Escríbenos:</p>
			<p class="padding-abajo no-margin negrita">Para cualquier consulta que tengas sobre nuestros productos o servicios, no dude en dejarnos un mensaje. Nosotros responderemos en un plazo máximo de 12 horas.</p>
			<?php echo do_shortcode('[contact-form-7 id="210" title="Formulario de contacto 1"]'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>