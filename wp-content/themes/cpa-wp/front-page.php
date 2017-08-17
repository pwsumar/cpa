<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
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
<div class="section-banner">
    <div class="banner-bg bg-inline bg-gradient" style="background-image: url('<?php the_field('banner_image'); ?>');"></div>
    <div class="transform-50">
        <div class="container">
            <div class="banner-content text-center animatedParent animateOnce">
                <?php the_field('banner_content'); ?>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<!-- QUICK FACTS SECTION -->
<div class="section-content bg-blue animatedParent animateOnce">
<div class="animated fadeInUp">

    <div class="content-title text-center text-white">
        <h3>Quick Facts</h3>
    </div>
    <div class="container">
        <div class="facts-container afterclear">
        	<?php while (have_rows('quick_facts')): the_row(); ?>
	            <div class="col-md-3">
	                <div class="facts-holder afterclear">
	                    <div class="facts-header fl-left">
	                        <div class="icon-img fl-left">
	                            <img src="<?php the_sub_field('quick_icon'); ?>" alt="">
	                        </div>
	                        <div class="icon-text">
	                            <h3><?php the_sub_field('quick_number'); ?></h3>
	                        </div>
	                    </div>
	                    <div class="facts-content text-center fl-left">
	                        <?php the_sub_field('quick_content'); ?>
	                    </div>
	                </div>
	            </div>
            <?php endwhile; ?>
        </div>
    </div>
    </div>
</div>
<!-- END -->
<!-- About Company -->
<div class="section-content pd-10 animatedParent animateOnce">
    <div class="container">
        <div class="section-header text-center animated fadeInUp">
            <?php the_field('about_header'); ?>
        </div>
        <div class="content-common text-center">
            <?php the_field('about_content'); ?>
        </div>
    </div>
    <div class="grid-holder animated fadeInUp afterclear">
        <div class="container-custom">
            <div class="grid-section afterclear">
                <div class="grid-shadow afterclear">
                    <div class="col-md-6 p-0 grid-height">
                        <div class="grid-block-img grid-border scale-holder">
                            <div class="grid-img bg-inline" style="background-image: url('<?php the_field('citizens_charter_image'); ?>');"></div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 grid-height">
                        <div class="grid-content">
                            <div class="section-header">
                                <?php the_field('citizens_charter_header'); ?>
                            </div>
                            <div class="grid-desc">
                              <?php the_field('citizens_charter_content'); ?>
                              <a href="" class="btn-common">Read more<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-section grid-bottom afterclear">
            	<?php $i = 0; while (have_rows('grid_column')): the_row(); ?>
                <div class="col-md-6 p-0 grid-height">
                    <div class="grid-shadow grid-border afterclear">
                        <div class="col-md-6 <?php if($i%2 == 1){echo 'pull-right';} else {echo 'pull-left'; }?> p-0">
                            <div class="grid-block-img scale-holder">
                                <div class="grid-img bg-inline" style="background-image: url('<?php the_sub_field('grid_image'); ?>');"></div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="grid-content">
                                <div class="section-header">
                                    <h4 class="text-center"><?php the_sub_field('grid_header'); ?></h4>
                                </div>
                                <div class="grid-desc">
                                  <?php the_sub_field('grid_content'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</div>
<!-- End Company -->

<div class="cebu-port-system pd-10 bg-inline bg-fixed" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/port-bg.jpg');">
    <div class="container animatedParent animateOnce">
        <div class="section-header text-center animated fadeInUp">
            <p>our ports</p>
             <h3>Cebu Port System</h3>
        </div>
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

<div class="news-update pd-10 animatedParent animateOnce">
    <div class="container">
        <div class="section-header text-center">
            <p class="animated fadeInUp delay-250">Lorem Ipsum</p>
            <h3 class="animated fadeInUp">News Updates</h3>
        </div>
        <div class="animated fadeInUp">
            <?php
            global $post;
            query_posts(array(
              'post_type' => 'post',
              'posts_per_page' => '3',
              'order' => ASC
            ));
            if ( have_posts() ) : ?>
              <?php while(have_posts()) : the_post(); $post_slug=$post->post_name; ?>
                <div class="col-md-4">
                  <a href="<?php the_permalink(); ?>">
                      <div class="news-holder content-link">
                          <div class="news-update-img bg-inline" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>');">
                              <span class="sr-only"> News Background Image </span>
                          </div>
                          <div class="news-content">
                              <div class="news-head">
                                  <h4><?php the_title(); ?></h4>
                                  <p><?php the_time('M j, Y') ?></p>
                              </div>
                               <div class="news-subhead">
                                  <?php the_content(); ?>
                              </div>
                               <div class="read-more">
                                  <div class="btn-common news-read" role="button">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
                              </div>
                          </div>
                      </div>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        </div>
        
    </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();
