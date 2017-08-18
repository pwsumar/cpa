<?php
/**
 * Template Name: Corporate Profile
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
<!-- END BANNER SEECTION -->
<div class="section-content animatedParent animateOnce">
	<div class="container">
        <div class="section-header text-center animated fadeInUp">
			<h3>Purposes & objectives</h3>
        </div>
        <div class="gap-50"></div>
        <div class="grid-purpose animated fadeInUp delay-250 afterclear">
            <div class="col-md-4">
                <div class="purpose-content">
                    <p>To integrate and coordinate the planning development, construction and operations of ports and port facilities ithin its territorial jurisdiction, consistent with the needs and requirements of the region;</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="purpose-content">
                    <p>To integrate and coordinate the planning development, construction and operations of ports and port facilities ithin its territorial jurisdiction, consistent with the needs and requirements of the region;</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="purpose-content">
                    <p>To integrate and coordinate the planning development, construction and operations of ports and port facilities ithin its territorial jurisdiction, consistent with the needs and requirements of the region;</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-content bg-gray">
    <div class="container">
        <div class="col-md-6" style="position: static;">
            <div class="cebu-port-system-content corporate-port">
                <div class="system-tabholder">
                    <div class="tab-content">
                        <div class="tab-pane fade in active">
                          <h4>Jurisdiction</h4>
                          <div class="gap-20"></div>
                          <p>The territorial jurisdiction of the Authority includes all ports, seas, lakes, rivers and all other navigable inland waterways within the province of Cebu, the City of Cebu, and all other highly urbanized cities which may be created after the enactment of R.A. 7621.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="system-tabholder">
                <div class="bg-inline system-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/map-port.png')">
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
    </div>
</div>
<div class="section-content pd-10 animatedParent animateOnce">
    <div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>governing body</p>
            <h3>The cebu port commission</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250 go">The Cebu Port Commission (CPC) is the governing body of the Cebu Port Authority, which is composed of the following:</p>
        </div>
    </div>
    <div class="grid-holder animated fadeInUp afterclear">
        <div class="container">
            <div class="grid-section afterclear">
                <div class="grid-shadow afterclear">
                    <div class="col-md-6 p-0 grid-height">
                        <div class="grid-block-img grid-border scale-holder">
                            <div class="grid-img bg-inline" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/com1.jpg');"></div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 grid-height">
                        <div class="grid-content">
                            <div class="section-header">
                                <h4>CPC Composition</h4>
                            </div>
                            <div class="grid-desc corp-desc">
                                <p>Chairman</p>
                                <p>Alternate Chairman</p>
                                <p>Vice-chairman* (concurrent as CPA General Manager)</p>
                                <p>Commissioners (representing the following sectors)</p>
                            </div>
                            <div class="grid-desc corp-desc">
                                <p>a. Shipowners and Shipping Operators Sector (2)</p>
                                <p>b. Cargo Handling Labor Sector (2)</p>
                                <p>c. Business Sector (2)</p>
                            </div>
                            <div class="grid-desc corp-desc">
                                <p>* The Vice-Chairman, who shall be designated as the Cebu Port General Manager, shall be elected by the Commissioners from among themselves.</p>

                                <p>The Corporate Board Secretary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-content bg-gray section-color">
    <div class="container">
        <div class="col-md-6" style="position: static;">
            <div class="grid-content">
                <div class="corporate-port">
                    <div class="system-tabholder">
                        <div class="tab-content">
                            <div class="tab-pane fade in active">
                              <h4>7th CPC MEMBERS</h4>
                              <ul class="cpc-members">
                                  <li>
                                      <a href="">DOTr Sec. Arthur P. Tugade</a>
                                  </li>
                                  <li>
                                      <a href="">Usec. Felipe A. Judan & Angelo C. Verdan</a>
                                  </li>
                                  <li>
                                      <a href="">Atty. Jose Mario Elino T. Tan</a>
                                  </li>
                                  <li>
                                      <a href="">Engr. Allan G. Alfon</a>
                                  </li>
                                  <li>
                                      <a href="">Atty. Regina R. Barleta</a>
                                  </li>
                                  <li>
                                      <a href="">Vincent Franco D. Frasco</a>
                                  </li>
                                  <li>
                                      <a href="">Atty. Joselito O. Pedaria</a>
                                  </li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <div class="grid-content text-white">
                  <div class="section-header">
                      <h4>Duties and Functions of Members of the Board:</h4>
                  </div>
                  <div class="grid-desc corp-desc">
                      <p>a. To manage, administer, operate, maintain, improve and develop, coordinate and otherwise govern the activities of all the ports within its territorial jurisdiction;</p>
                  </div>
                  <div class="grid-desc corp-desc">
                      <p>b. To investigate, prepare, adopt, implement and execute a comprehensive and orderly plan for the overall development of all ports within its territorial jurisdiction, and to update such plans, as may be warranted from time to time;</p>
                  </div>
                  <div class="grid-desc corp-desc">
                      <p>c. To raise revenues for the Authority through fees, tolls, charges, rentals and the like for the use of any property, equipment or facility owned or controlled by it; </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="grid-content text-white">
                  <div class="grid-desc corp-desc">
                      <p>(e) To determine by survey and establish by engineering design the exact location, system and character of any and all port facilities which it may own, construct, establish, effectuate, operate or control; </p>
                  </div>
                  <div class="grid-desc corp-desc">
                      <p>(f) To provide and maintain port facilities including accessory buildings and installations within its territorial jurisdiction on its own or through the private sector; </p>
                  </div>
                  <div class="grid-desc corp-desc">
                      <p>(g) To prescribe and enforce rules and regulations on the use of wharves, piers and anchorages by ships and other watercraft;  </p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>
</div>
<div class="section-content animatedParent animateOnce">
    <div class="container">
        <div class="featured-projects">
            <div class="col-md-12">
                <div class="project-item-full">
                    <a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/board1.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/board1.jpg">
                        <span class="caption"><span>Board Committees<i class="fa fa-angle-right"></i></span></span>
                    </a>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="project-item-full">
                    <a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/board2.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/board2.jpg">
                        <span class="caption"><span>Attendance Records<i class="fa fa-angle-right"></i></span></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="project-item-full">
                <a href="" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/board3.jpg)"><img src="<?php echo get_template_directory_uri(); ?>/images/board3.jpg">
                    <span class="caption"><span>Key Officials and Contact Details<i class="fa fa-angle-right"></i></span></span>
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