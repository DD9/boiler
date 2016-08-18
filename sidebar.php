
<?php if ( is_active_sidebar( 'sidebar_blog_mobile' ) ) { ?>
<div id="sidebar-mobile" class="col-md-4">
  <?php dynamic_sidebar( 'sidebar_blog_mobile' ); ?>
</div><!-- /sidebar.col -->
<?php } ?>

<div id="sidebar" class="sidebar-blog col-md-4">

  <?php if ( is_active_sidebar( 'sidebar_blog' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar_blog' ); ?>
  <?php else : ?>

    <!-- This content shows up if there are no widgets defined in the backend. -->

    <div class="alert alert-danger">
      <p><?php _e( 'Please activate some Widgets.', 'bonestheme' );  ?></p>
    </div>

  <?php endif; ?>

</div><!-- /sidebar.col -->