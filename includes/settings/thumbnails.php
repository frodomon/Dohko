<?php
  function get_the_post_thumbnail_src($img){
	  return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
	}
?>