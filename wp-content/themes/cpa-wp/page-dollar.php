<?php
/**
 * Template Name: Dollar Exchange
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
                <h1>Dollar Exchange</h1>
            </div>
        </div>
    </div>
</div>
<div class="section-content animatedParent animateOnce">
	<div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
			<h3>Dollar Exchange Rate for Port Charges</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
            	Per CPA Memorandum Circular 04-2014, there shall be a standard conversion rate to be given by CPA in order to effectively facilitate the assessment of dollar-denominated port charges.
            </p>
        </div>
    </div>
    <div class="container">
    	<div class="featured-projects">
            <h5>For a copy of the Policy / Advisory, click the link to download:</h5>
    		<div class="project-item-full">
    			<a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/rate1.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/rate1.jpg">
    				<span class="caption"><span>CPA Memorandum Circular 04-2014<i class="fa fa-angle-right"></i></span></span>
    			</a>
    		</div>
            <div class="gap-20"></div>
    	</div>
        <div class="featured-projects">
            <h5>Below are the dollar conversion rates determined by CPA on a weekly basis:</h5>
            <iframe frameborder="0" width="100%" height="1000" style="border:none" scrolling="yes" src="https://docs.google.com/document/d/e/2PACX-1vS3eMXbD1SEV3-HtL9c8IBV_U9rPkTG7myqTaL-sfMxt8-piXKK0prIvy5VV6xNLwRPzzJHdcXtviVp/pub?embedded=true"></iframe>
        </div>
    </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();