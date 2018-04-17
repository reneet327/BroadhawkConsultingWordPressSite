<?php /* Template Name: page-services */ ?>

<?php get_header(); ?>

<!-- Top Banner -->
<section>
  <div class="top-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div id="sm-header2">
            <a href="https://www.facebook.com/BroadhawkConsulting/?timeline_context_item_type=intro_card_work&timeline_context_item_source=1410843128&pnref=lhc"><i class="fab fa-facebook socialw" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/julieannford/"><i class="fab fa-linkedin socialw" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-youtube socialw" aria-hidden="true"></i></a>
            <a href="#"><i class="fab fa-twitter socialw" aria-hidden="true"></i></a>
          </div>

        </div col-md-9>
        <h1>Services</h1>
      </div>
    </div>
  </div>
</section>
<section class="container" id="services">
  <header>
    <h2>What We Offer</h2>
  </header>
  <main>
    <div class="row">
      <div class="col-md-4">
        <img src="<?php the_field('services_top_image'); ?>" alt="Image going over services" width="350">
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <?php the_field('services_top_paragraph'); ?>
      </div>
    </div>
  </main>
</section>

<section class="services">
  <header class="container">
    <h2>Our Services</h2>
  </header>
  <a name="BM"></a><div class="container">
    <div class="row">
      <div class="col-md-4 icon1 ">
        <i class="fas fa-briefcase icon-m" ></i>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <h3><?php the_field('service1_title'); ?></h3>
        <?php the_field('service1_copy'); ?>
      </div>
    </div>
  </div>
  <div class="dk-bdgnd">
    <a name="MCB"></a><div class="container">

      <div class="row">
        <div class="col-md-4 icon2">
          <i class="fas fa-hashtag icon-m"></i>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
          <h3><?php the_field('service2_title'); ?></h3>
          <?php the_field('service2_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <a name="ABRM"></a><div class="container">

    <div class="row">
      <div class="col-md-4 icon3">
        <i class="fas fa-paint-brush icon-m"></i>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <h3><?php the_field('service3_title'); ?></h3>
        <?php the_field('service3_copy'); ?>
      </div>
    </div>
  </div>
  <div class="dk-bdgnd">
    <a name="ITC"></a><div class="container">

      <div class="row">
        <div class="col-md-4 icon4">
          <i class="fas fa-desktop icon-m"></i>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
          <h3><?php the_field('service4_title'); ?></h3>
          <?php the_field('service4_copy'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container end-services">
    <div class="row">
      <div class="col-md-4 icon5">
        <i class="fas fa-user-secret icon-m"></i>
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7" >
        <h3><?php the_field('service5_title'); ?></h3>
        <?php the_field('service5_copy'); ?>
      </div>
    </div>
  </div>
</section>
<section class="container ">
  <header>
    <h2 style="margin-bottom: 50px;"><?php the_field('services_bottom_title'); ?></h2>
  </header>
  <div class="row">
    <div class="col-md-12 hire">
      <?php the_field('services_bottom_copy'); ?>
    </div>
  </div>


</section>

<?php get_footer(); ?>
