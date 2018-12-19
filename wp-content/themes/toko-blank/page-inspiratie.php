<?php /* Template Name: Inspiratie */ ?>
<?php get_header(); ?>
<div class="main">
  <section class="header">
    <div class="header--bg" style="background-image: url('<?php the_field('image_header_coaching'); ?>');" data-parallax='{"y": 50, "smoothness": 10}'></div>
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
      <section class="preview no-before animated plx-1">
        <div class="grid inners">
          <div class="col-md-5 col-md-offset-1 center">
            <img src="../wp-content/themes/toko-blank/src/img/assets/logo.png">
          </div>
          <div class="col-md-6">
            <h2><?php the_field('section_subtitle_wib'); ?></h2>
            <p><?php the_field('section_paragraph_wib'); ?></p>
            <button class="cta--primary">Lees meer</button>
          </div>
        </div>
      </section>

      <section class="wide-show animated plx-1">
        <h1>Podcasts</h1>
        <?php query_posts('showposts=1&category_name=podcasts'); ?>
        <div class="col-md-6 col-md-offset-3">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
          <h2><?php echo get_the_title( $post_id ); ?></h2>
          <p><?php the_content() ?></p>
          <div class="episode-block">
            <h4><?php the_field('seizoen'); ?>: <span><?php the_field('aflevering_naam'); ?></span></h4>
          </div>
        </a>
        <?php endwhile; endif; ?>
        </div>
        <?php wp_reset_query(); ?>
      </section>

      <section class="video-comp">
        <h1>Videos</h1>
        <?php query_posts('showposts=3&category_name=videos'); ?>
        <div class="grid">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
          <div class="col-md-4 animated plx">
            <div class="thumb-photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'medium-large'); ?>')"></div>
            <h2><?php echo get_the_title( $post_id ); ?></h2>
            <p><?php the_content() ?></p>
          </div>
        </a>
        <?php endwhile; endif; ?>
        </div>
        <?php wp_reset_query(); ?>
      </section>
     </div>

     <section class="pic-element pic-element-large" style="background-image: url('<?php the_field('image_divider_coaching'); ?>'); ?');">
     </section>

    </div>
  </div>

 </div>
 <?php get_footer(); ?>
