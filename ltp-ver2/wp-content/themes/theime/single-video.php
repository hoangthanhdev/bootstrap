<?php if( !defined('ABSPATH') ) exit;?>
<?php get_header();
global $post, $videotube;
$guestlike = isset( $videotube['guestlike'] ) ? $videotube['guestlike'] : 1;
the_post();
$layout = get_post_meta($post->ID,'layout',true) ? get_post_meta($post->ID,'layout',true) : 'small';
$layout = apply_filters( 'mars_video_single_layout' , $layout);
?>
	<?php if( $layout == 'large' ):?>
		<div class="video-wrapper">
			<div class="container">
				<div class="video-info large">

	                <?php
	                /**
	                 * videotube_before_video_title action.
	                 */
	                do_action( 'videotube_before_video_title' );
	                ?>
	                <h1><?php the_title();?></h1>
	                <?php 
	                /**
	                 * videotube_after_video_title action.
	                 */
	                do_action( 'videotube_after_video_title' );
	                ?>
	                <a href="javascript:void(0)" class="likes-dislikes" action="like" id="<?php print get_the_ID();?>"><span class="likes"><i class="fa fa-thumbs-up"></i><label class="likevideo<?php print get_the_ID();?>"><?php if(function_exists('mars_get_like_count')) { print mars_get_like_count( get_the_ID() ); } ?></label></span></a>
	            </div>
                <?php
                /**
                 * videotube_before_video action.
                 */
                do_action( 'videotube_before_video' );
                ?>
                <div class="player player-large <?php print apply_filters( 'aspect_ratio' , 'embed-responsive embed-responsive-16by9');?>">
                	<?php
					/**
					 * mediapress_media action.
					 * hooked mediapress_get_media_object, 10, 1
					 */
					do_action( 'mediapress_media', get_the_ID() );
					?>
         <!-- Ads dap ung-->
        </div><div class="widget_text">
        <div class="textwidget">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- QC đáp ứng -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4624982683278793"
     data-ad-slot="3484828602"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div></div>
				<!--end Ads dap ung-->
				<?php
				/**
				 * mediapress_media_pagination action.
				 * hooked mediapress_get_media_pagination, 10, 1
				 */
				do_action( 'mediapress_media_pagination', get_the_ID() );
				?>
                <?php
                /**
                 * videotube_after_video action.
                 */
                do_action( 'videotube_after_video' );
                ?>
         <!-- 970x250 
        </div><div class="widget_text">
        <div class="textwidget">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-4624982683278793"
     data-ad-slot="4642885659"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </div></div>
				end Ads dap ung-->
                <div id="lightoff"></div>
			</div>
		</div>
	<?php endif;?>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 main-content">
				<?php if( $layout == 'small' ):?>
	            	<div class="post-header">
		                <?php
		                /**
		                 * videotube_before_video_title action.
		                 */
		                do_action( 'videotube_before_video_title' );
		                ?>
                        <h1 class="widget-title"><?php the_title();?></h1>
		                <?php
		                /**
		                 * videotube_after_video_title action.
		                 */
		                do_action( 'videotube_after_video_title' );
		                ?>
	                </div>
	                <?php
	                /**
	                 * videotube_before_video action.
	                 */
	                do_action( 'videotube_before_video' );
	                ?>
	                <div class="player player-small <?php print apply_filters( 'aspect_ratio' , 'embed-responsive embed-responsive-16by9');?>">
                    <div style=" height: 50px;width: 115px;background: red;z-index: 9998!important; position: absolute;font-size: 15px;border-left: 1px solid #9A9A9A;margin-left:85%;opacity:0;"></div>
	                	<?php
						/**
						 * mediapress_media action.
						 * hooked mediapress_get_media_object, 10, 1
						 */
						do_action( 'mediapress_media', get_the_ID() );
						?>
	       </div>
<!-- THONG BAO
        <div class="alert alert-danger alert-dismissable "><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
    </button><strong>Your notification Your notification Your notification</strong> Your notification Your notification Your notification Your notification Your notification Your notification Your notification Your notification Your notification Your notification Your notification </div>
