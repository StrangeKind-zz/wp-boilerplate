<?php /* Template Name: Blogs */ ?>
<?php get_header(); ?>
<div class="main">
  <section class="header">
    <div class="header--bg" style="background-image: url('<?php the_field('image_header_coaching'); ?>');" data-parallax='{"y": 100, "smoothness": 10}'></div>
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

       <?php query_posts('showposts=300&category_name=blogs'); ?>
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <div class="post-card animated plx">
           <div class="post-card--photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'medium-large'); ?>')"></div>
           <div class="post-card--text">
             <h2><?php echo get_the_title( $post_id ); ?></h2>
             <p><?php the_excerpt() ?></p>
             <a href="<?php the_permalink(); ?>"><button class="cta--primary">Lees meer</button></a>
           </div>
         </div>
       <?php endwhile; endif; ?>
       </div>
       <?php wp_reset_query(); ?>

     </div>
   </div>

    </div>
  </div>

   <section class="pic-element pic-element-large" style="background-image: url('<?php the_field('image_divider_coaching'); ?>'); ?');">
   </section>



 </div>
 <?php get_footer(); ?>
