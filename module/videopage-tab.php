<section class="videopage-tab">
  <a class="vpt-link <?php if($videopage == 'info') { ?>vpt-curr<?php } ?>" href="../strim.id-ono/<?php echo $content; ?>.php">
    Info
  </a>
  <?php if($content == 'live') { ?>
    <a class="vpt-link <?php if($videopage == 'chat') { ?>vpt-curr<?php } ?>" href="../strim.id-ono/chat.php">
      Chat
    </a>
  <?php } ?>
  <a class="vpt-link <?php if($videopage == 'related') { ?>vpt-curr<?php } ?>" href="../strim.id-ono/related.php">
    Related
  </a>
</section>