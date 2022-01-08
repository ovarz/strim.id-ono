<div class="detail-info-title">
  <?php if($detail_content == 'live') { ?>JR Yamanote - Tokyo - 4K Ultra HD<?php } ?>
  <?php if($detail_content == 'vod') { ?>Soba Instant Delivery<?php } ?>
</div>
<div class="detail-info-other">
  <span <?php if($detail_content == 'live') { ?>style='display:block; border-right:0;'<?php } ?>>Senin, 00 Januari 0000</span>
  <span>000K Views</span>
  <?php if($detail_content == 'live') { ?><span>000 Watching</span><?php } ?>
</div>
<div class="detail-info-desc"><?php echo $random_summary[array_rand($random_summary)]; ?></div>