<?php
/**
 * Template Name: Business
 *
 *
 *
 */

get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="page page-business page-custom">
  <!-- BANNER SECTION -->
  <div class="section-banner banner-subpage">
      <div class="banner-bg bg-inline bg-gradient" style="background-image: url('http://cpa-wp/wp-content/uploads/2017/08/banner-cpa.png');"></div>
      <div class="transform-50">
          <div class="container">
              <div class="banner-content text-center animatedParent animateOnce">
                  <span class="copy-block copy-before-title">lorem ipsum</span>
                  <h1><?php the_title(); ?></h1>
              </div>
          </div>
      </div>
  </div>
  <div class="section-content content-intro content-permit bg-gray animatedParent animateOnce">
      <div class="container">
          <div class="section-header text-center animated fadeInUp">
              <h3>Port Permits</h3>
              <div class="icon icon-line copy-relative"></div>
          </div>
          <div class="content-common content-port-info text-center animated fadeInUp">
              <?php the_content(); ?>
          </div>
      </div>
  </div>

  <div class="section-content content-facilities content-accreditation animatedParent animateOnce">
    <div class="row">
      <?php
        if(have_rows('accreditation')):
          while( have_rows('accreditation') ) : the_row();
            $main_title = get_sub_field('main_title');
            $link = get_sub_field('link');
            $content = get_sub_field('content');
      ?>
      <div class="col-md-6" style="background-color: #016eb6;">
        <div class="col-content-wrap">
          <div class="section-header animated fadeInRight">
            <h3 class="copy-relative"><?php echo $main_title; ?></h3>
          </div>
          <div class="content-common animated fadeInRight">
            <p><?php echo $content; ?></p>
            <ul class="animated fadeInRight">
              <?php if(have_rows('lists')):
                while( have_rows('lists') ) : the_row();
                  $title = get_sub_field('title');
              ?>
                <li class="copy-block"><?php echo $title; ?></li>
              <?php endwhile;endif; ?>
            </ul>
            <a class="animated fadeInRight" href="<?php echo $link; ?>">
              VIEW MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    <?php endwhile;endif; ?>
    </div>
  </div>
  <?php
    if(have_rows('procedure')): the_row(); 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
  ?>
    <div class="section-content content-application bg-gray animatedParent animateOnce">
      <div class="container">
        <div class="section-header text-center animated fadeInUp">
          <h3><?php echo $title; ?></h3>
        </div>
        <div class="content-common text-center animated fadeInUp">
          <p><?php echo $content; ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php
    if(have_rows('permit_to_construct')): the_row(); 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $background_image = get_sub_field('background_image');
  ?>
    <div class="section-content content-application content-application-construct copy-relative bg-gray animatedParent animateOnce" style="background-image: url('<?php echo $background_image; ?>');">
      <div class="container">
        <div class="section-header text-center animated fadeInUp">
          <h3><?php echo $title; ?></h3>
        </div>
        <div class="content-common text-center animated fadeInUp">
          <p><?php echo $content; ?></p>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php
    if(have_rows('permit_to_operate')): the_row(); 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $link = get_sub_field('link');
  ?>
    <div class="section-content content-application content-application-operate bg-gray animatedParent animateOnce">
      <div class="container">
        <div class="section-header text-center animated fadeInUp">
          <h3><?php echo $title; ?></h3>
        </div>
        <div class="content-common text-center animated fadeInUp">
          <p>
            <?php echo $content; ?>
          </p>
          <div class="read-more">
              <div class="btn-common news-read" role="button">
              <a href="<?php echo $link; ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
  <?php
    if(have_rows('permit_to_operate_fee')): the_row(); 
        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $note = get_sub_field('note');
  ?>
  <div class="section-content content-application content-application-fee animatedParent animateOnce">
    <div class="container">
      <div class="section-header text-center animated fadeInUp">
        <h3><?php echo $title; ?></h3>
      </div>
      <div class="content-common text-center animated fadeInUp">
        <p><?php echo $content; ?></p>
        <div class="row">
          <?php if(have_rows('list_box')):
            while(have_rows('list_box')): the_row();
            $title = get_sub_field('title');
          ?>
          <div class="col-md-6 animated fadeInLeft">
            <div class="col-content-wrap copy-relative">
              <div class="fee-head">
                <h4><?php echo $title; ?></h4>
              </div>
              <div class="fee-content">
                <ul>
                  <?php if(have_rows('lists')):
                    while(have_rows('lists')): the_row();
                    $title = get_sub_field('title');
                  ?>
                  <li class="copy-block text-left copy-relative"><?php echo $title; ?></li>
                  <?php endwhile;endif; ?>
                </ul>
              </div>
            </div>
          </div>
        <?php endwhile;endif; ?>
        </div>
        <p class="copy-note animated fadeInUp">Note: <?php echo $note; ?></p>
      </div>
    </div>
  </div>
<?php endif; ?>
</div>
<?php
    endwhile; else :
endif;
get_footer();