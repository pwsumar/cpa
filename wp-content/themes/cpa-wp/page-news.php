<?php
/**
 * Template Name: News and Publications
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
                <h1>News and Publications</h1>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<div class="news-update pd-10 animatedParent animateOnce">
    <div class="container">
        <div class="animated fadeInUp">
            <?php
            global $post;
            query_posts(array(
              'post_type' => 'post',
              'posts_per_page' => '9',
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
                                  <p><?php the_time('j M Y') ?></p>
                              </div>
                               <div class="news-subhead">
                                  <?php 
                                  $content = get_the_content(); 
                                  echo mb_strimwidth($content, 0, 220, '...') 
                                  ?>
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