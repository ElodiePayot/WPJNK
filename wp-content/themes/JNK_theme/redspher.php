<?php
/*
  Template Name: project_details
*/
 ?>

<?php get_header(); ?>

  <section class="project__heading --redspher section__after">
    <div class="container">
      <a href="index.html" class="home-link"><img src="<?php echo get_template_directory_uri(); ?>/img/JNK_arrow.svg" class="mr-2"/> Back to home</a>

      <?php $the_query = new WP_Query(
        array(
          'post_type' => 'project_headings',
          'post_status'=>'publish',
          'posts_per_page' => 1
        ));
      ?>

      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <h1 class="projects-page"><?php echo str_replace(' / ', '<br />', get_the_title()); ?></h1>
      <div class="row">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/img/JNK_bluemap.svg" alt="Redspher" />
          <p><?php the_field('project_name') ?></p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/JNK_bluecalendar.svg" alt="Calendar" class="pl-5"/>
          <p><?php the_field('project_date') ?></p>
        </div>
      </div>

    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
  </section>


  <section class="project-redspher__section1 section__after section__before">
    <?php $the_query = new WP_Query(
      array(
        'post_type' => 'project_descriptions',
        'post_status'=>'publish',
        'posts_per_page' => -1
      ));
    ?>

    <?php if( $the_query->have_posts() ): ?>

    <div class="container">

      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="row">
        <div class="col-md-6">
          <p><?php the_content(); ?></p>
        </div>
        <div class="col-md-6">
          <?php $image = wp_get_attachment_image_src(get_field('project_description_image'), 'full'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="project-redspher__section1--img"/>
        </div>
      </div>
      <?php endwhile; ?>
    </div>

  <?php endif; ?>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </section>

  <section class="project-redspher__section2 section__after">
    <?php $the_query = new WP_Query(
      array(
        'post_type' => 'project_quotes',
        'post_status'=>'publish',
        'posts_per_page' => -1
      ));
    ?>

    <?php if( $the_query->have_posts() ): ?>

    <div class="container">
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="row">
        <div class="col-md-6">
          <?php $image = wp_get_attachment_image_src(get_field('project_quote_image'), 'full'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="project-redspher__section2--img"/>
        </div>
        <div class="col-md-6">
          <p>
           <?php the_content(); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </section>

<?php get_footer(); ?>
