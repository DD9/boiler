<footer id="footer" class="clearfix">
  <div id="footer-widgets">

    <div class="container">

    <div id="footer-wrapper">

      <div class="row">
        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
          <?php endif; ?>
        </div> <!-- end widget1 -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
          <?php endif; ?>
        </div> <!-- end widget1 -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
          <?php endif; ?>
        </div> <!-- end widget1 -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
          <?php endif; ?>
        </div> <!-- end widget1 -->

      </div> <!-- end .row -->

    </div> <!-- end #footer-wrapper -->

    </div> <!-- end .container -->
  </div> <!-- end #footer-widgets -->

  <div id="sub-floor">
    <div class="container">
      <div class="row">
        <div class="col-md-4 copyright">
          &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>  <a class="site-credit" title="Website Design and Development by DD9.com" target="_blank" href="http://dd9.com">Website by DD9</a>
        </div>
        <div class="col-md-4 col-md-offset-4 attribution">
          Boiler theme by <a target="_blank" href="http://dd9.com">DD9</a> - <a href="/assets">Assets</a> - <a href="/wp-admin">Admin Login</a>
        </div>
      </div> <!-- end .row -->
    </div>
  </div>

</footer> <!-- end footer -->

<?php  #all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>
    
  </body>
</html>