<!DOCTYPE html>

    <!-- Head -->
    <?php get_header() ?>

    <!-- Main -->
    <main class='w3-row'>
        <div class="container py-3">
            <div class="w3-row">
                <div class="w3-col m6 p-2">
                    <?php
                        if( has_post_thumbnail()){
                            the_post_thumbnail( 'post-thumbnails', array(
                                'class' => 'w-100 w3-image'
                            ));
                        }
                        ?>
                </div>
                <div class="w3-col m6 p-2">
                    <h1><?php the_title() ?></h1>
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php get_footer() ?>

<?php wp_footer() ?>
</html>