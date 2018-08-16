<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (!is_single() ) { ?>
    <div class="entry-content-list-blog">
        <div class="featured-wrap">
            <div class="entry-quote-post-format">
                <blockquote>
                <?php if(function_exists('rwmb_meta')){ ?>
                    <?php  if ( rwmb_meta( 'themeum_qoute' ) ) { ?>
                        <p><?php echo esc_html(rwmb_meta( 'themeum_qoute' )); ?></p>
                        <small><?php echo esc_html(rwmb_meta( 'themeum_qoute_author' )); ?></small>
                    <?php } ?>
                <?php } ?>
                </blockquote>
            </div>            
        </div>
        <?php get_template_part( 'post-format/entry-content' );?>
    </div>
    <?php } ?> 
    <?php if ( is_single() ) { ?>
        <div class="entry-quote-post-format">
            <div class="row-fluid entry-header-title-wrap"> 
                <div class="container">
                    <blockquote>
                    <?php if(function_exists('rwmb_meta')){ ?>
                        <?php  if ( rwmb_meta( 'themeum_qoute' ) ) { ?>
                            <p><?php echo esc_html(rwmb_meta( 'themeum_qoute' )); ?></p>
                            <small><?php echo esc_html(rwmb_meta( 'themeum_qoute_author' )); ?></small>
                        <?php } ?>
                    <?php } ?>
                    </blockquote>                
                    <?php get_template_part( 'post-format/entry-content' ); ?>
                </div>
            </div>
        </div>
    <?php } ?>       


    <div class="container">
        <div class="row">
            <div class="col-sm-12"> 
                <?php get_template_part( 'post-format/entry-content-single' ); ?> 
            </div>
        </div>
    </div>

</article> <!--/#post -->