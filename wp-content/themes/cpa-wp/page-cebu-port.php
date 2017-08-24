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
<div class="page page-port-info">
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
  <?php
      if(have_rows('foreign_operators_section')):
        while( have_rows('foreign_operators_section') ) : the_row();
          $section_title = get_sub_field('section_title');
          $sub_title = get_sub_field('sub_title');
          $content = get_sub_field('content');
  ?>
  <div class="section-content content-intro animatedParent animateOnce">
      <div class="container">
          <div class="section-header text-center animated fadeInUp">
              <p><?php echo $sub_title; ?></p>
              <h3><?php echo $section_title; ?></h3>
          </div>
          <div class="content-common content-port-info text-center animated fadeInUp">
              <span class="copy-block">Import / Export Processing</span>
              <p class="animated fadeInUp delay-250">
                  <?php echo $content; ?>
              </p>
          </div>
      </div>
  </div>
  <div class="section-content content-operators animatedParent">
      <div class="container-custom">
        <div class="row">
          <?php
              if(have_rows('lists')):
                while( have_rows('lists') ) : the_row();
                  $title = get_sub_field('title');
                  $image = get_sub_field('image');
          ?>
            <div class="col-md-2 animated fadeInUp">
              <div class="col-content-wrap">
                <div class="col-img-wrap">
                  <div class="col-img-item" style="background-image: url(<?php echo $image; ?>);"></div>
                </div>
                <p class="text-center"><?php echo $title; ?></p>
              </div>
            </div>
          <?php endwhile;endif; ?>
        </div>
      </div>
  </div>
  <?php endwhile;endif; ?>
  <div class="section-content content-services animatedParent animateOnce">
      <div class="container">
          <div class="section-header text-center animated fadeInUp">
              <p class="copy-header animated fadeInUp">Services for Operations</p>
          </div>
          <div class="content-common text-center animated fadeInUp">
            <div class="row">
              <?php
                  if(have_rows('services_for_operations')):
                    while( have_rows('services_for_operations') ) : the_row();
                      $title = get_sub_field('title');
                      $content = get_sub_field('content');
              ?>
                <div class="col-md-4">
                  <div class="col-content-wrap">
                    <i class="copy-icon icon-service"></i>
                    <p><?php echo $title; ?></p>
                    <span class="copy-block"><?php echo $content; ?></span>
                  </div>
                </div>
            <?php endwhile;endif; ?>
            </div>
            </div>
          </div>
      </div>
  </div>
  <div class="section-content section-other-services animatedParent animateOnce" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-other-services.jpg');">
    <div class="container-custom">
      <div class="section-header text-center animated fadeInUp">
        <p class="copy-header">OTHER SERVICES</p>
        <span class="copy-block">
        For contact information of any of the following services, you may contact the Business Marketing and Development Department of CPA at 63.32.4129024 or 63.32.2321461 local 25.
        </span>
      </div>
      <div class="content-common text-center">
        <ul class="animated fadeInUp">
          <?php
              if(have_rows('other_services')):
                while( have_rows('other_services') ) : the_row();
                  $service_title = get_sub_field('service_title');
          ?>
            <li><?php echo $service_title; ?></li>
          <?php endwhile;endif ?>
        </ul>
      </div>
    </div>
  </div>
  <?php
    if(have_rows('facilities')): the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
  ?>
  <div class="section-content content-facilities animatedParent animateOnce">
    <div class="row">
      <div class="col-md-6" style="background-color: #0070ba;">
        <div class="col-content-wrap">
          <div class="section-header text-center animated fadeInLeft">
            <h3><?php echo $title; ?></h3>
          </div>
          <div class="content-common text-center animated fadeInLeft">
            <p><?php echo $content; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="background-color: #eceff1;">
        <div class="col-content-wrap">
          <div class="content-common">
              <span class="copy-block animated fadeInRight">Its facilities include:</span>
              <ul class="animated fadeInRight">
                <?php
                  if(have_rows('lists')):
                    while( have_rows('lists') ) : the_row();
                      $title = get_sub_field('title');
                ?>
                <li class="copy-block"><?php echo $title; ?></li>
                <?php endwhile;endif; ?>
              </ul>
            <a class="animated fadeInRight" href="#">
              READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <?php
    if(have_rows('domestic_ports_services')): the_row();
        $title = get_sub_field('title');
        $sub_title = get_sub_field('sub_title');
  ?>
  <div class="section-content content-domestic animatedParent animateOnce">
    <div class="section-header text-center animated fadeInUp">
      <h3><?php echo $title; ?></h3>
      <p><?php echo $sub_title; ?></p>
    </div>
    <div class="row">
      <?php
        if(have_rows('lists')):
          while( have_rows('lists') ) : the_row();
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $image = get_sub_field('image');
      ?>
      <div class="col-md-4">
        <div class="grid-holder animated fadeInUp afterclear">
              <div class="grid-section afterclear">
                  <div class="grid-shadow afterclear">
                      <div class="col-md-12 p-0 grid-height">
                          <div class="grid-block-img grid-border scale-holder">
                              <div class="grid-img bg-inline" style="background-image: url('<?php echo $image; ?>');">
                              </div>
                              <div class="grid-content">
                                  <div class="section-header">
                                      <h4><?php echo $title; ?></h4>
                                  </div>
                                  <div class="grid-desc corp-desc">
                                    <p>
                                      <?php echo $content; ?>
                                    </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
      </div>
      <?php endwhile;endif; ?>
    </div> 
  </div>
