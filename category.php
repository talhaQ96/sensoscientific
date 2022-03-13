<?php
/**
 * The template for displaying posts filtered by category
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coalition_Technologies
 */

get_header();
?>

<main id="primary" class="site-main">
    
    <?php
        if(have_posts()):
             get_template_part('partials/archives/content', 'banner');
    ?>
        <section class="post-grid content">
            <div class="container">
                <?php get_template_part('partials/archives/content'); ?>
            </div>         
        </section>           
    <?php
        else:
            get_template_part('partials/content', 'none');

        endif;
    ?>

</main>
<?php get_footer(); ?>