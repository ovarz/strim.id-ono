<?php 
  $template='detail';
  $page='package';
  $filter='no'; 
  $search_page='search/'; 
  $content='vod'; 
  $videopage='related';
  require ('inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php require ($_SERVER['STRIMID_ONO'].'inc/header.php')?>
<link rel="stylesheet" type="text/css" href="../strim.id-ono/css/tambuah.css?<?php echo $anticache; ?>"/>

<div class="site-container videopage">
  <div class="videopage-player">
    <?php require ($_SERVER['STRIMID'].'module/videopage-player.php')?>
  </div>
  <div class="videopage-detail">
    <?php require ($_SERVER['STRIMID_ONO'].'module/videopage-tab.php')?>
    <div class="videopage-content">
      <?php for ($i=1; $i <= 1; $i++) { ?>
        <?php $video_type='live'; require ($_SERVER['STRIMID_ONO'].'module/video-list.php')?>
      <?php } ?>
      <?php for ($i=1; $i <= 9; $i++) { ?>
        <?php $video_type='vod'; require ($_SERVER['STRIMID_ONO'].'module/video-list.php')?>
      <?php } ?>
    </div>
  </div>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>