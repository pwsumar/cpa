<?php
/**
 * Template Name: Accordion Page
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
                <h1>Transparency Seal</h1>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<div class="section-content animatedParent animateOnce">
	<div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
			<h3>Transparency Seal</h3>
        </div>
        <div class="content-common">
            <p class="animated fadeInUp delay-250">
            	A pearl buried inside a tightly-shut shell is practically worthless. Government information is a pearl, meant to be shared with the public in order to maximize its inherent value.
                <br>The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards openness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more open to citizen engagement; on the other, to invite the Filipino citizenry to exercise their right to participate in governance.
                <br>This initiative is envisioned as a step in the right direction towards solidifying the position of the Philippines as the Pearl of the Orient – a shining example for democratic virtue in the region.
            </p>
        </div>
        <div class="accordion-holder">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      I. The agency's mandates and functions, names of its officials with their positions and designations, and contact information 
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                        <p>
                            <a href="">a. Powers and Functions</a>
                        </p> 
                        <p>
                            <a href="">b. Vision, Mission, Corporate Values and Strategy Map</a>
                        </p> 
                        <p>
                            <a href="">c. Key Officials and Contact Details</a>
                        </p>  
                        <p>
                            <a href="">d. Organizational Chart</a> (by function)
                        </p>  
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      II. Financial Accountability Reports (FARs) 
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <p>
                        a. FAR <a href="">2016</a> (Unaudited FAR as of 30 November 2016)
                    </p> 
                    <p>
                        b. FAR <a href="">2015</a>
                    </p> 
                    <p>
                        c. FAR <a href="">2014</a>
                    </p>  
                    <p>
                        d. FAR <a href="">2013</a>
                    </p>  
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      III. CPA Highlights of Accomplishments
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p>
                        <a href="">FY 2016</a>
                    </p> 
                    <p>
                        <a href="">FY 2015</a>
                    </p> 
                    <p>
                        <a href="">FY 2014</a>
                    </p>  
                    <p>
                        <a href="">FY 2013</a>
                    </p>  
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<?php
    endwhile; else :
endif;
get_footer();