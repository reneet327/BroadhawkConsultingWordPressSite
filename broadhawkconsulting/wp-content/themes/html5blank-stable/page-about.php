<?php /* Template Name: page-about */ ?>

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
        <h1>About Us</h1>
      </div>
    </div>
  </div>
</section>
<section class="container" id="company">
  <header>
    <h2>About Our Company</h2>
  </header>
  <main>
    <div class="row">
      <div class="col-md-4">
        <img src="<?php the_field('about_us_top_picture'); ?>" alt="Image of people doing business" width="350">
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <?php the_field('about_us_top_paragraph'); ?>
      </div>
    </div>
  </main>
</section>
<section >
  <header class="container">
    <h2>About Our Employees</h2>
  </header>
  <div class="dk-bdgnd">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <img src="<?php the_field('employee1_picture'); ?>" alt="Image of Julie Ford" width="350">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
          <h3><?php the_field('employee1_title'); ?></h3>
          <?php the_field('employee1_bio'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <img src="<?php the_field('employee2_picture'); ?>" alt="Image of Dawn Lang" width="350">
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <h3><?php the_field('employee2_title'); ?></h3>
        <?php the_field('employee2_bio'); ?>
      </div>
    </div>
  </div>
  <div class="dk-bdgnd">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <img src="<?php the_field('employee3_picture'); ?>" alt="Image of Scott Reeves" width="350">
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-7">
          <h3><?php the_field('employee3_title'); ?></h3>
          <?php the_field('employee3_bio'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <img src="<?php the_field('employee4_picture'); ?>" alt="Image of Renee Thomas" width="350">
      </div>
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
        <h3><?php the_field('employee4_title'); ?></h3>
        <?php the_field('employee4_bio'); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
