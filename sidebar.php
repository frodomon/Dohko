<aside class="col-3 col-tab-2 col-mob-4 pad-bot-2x left">
	<?php
		if (is_active_sidebar('main-sidebar')){
			dynamic_sidebar('main-sidebar');
		} else{
			get_search_form();
		}   
	?>
</aside>