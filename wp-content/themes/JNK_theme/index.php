<?php get_header(); ?>

<main>
  <section class="section--heading section__after">
    <div class="container">
      <?php $the_query = new WP_Query(
        array(
          'post_type' => 'headings',
          'post_status'=>'publish',
          'posts_per_page' => 1
        ));
      ?>

      <?php if( $the_query->have_posts() ): ?>
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <?php
          $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        ?>


      <p class="h1__subtitle--mobile"><?php the_field('mobile_user_msg'); ?></p>
      <h1 class="homepage"><?php the_title(); ?></h1>
      <div class="h1__icon" id="h1Icon">
        <img src="<?php echo $image[0]; ?>" alt="identity checked"/>
        <div class="h1___icon--hover" id="h1IconHover">
          <span><?php the_field('heading_img_hover'); ?></span>
        </div>
      </div>
      <h2 class="h1__subtitle"><?php the_field('heading_subtitle'); ?></h2>
      <p class="section--heading__p">
        <?php the_content(); ?>
      </p>
      <div class="row">
        <div class="col col-lg-3 col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/JNK_map.svg" alt="Luxembourg" />
          <p><?php the_field('heading_location'); ?></p>
        </div>
        <div class="col col-lg-3 col-6">
          <img src="<?php echo get_template_directory_uri(); ?>/img/JNK_link.svg" alt="link" />
          <a id="restartConfetti"><?php the_field('heading_confetti'); ?></a>
        </div>
      </div>
      <div class="row row--2">
        <div class="col">
          <img src="<?php echo get_template_directory_uri(); ?>/img/JNK_calendar.svg" alt="Calendar" />
          <p><?php the_field('heading_birthday'); ?></p>
        </div>
      </div>
      <a href="" class="JNK__link"><?php the_field('heading_rapid_link'); ?></a>
    <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
    </div>
  </section>

  <section class="section--about section__after">
    <div class="container">
      <?php query_posts('category_name=about&posts_per_page=1');
        while ( have_posts() ) : the_post(); ?>
        <h2><?php echo str_replace(' / ', '<br />', get_the_title()); ?></h2> <!--titre de l'article-->

      <div class="row">
        <div class="col-lg-4 section--about__col--left">
          <p>
            <?php the_content(); ?>

          </p>
        </div>
      <?php endwhile;wp_reset_query(); ?>

      <?php $the_query = new WP_Query(
        array(
          'post_type' => 'abouts',
          'post_status'=>'publish',
          'posts_per_page' => -1
        ));
      ?>

      <?php if( $the_query->have_posts() ): ?>

        <div class="col-lg-8">
          <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            ?>
          <div class="card about--card">
            <div class="row no-gutters">
              <div class="col-1 about--card__img">
                <img src="<?php echo $image[0]; ?>" class="card-img" alt="<?php the_title(); ?>">
              </div>
              <div class="col-11">
                <div class="card-body">
                  <p class="about--card__subtitle"><?php the_field('card_year'); ?></p>
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php the_field('card_text'); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

        </div>
      </div>
    </div>
  </section>

  <section class="section--projects section__after">

    <?php $the_query = new WP_Query(
      array(
        'post_type' => 'projects',
        'post_status'=>'publish',
        'posts_per_page' => -1
      ));
    ?>

    <?php if( $the_query->have_posts() ): ?>
    <?php $i=0 ?>
    <div class="container">
      <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <a href="<?php the_field('project_url'); ?>" class="row">
        <div class="col-md-4">
          <div class="card project--card">
            <div class="card-body">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <p class="card-text"><?php the_content(); ?></p>
              <span class="JNK__link"><?php the_field('project_button'); ?></span>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card__bg-color card-<?php echo $i ?>">

            <?php $image = wp_get_attachment_image_src(get_field('project_image'), 'full'); ?>

            <style>
              .card-<?php echo $i ?>:after{
                  background-image: url('<?php echo $image[0]; ?>');
              }
            </style>
          </div>
        </div>
      </a>


      <?php $i++; ?>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

      <div class="text-align-center">
        <a href="<?php the_permalink('92') ?>" class="JNK__link">More projects</a>
      </div>

    </div>
  </section>


</main>

<?php get_footer(); ?>
