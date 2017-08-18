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
                  <h1>Business</h1>
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
              <p class="animated fadeInUp delay-250">
                Processing of Private Port Permits is primarily governed by CPA Administrative Order 02-2010 or the Omnibus Policy on the Development, Construction, and Operation of Private Ports under the Jurisdiction of Cebu Port Authority. This Policy is effective as of August 2010.
              </p>
          </div>
      </div>
  </div>
  <div class="section-content content-facilities content-accreditation animatedParent animateOnce">
    <div class="row">
      <div class="col-md-6 float-right" style="background-color: #016eb6;">
        <div class="col-content-wrap">
          <div class="section-header animated fadeInRight">
            <h3 class="copy-relative">Accreditations of Security Services</h3>
          </div>
          <div class="content-common animated fadeInRight">
            <p>In considering an application for a Permit to Develop, Construct and Operate a private commercial port, the following parameters must be observed:</p>
            <ul class="animated fadeInRight">
              <li class="copy-block">14 units 35 tons SWL Rubber-tired yard gantry cranes (transtainers)</li>
              <li class="copy-block">That it does not duplicate an equally functional facility or service adequately provided by the nearest government port or existing private port authorized by the Authority to operate, but that it provides for a facility and/or service which the government port is incapable of providing, when deemed necessary by the Authority;</li>
              <li class="copy-block">That it should be obligated to accommodate spill-over demands from government ports when deemed necessary by the Authority;</li>
            </ul>
            <a class="animated fadeInRight" href="#">
              VIEW MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-content-wrap">
          <div class="section-header text-center animated fadeInLeft">
            <h3 class="copy-relative">Accreditations of Security Services</h3>
          </div>
          <div class="content-common text-center animated fadeInLeft">
            <p>Private Ports are classified according to its nature of operations. A port may operate either commercially or non-commercially or both. A commercial port is a port facility which offers its port and services to the general public. </p>
            <a class="copy-block animated fadeInRight" href="#">
              VIEW MORE <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-content content-application bg-gray animatedParent animateOnce">
    <div class="container">
      <div class="section-header text-center animated fadeInUp">
        <h3>Procedure for Application and Applicable Fees</h3>
      </div>
      <div class="content-common text-center animated fadeInUp">
        <p>As a general rule, all applications for the development, construction and operation of private ports shall be granted subject to compliance with this Order and other government laws and regulations.</p>
      </div>
    </div>
  </div>
  <div class="section-content content-application content-application-construct copy-relative bg-gray animatedParent animateOnce" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/bg-permit.jpg);">
    <div class="container">
      <div class="section-header text-center animated fadeInUp">
        <h3>PERMIT TO CONSTRUCT PORT</h3>
      </div>
      <div class="content-common text-center animated fadeInUp">
        <p>Application for a Permit to Construct shall be submitted to the Office of the General Manager for evaluation and approval of the Cebu Port Commission.</p>
        <p>Requirements for Application of Permit to Construct</p>
      </div>
    </div>
  </div>
  <div class="section-content content-application content-application-operate bg-gray animatedParent animateOnce">
    <div class="container">
      <div class="section-header text-center animated fadeInUp">
        <h3>PERMIT TO OPERATE PORT</h3>
      </div>
      <div class="content-common text-center animated fadeInUp">
        <p>Private port investors who have satisfactorily established new port infrastructures as well as port owners/operators who have developed and operated their facilities prior to the Authority’s creation shall register with the Cebu Port Authority.</p>
        <p>A Certificate of Registration/Permit to Operate (COR/PTO) shall be issued to newly constructed ports, existing private ports without any valid permit, existing ports with Temporary Certificate of Registration and those applying for Renewal of Permit to Operate upon compliance with the following requirements:</p>
        <div class="read-more">
            <div class="btn-common news-read" role="button">
            <a href="#">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-content content-application content-application-fee animatedParent animateOnce">
    <div class="container">
      <div class="section-header text-center animated fadeInUp">
        <h3>PERMIT TO OPERATE FEE</h3>
      </div>
      <div class="content-common text-center animated fadeInUp">
        <p>Upon approval of Permit to Operate, there shall be a Privilege fee to be paid to the Authority every first quarter of every year during the effectivity of the COR/PTO, as specified below:</p>
        <div class="row">
          <div class="col-md-6 animated fadeInLeft">
            <div class="col-content-wrap copy-relative">
              <div class="fee-head">
                <h4>Classification</h4>
              </div>
              <div class="fee-content">
                <ul>
                  <li class="copy-block text-left copy-relative">Private Commercial Port</li>
                  <li class="copy-block text-left copy-relative">Private Non-Commercial Port</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 animated fadeInRight">
            <div class="col-content-wrap copy-relative">
              <div class="fee-head">
                <h4>Amount</h4>
              </div>
              <div class="fee-content">
                <ul>
                  <li class="copy-block text-left copy-relative">Php 80,000 VAT</li>
                  <li class="copy-block text-left copy-relative">Php 30,000 VAT</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p class="copy-note animated fadeInUp">Note: All private ports that handle both non-commercial and commercial cargoes shall be considered as private commercial ports.</p>
      </div>
    </div>
  </div>
</div>
<?php
    endwhile; else :
endif;
get_footer();