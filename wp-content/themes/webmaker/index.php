<?php include_once('header.php'); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post() ?>

        <section id="<?php print_r(the_title()); ?>">
            <div class="container-fluid">
                <div class="row">
                     <?php the_content() ?>
                </div>
            </div>
        </section>

    <?php endwhile ?>

<?php endif ?>

<?php include_once ('footer.php') ?>