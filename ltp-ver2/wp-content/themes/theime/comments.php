<?php if( !defined('ABSPATH') ) exit;?>
<?php
wp_reset_query();
if ( post_password_required() ) {
	return;
}
?>
<div class="comments">
	<div class="post-header">
    	<span class="widget-title">
        	<i class="fa fa-comments"></i> BẠN CẢM THẤY NHƯ THẾ NÀO ?
        </span>
    </div>
<div id="content-comment">
    <div class="fb-comments" data-href="<?php echo get_permalink(get_the_ID());?>" data-numposts="5" data-order-by="reverse_time"></div>
</div>
<div id="fb-root"></div>

</div>