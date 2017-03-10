<?php // Global Options
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$facebook = get_field('facebook_url', 'option');
$twitter = get_field('twitter_url', 'option');
$youtube = get_field('youtube_url', 'option');
$linkedin = get_field('linkedin_url', 'option');
$googleplus = get_field('googleplus_url', 'option');
$instagram = get_field('instagram_url', 'option');
?>


<footer id="footer">
  <div id="footer-upper">
    <div class="container">
      <div class="row">
      
        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
          <?php endif; ?>
          
          <?php // ACF global options: Contact Info ?>
          <ul class="footer-contact">
         		<?php if ($phone) { ?>
              <li> <i class="fa fa-phone"></i> <?= $phone ?></li>
            <?php } ?>
          	
						<?php if ($email) { ?>
              <li><a href="mailto:<?= $email ?>" target="_blank"><i class="fa fa-envelope"></i> <?= $email ?></a></li>
            <?php } ?>
          </ul>
          
          <?php // ACF global options: Social Icons ?>
          <ul class="social-links">
            <?php if ($facebook) { ?>
              <li class="facebook"> <a href="<?= $facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <?php } ?>
           
           	<?php if ($twitter) { ?>
              <li class="twitter"> <a href="<?= $twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <?php } ?>
            
            <?php if ($youtube) { ?>
              <li class="youtube"> <a href="<?= $youtube ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <?php } ?>
            
            <?php if ($linkedin) { ?>
              <li class="linkedin"> <a href="<?= $linkedin ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <?php } ?>
            
            <?php if ($googleplus) { ?>
              <li class="googleplus"><a href="<?= $googleplus ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <?php } ?>

            <?php if ($instagram) { ?>
              <li class="instagram"><a href="<?= $instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <?php } ?>
          </ul>
        </div> <!-- /col -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
          <?php endif; ?>
        </div> <!-- /col -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
          <?php endif; ?>
        </div> <!-- /col -->

        <div class="col-sm-6 col-md-3">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-4') ) : ?>
          <?php endif; ?>
        </div> <!-- /col -->

      </div> <!-- /row -->
    </div><!-- /container -->
  </div> <!-- /footer-upper -->

  <div id="sub-floor">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          Boiler theme by <a target="_blank" href="https://dd9.com">DD9</a> - <a href="/assets">Assets</a> - <a href="/wp-admin">Admin Login</a> -  &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>  <a class="site-credit" title="Website Design and Development by DD9.com" target="_blank" href="http://dd9.com">Website by DD9</a>
        </div> <!-- /col -->
      </div> <!-- /row -->
    </div> <!-- /container -->
  </div> <!-- /sub-floor -->

</footer> <!-- /footer -->

<?php  #all js scripts are loaded in library/bones.php ?>
<?php wp_footer(); ?>
    
</body>
</html>