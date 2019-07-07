<footer class="page-footer">

  <?php $the_query = new WP_Query(
    array(
      'post_type' => 'footers',
      'post_status'=>'publish',
      'posts_per_page' => -1
    ));
  ?>

  <?php if( $the_query->have_posts() ): ?>
  <div class="container">
    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="row">
      <div class="col-lg-7">
        <p>
          <?php the_content(); ?>
        </p>
      </div>
      <div class="col-lg-5">
        <a href="" class="btn btn-red"><img src="<?php echo get_template_directory_uri(); ?>/img/JNK_plane.svg" alt="stay in contact" class="btn-red__icon"/><?php the_field('footer_contact_button'); ?></a>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
