<?php
/**
 * 壁纸
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

  <link href="<?= $this->options->themeUrl . '/css/joe.wallpaper.min.css'; ?>" rel="stylesheet" />
<link href="<?= $this->options->themeUrl . '/css/joe.normalize.min.css'; ?>" rel="stylesheet" />

<link href="<?= $this->options->themeUrl . '/css/joe.global.min.css'; ?>" rel="stylesheet" />
<link href="<?= $this->options->themeUrl . '/css/joe.mode.min.css'; ?>" rel="stylesheet" />

<link href="<?= $this->options->themeUrl . '/css/joe.responsive.min.css'; ?>" rel="stylesheet" />


<script src="<?= $this->options->themeUrl . '/js/jquery.min.js'; ?>"></script>
<script src="<?= $this->options->themeUrl . '/js/scroll.min.js'; ?>"></script>
<script src="<?= $this->options->themeUrl . '/js/lazysizes.min.js'; ?>"></script>


<!--这个要用自己的文件 -->

  <script src="<?= $this->options->themeUrl . '/tool/bz/js/bz.js'; ?>"></script>




</head>

<body id="pjax-container">

  
<!--轮播公告js-->

  
  
<main class="py-3 py-md-5"><div class="container">
<div class="d-none d-md-block breadcrumbs text-muted mb-3">
<?php $this->need('link-s.php'); ?>
</div>
<div class="row no-gutters">


 <div class="joe_container">
      <div class="joe_main">
        <div class="joe_wallpaper__type">
          <div class="joe_wallpaper__type-title">壁纸分类</div>
          <ul class="joe_wallpaper__type-list">
            <li class="error">正在拼命加载中...</li>
          </ul>
        </div>
        <div class="joe_wallpaper__list"></div>
        <ul class="joe_wallpaper__pagination"></ul>
      </div>
    </div>



<!--ad-->

<!--ad-->
</div>            
<?php $this->need('sidebar.php'); ?>
</div>
</div>
</main>
<?php $this->need('footer.php'); ?>