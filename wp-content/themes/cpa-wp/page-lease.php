<?php
/**
 * Template Name: Executives and Staff
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
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
                <h1>Executives and Staff</h1>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<div class="section-content animatedParent animateOnce">
    <div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>Leases and Rental Rates</p>
            <h3>Leases</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
                An agreement under which the Authority allows a party to use or occupy its property for a specified rent and period which may run on a monthly
basis or as long as 1-25 years depending on the type of property and subject to conditions and requirements as provided by law and the Authority's policy on leases. All indicated rental rates may be subject to annual increase not more than 15% of current rate due to economic inflation.
            </p>
        </div>
    </div>
</div>

<?php
    endwhile; else :
endif;
get_footer();