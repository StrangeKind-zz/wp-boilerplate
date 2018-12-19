<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<div class="main">
   <section class="header">
     <div class="header--bg" style="background-image: url('<?php the_field('content_header'); ?>');" data-parallax='{"y": 50, "smoothness": 10}'></div>
   </section>

   <div class="intro-comp">
     <div class="intro-comp--title grid">
       <h1><?php single_post_title(); ?></h1>
     </div>
   </div>
   <div class="content">
     <div class="grid">
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
     </div>
   </div>

   <div class="photo-section photo-section-overlap-white" style="background-image: url('<?php the_field('content_full_image'); ?>');"></div>

   <div class="content">
     <div class="grid">
       <?php the_field('content_field'); ?>
     </div>
   </div>

    <div class="photo-section" style="background-image: url('<?php the_field('footer_full_image'); ?>');">
      <div class="photo-section--caption">
        <div class="col-md-5 col-md-offset-1 text-right">
          <h3><?php the_field('closer_title'); ?><span></span></h3>
        </div>
        <div class="col-md-5">
          <p><?php the_field('closer_text'); ?></p>
        </div>
        <div class="col-md-12 text-center">
          <button class="cta--primary white darken">Ik wil aan de slag</button>
        </div>
      </div>
    </div>

</div>
 <?php get_footer(); ?>
