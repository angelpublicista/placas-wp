<?php 
/* Template Name: Página con encabezado */ 

get_header();
?>

<div class="page-with-header">
    <section class="page-with-header__entry" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="custom-container">
            <h1><?php the_title(); ?></h1>
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </div>
        </div>
    </section>
    <section class="page-with-header__content">
        <div class="custom-container">
            <?php 
                the_content();
            ?>
        </div>
    </section>
</div>

<?php
get_footer();