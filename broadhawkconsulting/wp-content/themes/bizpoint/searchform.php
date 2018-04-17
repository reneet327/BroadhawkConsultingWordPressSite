<form role="search" method="get" class="searchform bizpoint-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">
        <input type="text" class="form-control s" name="s" placeholder="<?php esc_attr_e( 'Search this website&hellip;', 'bizpoint' ); ?>" value="<?php the_search_query(); ?>">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit"><?php esc_html_e( 'Go!', 'bizpoint' ); ?></button>
        </span>
    </div>
</form>
