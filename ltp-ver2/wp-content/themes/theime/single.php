<?php if( !defined('ABSPATH') ) exit;?>
<?php get_header(); ?>
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
		} ?>	
		<div class="row">
			 <div class="col-sm-8 main-content">
				<?php if( have_posts() ):the_post();?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                	<?php 
                		if( has_post_thumbnail() ){
                			the_post_thumbnail( apply_filters( 'get_the_post_thumbnail/size' , 'blog-large-thumb'), array('class'=>'img-responsive') );
                		}
                	?>                    
                    <div class="post-header">
                        <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                        	<?php if( !is_single() ):?>
                        		<a href="<?php the_permalink();?>"><?php the_title();?></a>
                        	<?php else:?>
                        		<?php the_title();?>
                        	<?php endif;?>
                        </h1>
                        <?php do_action( 'mars_blog_metas' );?>
                    </div>
                    
                    <div class="post-entry">
                    	<?php the_content();?>
						<?php 
							$defaults = array(
								'before' => '<ul class="pagination">',
								'after' => '</ul>',
								'before_link' => '<li>',
								'after_link' => '</li>',
								'current_before' => '<li class="active">',
								'current_after' => '</li>',
								'previouspagelink' => '&laquo;',
								'nextpagelink' => '&raquo;'
							);  
							bootstrap_link_pages( $defaults );
						?>
                    </div>
                   
                </div><!-- /.post -->     
				<?php dynamic_sidebar('mars-post-single-below-content-sidebar');?>
				<?php 
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>	
				<?php endif;?>
			</div>
			<?php get_sidebar();?>
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php get_footer();?>
