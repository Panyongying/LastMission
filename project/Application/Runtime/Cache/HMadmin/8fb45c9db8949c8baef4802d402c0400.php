<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>修改大图</title>

<meta name="description" content='learn more write less'>
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/2nd Project/04.21/project/Public/Backstage/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/2nd Project/04.21/project/Public/Backstage/i/app-icon72x72@2x.png">
<link rel="stylesheet" href="/2nd Project/04.21/project/Public/Dropzone/dropzone.css" />
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/2nd Project/04.21/project/Public/Backstage/css/amazeui.min.css"/>
<link rel="stylesheet" href="/2nd Project/04.21/project/Public/Backstage/css/admin.css">
<script src="/2nd Project/04.21/project/Public/Backstage/js/jquery.min.js"></script>
<script src="/2nd Project/04.21/project/Public/Backstage/js/app.js"></script>
<script src="/2nd Project/04.21/project/Public/Dropzone/dropzone.js"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->






</head>

<body>

<!-- header part start -->
<header class="am-topbar admin-header">
    <div class="am-topbar-brand"><img src="/2nd Project/04.21/project/Public/Backstage/i/logo.png"></div>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
      <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

        <li class="am-dropdown tognzhi" data-am-dropdown>
        <button class="am-btn am-btn-primary am-dropdown-toggle am-btn-xs am-radius am-icon-bell-o" data-am-dropdown-toggle> 消息管理　</button>
      <ul class="am-dropdown-content">

        <li class="am-dropdown-header">所有消息都在这里</li>



        <li><a href="#">未激活会员 <span class="am-badge am-badge-danger am-round">556</span></a></li>
        <li><a href="#">未激活代理 <span class="am-badge am-badge-danger am-round">69</span></a></a></li>
        <li><a href="#">未处理汇款</a></li>
        <li><a href="#">未发放提现</a></li>
        <li><a href="#">未发货订单</a></li>
        <li><a href="#">低库存产品</a></li>
        <li><a href="#">信息反馈</a></li>

      </ul>


   <li class="kuanjie">

   	<a href="/2nd Project/04.21/project/index.php/HMadmin/User/index">会员管理</a>

   	<a href="#">订单管理</a>
   	<a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/index">商品管理</a>
   

   </li>






        <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
      </ul>
    </div>
</header>

<!-- header part end -->


<div class="am-cf admin-main">
<!-- left-nav part start -->
<div class="nav-navicon admin-main admin-sidebar">


    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<?php echo ($_SESSION['adminInfo']['name']); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/index">商品管理</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/index">商品列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'><a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/addGood">添加新商品</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Type/index">商品分类</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/showGoodsPic">商品图片颜色管理</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Goods/mechaIndex">缓存时间管理</a></li>
      </ul>
      <h3 class="am-icon-cart-plus"><em></em> <a href="#"> 订单管理</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Order/index">订单列表</a></li>
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="/2nd Project/04.21/project/index.php/HMadmin/User/index">会员管理</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/User/index">会员列表</a> </li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/User/addUser">添加会员</a></li>
   
      </ul>
      <h3 class="am-icon-users"><em></em> <a href="">权限管理</a></h3>
      <ul>

        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Admin/index">管理员列表</a> </li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/AuthGroup/index">管理组列表</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/AuthRule/index">权限列表</a></li>

    
      </ul>
      <h3 class="am-icon-volume-up"><em></em> <a href="#">信息通知</a></h3>
      <ul>
  
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/CustomService/index">客服</a></li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">友情链接</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Links/index">友链列表</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Links/addLinks">添加友链</a></li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">商品评论</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Commentary/index">评论列表</a></li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">首页大图</a></h3>
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/IndexPic/index">大图列表</a></li>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/IndexPic/addIndexPic">添加大图</a></li>
      </ul>
      <h3 class="am-icon-gears"><em></em> <a href="#">系统设置</a></h3>
      <ul>

        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/XunSearch/index">迅搜</a></li>
      </ul>
    </div>
    <!-- sideMenu End -->

    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:false,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script>
<!-- left-nav end start -->








</div>

<!-- admin-content part start -->
<div class=" admin-content">

    <div class="daohang">
      <ul>
        <li><a href="/2nd Project/04.21/project/index.php/HMadmin/Index/index" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </a></li>
        <li></li>
        <li></li>
        <li></li>


      </ul>
</div>
<!-- admin-content part end -->


