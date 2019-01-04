<p class="muc">Để lại ý kiến của bạn</p>
<!-- Load Facebook SDK for JavaScript -->
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

<!-- Your embedded comments code -->
<div id="content-comment">
    <div class="fb-comments" data-href="https://lytaphim.com/<?php echo $row_phim["post_name"];?>.html" data-numposts="5" data-order-by="reverse_time" data-width="100%" colorscheme="dark" data-colorscheme="dark"></div>
</div>
<div id="fb-root"></div>