<header>
  <div class="header-left">
    <a class="sticky-button header-logo content_center" href="../strim.id-ono/">
      <img src="img/asset/logo.svg" />
    </a>
  </div>
  
  <div class="header-right">
    <a class="sticky-button header-search <?php if($page == 'search') { ?>sticky-curr<?php } ?> content_center" href="search/">
      <svg class="svgicon svgicon-search" width="18" height="18" viewBox="0 0 18 18"><path d="M8,16a7.93,7.93,0,0,0,4.9-1.69l4.39,4.4,1.42-1.42-4.4-4.39A8,8,0,1,0,8,16ZM8,2A6,6,0,1,1,2,8,6,6,0,0,1,8,2Z"/></svg>
    </a>
    <a class="sticky-button header-share content_center" href="javascript:void(0)">
      <svg class="svgicon svgicon-share" width="18" height="20" viewBox="0 0 448 512"><path d="M352 320c-25.6 0-48.9 10-66.1 26.4l-98.3-61.5c5.9-18.8 5.9-39.1 0-57.8l98.3-61.5C303.1 182 326.4 192 352 192c53 0 96-43 96-96S405 0 352 0s-96 43-96 96c0 9.8 1.5 19.6 4.4 28.9l-98.3 61.5C144.9 170 121.6 160 96 160c-53 0-96 43-96 96s43 96 96 96c25.6 0 48.9-10 66.1-26.4l98.3 61.5c-2.9 9.4-4.4 19.1-4.4 28.9 0 53 43 96 96 96s96-43 96-96-43-96-96-96zm0-272c26.5 0 48 21.5 48 48s-21.5 48-48 48-48-21.5-48-48 21.5-48 48-48zM96 304c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm256 160c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path></svg>
    </a>
    <?php if($template == 'detail') { ?>
    <a class="sticky-button header-info-toggle content_center desktop-only" href="javascript:void(0)">
      <svg class="svgicon svgicon-menu" width="14" height="16" viewBox="0 0 448 512"><path d="M436 124H12c-6.627 0-12-5.373-12-12V80c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12zm0 160H12c-6.627 0-12-5.373-12-12v-32c0-6.627 5.373-12 12-12h424c6.627 0 12 5.373 12 12v32c0 6.627-5.373 12-12 12z"></path></svg>
    </a>
    <?php } ?>
  </div>
</header>