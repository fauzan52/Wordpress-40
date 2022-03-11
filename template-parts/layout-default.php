<?php
global $fauzanredux;
get_header('archive');
?>
<main id="primary" class="site-main single-post-container" data-sticky-container>
    <div class="container">
        <?php
        if (have_posts()) :
            if (is_search() || is_archive() || is_tax() || is_tag()) :?>
                <header class="page-header">
                    <?php
                    the_archive_title('<h1 class="page-title">', '</h1>');
                    the_archive_description('<div class="archive-description">', '</div>');
                    ?>
                </header>
            <?php endif; ?>

            <section class="content-area">
                <div class="row my-3">
                    <div class="col-12 col-md-8 col-lg-8 col-sm-12">
                        <?php
                        if (is_home()):
                            get_template_part('template-parts/content', 'top');
                            get_template_part('template-parts/content', 'ads');
                            get_template_part('template-parts/content', 'middle');
                        endif;
                        ?>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-sm-12">
                        <?php get_template_part('sidebar'); ?>
                        <div class="mySticky">
                            <aside class="widget-area">
                                <?php
                                dynamic_sidebar('sticky-right');
                                ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php
        get_template_part('template-parts/content', 'bottom');
        ?>
    </div>
    <?php
    get_footer();
    ?>
</main>