END THONG BAO-->
<!-- Link - Auto 728x90 
                    <div class="widget_text">
                            <div class="textwidget">
								<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4624982683278793"
     data-ad-slot="9792072669"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
												</div>
                                        </div>
                    END ADS LINK-->
<?php
    $note=get_post_meta( $post->ID, 'note', true );
    if( isset( $note ) && $note!=NULL){?>
        <div class="alert alert-info alert-dismissable "><strong>Lưu ý:</strong> <?php echo $note;?>. MONG CÁC BẠN THÔNG CẢM </div>
<?php }?>
        <?php
					/**
					 * mediapress_media_pagination action.
					 * hooked mediapress_get_media_pagination, 10, 1
					 */
					do_action( 'mediapress_media_pagination', get_the_ID() );
					?>
	                <?php
	                /**
	                 * videotube_after_video action.
	                 */
	                do_action( 'videotube_after_video' );
	                ?>
	                <div id="lightoff"></div>
				<?php endif;?>
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
<!-- ADS 320x 100 
<div class="col-sm-12">
		<div class="col-sm-6">
			<span class="ads-320-100">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				 320x100 
				<ins class="adsbygoogle"
					 style="display:inline-block;width:320px;height:100px"
					 data-ad-client="ca-pub-4624982683278793"
					 data-ad-slot="1967644264"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</span>
        </div>
		<div class="col-sm-6">
			<span class="ads-320-100">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				 320x100 
				<ins class="adsbygoogle"
					 style="display:inline-block;width:320px;height:100px"
					 data-ad-client="ca-pub-4624982683278793"
					 data-ad-slot="1967644264"></ins>
				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</span>
		</div>
</div> 
END ADS 320x 100 -->
            	<div class="row video-options">
                    <div class="col-sm-3 col-xs-6 box-comment">
                        <a href="javascript:void(0)" class="option comments-scrolling">
                            <i class="fa fa-comments"></i>
                            <span class="option-text"><?php _e('Bình luận','mars')?></span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-share">
                        <a href="javascript:void(0)" class="option share-button" id="off">
                            <i class="fa fa-share"></i>
                            <span class="option-text"><?php _e('Chia sẽ','mars')?></span>
                        </a>
                    </div>
                    <div class="col-sm-3 col-xs-6 box-turn-off-light">
						<!-- LIGHT SWITCH -->
						<a href="javascript:void(0)" class="option switch-button">
                            <i class="fa fa-lightbulb-o"></i>
							<span class="option-text"><?php _e('Tắt đèn','mars')?></span>
                        </a>
                    </div>
                <div class="col-sm-3 col-xs-6 box-download">
						<!-- LIGHT SWITCH -->
						<a href="javascript:void(0)" class="option download">
                            <i class="fa fa-download"></i>
							<span class="option-text"><?php _e('Tải Phim','mars')?></span>
                        </a>
                    </div>
        </div>
				<!-- IF SHARE BUTTON IS CLICKED SHOW THIS -->
				<?php
					$post_data = mars_get_post_data($post->ID);
					$url_image = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id($post->ID)) : null;
					$current_url = get_permalink( $post->ID );
					$current_title = $post_data->post_title;
					$current_trimHTML_Content = esc_html($post_data->post_content);
				?>
				<div class="row social-share-buttons">
					<div class="col-xs-12">
						<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php print $current_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="" /></a>
						<a target="_blank" href="https://twitter.com/home?status=<?php print $current_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="" /></a>
						<a target="_blank" href="https://plus.google.com/share?url=<?php print $current_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/googleplus.png" alt="" /></a>
						<a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php print $current_url;?>&media=<?php print $url_image;?>&description=<?php print $current_trimHTML_Content;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pinterest.png" alt="" /></a>
						<a target="_blank" href="http://www.reddit.com/submit?url"><img src="<?php echo get_template_directory_uri(); ?>/img/reddit.png" alt="" /></a>
						<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print $current_url;?>&title=<?php print $current_title;?>&summary=<?php print $current_trimHTML_Content;?>&source=<?php print home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="" /></a>
						<a target="_blank" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st._surl=<?php print $current_url;?>&title=<?php print $current_title;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/odnok.png" alt="" /></a>
						<a target="_blank" href="http://vkontakte.ru/share.php?url=<?php print $current_url;?>"><img src="<?php echo get_template_directory_uri(); ?>/img/vkontakte.png" alt="" /></a>
						<a href="mailto:?Subject=<?php print $current_title;?>&Body=<?php printf( __('I saw this and thought of you! %s','mars'), $current_url );?>"><img src="<?php echo get_template_directory_uri(); ?>/img/email.png" alt="" /></a>
					</div>
				</div>
				<div class="video-details">
					<?php
						$author = get_the_author_meta('display_name', mars_get_post_authorID($post->ID));
					?>
                    <div class="post-entry">
                    <!-- Tab-->
