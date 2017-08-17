<?php
/**
 * Template Name: Cebu Port Information
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
                <h1>Port Information</h1>
            </div>
        </div>
    </div>
</div>
<div class="section-content animatedParent animateOnce">
    <div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
            <h3>Cebu Port Information</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
        </div>
    </div>
</div>
<div class="cebu-port-system pd-10 bg-inline bg-fixed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/port-bg.jpg');">
    <div class="container animatedParent animateOnce">
        <div class="cebu-port-system-content animated fadeInUp">
            <div class="container">
                <div class="col-md-offset-1 col-md-6 pull-right">
                  <div class="system-tabholder">
                      <div class="bg-inline system-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/cebu_port_system.png')">
                          <ul class="nav nav-tabs subports" role="tablist">
                            <?php
                              global $post;
                              query_posts(array(
                                'post_type' => 'port',
                                'posts_per_page' => '8',
                                'order' => ASC
                              ));
                              if ( have_posts() ) : ?>
                                <?php $i = 0; while(have_posts()) : the_post(); $post_slug=$post->post_name; ?>

                                  <li role="presentation" class="<?php echo $post_slug; ?> <?php echo ($i == 0) ? 'active' : '' ?>">
                                      <a href="#<?php echo $post_slug; ?>" aria-controls="<?php echo $post_slug; ?>" role="tab" data-toggle="tab">
                                          <span class="sr-only"><?php the_title(); ?></span>
                                      </a>
                                  </li>
                              
                                <?php $i++; endwhile; ?>
                              <?php endif; wp_reset_query(); ?>
                        </ul>
                      </div>
                  </div>
                </div>
                <div class="col-md-5" style="position: static;">
                    <div class="system-tabholder">
                         <div class="tab-content">
                            <?php
                            global $post;
                            query_posts(array(
                              'post_type' => 'port',
                              'posts_per_page' => '8',
                              'order' => ASC
                            ));
                            if ( have_posts() ) : ?>
                              <?php $i = 0; while(have_posts()) : the_post(); $post_slug=$post->post_name; ?>
                                <div id="<?php echo $post_slug; ?>" class="tab-pane fade in <?php echo ($i == 0) ? 'active' : '' ?>">
                                  <h4><?php the_title(); ?></h4>
                                  <?php the_content(); ?>

                                  <div class="btn-holder">
                                      <a href="" class="btn-common">Go to port
                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                      </a>

                                      <!-- <div class="navigation">
                                        <span class="prev">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                        </span>

                                        <span class="next">
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </span>
                                      </div> -->
                                  </div>
                                </div>
                              <?php $i++; endwhile; ?>
                            <?php endif; wp_reset_query(); ?>
                          
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-content animatedParent animateOnce">
    <div class="container">
        <div class="featured-projects afterclear">
            <div class="col-md-4">
                <div class="project-item-full">
                    <a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/rate1.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/rate1.jpg">
                        <span class="caption"><span>Foreign Tariffs and Rates<i class="fa fa-angle-right"></i></span></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="project-item-full">
                    <a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/rate1.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/rate1.jpg">
                        <span class="caption"><span>Foreign Tariffs and Rates<i class="fa fa-angle-right"></i></span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();