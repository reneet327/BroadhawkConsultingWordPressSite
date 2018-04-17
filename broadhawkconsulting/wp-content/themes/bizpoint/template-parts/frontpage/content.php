<!-- Content Section -->
<section class="bp-section content-section">
    <header class="bp-section-header">
        <h3 class="section-title"><?php echo esc_html( get_theme_mod( 'content_title' ) ); ?></h3>
        <p class="section-subtitle">
            <?php echo esc_html( get_theme_mod( 'content_subtitle' ) ); ?>
        </p>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Content Section -->
