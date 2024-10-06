<?php //Template Name: Contact Page
	get_header();
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
?>
<section>
	<h1 class='pad-bot-4x'><?php the_title(); ?></h1>
	<div class='fullwidth pad-bot-4x group'>
		<div class='col-4 flex-center-row left'>		
			<table>
			  <tr>
			    <td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
			    <td>  Encuéntranos</td>
			  </tr>
			  <tr>
			    <td></td>
			    <td><?php if(isset($address_line_1)): ?><p><?php print $address_line_1; ?></p><?php endif; ?></td>
			  <tr>
			    <td></td>
			    <td><?php if(isset($address_line_2)): ?><p><?php print $address_line_2; ?></p><?php endif; ?></td>
			  </tr>
			</table>		
		</div>
		<div class='col-4 flex-center-row left'>
			<table>
			  <tr>
			    <td><i class="fa fa-phone" aria-hidden="true"></i></td>
			    <td> Llámanos</td>

			  </tr>
			  <tr>
			  	<td></td>
			  	<td><p><a href="tel:<?php print $mobile; ?>"> <?php print $mobile; ?></a></p></td>
			  </tr>
			</table>
		</div>
		<div class='col-4 flex-center-row left'>
			<table>
			  <tr>
			    <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
			    <td> Escríbenos</td>
			  </tr>
			  <tr>
			  	<td></td>
			  	<td><p><a href='mailto: <?php print $email; ?>'> <?php print $email; ?></a></p></td>
			  </tr>
			</table>
		</div>
	</div>
	<div class='working_days group'>
		<?php 
			$days = 0;
			if(!empty($working_days_1)){ $days += 1; }
			if(!empty($working_days_2)){ $days += 1; }
			if(!empty($working_days_3)){ $days += 1; }
			if(!empty($working_days_1)): ?>
			<div class='fullwidth group'>
				<h5 class="pad-bot"><i class="fa fa-map-marker" aria-hidden="true"></i> Visítanos</h5>
				<p class="pad-bot">Nuestro Horario de Atención es:</p>
				<div class='fullwidth group'>
					<?php if($days = 1){ ?>
						<div class='fullwidth left flex-center-row'>
					<?php } elseif($days = 2){ ?>
						<div class='col-6 col-mob-4 flex-center-row left'>
					<?php } elseif($days = 3){ ?>
						<div class='col-4 col-mob-4 flex-center-row left'>
					<?php } ?>
						<?php if(!empty($working_days_1)): ?><p><?php print $working_days_1; ?></p><?php endif; ?>
						<?php if(!empty($working_hours_1)): ?><p class="pad-bot"><?php print $working_hours_1; ?></p><?php endif; ?>
						</div>
					<?php if($days = 2){ ?>
						<div class='col-6 col-mob-4 flex-center-row left'>
					<?php } elseif($days = 3){ ?>
						<div class='col-4 col-mob-4 flex-center-row left'>
					<?php } ?>
						<?php if(!empty($working_days_2)): ?><p><?php print $working_days_2; ?></p><?php endif; ?>
						<?php if(!empty($working_hours_2)): ?><p class="pad-bot"><?php print $working_hours_2; ?></p><?php endif; ?>
						</div>
					<?php if(!empty($working_days_3)){ ?> 
						<div class='col-4 col-mob-4 flex-center-row left'>
							<?php if(!empty($working_days_3)): ?><p><?php print $working_days_3; ?></p><?php endif; ?>
							<?php if(!empty($working_hours_3)): ?><p><?php print $working_hours_3; ?></p><?php endif; ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<?php endif; ?>
	</div>
	<div class="fullwidth group">
		<div class='col-6 col-mob-4 left gmaps'>			
			<iframe class="gm" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6405979924034!2d-77.07896888600206!3d-12.068231145584065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c914fe661ed9%3A0xbab84830072d24be!2sEl+Tablero+de+Otto!5e0!3m2!1ses-419!2spe!4v1488544967431"  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class='col-6 col-mob-4 left contact-form'>
			<p class="pad-bot"><i class="fa fa-envelope" aria-hidden="true"></i> Escríbenos:</p>
			<p class="pad-bot">Para cualquier consulta que tengas sobre nuestros productos o servicios, no dude en dejarnos un mensaje. Nosotros responderemos en un plazo máximo de 12 horas.</p>
			<?php echo do_shortcode('[contact-form-7 id="12" title="Contacto"]'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>