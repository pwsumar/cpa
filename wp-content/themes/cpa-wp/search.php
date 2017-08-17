<?php
/**
 * Template Search Page
 *
 * If the user has selected a template page for their About, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

?>
	<div class="section-banner subpage-banner">
		<div class="banner-content text-center transform-50">
			<?php if ( have_posts() ) : ?>
				<h1 class="animated fadeInUpShort go"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
			<?php endif; ?>

		</div>
	</div>
	<div class="section-content animatedParent animateOnce">
		<div class="container-fluid">
			<div class="col-md-8">
				<div class="section-header common-content subpage-header single-blog mw-900">
					<?php while(have_posts()) : the_post(); ?>
						<div class="search-holder">
							<a href="<?php the_permalink(); ?>">
								<h2 class="animated fadeInUp"><?php the_title(); ?></h2>
								<p class="animated fadeInUp time-text"><?php the_time('M j, Y') ?></p>
								<div class="single-image animated fadeInUp delay-250">
									<div class="gap-50"></div>
									<div class="blog-img bg-inline" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>'); "></div>
								</div>
								<div class="single-content animated fadeInUp delay-500">
									<p>
										<?php
										$content = get_the_content();
										echo mb_strimwidth($content, 0, 250, '...')
										?>
									</p>
								</div>
							</a>

							<ul class="list-inline list-social-blog copy-gap copy-gap-top-bottom animated fadeInUp delay-750">
								<li><a class="fa-custom" href="http://www.facebook.com/share.php?u=<?php echo get_permalink( $post->ID ); ?>&title=<?php echo the_title() ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/home?status=<?php echo the_title() ?>+<?php echo get_permalink( $post->ID ); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Tweet"><i class="fa fa-twitter" target="_blank"></i></a></li>
								<li><a href="https://plus.google.com/share?url=<?php echo get_permalink( $post->ID ); ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="Share on Google"><i class="fa fa-google-plus" target="_blank"></i></a></li>
								<li><a class="fa-custom" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink( $post->ID ); ?>&media=<?php echo $thumbnail_src[0] ?>&description=<?php echo the_title() ?>" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest-p"></i></a></li>
							</ul>
							<div class="gap-50"></div>
						</div>

					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-box fade1 animated fadeInUp delay-500">
					<h4>Search the Blog</h4>
					<div class="form-search copy-gap">
						<form role="search" method="get" class="search-form" action="<?php echo site_url(); ?>">
							<label>
								<input type="search" class="form-control" placeholder="Search" value="" name="s">
							</label>
							<input type="submit" class="btn-common btn-pink" value="Search">
						</form>
					</div>
				</div>
				<div class="sidebar-list">
					<h4 class="animated fadeInUp delay-500">Other Articles</h4>
					<div class="sidebar-container animated fadeInUp delay-750">
						<?php
						query_posts(array(
								'post_type' => 'post',
								'order'     => rand,
								'posts_per_page' => 6,
						));
						if ( have_posts() ) : ?>
							<?php while(have_posts()) : the_post(); ?>
								<div class="sidebar-content">
									<a href="<?php the_permalink(); ?>">
										<!--							<div class="news-img-holder">-->
										<!--<!--								<div class="news-img bg-inline" style="background-image: url('--><?php //////echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?><!--'); "></div>-->
										<!--							</div>-->
										<div class="news-content">
											<p><?php the_title(); ?></p>
										</div>
									</a>
								</div>
							<?php endwhile; wp_reset_query(); ?>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php
get_footer();
