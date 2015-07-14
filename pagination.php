<?php if (function_exists("emm_paginate")) { ?>
	<?php emm_paginate(); ?>
<?php } else { ?>
  <nav class="wp-prev-next">
    <ul class="clearfix">
      <li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
      <li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
    </ul>
  </nav>
<?php } ?>