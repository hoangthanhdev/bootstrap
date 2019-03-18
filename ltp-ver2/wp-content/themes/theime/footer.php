<?php if( !defined('ABSPATH') ) exit;?>
	<div id="footer">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('mars-footer-sidebar');?>
                <?php dynamic_sidebar('mars-footer-sidebar-info');?>
			</div>
			<div class="copyright">
				<?php
                $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                ?>
                <?php if($actual_link=='http://www.hataphim.com/'){?>
                <p><h1>Hata Phim - kênh Xem phim online không quảng cáo phản cảm</h1></p>
                <?php }else{?>
                <p><h3>Hata Phim - kênh Xem phim online không quảng cáo phản cảm</h3></p>
                <?}?>
            </div>
		</div>
	</div><!-- /#footer -->
    <?php wp_footer();?> 
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1566390030320916',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/vi_VN/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</body>
</html>