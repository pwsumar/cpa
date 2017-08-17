<?php
/**
 * Template Name: PDF List
 *
 *
 *
 */

get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<!-- BANNER SECTION -->
<div class="section-banner banner-subpage">
    <div class="banner-bg bg-inline bg-gradient" style="background-image: url('http://cpa-wp/wp-content/uploads/2017/08/banner-cpa.png');"></div>
    <div class="transform-50">
        <div class="container">
            <div class="banner-content text-center animatedParent animateOnce">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<div class="section-content animatedParent animateOnce">
	<div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
			<h3>Statistics</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
        </div>
        <div class="gap-50"></div>
        <div class="pdf-links afterclear">
            <?php while (have_rows('pdf_links')): the_row(); ?>
                <div class="col-md-3">
                    <a href="<?php the_sub_field('pdf_links'); ?>" target="_blank">
                        <div class="pdf-holder text-center">
                            <div class="pdf-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icon-link.png" alt="">
                            </div>
                            <div class="pdf-caption">
                                <h5><?php the_sub_field('pdf_name'); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();