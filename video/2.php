<?php
function getBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Facebook Video Downloader - Sharescript.net</title>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
    <style type="text/css">
        .video{
            max-width: 450px;
            width: 100%;
        }
    </style>
  </head>

  <body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Facebook Video Downloader</h1>
       <form action="" method="post" novalidate class="py-2">
            <span class="fa fa-video-camera" aria-hidden="true"></span>
            <div style="display: flex;">
            <input type="text" name="video" size="50" class="form-control" placeholder="Dán link facebook vào đây" />
            <button type="submit" class="btn btn-primary">Download</button> 
            </div>  
        </form>
        <?php 
            if (isset($_POST["video"])) {
                $ch = curl_init($_POST["video"]);
                curl_setopt( $ch, CURLOPT_POST, false );
                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
                curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U;   Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
                curl_setopt( $ch, CURLOPT_HEADER, false );
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                $data = curl_exec( $ch );
                curl_close($ch );
                $html_encoded = htmlentities($data);
                if (stripos($data,"hd_src_no_ratelimit:")!=false && stripos($data, "aspect_ratio")!=false) {
                    $start = "hd_src_no_ratelimit:";
                    $end = ",aspect_ratio";
                    $videoHD = getBetween($data,$start,$end);
                } else {
                    $videoHD = "";
                }
                if (stripos($data,"sd_src_no_ratelimit:")!=false && stripos($data, "aspect_ratio")!=false) {
                    $start = "sd_src_no_ratelimit:";
                    $end = ",aspect_ratio";
                    $videoSD = getBetween($data,$start,$end);
                } else {
                    $videoSD = "";
                }
                
            ?>
            <div class="row">
                <div class="col-md-6">
                    <h3>Video HD</h3>
                    <video class="video" controls class="mb-2">
                      <source src=<?=$videoHD?> type="video/mp4">
                      Trình duyệt của bạn không hỗ trợ HTML5
                    </video>
                </div>
                <div class="col-md-6">
                    <h3>Video SD</h3>
                    <video class="video" controls class="mb-2">
                      <source src=<?=$videoSD?> type="video/mp4">
                      Trình duyệt của bạn không hỗ trợ HTML5
                    </video>
                </div>
            </div>

            <?php
                }
            ?>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Code share by <a href="https://sharescript.net">Sharescript.net</a>.</p>
        </div>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>