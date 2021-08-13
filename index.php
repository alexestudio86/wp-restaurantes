<!DOCTYPE html>

    <!-- Header -->
    <?php get_header(); ?>

    <!-- Navbar -->
    <header class='w3-row bg-header'>
        <div class="container">
            <div class="w3-display-container w3-text-white">
                <div class="w3-col s6 w3-display-container" style='height:100vh'>
                    <div class="w3-display-middle w-100">
                        <h2 class='w3-jumbo text-uppercase'>Restaurante Titbit</h2>
                        <p class='w3-xlarge'>Hamburguesas, carnes y ensaladas</p>
                    </div>
                </div>
                <div class="w3-col s6 w3-display-container" style='height:100vh'>
                    <div class="w3-display-middle w-100 w3-right-align">
                        <img alt='Logo' src='https://1.bp.blogspot.com/-W5zXKhFChqQ/Xyw9qtpDtEI/AAAAAAAA7l8/J-zQqU9iZHEqhY2UV5v4CH4WFkl44s07wCLcBGAsYHQ/s400/logo.png' />
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Promos -->
    <div class='w3-row'>
    </div>

    <!-- Main -->
    <main class='w3-row w3-light-gray'>
        <div class="w3-row container py-4">
            <h1 class="w3-xlarge text-uppercase w3-center">Nuestros productos</h1>
            <div class="w3-row">
                <?php
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                    <article class='w3-quarter p-1'>
                        <a href='<?php the_permalink() ?>'>
                            <div class="w3-display-container w3-hover-opacity">
                                <?php 
                                if( has_post_thumbnail()){
                                    the_post_thumbnail( 'post-thumbnails', array(
                                        'class' => 'w-100 w3-image'
                                    ));
                                }
                                ?>
                                <div class="w3-display-topright p-1">
                                    <span class='w3-orange price p-1'><?php the_tags('','','') ?></span>
                                </div>
                                <div class='w3-display-bottommiddle black-transparent-medium w-100 p-1 px-2'>
                                    <h1 class='w3-large w3-text-white'><?php the_title() ?></h1>
                                </div>
                            </div>
                        </a>
                    </article>
                <?php
                    endwhile; 
                endif; 
                ?>
            </div>
            <div class='py-2 w3-center'>
                <?php get_template_part('template-parts/content', 'pagination') ?>
            </div>
        </div>
    </main>

    <!-- Sidebars -->
    <aside>
        <?php get_sidebar(); ?>
    </aside>

    <!-- Footer -->
    <?php get_footer(); ?>

<?php wp_footer(); ?>
</html>