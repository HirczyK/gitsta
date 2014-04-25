<?php get_header(); ?>
    <div class="subhead">
        <div class="container">
            <h3><small><a href="<?= home_url(); ?>"><i class="fa fa-chevron-left"></i></a></small> <?php the_title(); ?></h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                    <?php
                    // Comments
                    if(comments_open() || get_comments_number() != '0') {
                        comments_template();
                    }
                    ?>

                <?php endwhile; ?>
            </div>
            <div class="col-md-2">
                <?php get_sidebar(); ?>
            </div>
        </div>
<?php get_footer(); ?>