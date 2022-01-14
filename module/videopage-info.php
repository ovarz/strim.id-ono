<section class="videopage-info">
  <h1 class="videopage-title">
    <?php if($content == 'vod') { ?>Soba Instant Delivery<?php } ?>
    <?php if($content == 'live') { ?>Legend of Lumberjack AX<?php } ?>
  </h1>
  <div class="videopage-date">Senin, 00 Januari 0000 - 00:00</div>
  <ul class="videopage-counter">
    <li>000B Views</li>
    <?php if($content == 'live') { ?>
      <li>000K Watching Now</li>
    <?php } ?>
  </ul>
  <div class="videopage-desc">
    <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
    <p><?php echo $random_summary[array_rand($random_summary)]; ?></p>
  </div>
</section>