<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>魔码(MagicQR)</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="/Public/i/icon108.png">
  <link rel="stylesheet" href="/Public/css/amazeui.min.css"/>
  <style>
    @media only screen and (min-width: 1200px) {
      .blog-g-fixed {
        max-width: 1200px;
      }
    }

    @media only screen and (min-width: 641px) {
      .blog-sidebar {
        font-size: 1.4rem;
      }
    }

    .blog-main {
      padding: 20px 0;
    }

    .blog-title {
      margin: 10px 0 20px 0;
    }

    .blog-meta {
      font-size: 14px;
      margin: 10px 0 20px 0;
      color: #222;
    }

    .blog-meta a {
      color: #27ae60;
    }

    .blog-pagination a {
      font-size: 1.4rem;
    }

    .blog-team li {
      padding: 4px;
    }

    .blog-team img {
      margin-bottom: 0;
    }

    .blog-footer {
      padding: 10px 0;
      text-align: center;
    }
  </style>
</head>
<body>
<header data-am-widget="header" class="am-header am-header-default">
<div class="am-header-left am-header-nav">
    <a href="index.html" class="">
      <i class="am-header-icon am-icon-home"></i>
    </a>
</div>
  <h1 class="am-header-title">
    <a href="#title-link">魔码(MagicQR)</a>
  </h1>
  <div class="am-header-right am-header-nav"> 
        <!-- 按钮触发器， 需要指定 target -->
        <button class="am-btn am-btn-primary" data-am-offcanvas="{target: '#doc-oc-demo2', effect: 'push'}"><i class="am-header-icon am-icon-bars"></i></button>

        <!-- 侧边栏内容 -->
        <div id="doc-oc-demo2" class="am-offcanvas">
          <div class="am-offcanvas-bar am-offcanvas-bar-flip no-width" style = "width:200px">
            <div class="am-offcanvas-content">
              <p>
                <a href="#" target="">版本更新</a><br/>
                <a href="/Public/APP/magicQR2.0.apk">软件下载</a><br/>
                <a href="about.html">关于我们</a><br/>
              </p>
            </div>
          </div>
        </div>
  </div>
  
</header>
<div class="am-g am-g-fixed blog-g-fixed">
  <div class="col-md-8">
    <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="#">关于我们</a>
      </h3>

      <div class="am-g blog-content">
        <div class="col-lg-12">
          <p>“魔码（MagicQR）”作为一款基于二维码并扩展其功能的手机应用，首先定义了“魔码”这样一种基于二维码的标签形式，其可以存储文字、图片、视频等多媒体信息。“魔码”将是一种如便条纸一样的纸质标签，可以方便的粘贴在各处，极大的方便人们的生活。</p>
      <h3 class="am-article-title blog-title">
        <a href="#">特色分析</a>
      </h3>
          <p> 1、全新设计的一种标签产品，既有电子标签也有实物标签，方便用户使用，提供了传统标签所不具备的新功能，信息保存安全。
          </p>
          <p>
              2、标签制作方便，分享简易，易于在朋友圈间传递推广。
          </p>
          <p>
              3、可广泛使用于产品介绍、信息保存、信息分享、留言记事等各种场景。
          </p>

        </div>
      </div>
    </article>

    <hr class="am-article-divider blog-hr">

  </div>

  <div class="col-md-4 blog-sidebar">
    <div class="am-panel-group">
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">团队成员</div>
        <div class="am-panel-bd">
          <ul class="sm-block-grid-5 blog-team">
            <li><img class="am-thumbnail"
                     src="/Public/i/lky.png" alt=""/>刘坤媛
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/zxl.png" alt=""/>赵祥麟
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/zxy.png" alt=""/>朱小彧
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/zzn.png" alt=""/>赵泽宁
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/zhd.png" alt=""/>邹慧东
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/lt.png" alt=""/>李通
            </li>
            <li><img class="am-thumbnail"
                     src="/Public/i/lz.png" alt=""/>梁昭
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>

</div>

<footer class="blog-footer">
    <p>魔码团队作品|<a href="http://yiqi8.me">yiqi8.me</a></p>
    <p>CopyRight©2014 AllMobilize Inc.</p>
</footer>

<script src="/Public/js/zepto.min.js"></script>
<script src="/Public/js/amazeui.min.js"></script>
</body>
</html>