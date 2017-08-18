<?php
/**
 * Template Name: Single Staff
 * Template Post Type: staff
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$taxonomy = 'staffcat';
$terms = get_terms($taxonomy, array('hide_empty' => false));
$selected_term = $wp_query->queried_object;
?>
    <!-- BANNER SECTION -->
    <div class="section-banner banner-subpage">
        <div class="banner-bg bg-inline bg-gradient" style="background-image: url('http://cpa-wp/wp-content/uploads/2017/08/banner-cpa.png');"></div>
        <div class="transform-50">
            <div class="container">
                <div class="banner-content text-center animatedParent animateOnce">
                    <h1>7th CPC Members</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END BANNER SEECTION -->
    <div class="section-content animatedParent animateOnce">
        <div class="container">
            <div class="section-header text-center animated fadeInUp">
                <p>overview</p>
                <h3>7th CPC Members</h3>
            </div>
            <div class="content-common text-center">
                <p class="animated fadeInUp delay-250">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
            </div>
            <div class="single-staff">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="staff-holder">
                        <div class="staff-img">
                            <div class="staff-bg bg-inline" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/staff-1.jpg'); "></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="staff-holder">
                        <div class="staff-header">
                            <h4>DOTr Sec. Arthur P. Tugade</h4>
                            <p>Chairman</p>
                        </div>
                        <div class="staff-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
<?php get_footer();