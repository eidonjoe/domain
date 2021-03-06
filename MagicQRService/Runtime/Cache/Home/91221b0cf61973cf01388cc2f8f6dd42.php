<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>魔码(MagicQR)</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/i/icon108.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/i/icon108.png">
  <meta name="apple-mobile-web-app-title" content="魔码" />
  <link rel="stylesheet" href="/Public/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/css/app.css">
  <style>
    .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }


  </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，页面暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<!-- 页面内容-->
<header data-am-widget="header" class="am-header am-header-default">
<div class="am-header-left am-header-nav">
    <a href="index.html" class="">
      <i class="am-header-icon am-icon-home"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  <div class="am-header-right am-header-nav"> 
        <!-- 按钮触发器， 需要指定 target -->
        <button class="am-btn am-btn-primary" data-am-offcanvas="{target: '#doc-oc-demo2', effect: 'push'}"><i class="am-header-icon am-icon-bars"></i></button>

        <!-- 侧边栏内容 -->
        <div id="doc-oc-demo2" class="am-offcanvas">
          <div class="am-offcanvas-bar am-offcanvas-bar-flip no-width" style = "width:200px">
            <div class="am-offcanvas-content">
              <p>
                <a href="#" target="">版本更新</a><br/>
                <a href="/Public/APP/MagicQR3.0.apk">软件下载</a><br/>
                <a href="/index.php/Index/about">关于我们</a><br/>
              </p>
            </div>
          </div>
        </div>
  </div>
  
</header>
<div class="get">
  <div class="am-g">
    <div class="col-lg-12">
      <h1 class="get-title">魔码（MagicQR）——你的多媒体二维码标签</h1>

      <p>
        这不是一个简单的二维码标签，它可以用来存放文字、图片、语音、视频。只需手机轻轻一扫，想要的内容即可呈现。
        通过应用你可以轻松的为你的图片添加魔码，分享或打印，留住美好记忆。
      </p>

      <p>
        <a href="/Public/APP/MagicQR3.0.apk" class="am-btn am-btn-sm get-btn">下载应用(Android4.0)</a>
      </p>
      <p>微信用户请点击右上角选择在"浏览器中打开"下载应用</p>
    </div>
  </div>
</div>


<footer data-am-widget="footer" class="am-footer am-footer-default">
  <div class="am-footer-miscs ">
    <p>魔码团队作品|<a href="http://yiqi8.me">yiqi8.me</a></p>
    <p>CopyRight©2014 AllMobilize Inc. </p>
  </div>
</footer>
<!--页面内容结束-->
<script src="/Public/js/zepto.min.js?1.1.4"></script>
<script src="/Public/js/amazeui.js"></script>
<script src="/Public/js/app.js"></script>
</body>
</html>