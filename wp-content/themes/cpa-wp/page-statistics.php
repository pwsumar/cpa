<?php
/**
 * Template Name: Statistics
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
                <h1>Statistics</h1>
            </div>
        </div>
    </div>
</div>
<!-- END BANNER SEECTION -->
<div class="section-content animatedParent animateOnce">
	<div class="container">
        <div class="section-header text-center animated fadeInUp">
            <p>overview</p>
			<h3>Statistics</h3>
        </div>
        <div class="content-common text-center">
            <p class="animated fadeInUp delay-250">
            	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
            </p>
        </div>
    </div>
	<div class="container">
		<div class="l1">
			<?php $i = 0; while (have_rows('list_grid')): the_row(); ?>
			    <?php if (($i == 1) ) : ?>

			            <div class="l1-content afterclear">
			                <?php if( have_rows('list_grid_content') ):  ?>
			                    <?php $cntr = 0; while( have_rows('list_grid_content') ): the_row(); ?>
			                        <?php if ($cntr%2 == 1) : ?>
			                        <a href="<?php echo site_url(); ?><?php the_sub_field('list_grid_link'); ?>">
			                            <div class="col-md-6 p-0 animated fadeInDownShort">
			                                <div class="l1-content-col">
			                                    <div class="l1-img-holder">
			                                        <div class="l1-img bg-inline" style="background-image: url('<?php the_sub_field('list_grid_image'); ?>');"></div>
			                                    </div>

			                                    <div class="l1-desc">
			                                        <h3><?php the_sub_field('list_grid_title'); ?></h3>
			                                        <?php the_sub_field('list_grid_description'); ?>
			                                    </div>

			                                </div>
			                            </div>
			                        </a>
			                       <?php else : ?>
			                        <a href="<?php echo site_url(); ?><?php the_sub_field('list_grid_link'); ?>">
			                            <div class="col-md-6 p-0 animated fadeInUpShort">
			                                <div class="l1-content-col">
			                                    <div class="l1-desc">
			                                        <h3><?php the_sub_field('list_grid_title'); ?></h3>
			                                        <?php the_sub_field('list_grid_description'); ?>
			                                    </div>
			                                    <div class="l1-img-holder">
			                                        <div class="l1-img bg-inline" style="background-image: url('<?php the_sub_field('list_grid_image'); ?>');"></div>
			                                    </div>
			                                </div>
			                            </div>
			                        </a>
			                        <?php endif; ?>
			                    <?php $cntr++; endwhile; ?>
			                <?php endif; ?>
			            </div>

			    <?php else : ?>
			        <?php if( have_rows('list_grid_content') ):  ?>
			            <?php while( have_rows('list_grid_content') ): the_row(); ?>
			                <a href="<?php echo site_url(); ?><?php the_sub_field('list_grid_link'); ?>">
			                    <div class="l1-content afterclear">
			                        <div class="col-md-6 <?php if($i == 2) : echo 'pull-right'; else : echo 'pull-left'; endif; ?> p-0 animated fadeInRightShort">
			                            <div class="l1-img-holder">
			                                <div class="l1-img bg-inline" style="background-image: url('<?php the_sub_field('list_grid_image'); ?>');"></div>
			                            </div>
			                        </div>
			                        <div class="col-md-6 p-0 animated fadeInLeftShort">
			                            <div class="l1-desc">
			                                <h3><?php the_sub_field('list_grid_title'); ?></h3>
			                                <?php the_sub_field('list_grid_description'); ?>
			                            </div>
			                        </div>
			                    </div>
			                </a>
			                <?php endwhile; ?>
			        <?php endif; ?>
			    <?php endif; ?>
			<?php $i++; endwhile; ?>
		</div>
	</div>
</div>
<?php
    endwhile; else :
endif;
get_footer();