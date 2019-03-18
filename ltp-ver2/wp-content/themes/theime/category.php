<?php if( !defined('ABSPATH') ) exit;?>
<?php get_header();?>
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>	
		<div class="row">
			<div class="col-sm-8 main-content">
            	<div class="post-header">
            		<h1><i class="fa fa-play"></i> <?php single_cat_title();?></h1>
                </div>
				<?php if( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('loop','post');?>
				<?php endwhile;?>
                <ul class="pager">
                	<?php posts_nav_link(' ','<li class="previous">'.__('&larr; Older','mars').'</a></li>',' <li class="next">'.__('Newer &rarr;','mars').'</a></li>'); ?>
                </ul>
				<?php else:?>
					<div class="alert alert-info"><?php _e('Oops...nothing.','mars')?></div>
				<?php endif;?>
			</div>
			<?php get_sidebar();?>
		</div><!-- /.row -->
	</div><!-- /.container -->			
<?php get_footer();?>
