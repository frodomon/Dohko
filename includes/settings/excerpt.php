<?php
	function custom_excerpt_length( $length ) {
  	return 50;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more($more) {
	  return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	//Funcion para limitar y filtrar el excerpt
	function dohko_custom_excerpt( $limit ){
		$extract = explode(' ', get_the_excerpt(), $limit);
		if (count($extract) >= $limit ){
			array_pop($extract);
			$extract = implode(' ', $extract) . '...';
		}
		else{
			$extract = implode(' ', $extract) ;
		}
		$extract = preg_replace('`\[[^\]]*\]`', '', $extract);
		return $extract;
	}

?>