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
                    <h1>Executives and Staff</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END BANNER SEECTION -->
    <div class="section-content animatedParent animateOnce">
        <div class="container">
            <div class="section-header text-center animated fadeInUp">
                <p>overview</p>
                <h3>Executives and Staff</h3>
            </div>
            <div class="content-common text-center">
                <p class="animated fadeInUp delay-250">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                </p>
            </div>
        </div>
        <div class="container-fluid animated fadeInUp go">
            <div class="tab-panel-holder tab-staff">
                <div class="col-md-3">
                    <div class="staff-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                            if ($terms):
                                foreach($terms as $cntr => $term):
                                    $term_link = get_term_link( $term );
                                    //If there was an error, continue to the next term.
                                    if ( is_wp_error( $term_link ) ) {
                                        continue;
                                    }
                                    ?>
                                    <li role="presentation" class="<?php echo ($cntr == 0) ? 'active' : '' ?>">
                                        <a href="#<?php echo $term->slug; ?>" aria-controls="<?php echo $term->slug; ?>" role="tab" data-toggle="tab"><?php echo $term->name; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <!-- Tab panes -->
                    <div class="tab-content panel-staff">
                        <?php
                        if ($terms):
                            foreach($terms as $cntr => $term):
                                ?>
                                <div role="tabpanel" class="tab-pane <?php echo ($cntr == 0) ? 'active' : '' ?>" id="<?php echo $term->slug; ?>">
                                    <?php
                                    query_posts(array(
                                        'post_type' => 'staff',
                                        'order'     => ASC,
                                        'tax_query' => array(
                                                array('taxonomy' => 'staffcat', 'terms' => array($term->term_id))
                                        ),
                                        'post_per_page' => '-1',
                                    ));
                                    if ( have_posts() ) : ?>
                                        <div class="staff-content afterclear">
                                            <?php $i = 0; while(have_posts()) : the_post(); ?>
                                                <div class="col-md-4">
                                                    <a href="<?php the_field('staff_link'); ?>" target="_blank">
                                                        <div class="staff-holder">
                                                            <div class="staff-img">
                                                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>" alt="">
                                                            </div>
                                                            <div class="staff-header">
                                                                <h4><?php the_title(); ?></h4>
                                                                <p><?php the_field('staff_position'); ?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            <?php $i++; endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();