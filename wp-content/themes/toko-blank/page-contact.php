<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<div class="main">
  <section class="header">
    <div class="header--bg" style="background-image: url('<?php the_field('image_header_coaching'); ?>');" data-parallax='{"y": 50, "smoothness": 180}'></div>
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

    </div>
  </div>

   <section class="pic-element pic-element-large" style="background-image: url('<?php the_field('image_divider_coaching'); ?>'); ?');">
   </section>



 </div>
 <?php get_footer(); ?>
