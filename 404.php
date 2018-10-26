<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section class="flw whoWeArea">
	<div class="container">
		<div class="row">
			<div class="col col-md-12 col-sm-12 col-xs-12">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>
					<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<div>
							<input type="text" style="width:25%" class="inputBox" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" id="s" />
							<input type="submit" value="Search" style="background: #484342 none repeat scroll 0 0; border: medium none; border-radius: 3px; color: #fff; 
    height: 35px;    line-height: 35px;    padding: 0 25px;" />
						</div>
					</form>

					



					<?php // get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div>
	</div>
</div>
</section>
<?php get_footer(); ?>
