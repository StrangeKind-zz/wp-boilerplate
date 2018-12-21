<?php get_header(); ?>

<div class="main">
  <section class="header">
    <div class="header--bg" style="background-image: url('<?php echo get_the_post_thumbnail_url($post_id, 'full'); ?>');" data-parallax='{"y": 50, "smoothness": 10}'></div>
  </section>

  <div class="intro-comp">
    <div class="intro-comp--title grid">
      <h1><?php single_post_title(); ?></h1>
    </div>
  </div>

  <div class="content blog-single">
    <div class="grid--small">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>
  <?php endwhile; endif; ?>

  <a href="http://www.marjolijnvlug.nl/blogs"><button class="cta--primary">Terug naar blog</button></a>
</div>
</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
