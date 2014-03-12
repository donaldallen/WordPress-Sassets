<?php get_header(); ?>

    <div id="main-content" class="main-content">

        <?php
        if (is_front_page()):
            get_template_part('featured-content');
        endif;
        ?>

        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">

                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();

                        the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>');
                        the_content('Continue reading...');
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>

<?php get_footer(); ?>