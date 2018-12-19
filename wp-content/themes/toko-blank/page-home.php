<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<div class="main">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <div class="d-block w-100 item--photo" style="background-image: url('<?php the_field('header_image_01'); ?>');" alt="First slide"></div>
        <div class="carousel-caption">
          <h1 data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_title_01'); ?></h1>
          <span data-parallax='{"y": 80, "smoothness": 180}'></span>
          <p data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_text_01'); ?></p>
          <button data-parallax='{"y": 80, "smoothness": 180}' class="cta--primary">Lees meer</button>
        </div>
      </div>
      <div class="item">
        <div class="d-block w-100 item--photo" style="background-image: url('<?php the_field('header_image_02'); ?>');" alt="Second slide"></div>
        <div class="carousel-caption">
          <h1 data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_title_02'); ?></h1>
          <span data-parallax='{"y": 80, "smoothness": 180}'></span>
          <p data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_text_02'); ?></p>
          <button data-parallax='{"y": 80, "smoothness": 180}' class="cta--primary">Lees meer</button>
        </div>
      </div>
      <div class="item">
        <div class="d-block w-100 item--photo" style="background-image: url('<?php the_field('header_image_03'); ?>');" alt="Third slide"></div>
        <div class="carousel-caption">
          <h1 data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_title_03'); ?></h1>
          <span data-parallax='{"y": 80, "smoothness": 180}'></span>
          <p data-parallax='{"y": 80, "smoothness": 180}'><?php the_field('header_text_03'); ?></p>
          <button data-parallax='{"y": 80, "smoothness": 180}' class="cta--primary">Lees meer</button>
        </div>
      </div>
    </div>
      <div class="usp animated plx">
        <ul>
          <li>Focus</li>
          <li>Gastvrijheid</li>
          <li>Balans</li>
        </ul>
      </div>
  </div>

  <section class="welcome grid animated plx-1">
      <div class="col-md-5">
        <h1>Welkom op</h1> <span class="green"></span>
        <span class="none"></span><h1>je werk!</h1>
      </div>
  </section>

  <section class="preview">
    <h1 class="animated plx"><?php the_field('section_title_wib'); ?></h1>
    <div class="grid inners">
      <div class="col-md-5 col-md-offset-1 center">
        <img class="animated plx-1" src="wp-content/themes/toko-blank/src/img/assets/logo.png">
      </div>
      <div class="col-md-6">
        <h2 class="animated plx"><?php the_field('section_subtitle_wib'); ?></h2>
        <p class="animated plx-1 third"><?php the_field('section_paragraph_wib'); ?></p>
        <button class="cta--primary animated plx-1">Lees meer</button>
      </div>
    </div>
  </section>

  <section class="dark-prev">
    <div class="grid inners animated plx-1">
      <div class="col-md-6">
        <h2><?php the_field('section_subtitle_dark'); ?></h2>
        <p><?php the_field('section_paragraph_dark'); ?></p>
        <button class="cta--primary darken">Lees meer</button>
      </div>
      <div class="col-md-5 col-md-offset-1 center">
        <img src="wp-content/themes/toko-blank/src/img/assets/logo-light.png">
      </div>
    </div>
  </section>

  <section class="pic-element" style="background-image: url('<?php the_field('content_header'); ?>'); ?');">
  </section>

  <section class="preview">
    <h1>Wat zeggen klanten?</h1>
      <div id="carouselExampleControls" class="carousel carouselb slide" data-ride="carousel">
        <a class="carousel-control-prev prev-btn" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><img src="wp-content/themes/toko-blank/src/img/assets/prev.svg"></span>
        </a>
        <a class="carousel-control-next next-btn" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><img src="wp-content/themes/toko-blank/src/img/assets/next.svg"></span>
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


 </div>
 <?php get_footer(); ?>
