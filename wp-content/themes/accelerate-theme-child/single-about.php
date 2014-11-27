<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * differenat template.
 *
 * @package WordPress
 * @subpackage Accelerate Theme
 * @since Accelerate Theme 1.1
 */
get_header(); ?>

<div id="primary" class="site-content">
  <div id="content" role="main">

  <?php while ( have_posts() ) : the_post();
    $content = get_field('content_strategy');
    $influencer = get_field('influencer_mapping');
    $social = get_field('social_media_strategy');
    $design = get_field('design_and_development')
    $size = "full";
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3');
    $image_4 = get_field('image_4');
  ?>

    <article class="about">
      <aside class="about-sidebar">

        <h2><?php the_title();?></h2>
        <h6><?php echo $service; ?></h6>
        <h6 id="client">Client: <?php echo $client; ?></h6>

        <?php the_content(); ?>

        <p><a href="<?php echo $link; ?>">Site Link</a></p>
      </aside>

      <div class="about-images">
        <?php if($image_1) {
          echo wp_get_attachment_image( $image_1, $size );
        } ?>

        <?php if($image_2) {
          echo wp_get_attachment_image( $image_2, $size );
        } ?>

        <?php if($image_3) {
          echo wp_get_attachment_image( $image_3, $size );
        } ?>

        <?php if($image_4) {
          echo wp_get_attachment_image( $image_4, $size );
        } ?>
      </div>
    </article>
  <?php endwhile; // end of the loop. ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
