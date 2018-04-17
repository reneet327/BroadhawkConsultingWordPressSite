<?php /* Template Name: page-home */ ?>

<?php get_header(); ?>
  <!-- Top Banner -->
  <section class="jumbotron img-fluid. max-width: 100%;" id='tbanner'>
    <header class="container">
      <a href="https://www.facebook.com/BroadhawkConsulting/?timeline_context_item_type=intro_card_work&timeline_context_item_source=1410843128&pnref=lhc"><i class="fab fa-facebook social-t" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/julieannford/"><i class="fab fa-linkedin social-t" aria-hidden="true"></i></a>
      <a href="#"><i class="fab fa-youtube social-t" aria-hidden="true"></i></a>
      <a href="#"><i class="fab fa-twitter social-t" aria-hidden="true"></i></a>

      <div id="jumbo_copy">
        <h1><?php the_field('home_page_banner_title'); ?></h1>
        <p class="lead"><?php the_field('home_page_banner_subitle'); ?>
<button type="button" class="btn btn-sm btn-primary" onclick="window.location.href = 'http://rtgrafix.com/broadhawkconsulting/services/'" >more</button></p>

      </div>
    </header>
  </section>
  <section class="container" id="services">
    <header class="row">
    <div class="col-md-12">
      <h1>Services</h1>
    </div>
    </header>
    <!--col-md  -->
      <main >
        <div class="row">
          <figure class="col-md-4">
          <div class="services-b icon1"><i class="fas fa-briefcase icon " ></i>
          <figcaption>
            <a href="http://rtgrafix.com/broadhawkconsulting/services/ #BM"><?php the_field('service1_title', 90); ?></a>
          </figcaption>
        </div>
      </figure>
        <figure class="col-md-4">
          <div class="services-b icon2"><i class="fas fa-hashtag icon "></i>
          <figcaption>
            <a href="http://rtgrafix.com/broadhawkconsulting/services/ #MCB"> <?php the_field('service2_title', 90); ?></a>
          </figcaption></div>
        </figure>

        <figure class="col-md-4">
          <div class="services-b icon3"><i class="fas fa-paint-brush icon "></i>
          <figcaption>
            <a href="http://rtgrafix.com/broadhawkconsulting/services/ #ABRM"><?php the_field('service3_title', 90); ?></a>
          </figcaption>
        </div>
          </div>
        </figure>
        <div class="row">
          <figure class="col-md-3 col-md-offset-2">
            <div class="services-b icon4"><i class="fas fa-desktop icon "></i>
            <figcaption>
              <a href="http://rtgrafix.com/broadhawkconsulting/services/ #ITC"><?php the_field('service4_title', 90); ?></a>
            </figcaption>
          </div>
          </figure>

          <figure class="col-md-3 col-md-offset-1">
            <div class="services-b icon5"><i class="fas fa-user-secret icon "></i>
            <figcaption>
              <a href="http://rtgrafix.com/broadhawkconsulting/services/#CSC"><?php the_field('service5_title', 90); ?></a>
            </figcaption></div>
          </figure>
        </div>
        <div class="row">
          <div class="col-md-12" id="button">
            <button type="button" class="btn btn-sm btn-primary center" name="button" onclick="window.location.href = 'http://rtgrafix.com/broadhawkconsulting/services/'">more Services</button>
        </div>
      </div>
      </main>





  </section>
  <section class="dk-bdgnd">
    <div class="container">
      <header>
        <h1>About Us</h1>
      </header>
      <main class="row">
        <p class="col-md-12">
          <?php the_field('home_page_about_us'); ?><a class="btn btn-sm btn-primary" href="about.html" role="button">more</a>
        </p>
      </main>
    </div>
  </section>
  <section class="bg-light" id="contact">
    <div class="container">
      <header>
        <h1>Contact Us</h1>
      </header>
      <main class="row">
        <p class="col-md-12">
          <?php the_field('home_page_contact_us'); ?>
<a href = "mailto:broadhawkconsulting@gmail.com" class="btn btn-sm btn-primary"  role="button" >email us</a>
        </p>
      </main>
    </div>
  </section>
<?php get_footer(); ?>
