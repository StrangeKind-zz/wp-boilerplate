<?php /* Template Name: HR-Coaching */ ?>
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

     <div class="panel-group" id="accordion">
         <div class="panel panel-default">
             <div class="panel-heading active">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><?php the_field('coaching_accordion_1_title'); ?></a>
                 </h4>
             </div>
             <div id="collapseOne" class="panel-collapse collapse in">
               <div class="panel-body">
                   <p><?php the_field('coaching_accordion_1_text_field'); ?>
                  </p>
                  <a href="#" class="cta--primary"><?php the_field('coaching_accordion_1_button'); ?></a>
               </div>
             </div>
         </div>
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><?php the_field('coaching_accordion_2_title'); ?></a>
                 </h4>
             </div>
             <div id="collapseTwo" class="panel-collapse collapse">
               <div class="panel-body">
                   <p><?php the_field('coaching_accordion_2_text_field'); ?>
                  </p>
                  <a href="#" class="cta--primary"><?php the_field('coaching_accordion_2_button'); ?></a>
               </div>
             </div>
         </div>
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><?php the_field('coaching_accordion_3_title'); ?></a>
                 </h4>
             </div>
             <div id="collapseThree" class="panel-collapse collapse">
               <div class="panel-body">
                   <p><?php the_field('coaching_accordion_3_text_field'); ?>
                  </p>
                  <a href="#" class="cta--primary"><?php the_field('coaching_accordion_3_button'); ?></a>
               </div>
             </div>
             </div>
         </div>
         <div class="panel panel-default">
             <div class="panel-heading">
                 <h4 class="panel-title">
                     <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><?php the_field('coaching_accordion_4_title'); ?></a>
                 </h4>
             </div>
             <div id="collapseFour" class="panel-collapse collapse">
               <div class="panel-body">
                   <p><?php the_field('coaching_accordion_4_text_field'); ?>
                  </p>
                  <a href="#" class="cta--primary"><?php the_field('coaching_accordion_4_button'); ?></a>
               </div>
             </div>
             </div>

             <a href="tel:+31640393413">
             <button class="cta--mega animated plx-1 eighth">
               <img src="../wp-content/themes/toko-blank/src/img/assets/vragen--icon.svg">
               Vragen of maatwerk?</br>
               Bel even: 06 403 93 413
             </button>
             </a>
         </div>
     </div>

    </div>
  </div>

   <section class="pic-element pic-element-large" style="background-image: url('<?php the_field('image_divider_coaching'); ?>'); ?');">
   </section>

    <?php $recent = new WP_Query("pagename=homepage"); while($recent->have_posts()) : $recent->the_post();?>
      <section class="preview">
        <h1>Wat zeggen klanten?</h1>
          <div id="carouselExampleControls" class="carousel carouselb slide" data-ride="carousel">
            <a class="carousel-control-prev prev-btn" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"><img src="../wp-content/themes/toko-blank/src/img/assets/prev.svg"></span>
            </a>
            <a class="carousel-control-next next-btn" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"><img src="../wp-content/themes/toko-blank/src/img/assets/next.svg"></span>
            </a>
            <div class="carousel-inner carouselb-inner">
              <div class="item active">
                <div class="carousel-caption smaller-carousel">
                  <img src="<?php the_field('service_logo_01'); ?>">
                  <h3><?php the_field('service_name_01'); ?></h3>
                  <p><?php the_field('service_text_01'); ?></p>
                  <img src="<?php the_field('service_client_logo_01'); ?>">
                  <h4><?php the_field('service_client_name_01'); ?></h4>
                  <p><?php the_field('service_client_company_01'); ?></p>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption smaller-carousel">
                  <img src="<?php the_field('service_logo_02'); ?>">
                  <h3><?php the_field('service_name_02'); ?></h3>
                  <p><?php the_field('service_text_02'); ?></p>
                  <img src="<?php the_field('service_client_logo_02'); ?>">
                  <h4><?php the_field('service_client_name_02'); ?></h4>
                  <p><?php the_field('service_client_company_02'); ?></p>
                </div>
              </div>
              <div class="item">
                <div class="carousel-caption smaller-carousel">
                  <img src="<?php the_field('service_logo_03'); ?>">
                  <h3><?php the_field('service_name_03'); ?></h3>
                  <p><?php the_field('service_text_03'); ?></p>
                  <img src="<?php the_field('service_client_logo_03'); ?>">
                  <h4><?php the_field('service_client_name_03'); ?></h4>
                  <p><?php the_field('service_client_company_03'); ?></p>
                </div>
              </div>
            </div>
          </div>
      </section>

    <?php endwhile; ?>

 </div>
 <?php get_footer(); ?>
