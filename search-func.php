<?php
if ( '1' === $search_enabled ) :
?>
        <form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'tesa-theme' ); ?>" title="<?php esc_attr_e( 'Search', 'tesa-theme' ); ?>" />
                <button type="submit" name="submit" class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'tesa-theme' ); ?></button>
            </div>
        </form>
<?php
    endif;
?>