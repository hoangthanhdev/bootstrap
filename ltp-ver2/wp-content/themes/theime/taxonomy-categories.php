<?php if( !defined('ABSPATH') ) exit;?>
<?php get_header(); ?>
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>	
		<div class="row">
			<div class="col-sm-8 main-content">
            	<div class="section-header">
					<a href="<?php echo get_post_type_archive_link(); ?>" title="<?php echo single_cat_title() ?>"><h1><?php echo single_cat_title() ?></h1></a>
                    
                </div>
				<?php if( have_posts() ):?>
				<div class="row video-section meta-maxwidth-230">
					<?php 
					$thumbnail_size = mars_convert_columns_to_thumbnail_size();
					while ( have_posts() ) : the_post();
					?>
					<div class="col-sm-3 col-xs-6 item responsive-height">
						<div class="item-img">
						<?php 
							if( has_post_thumbnail() ){
								print '<a href="'.get_permalink(get_the_ID()).'">'. get_the_post_thumbnail(null, $thumbnail_size , array('class'=>'img-responsive')) . '</a>';
							}
						?>
							<a href="<?php echo get_permalink(get_the_ID()); ?>"><div class="img-hover"></div></a>
						</div>
						<h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
						<?php print apply_filters('mars_video_meta',null);?>
					</div>
					<?php endwhile;?>		
				</div>
				<?php do_action( 'mars_pagination', null );?>
                <?php else:?>
                	<div class="alert alert-info"><?php _e('DANH MỤC CHƯA CẬP NHẬT ... XIN VUI LÒNG QUAY LẠI SAU.','mars')?></div>
                <?php endif;?>
			</div>
			<?php get_sidebar();?>
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php get_footer();?>