<?php
/**
 * VideoTube Common Hooks
 *
 * @author 		Toan Nguyen
 * @category 	Core
 * @version     1.0.0
 */
if( !defined('ABSPATH') ) exit;
if( !function_exists('mars_blog_metas') ){
	/**
	 * Display Blog meta as Author, Date, Category
	 */
	function mars_blog_metas() {
		global $post;
		$output = '';
		$author = get_the_author_meta('display_name', mars_get_post_authorID($post->ID));
		$category = get_the_category($post->ID); 
		$output .= '
			<div class="post-meta"><i class="fa fa-clock-o"></i> Ngày đăng '.get_the_date().'</div>';
		print $output;
	}
	add_action('mars_blog_metas', 'mars_blog_metas', 10);
}
if( !function_exists('mars_post_meta') ){
	/**
	 * Display Blog meta as Author, Date, Category
	 */
	function mars_post_meta() {
		$views = apply_filters( 'postviews' , mars_get_count_viewed() );
		$output = '
			<div class="meta">
				<span class="date">'. sprintf( __('%s ago','mars'), human_time_diff( get_the_time('U'), current_time('timestamp') ) ).'</span>';
				if( isset( $views ) && $views > 0 ){
					$output .= '<span class="views"><i class="fa fa-eye"></i>'.$views.'</span>';
				}
				$output .= '
			</div>		
		';
		return $ouput;		
	}
	add_filter('mars_post_meta', 'mars_post_meta', 10);
}

if( !function_exists('mars_video_meta') ){
	/**
	 * Display Video Meta as Viewed, Liked
	 */
	function mars_video_meta(){
		global $post, $videotube;
		if( get_post_type( $post->ID ) != 'video' )
			return;
		$views = apply_filters( 'postviews' , mars_get_count_viewed() );
		$datetime_format = isset( $videotube['datetime_format'] ) ? $videotube['datetime_format'] : 'videotube';
		$comments = wp_count_comments( $post->ID );
    $sotap=get_post_meta( $post->ID, 'so-tap', true );
    $year=get_post_meta( $post->ID, 'year', true );
    $phim=get_post_meta( $post->ID, 'phim-le', true );
		$output = '
			<div class="meta">';
				if( isset( $sotap ) && $sotap!=NULL){
					$output .= '<span class="date">Tập '.$sotap.'</span>';
				}
    		if( isset( $phim ) && $phim!=NULL){
					$output .= '<span class="date">Chuẩn '.$phim.'</span>';
				}
				if( $datetime_format != 'videotube' ){
					$output .= '<span class="date">'.get_the_date().'</span>';
				}				
				if( isset( $year ) && $year!=NULL){
					$output .= '<span class="views"><i class="fa fa-clock-o"></i> '.$year.'</span>';
				}
				
				// video category.
				if( has_term( '', 'categories', $post->ID ) && apply_filters( 'mars_post_meta_category' , false) === true ){
					$output .= '<span class="fcategory"><i class="fa fa-folder-open"></i>';
						$output .= get_the_term_list( $post->ID , 'categories');
					$output .= '</span>';
				}

				$output .= '
			</div>
		';
		print $output;
	}
	add_action('mars_video_meta', 'mars_video_meta', 10);
}

if( !function_exists('mars_copyright') ){
	/**
	 * Dislay Copyright in Footer.
	 */
	function mars_copyright(){
		global $videotube;
		if( isset( $videotube['copyright_text'] ) ){
			print '<p>'.$videotube['copyright_text'].'</p>';
		}
		else{
			print '<p>Copyright 2015 &copy; MarsThemeby WordPress & MarsTheme</p>';
		}
	}
	add_action('mars_copyright', 'mars_copyright', 1);
}