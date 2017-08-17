<?php
/**
 * Template Name: Port Charges
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
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
			<h3>Port Charges</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
        </div>
    </div>
    <div class="container">
    	<div class="featured-projects">
    		<div class="project-item-full">
    			<a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/rate1.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/rate1.jpg">
    				<span class="caption"><span>Foreign Tariffs and Rates<i class="fa fa-angle-right"></i></span></span>
    			</a>
    		</div>
    		<div class="project-item-full">
    			<a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/rate2.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/rate2.jpg">
    				<span class="caption"><span>Domestic Tariffs and Rates<i class="fa fa-angle-right"></i></span></span>
    			</a>
    		</div>
    	</div>
    </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();