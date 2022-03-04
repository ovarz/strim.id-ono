<article class="video-box">
  <a class="video-box-link" 
    <?php if($video_type == 'live') { ?>href="../strim.id-ono/live.php"<?php } ?>
    <?php if($video_type == 'vod') { ?>href="../strim.id-ono/vod.php"<?php } ?>
  >
    <div class="vbl-thumb flex_ori thumb-loading">
      <img class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
      <?php if($video_type == 'live') { ?><div class="vbl-label vbl-label-live">Live</div><?php } ?>
      <?php if($video_type == 'vod') { ?><div class="vbl-label vbl-label-vod">VOD</div><?php } ?>
    </div>
    <div class="vbl-info">
      <div class="vbl-title">
        <?php echo $random_title[array_rand($random_title)]; ?>
      </div>
      <div class="vbl-other">
        <div class="vbl-data">
          <div class="vbl-data-icon">
            <svg class="svgicon svgicon-view" width="20.25" height="18" viewBox="0 0 576 512"><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/></svg>
          </div>
          <div class="vbl-data-label">000M</div>
        </div>
      </div>
    </div>
  </a>
  
</article>