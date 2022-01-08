<?php 
  $template='search';
  $page='search';
  $filter='yes'; 
  $search_page='search/result.php'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['STRIMID'].'inc/datasample.php')?>
<?php require ($_SERVER['STRIMID'].'inc/meta.php')?>
<?php require ($_SERVER['STRIMID_ONO'].'inc/header.php')?>
<link rel="stylesheet" type="text/css" href="../strim.id-ono/css/tambuah.css?<?php echo $anticache; ?>"/>

<div class="site-container">
  <?php require ($_SERVER['STRIMID_ONO'].'module/search-box.php')?>
  
  
  
  <div class="search-empty content_center">
    <span>
      <div class="search-empty-icon content_center">
        <img src="img/asset/empty-data.png" />
      </div>
      <div class="search-empty-label">Data not available</div>
    </span>
  </div>
</div>

<?php require ($_SERVER['STRIMID'].'inc/footer.php')?>