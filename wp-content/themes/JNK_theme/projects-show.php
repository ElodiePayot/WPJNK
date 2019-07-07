<?php
/*
  Template Name: project_showpage
*/
 ?>

<?php get_header(); ?>

  <section class="project__heading --project-page section__after">
    <div class="container">
      <a href="index.html" class="home-link"><img src="<?php echo get_template_directory_uri(); ?>/img/JNK_arrow.svg" class="mr-2"/> Back to home</a>

      <?php query_posts('category_name=projectshowpage&posts_per_page=1');
        while ( have_posts() ) : the_post(); ?>
      <h1 class="projects-page"><?php echo str_replace(' / ', '<br />', get_the_title()); ?></h1>
        <?php endwhile;wp_reset_query(); ?>
    </div>
  </section>

  <section class="project-page_grid section__after" id="projectSection1">

    <div class="container" id="projectGrid">
      <?php $the_query = new WP_Query(
        array(
          'post_type' => 'project_cards',
          'post_status'=>'publish',
          'posts_per_page' => -1
        ));
      ?>

      <?php if( $the_query->have_posts() ): ?>


      <div class="row row-project-grid">
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php $image = wp_get_attachment_image_src(get_field('project_show_card'), 'full'); ?>
        <a href="<?php the_field('project_link'); ?>" class="project-grid-card" style="background-image:url('<?php echo $image[0]; ?>')">
        </a>
        <?php endwhile; ?>
      </div>

    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>

  </section>

  <section class="project-page_grid-2 section__after" id="projectSection2">

  </section>

<?php get_footer(); ?>