<div class="yourcustomclass">
        <ul id="oscitas-tabs-0" class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#pane-0-0" class=""><h3>Thông tin phim <?php echo get_the_title();?></h3></a></li>
            <li class=""><a data-toggle="tab" href="#pane-0-1" class=""><h3>Nội dung Phim <?php echo get_the_title();?></h3></a></li>
        </ul>
         <div class="tab-content">
     			<div id="pane-0-0" class="tab-pane active">
                    <!-- Tab 1-->
                  		<div id="content-film">
                            <div class="item-img">
                            <?php if(has_post_thumbnail()){
                                                            echo get_the_post_thumbnail(null,'video-featured', array('class'=>'img-responsive')) ;;
                                                        }
                            ?>
                            </div>
                            <div id="info-film">
                            	<h2><a title="<?php echo get_the_title()?>" href="<?php echo get_permalink(get_the_ID());?>">Phim <?php echo get_the_title()?></a></h2>
                            	<span class="meta">
                                        <!--row--->
                                    <span class="meta-detail">
                                        <?php
                                        $sotap=get_post_meta( $post->ID, 'so-tap', true );
                                        if( isset( $sotap ) && $sotap!=NULL){?>
                                        <span class="meta-info">Số Tập</span>
                                        <a href="javascript:void(0);"><?php echo $sotap; ?></a>
                                        <?php }	?>
                                    </span>
                                        <!--row--->
                                   <span class="meta-detail">
                                        <?php
                                        $tg=get_post_meta( $post->ID, 'thoi-gian', true );
                                        if( isset( $tg ) && $tg!=NULL){?>
                                        <span class="meta-info">Thời gian</span>
                                        <a href="javascript:void(0);"><?php echo $tg; ?> Phút</a>
                                        <?php }	?>
                                    </span>
                                        <!--row--->
                                   <span class="meta-detail">
                                        <?php
                                        $qg=get_post_meta( $post->ID, 'quoc-gia', true );
                                        if( isset( $qg ) && $qg!=NULL){?>
                                        <span class="meta-info">Quốc gia</span>
                                        <a href="javascript:void(0);"><?php echo $qg; ?></a>
                                        <?php }	?>
                                    </span>
                                        <!--row--->
                                   <span class="meta-detail">
                                        <?php
                                        $tk=get_post_meta( $post->ID, 'tu-khoa', true );
                                        if( isset( $tk ) && $tk!=NULL){?>
                                        <span class="meta-info">Từ khóa</span>
                                        <?php echo $tk; ?>
                                        <?php }	?>
                                    </span>
                                        <!--row--->
                                </span>
                            </div>
                         </div>
                         <!-- End Tab 1-->
                     </div>
                     <div id="pane-0-1" class="tab-pane ">
                     	<h2><a title="<?php echo get_the_title()?>" href="<?php echo get_permalink(get_the_ID());?>">Phim <?php echo get_the_title()?></a></h2>
                      <!-- End Tab 2-->
                        <?php the_content();?>
                      <!-- End Tab 2-->
                    </div>
    </div>
</div>
<!-- End Tab-->
					</div>
                </div>
				<?php dynamic_sidebar('mars-video-single-below-sidebar');?>
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div>
			<?php get_sidebar();?>
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php get_footer();?>