<?php endif; ?>
<?php
  if(have_rows('services_for_inter-island')):
    while( have_rows('services_for_inter-island') ) : the_row();
      $main_title = get_sub_field('main_title');
?>
  <div class="section-content content-services content-inter-island animatedParent animateOnce">
      <div class="container-custom">
          <div class="section-header text-center animated fadeInUp">
              <p class="copy-header"><?php echo $main_title; ?></p>
          </div>
          <div class="content-common text-center">
            <div class="row">
              <?php
                if(have_rows('lists')):
                  while( have_rows('lists') ) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');
              ?>
              <div class="col-md-4 animated fadeInUp">
                <div class="col-content-wrap">
                  <i class="copy-icon icon-service icon-service-2"></i>
                  <p><?php echo $title; ?></p>
                  <span class="copy-block"><?php echo $content; ?></span>
                  <div class="read-more">
                      <div class="btn-common news-read" role="button">
                      <a href="<?php echo $link; ?>">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                      </div>
                  </div>
                </div>
              </div>
            <?php endwhile;endif; ?>
            </div>
          </div>
      </div>
  </div>
<?php endwhile;endif; ?>
  <div class="section-content section-other-services animatedParent animateOnce" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg-other-services.jpg');">
    <div class="container-custom">
      <div class="section-header text-center animated fadeInUp">
        <p class="copy-header">OTHER SERVICES</p>
        <span class="copy-block">
        For contact information of any of the following services, you may contact the Business Marketing and Development</br>
        Department of CPA at 63.32.4129024 or 63.32.2321461 local 25.
        </span>
      </div>
      <div class="content-common text-center">
        <ul class="animated fadeInUp">
          <?php
              if(have_rows('other_services')):
                while( have_rows('other_services') ) : the_row();
                  $service_title = get_sub_field('service_title');
          ?>
            <li><?php echo $service_title; ?></li>
          <?php endwhile;endif ?>
        </ul>
      </div>
    </div>
  </div>
  <?php
    if(have_rows('facilities_domestic')):
      while( have_rows('facilities_domestic') ) : the_row();
        $title = get_sub_field('title');
        $content = get_sub_field('content');
  ?>
  <div class="section-content content-facilities content-domestic animatedParent animateOnce">
    <div class="row">
      <div class="col-md-6" style="background-color: #0070ba;">
        <div class="col-content-wrap">
          <div class="section-header text-center animated fadeInLeft">
            <h3><?php echo $title; ?></h3>
          </div>
          <div class="content-common text-center animated fadeInLeft">
            <p>
            <span class="copy-block">Baseport</span>
            <?php echo $content; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6" style="background-color: #eceff1;">
        <div class="col-content-wrap">
          <div class="content-common">
              <ul class="animated fadeInRight">
                <?php
                    if(have_rows('lists')):
                      while( have_rows('lists') ) : the_row();
                        $title = get_sub_field('title');
                  ?>
                <li class="copy-block"><?php echo $title; ?></li>
                <?php endwhile;endif; ?>
              </ul>
            <a class="animated fadeInRight" href="#">
              READ MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;endif; ?>
</div>
<?php
    endwhile; else :
endif;
get_footer();