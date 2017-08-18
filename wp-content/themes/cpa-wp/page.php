<?php
/**
 * 
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
<div class="section-content animatedParent animateOnce">
    <div class="container">
        <div class="common-page mw-700">
        	<?php the_content(); ?>
        </div>
    </div>
</div>

<?php
    endwhile; else :
endif;
get_footer();