<div class="admin-biaogelist">
	
    <div class="listbiaoti am-cf">
      <ul class="am-icon-flag on"> 修改大图</ul>
      
      <dl class="am-icon-home" style="float: right;"> 当前位置： 首页 > <a href="#">修改大图</a></dl>

      
      
    </div>
	
    <div class="fbneirong">
      <form class="am-form" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo ($list["id"]); ?>">
        <div class="am-form-group am-cf">
            <div class="zuo">大图位置：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 1 ): ?>checked<?php endif; ?> value="1">1
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 2 ): ?>checked<?php endif; ?> value="2">2
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 3 ): ?>checked<?php endif; ?> value="3">3
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 4 ): ?>checked<?php endif; ?> value="4">4
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 5 ): ?>checked<?php endif; ?> value="5">5
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 6 ): ?>checked<?php endif; ?> value="6">6
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 7 ): ?>checked<?php endif; ?> value="7">7
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 8 ): ?>checked<?php endif; ?> value="8">8
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 9 ): ?>checked<?php endif; ?> value="9">9
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 10 ): ?>checked<?php endif; ?> value="10">10
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="location" <?php if($list["location"] == 11 ): ?>checked<?php endif; ?> value="11">11
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
            <div class="zuo">字体颜色：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="fontcolor" <?php if($list["fontcolor"] == 1 ): ?>checked<?php endif; ?> value="1">black
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="fontcolor" <?php if($list["fontcolor"] == 2 ): ?>checked<?php endif; ?> value="2">white
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">小标题：</div>
          <div class="you">
            <input type="text" class="am-input-sm" id="doc-ipt-text-1" name="smalltitle" value="<?php echo ($list["smalltitle"]); ?>" placeholder="请输入小标题">
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">大标题：</div>
          <div class="you">
            <input type="text" class="am-input-sm" id="doc-ipt-text-1" name="bigtitle" value="<?php echo ($list["bigtitle"]); ?>" placeholder="请输入大标题">
          </div>
        </div>
        <div class="am-form-group am-cf">
            <div class="zuo">对齐方式：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="align" <?php if($list["align"] == 1 ): ?>checked<?php endif; ?> value="1">left
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="align" <?php if($list["align"] == 2 ): ?>checked<?php endif; ?> value="2">center
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="align" <?php if($list["align"] == 3 ): ?>checked<?php endif; ?> value="3">right
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
            <div class="zuo">按钮颜色：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="btncolor" <?php if($list["btncolor"] == 1 ): ?>checked<?php endif; ?> value="1">black
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="btncolor" <?php if($list["btncolor"] == 2 ): ?>checked<?php endif; ?> value="2">white
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
            <div class="zuo">水平位置：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="hor" <?php if($list["hor"] == 1 ): ?>checked<?php endif; ?> value="1">left
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="hor" <?php if($list["hor"] == 2 ): ?>checked<?php endif; ?> value="2">center
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="hor" <?php if($list["hor"] == 3 ): ?>checked<?php endif; ?> value="3">right
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
            <div class="zuo">垂直位置：</div>
            <div class="you" style="margin-top: 5px;">
              <label class="am-radio-inline">
                <input type="radio" name="ver" <?php if($list["ver"] == 1 ): ?>checked<?php endif; ?> value="1">top
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="ver" <?php if($list["ver"] == 2 ): ?>checked<?php endif; ?> value="2">middle
              </label>
              <label class="am-radio-inline">
                <input type="radio" name="ver" <?php if($list["ver"] == 3 ): ?>checked<?php endif; ?> value="3">bottom
              </label>
            </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">大图图片：</div>
          <div class="you" style="height: 45px;">
            <input type="file" id="doc-ipt-file-1" name="pic">
            <p class="am-form-help">请选择要上传的文件...</p>
          </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="zuo">URL：</div>
          <div class="you">
            <input type="url" class="am-input-sm" id="doc-ipt-text-1" name="url" value="<?php echo ($list["url"]); ?>" placeholder="请输入URL">
          </div>
        </div>
        <div class="am-form-group am-cf">
        	<div class="zuo">状态：</div>
	        <div class="you" style="margin-top: 5px;">
	          <label class="am-radio-inline">
	            <input type="radio" name="status" <?php if($list["status"] == 1 ): ?>checked<?php endif; ?> value="1">显示
	          </label>
	          <label class="am-radio-inline">
	            <input type="radio" name="status" <?php if($list["status"] == 2 ): ?>checked<?php endif; ?> value="2">不显示
	          </label>
	        </div>
        </div>
        <div class="am-form-group am-cf">
          <div class="you" style="margin-left: 11%;">
              <button type="submit" class="am-btn am-btn-success am-radius">修改</button>
          </div>
        </div>
      </form>
    </div>
</div>





   <!--  <div class="foods">
    	<ul>版权所有@2015</ul>
    	<dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>
    </div> -->


</div>

</div>




</div>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/2nd Project/04.21/project/Public/Backstage/js/polyfill/rem.min.js"></script>
<script src="/2nd Project/04.21/project/Public/Backstage/js/polyfill/respond.min.js"></script>
<script src="/2nd Project/04.21/project/Public/Backstage/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/2nd Project/04.21/project/Public/Backstage/js/amazeui.min.js"></script>
<!--<![endif]-->



</body>
</html>