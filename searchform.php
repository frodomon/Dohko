<form id='searchform' class="group" name="search" method="get" action="<?php echo home_url('/'); ?>" role="search">
	<input type="search" id='search_text' name="s" placeholder="Buscar" value="<?php the_search_query(); ?>">
	<button id='search_submit' class='no-padding' type="submit" name="submit">
  	<i class="fa fa-search header_icon" aria-hidden="true"></i>
  </button>	
</form>