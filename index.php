<!doctype html>
<html class="no-js" lang="es-MX">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?= JS ?>vendor/modernizr.js"></script>
</head>

<body>

    <!-- Header -->

    <?php get_header(); ?>

    <!-- /Header -->

    <!-- Contenido -->

    <section class="content row">

        <!-- SideBar -->
        
        <div class="columns small-4">
            <?php get_sidebar(); ?>
        </div>
        
        <!-- /Sidebar -->

        <!-- Loop -->

        <div class="columns small-8">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>  
            
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <h2>
                        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h2>
                    
                        <section class="content">
                            <?php the_content('Leer Más...'); ?>
                        </section>

                    <footer class="post">
                        <p>
                            por <?php the_author_posts_link(); ?> el <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>
                        </p>
                    </footer>

                </article>


            <?php endwhile; else: ?>

                <p><?php _e('No posts were found. Sorry!'); ?></p>

            <?php endif; ?>

            <div class="navi">
                <div class="right">
                <?php previous_posts_link('Anterior'); ?> / <?php next_posts_link('Siguiente'); ?>
                </div>
            </div>

        </div>
        
        <!-- /Loop -->
        
    </section>

    <!-- /Contenido -->

    <!-- Footer-->
    <?php get_footer(); ?>
    <!-- /Footer -->

    <script src="<?= JS ?>vendor/jquery.js"></script>
    <script src="<?= JS ?>foundation.min.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>
</html>
