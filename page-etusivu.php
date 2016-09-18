<?php /* Override for etusivu */ ?>
<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="row">

        <main id="main" class="large-8 medium-8 columns" role="main">

            <div class="promo">
                <h1>TUORETTA</h1>
                
                <?php
                query_posts('posts_per_page=1');
                while (have_posts()) {
                    the_post();
                    echo "<h3>";
                    the_title();
                    echo "</h3>";
                    if (in_category('Levyarviot')) {
                        the_content();
                    } else {
                        the_post_thumbnail();
                        the_excerpt();
                    }
                }
                wp_reset_query();
                ?>
            </div>

            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            
        </main> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
