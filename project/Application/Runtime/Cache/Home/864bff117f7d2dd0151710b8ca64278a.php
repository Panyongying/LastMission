<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh" class="js history rgba no-touchevents lastchild nthchild oninput backgroundsize borderradius flexbox flexboxlegacy csstransforms csstransitions grunticon ng-scope" ng-app="hmApp">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
        </style>

            <script src="/2nd Project/04.21/project/Public/Backstage/js/jquery.min.js"></script>

            <link rel="stylesheet" href="/2nd Project/04.21/project/Public/show/icons.data.svg.css" media="all">
            <link rel="stylesheet" href="/2nd Project/04.21/project/Public/show/shared.min.css" type="text/css">
            <link rel="stylesheet" href="/2nd Project/04.21/project/Public/show/general.min.css" type="text/css">
            
            <link rel="stylesheet" href="/2nd Project/04.21/project/Public/show/checkout.min.css" type="text/css">

            <link rel="stylesheet" href="/2nd Project/04.21/project/Public/show/myhm.min.css" type="text/css">

            <link rel="shortcut icon" type="image/x-icon" media="all" href="/2nd Project/04.21/project/Public/show/favicon.ico">
            <link href="/2nd Project/04.21/project/Public/show/icons.data.svg.css" media="screen" rel="stylesheet" type="text/css">

            <!-- to include grunticon -->
    	   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

            <meta name="viewport" content="width=1000px">

            <meta name="keywords">
            <meta name="description">
            <meta property="og:title" content="时尚服饰，一流品质，合理价位—— H&amp;M CN | H&amp;M CN">
            <meta property="og:description">


        	<meta property="og:site_name" content="H&amp;M">
        	<meta property="og:type" content="website">

    	    <meta property="fb:app_id" content="1433700643510498">


       
 <?php if(is_array($OneList)): foreach($OneList as $key=>$vo): if($pid == $vo['id']): ?><title><?php echo ($vo["name"]); ?></title><?php endif; endforeach; endif; ?>
 
</head>


    <body ng-controller="HmAppController" style="" class="ng-scope not-signed-in">

    <div class="parbase generatorScriptTouchpoint touchpoint"> </div>


        <header class="header-global"><!-- Header -->

            <!--AEMPUBPRDAP10-->

                    <div class="warehousemessage"></div>

                    <div class="wrapper" ng-init="hmClubEnabled=false; offersSpace=&#39;&#39;; hmClubServiceCacheDuration=0; hmRedirectPath=&#39;&#39;">
                        <a  href="/2nd Project/04.21/project/index.php/Home/Index/index" title="HM.com" class="logotype" style='background-image: url("/2nd Project/04.21/project/Public/show/sprites.png");'>
                        </a>
                    <div class="parbase topnav">

                    <nav class="primary-menu"><!-- Primary menu -->

                        <ul>
                            <?php if(is_array($OneList)): foreach($OneList as $key=>$vo): ?><li class="">
                                    <a id="nav-one" href="/2nd Project/04.21/project/index.php/Home/Index/goods/pid/<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="lists"><?php echo ($vo["name"]); ?></a>

                                        <div id="nav-one-div" class="primary-menu-sub-menu" style="display: none;">
                                            <div class="appends primary-menu-sub-menu-inner">

                                                <!-- <div class="menucolumn"> -->
                                                    <!-- <div class="primary-menu-categories"> -->
                                                            <!-- <div class="parbase navgroup section menucategory"> -->
                                                                <!-- <div class="primary-menu-category "> -->

                                                                <!-- </div> -->
                                                            <!-- </div> -->
                                                    <!-- </div> -->
                                                <!-- </div> -->




                                            </div>
                                        </div><!-- primary-menu-sub-menu topnav 1 -->
                                </li><?php endforeach; endif; ?>
                        </ul>
                    </nav><!-- /Primary Menu -->



                    </div>


             <nav class="services-menu"><!-- Services menu -->

                <div class="linklist parbase linklist1">
                    	<ul class="list">


                    		       <li class="item"><a class="link" href="">客户服务</a></li>


                    		       <li class="item"><a class="link" href="/2nd Project/04.21/project/index.php/Home/Book/index">订阅时尚资讯 </a></li>


                    		       <li class="item"><a class="link" href="">下载 APP</a></li>

                    	</ul>
                </div>

                <div class="linklist parbase linklist2">

                    	<ul class="list">

                    		<li class="item"><a class="link" href="/2nd Project/04.21/project/index.php/Home/Store/index">H&amp;M门店信息</a></li>

                    	</ul>
                 </div>


            </nav>
            <!-- /Services menu -->
            <nav class="session-menu"><!-- Session menu -->

                <div class="session-menu-top-row">

                        <a href="/2nd Project/04.21/project/index.php/Home/Favorite/index" class="js-favorite-entry-point favorite-entry-point is-favorite icon-favorites-dark icon">
                            收藏
                        </a>

                    <span class="parbase minicart">
                        <div class="shopping-bag rollover-popdown is-loaded" data-cart="/zh_cn/minicart/view">
                            <a id="overcar" href="/2nd Project/04.21/project/index.php/Home/cart/index" class="goto-shopping-bag rollover-toggle">
                               购物袋
                               (<span class="shoppingbag-item-count">
                                   <?php if($data == 'empty'): ?>0
                                   <?php else: echo ($data["num"]); endif; ?>
                               </span>)
                           </a>
                           <div id="showcart"class="shopping-bag-rollover row popdown">
                        		<div class="grid col-4">
                        			<div class="shopping-bag-rollover-scroll-up disabled">
                        				<div class="navigation-arrow-up"></div>
                        			</div>
                        			 <div class="shopping-bag-rollover-items-wrapper" id="cartWrap">
                                            <!-- 购物车为空时候 -->
                                            <?php if($data == 'empty' ): ?><div  class="cart_modal_popup empty-popup-cart">
                            						<dl class="clearfix">
                            							<dd><h2>您的购物袋是空的</h2></dd>
                            						</dl>
                            					</div>

                            				    <div class="shopping-bag-rollover-summary">
                            						<dl class="clearfix">
                            							<dt>订单价值：</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            						<dl class="shopping-bag-rollover-order-total">
                            							<dt>总价:</dt>
                            							<dd>¥0.00</dd>
                            						</dl>
                            					</div>
                                            <?php else: ?>
                                                <div class="grid col-4">
                                                    <div class="shopping-bag-rollover-scroll-up disabled">
                                                        <div class="navigation-arrow-up"></div>
                                                    </div>
                                                    <div class="shopping-bag-rollover-items-wrapper ">
                                                        <ul class="shopping-bag-rollover-items" style="top: 0px;">
                                                                <?php if(is_array($data["cartList"])): foreach($data["cartList"] as $key=>$ov): ?><li class="shopping-bag-rollover-item clearfix clickable-container has-link ">
                                                                            <a href="">
                                                                                <img alt="Straight Regular Jeans" class="shopping-bag-rollover-item-image" height="126" width="84" src="<?php echo ($ov["pic"]); ?>" title="<?php echo ($ov["name"]); ?>">
                                                                                    </a>

                                                                            <div class="shopping-bag-item-product">

                                                                                <h3 class="product-item-headline"><?php echo ($ov["name"]); ?></h3>
                                                                                <div id="redWhitePrices_0506590001001" class="product-item-price ">
                                        <span id="main_price" class="main_price_0506590001001">
                                                            ¥<?php echo ($ov["price"]); ?></span>
                                                    <small id="white_price_0506590001001"></small>
                                                </div>
                                        <dl class="clearfix">
                                                                                    <dt>数量：</dt>
                                                                                    <dd><?php echo ($ov["gnum"]); ?></dd>
                                                                                    <dt>颜色：</dt>
                                                                                    <dd><?php echo ($ov["color"]); ?></dd>
                                                                                    <dt>尺码：</dt>
                                                                                    <dd><?php echo ($ov["size"]); ?></dd>
                                                                                </dl>
                                                                            </div>
                                                                            <div class="shopping-bag-item-total-price product-item-price">
                                                                                总价:&nbsp;
                                                                                ¥<?php echo ($ov["allPrice"]); ?></div>
                                                                        </li><?php endforeach; endif; ?>
                                                                    </ul>
                                                            </div>
                                                            <div class="shopping-bag-rollover-scroll-down">
                                                                <div class="navigation-arrow-down"></div>
                                                            </div>
                                                            <div class="shopping-bag-rollover-summary">
                                                                <dl class="clearfix">
                                                                    <dt>订单价值：</dt>
                                                                    <dd>¥<?php echo ($data['totalPrice']); ?></dd>
                                                                </dl>
                                                                <dl class="shopping-bag-rollover-order-total">
                                                                    <dt>总价:</dt>
                                                                    <dd>¥<?php echo ($data['totalPrice']); ?></dd>
                                                                </dl>

                                                                <a href="/2nd Project/04.21/project/index.php/Home/order/checkout" class="button button-big">
                                                                结账</a>
                                                                <a href="/2nd Project/04.21/project/index.php/Home/Cart/index" class="button button-big button-secondary">
                                                                    购物袋</a>
                                                                <div >
                                                                 <p class="text"></p>
                                                              </div>
                                                            </div>
                                                        </div><?php endif; ?>
                        			</div>
                        	   </div>
                            </div>
                        </div>
                    </span>

                </div>
                <div class="signin rollover-popdown">
                    <div class="parbase account">

                        <div class="signin rollover-popdown" >
                            <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-signed-in" style="display:block">
                            <?php else: ?>
                            <div class="signin-signed-in"><?php endif; ?>

                                <span class="greeting-text"> 您好, <a class="goto-signed-in" href="/2nd Project/04.21/project/index.php/Home/User/person" rel="noreferrer"><?php echo ($_SESSION[userInfo][email]); ?> </a> </span>


                                <a class="goto-my-hm" href="/2nd Project/04.21/project/index.php/Home/User/person" rel="noreferrer">我的H&amp;M</a>

                                <a class="goto-sign-in" href="/2nd Project/04.21/project/index.php/Home/User/logout">退出</a>
                        </div>

                              <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-not-signed-in" style="display:none;">
                                <?php else: ?>
                                <div class="signin-not-signed-in"><?php endif; ?>

                                <a class="goto-my-hm" href="/2nd Project/04.21/project/index.php/Home/User/signIn" rel="noreferrer">我的H&amp;M</a>

                                <a href="javascript:;" id="homelogin" class="goto-sign-in rollover-toggle">登录/加入</a>
                                <div class="signin-rollover popdown row" id="bigdiv">
                                    <div class="inner">
                                      <div class="signin-rollover-login" id="showlogin">
                                          <form id="loginForm"class="responsive form-section ng-pristine ng-valid" action="/2nd Project/04.21/project/index.php/Home/User/login" method="POST">
                                                <h3>登录</h3>

                                                <div class="input-group">
                                                    <label for="txt-signin-rollover-email">用户名:</label>
                                                    <input name="username" type="email"  id="txt-signin-rollover-email">
                                                </div>
                                                <div class="input-group">
                                                    <label for="txt-signin-rollover-password">密码:</label>
                                                    <input name="password" type="password" id="txt-signin-rollover-password">
                                                </div>


                                                <div class="input-group">
                                                    <input type="submit" class="button-big" value="登录">
                                                    <p>
                                                        <a href="/2nd Project/04.21/project/index.php/Home/User/forgetPassword" class="underline">忘了密码？</a>
                                                    </p>
                                                </div>
                                                <div class="input-group join">

                                                    	<input type="button" id="showAdd" class="large fluid secondary button" value="加入我们">
                                                </div>
                                            </form>
                                      </div>
                                      <div class="signin-rollover-join" id="showadd">
                                        	<section class="responsive create-account popdown-form">

                        	                    <form id="registerForm" action="/2nd Project/04.21/project/index.php/Home/User/register" method="POST" class="responsive form-section ng-pristine ng-valid">
                        	                        <fieldset class="form-part">
                        		                        <legend class="heading">创建H&amp;M账户 </legend>
                        		                        <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-email">电子邮件:</label>
                        				                    <input type="email" class="email-input" name="useremail" id="txt-signin-rollover-join-email">
                        					            </div>
                        		                        <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-password">密码:</label>
                        					                <input type="password" name="userpass" id="txt-signin-rollover-join-password" class="password-input">
                        					            </div>
                        					            <div class="inputwrapper">
                        					                <label class="form-label" for="txt-signin-rollover-join-password-confirm">确认密码:</label>
                        					                <input type="password" id="txt-signin-rollover-join-password-confirm" name="checkPwd" class="password-input" >
                        					            </div>
                        				            </fieldset>

                        	                        <fieldset class="form-part">
                        		                        <ul class="input-list">


                                                            <li class="inputwrapper">
                        					                    <input type="checkbox" class="checkbox-input" id="chb-signin-rollover-join-terms" name="termsAndConditions" >
                                                        		<label class="checkbox-label" for="chb-signin-rollover-join-terms">
                                                        			<span id="privacy-policy">是的，我同意<a class="underline overlay-trigger" href="http://www2.hm.com/zh_cn/customer-service/privacy-link.html"> 隐私政策</a></span>

                                                        		</label>
                        					                </li>
                        					            </ul>
                        					            <div class="button-group">
                        					                <button type="submit" class="button large" data-validation-text="该表格不能提交。请检查您的信息">加入我们</button>
                        					                <button type="button" class="big secondary button large" id="showLogin">返回到登录</button>
                        					            </div>
                        	                        </fieldset>
                        	                    </form>
                                            </section>
                                      </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="country-info">
                    <div class="countrylanguage parbase">

                        <div class="country-info">

                            <a class="country-name overlay-trigger " data-layout="confirm" data-modal-scrollup="false" href="javascript:;">Change Country</a> |  ¥

                        </div>
                    </div>
                </div>

            </nav>
                    <!-- /Session menu -->
                <div class="autosuggestsearch parbase">
                    <div id="search-field" class="ui-widget">

                        <form method="get" action="/2nd Project/04.21/project/index.php/Home/Index/searchGoods" class="ng-pristine ng-valid">
                        		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        		<input id="main-search" type="text"  name="keyword" placeholder="搜索产品" minlength="1" maxlength="200"  class="ui-autocomplete-input" autocorrect="off" spellcheck="false" autocomplete="off">
                        </form>
                        <span class="magnify" style="background-image: url('/2nd Project/04.21/project/Public/show/sprites.png');"></span>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;">

                        </ul>
                    </div>

                </div>


                        <span class="js-cookie-message-url"></span>

                    </div>
        </header><!-- /Header -->
<!-- HeaderLife -->


        
     <main role="main" class="responsive segments"><!-- Main -->

         <div class="wrapper">

         <div class="product parbase">



 <!--PAGE:productDetail -->
 <div class="catalogwarning parbase">

 </div>










         <div class="row product-detail">
             <div class="images parbase">


 <section class="product-detail-images grid col-6 clearfix">
     <button class="product-detail-thumbnails-scroll-up disabled">
          <div class="navigation-arrow-up"></div>
      </button>
      <div class="product-detail-thumbnails">
    <!-- 小图 -->
        <ul>
        <?php if(is_array($goodsDeatil['pic'])): foreach($goodsDeatil['pic'] as $key=>$vp): ?><li class="product-detail-thumbnail"><img alt="" src="/2nd Project/04.21/project/Public/<?php echo ($vp["pic"]); ?>" class="product-detail-thumbnail-image" title=""></li><?php endforeach; endif; ?>
        </ul>
      </div>
      <button class="product-detail-thumbnails-scroll-down disabled">
          <div class="navigation-arrow-down"></div>
     </button>
     <div class="product-detail-main-image">








          <div class="product-detail-main-image-container">
    <!-- 大图 -->

            <img width="384" height="576" alt="" class="product-detail-main-image-image" src="/2nd Project/04.21/project/Public/<?php echo ($goodsDeatil['pic'][0]["pic"]); ?>" title="">




        </div>

            <span class="product-detail-zoom-info">Click image to zoom</span>
            <span class="product-detail-zoom-info touch-info">全屏</span>
            <!-- <a href="#" class="product-detail-full-screen-image-link hidden-text">全屏</a> -->

    </div>
</section>
</div>

            <section class="product-detail-meta grid col-6" data-productcode="0481148">
                <div class="product-detail-options">

                <h1 class="product-item-headline">
                    <?php echo ($goodsDeatil["name"]); ?>
                </h1>
                <div class="price parbase">

            <div class="product-item-price">
                <span class="price-value">¥<?php echo ($goodsDeatil["price"]); ?></span>
            </div>

</div>

                <div class="product-item-selection">新品</div>
                <div id="swatchsize">
                    <div class="product-colors clearfix loaded">
                        <div class="product-input-label" data-value="">颜色: <span></span></div>
                        <ul class="inputlist clearfix" id="colorAid">


                        <?php if(is_array($goodsDeatil['color'])): foreach($goodsDeatil['color'] as $key=>$v): ?><li>

                                    <a href="javascript:;" title="<?php echo ($v["attrname"]); ?>" data-articlecode="0481148009" data-sizes="" class="filter-option" style="background:<?php echo ($v["attrname"]); ?>">
                                      <!-- <img class="pattern" src="" alt="" title=""> -->

                                    </a>

                                </li><?php endforeach; endif; ?>

                        </ul>
                    </div>
                    <div class="product-sizes loaded">
                        <div class="product-input-label" data-value="选择尺码">尺码: <span>选择尺码</span></div>
                            <ul class="inputlist clearfix" data-sizelist="0481148009" style="display: block;" id="sizeAid">
                            <?php if(is_array($goodsDeatil['size'])): foreach($goodsDeatil['size'] as $key=>$v): ?><li>
                                        <label>
                                            <input type="radio" name="product-size" value="<?php echo ($v["attrname"]); ?>" data-code="0481148009001" data-size="001">

                                            <div class="detailbox detailbox-value detailbox-flexible "><span><?php echo ($v["attrname"]); ?></span></div>

                                          </label>
                                      </li><?php endforeach; endif; ?>
                              </ul>


                          <div class="product-detail-linked-product">


                             <a href="/zh_cn/productpage/_jcr_content/product.sizeguide.0481148009.html" class="underline overlay-trigger">尺码指南</a>
                         </div>
                     </div>
                 </div>
                 </div>
                 <div class="product-detail-details">
                     <div class="product-detail-availability">





                                 送货时间:2-7个工作日


                      </div>
                      <button class="button button-big button-buy product-details-favorite button-disabled" data-not-added-text="您必须选择一个可用的尺码" data-added-text="已添加商品" data-shopping-bag-text="购物袋" data-shopping-bag-failed-text="将商品添加到购物袋时出错" data-quantity-text="数量" data-color-text="颜色" data-size-text="尺码" data-default-quantity="1" data-sold-out-text="已售完" data-not-added-sold-out-text="该颜色的所有尺码已售完" data-gid="<?php echo ($goodsDeatil["id"]); ?>">添加到购物袋</button>

                        <div class="button-sold-out-warning" style="top: 316px;display:none"></div>
                         <button  class="button button-big button-secondary button-favorite icon icon-favorites-dark js-button-favorite" data-saved-text="已加入收藏" id="addFav" data-not-saved-text="加入收藏"  data-gid="<?php echo ($goodsDeatil["id"]); ?>">加入收藏</button>


                      <div class="parbase details">

  <div class="product-detail-tabs tabs">
      <ul class="tab-items">
          <li class="tab-item">
            <a href="javascript:;" class="tab-item-link active" data-target="tab-description">描述</a>
          </li>
          <li class="tab-item">
            <a href="javascript:;" class="tab-item-link" data-target="tab-details">细节</a>
          </li>
          <li class="tab-item">
            <a href="javascript:;" class="tab-item-link" data-target="tab-share">分享</a>
          </li>


        <li class="tab-item">
            <a href="javascript:;" class="tab-item-link" data-target="tab-delivery">送货</a>
        </li>

      </ul>
      <div class="tab-pane tab-description active">


         <p class="product-detail-description-text" itemprop="description"><?php echo ($goodsDeatil["des"]); ?>。</p>



         <ul class="product-warninglist" data-headline-text="警告!">

          </ul>
      </div>

      <div class="tab-pane tab-details">
          <div class="article-concept">

          <?php echo ($goodsDeatil['detail']["detail"]); ?>
<!--              <h4>护理说明</h4>
             <ul><li>30°机洗</li></ul> -->

         </div>












<!--

         <h4>商品号</h4>
          <ul>
              <li class="product-detail-article-code">0481148009</li>
          </ul> -->

      </div>

      <div class="tab-pane tab-share">








             <p id="weibo-share" class="share-item">
                 <wb:share-button addition="number" type="button"><iframe src="http://service.weibo.com/staticjs/weibosharev2.html?url=http%3A%2F%2Fwww2.hm.com%2Fzh_cn%2Fproductpage.0481148009.html&amp;type=button&amp;language=zh_cn&amp;searchPic=true&amp;style=number" width="128" height="25" frameborder="0" scrolling="no" marginheight="0"></iframe></wb:share-button>
             </p>


              <p id="renren-share" class="share-item">
                  <a name="xn_share" type="button_medium" href="javascript:;"><span class="xn_share_wrapper xn_share_button_medium"></span></a>
              </p>
    </div>

    <div class="tab-pane tab-delivery">





                <p>送货: 商品可送至位于中国大陆的居住地址或其他地址，具体根据您所选择的收货方式而定。很抱歉，我们无法将商品送至香港、澳门或台湾。付款: 我们接受 MasterCard 卡或 Visa 卡付款，亦接受支付宝、银行转账、中国银联在线付款或电话付款，还可接受 H&amp;M 礼品卡付款。</p>
      </div>


</div></div>
                </div>
            </section>
        </div>

</div>
<div><h2>评论区：</h2></div>
<?php if(empty($commentary)): ?>暂无评论
<?php else: ?>
<?php if(is_array($commentary)): foreach($commentary as $key=>$vc): ?><div style="width:1000px;border-top:1px solid #ccc;margin-top:20px;padding:10px">
    #<?php echo ($num++); ?> 用户：<span style="color:#6d757a"><?php echo ($vc['uid']["email"]); ?></span> <br>
    <p></p>
    <span style="word-wrap: break-word;"><?php echo ($vc["contents"]); ?></span>
    <p></p>
    <span style="float:right"><?php echo ($vc["addtime"]); ?></span>

</div><?php endforeach; endif; endif; ?>
<script>

    //默认选择filter-option
    // 给默认值/颜色/按钮
    $('.filter-option:first').addClass('active');
    $('.filter-option:first').parent().parent().prev('div').children().html( $('.filter-option:first').attr('title') );
    $('.filter-option:first').parent().parent().prev('div').attr('data-value', $('.filter-option:first').attr('title'));
    $('.button-buy').attr('data-color', $('.filter-option:first').attr('title'));
    $('.button-secondary').attr('data-color', $('.filter-option:first').attr('title'));



    //点击换颜色和对应的size
    $('#colorAid').on('click','.filter-option', function() {

      var url = '/2nd Project/04.21/project/index.php/Home/Index/colorPics';

      $(this).addClass('active').parent().siblings().children().removeClass('active');

      $(this).parent().parent().prev('div').children().html($(this).attr('title'));

      $(this).parent().parent().prev('div').attr('data-value', $(this).attr('title'));

      //为购物车按钮添加颜色属性
      $('.button-buy').attr('data-color', $(this).attr('title'));

      //为收藏按钮添加颜色属性
      $('.button-secondary').attr('data-color', $(this).attr('title'));

      //根据点击的值查询对应图片和size
      $.post(url, {aid:$(this).attr('title'),gid:<?php echo ($goodsDeatil['id']); ?>}, function(data) {

        var bigPic = '';
        var res = '<ul>';
        var resSize = '';

        for (var i=0; i<data['pic'].length; i++) {

          res += '<li class="product-detail-thumbnail"><img alt="" src="/2nd Project/04.21/project/Public/'+data['pic'][i].pic+'" class="product-detail-thumbnail-image" title=""></li>';

        }
        res += '</ul>';

        bigPic = '<img width="384" height="576" alt="" class="product-detail-main-image-image" src="/2nd Project/04.21/project/Public/'+data['pic'][0].pic+'" title="">';
        $('.product-detail-main-image-container').html(bigPic);

        $('.product-detail-thumbnails').html(res);

        for (var j=0; j<data['size'].length; j++) {

          resSize += '<li><label><input type="radio" name="product-size" value="'+data['size'][j].attrname+'" data-code="0481148009001" data-size="001"><div class="detailbox detailbox-value detailbox-flexible "><span>'+data['size'][j].attrname+'</span></div></label></li>';

        }

        $('#sizeAid').html(resSize);

      }, 'json');


    });

    //切换详情
    $('.tab-item-link').on('click', function() {

        $(this).addClass('active').parent().siblings().children().removeClass('active');


        $('.'+$(this).attr('data-target')).addClass('active').siblings().removeClass('active');

    });

    //首张添加current
    $('.product-detail-thumbnail:first').addClass('current');

    //点击图片时图片变白current
    $('.product-detail-thumbnails').on('click', '.product-detail-thumbnail', function() {

      $(this).addClass('current').siblings().removeClass('current');

      $('.product-detail-main-image-image')[0].src = $(this).children()[0].src;

    });


    //获取尺码
    $('#sizeAid').on('click','input[type=radio]', function() {
      $('.button-buy').removeClass('button-disabled');

      $(this).parent().parent().parent().prev('div').children().html($(this).attr('value'));

      $(this).parent().parent().parent().prev('div').attr('data-value', $(this).attr('value'));

      //为购物车添加尺码属性
      $('.button-buy').attr('data-size', $(this).attr('value'));

      //为收藏按钮添加尺码属性
      $('.button-secondary').attr('data-size', $(this).attr('value'));
    })

    //gid,aid
    // 点击购物车按钮
    // $('.button-buy').on('click', function() {
    $('.button-buy').click(function() {
      var that = $(this);

      //如果没点size,不给请求
      if ( !($(this).attr('data-size')) ) {

        $('.button-sold-out-warning').css('display', 'block').html( $(this).attr('data-not-added-text') );
      } else {

        $('.button-sold-out-warning').css('display', 'none');

        // 添加购物车操作
        $.post(
          '/2nd Project/04.21/project/index.php/Home/cart/addToCart',
          {
            gid:that.attr('data-gid'),
            color:that.attr('data-color'),
            size:that.attr('data-size'),
          },
          function (data) {
            if (data == 2) { // 添加失败
              alert('添加失败');
            } else if (data == 3) { // 没库存
              alert('没库存了')
            } else { // 添加成功
              console.log(data);
              $('#cartWrap').children().remove();
              $('#cartWrap').append(JSON.parse(data)['topCart']);
              $('.shopping-bag-rollover-summary .clearfix').children().find('dd').text('￥' + JSON.parse(data).totalPrice);
              $('.shoppingbag-item-count').text(JSON.parse(data).goodsNum);
              $('.shopping-bag-rollover-order-total').children().find('dd').text('￥' + JSON.parse(data).totalPrice);
            }
          },
          'json'
        );
      }


    });

    if ( !($('.button-buy').attr('data-size')) == undefined ) {

        $('.button-buy').removeClass('button-disabled');
    }


    $('#addFav').click(function () {

        var that = $(this);

      if(!that.hasClass("is-favorite")){

        $.post('/2nd Project/04.21/project/index.php/Home/Favorite/addFavorite',{

            'gid': that.attr('data-gid'),

            },function (data) {

              if (data == 0) {

                show_msg('请先登录');

                setTimeout(function () {

                   window.location.href="/2nd Project/04.21/project/index.php/Home/User/signIn";

                }, 1200);

              return false;
            }

              that.addClass('is-favorite');

         }, 'json');
      }
    });

             $.post('/2nd Project/04.21/project/index.php/Home/Favorite/checkedFavorite', {}, function (data){

                    for(var i =0; i<data.length; i++){
                        for(var j =0; j<  $('#addFav').length; j++){

                            var  that = $('#addFav')[j];

                            if(data[i].gid == that.value){

                              $(that).addClass('is-favorite');
                            }

                        }
                    }

            } ,'json');




            function show_msg(msg){

             $('body').append('<div class="sub_err" style="position:absolute;top:60px;left:0;width:500px;z-index:999999;"></div>');

                var htmltop='<div class="bac" style="padding:8px 0px;border:1px solid #090;width:100%;margin:0 auto;background-color:white;color:#0d0d0d;border:2px black solid;text-align:center;font-size:16px;">';

                var htmlfoot = '</div>';

                $('.sub_err').html(htmltop+msg+htmlfoot);

                var left=($('body').width()-500)/2;

                $('.sub_err').css({'left':left+'px'});

                var scroll_height=$(document).scrollTop();

                 $('.sub_err').animate({'top': scroll_height+120},100);

                 msgdsq=setTimeout(function(){

                    $('.sub_err').animate({'top': scroll_height+80},100);

                    setTimeout(function(){

                     $('.sub_err').remove();

                    },100);

                }, "1200");
            }


</script>


      </main>
 


        <footer class="footer-global responsive"><!-- Footer -->


            <div class="layout">


                <a class="button button-chat" target="_blank" href="/2nd Project/04.21/project/index.php/Home/CustomService/index">在线客服
                    <span>嗨我们在这里如果您需要任何帮助</span>
                </a>
                <?php if($_SESSION['userInfo']['status'] == 1): ?><a class="button button-chat" style="margin-right:1150px" href="/2nd Project/04.21/project/index.php/Home/User/active/email/<?php echo ($_SESSION['userInfo']['email']); ?>">激活邮箱
                    <span>点击此处激活</span>
                </a><?php endif; ?>

                <div class="four modules footer-menu footer-content">

                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">部门</h4>

                	<ul class="list">


                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/ladies.html">女士</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/men.html">男士</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/kids.html">儿童</a></li>

                		<li class="item"><a class="link" href="http://www2.hm.com/zh_cn/home.html">家居</a></li>

                	</ul>

                </nav>



                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">友情链接</h4>

                	<ul class="list">

                            <?php if(is_array($links)): foreach($links as $key=>$ov): ?><li class="item"><a class="link" href="<?php echo ($ov["url"]); ?>" target="_blank"><?php echo ($ov["name"]); ?></a></li><?php endforeach; endif; ?>



                	</ul>

                </nav>



                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">帮助</h4>

                	<ul class="list">


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service.html">客户服务</a></li>

                             <?php if(isset($_SESSION['userInfo'])): ?><li class="item"><a class="link" href="/2nd Project/04.21/project/index.php/Home/User/person">我的H&amp;M</a></li>
                            <?php else: ?>
                               <li class="item"><a class="link" href="/2nd Project/04.21/project/index.php/Home/User/signIn">我的H&amp;M</a></li><?php endif; ?>   
                		       <li class="item"><a class="link" href="/2nd Project/04.21/project/index.php/Home/Store/index">H&amp;M门店信息</a></li>


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/legal-and-privacy/privacy-link.html">隐私及法律条款</a></li>

                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/contact.html">联系我们</a></li>

                	</ul>

                </nav>


                    <section class="footer-newsletter">


                        <div class="newsletter parbase newslettersignupform">
                        <h4 class="footer-heading">订阅通讯</h4>
                        <p class="text">立即注册，获得85折优惠</p>
                        <a href="/2nd Project/04.21/project/index.php/Home/User/signUp" class="button">注册</a></div>


                    </section>
                </div>



                <ul class="footer-social footer-content">


                	<li class="item">
                		<a class="hidden-text icon icon-social-weibo-white" target="_blank" title="微博" href="http://www.weibo.com/hm">微博</a>
                	</li>

                	<li class="item">
                		<a class="hidden-text icon icon-social-youku-white" target="_blank" title="优酷" href="http://tvs.youku.com/hm">优酷</a>
                	</li>



                </ul>


                <div class="footer-copyright footer-content">
                    <p class="text js-footer-truncate">
                		该网站的内容受到版权保护，是属于 H&amp;M Hennes &amp; Mauritz AB的财产。上海市公安局黄浦分局备案3101010011576259
                	</p>
                	<button class="js-footer-more link" data-read-less-label="收起详情" aria-hidden="true">READ MORE</button>



                </div>

                <div class="footer-market-info">

                        <span>
                            <a href="http://www.miibeian.gov.cn/" class="footer-market-info" target="_blank">
                                沪ICP备09046754号
                        	</a>
                    	</span>


                        <span>
                            <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120330101136556" class="footer-cn-business-license" target="_blank">
                                上海工商
                        	</a>
                    	</span>


                </div>

                <a href="javascript:;" class="footer-logotype icon icon-hm-white hidden-text">H&amp;M</a>
            </div>

        </footer><!-- /Footer -->

        <script>

            var datas = [];

            //鼠标进去触发
            $('.lists').on('mouseover', function() {

                var url = '/2nd Project/04.21/project/index.php/Home/Index/base';

                var that = $(this);

                that.parent().addClass('open');

                $('.primary-menu-sub-menu').show();

                //给个标志判断是否请求过ajax了,是，就跳过，否就请求
                if ( that.attr('ajax-exists') != 'true' ) {

                    $.post(url, {'pid':that.attr('data-id')}, function(data) {

                        var res = '<ul style="float:left;column-count:5;" class="primary-menu-category">';

                        for (var i=0; i<data.length; i++) {

                            res += '<li style="float:left;margin-left:40px;padding:10px;width:150px" ><a href="/2nd Project/04.21/project/index.php/Home/Index/goodsList/tid/'+data[i].id+'/pid/'+that.attr('data-id')+'">'+ data[i].name +'</a></li>';

                        }
                        res += '</ul>';

                        datas[that.attr('data-id')] = res;

                        $('.appends').html(datas[that.attr('data-id')]);

                        that.attr('ajax-exists', 'true');

                    }, 'json');

                } else {

                    $('.appends').html(datas[that.attr('data-id')]);
                }

                //鼠标出来触发
            }).on('mouseout', function() {
                

                $(this).parent().removeClass('open');

                $('.primary-menu-sub-menu').hide();
            });

            $('.primary-menu-sub-menu').on('mouseover', function() {

                $('.primary-menu-sub-menu').show();
            }).on('mouseout', function() {

                $('.primary-menu-sub-menu').hide();
            });



            $('#homelogin').click(function () {


                $('#bigdiv').show();

                $('#showlogin').show();

                if($('#showadd').css('display') == 'block') {

                    $('#showlogin').hide();
                }

            });


            $(document).click(function () {

                $('#bigdiv').hide();

                $('#showlogin').hide();

                $('#showadd').hide();


            });


            $('#showAdd').click(function () {

                $('#showadd').show();

                $('#showlogin').hide();

            });

            $('#showLogin').click(function () {

                $('#showadd').hide();

                $('#showlogin').show();

            });

            var menu = document.getElementById('showlogin');

            var home = document.getElementById('homelogin');

            var add = document.getElementById('showadd');

            menu.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            add.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            home.onclick = function (e) {
                // alert(2);

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#menu标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }
            //注册表单验证
            $('#txt-signin-rollover-join-email').blur(function (){

                if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入邮箱账号!</span>');

                } else {

                    $(this).next('span').remove();
                }

            });

            $('#txt-signin-rollover-join-password').blur(function () {

              if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入密码!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>请输入6-12位密码!</span>');


            });

            $('#registerForm').submit( function () {

                var evalue = $('#txt-signin-rollover-join-email').val();

                var pvalue = $('#txt-signin-rollover-join-password').val();

                var chckPwd = $('#txt-signin-rollover-join-password-confirm').val();

                //判断邮箱格式
                var res = RegCheck(evalue,/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/);




                if (res === null) {

                   $('#txt-signin-rollover-join-email').next('span').remove();

                   $('#txt-signin-rollover-join-email').after('<span style="color:red";>*邮箱格式不正确!</span>');

                   return false;

                }


                //判断密码的长度
                if (pvalue.length < 6 || pvalue.length > 12) {

                    $('#txt-signin-rollover-join-password').next('span').remove();

                    $('#txt-signin-rollover-join-password').after('<span style="color:red";>*请输入6-12位密码!</span>');

                    return false;

                }

                // 判断用户有没阅读隐私政策
                if (!$('input[name=termsAndConditions]:checked').val()){

                    alert('请阅读隐私政策');

                    return false;
                }


                //验证密码
                var res = RegCheck(pvalue, /^\w{6,12}$/);

                if (res === null) {

                   $('#txt-signin-rollover-join-password').next('span').remove();

                   $('#txt-signin-rollover-join-password').after('<span style="color:red";>*密码由数字字母下划线组成!</span>');

                   return false;

                }

                //验证密码与确认密码是否一致
                
                if (pvalue != chckPwd) {

                   $('#txt-signin-rollover-join-password').next('span').remove();

                   $('#txt-signin-rollover-join-password').after('<span style="color:red";>*密码与确认密码不相同!</span>');

                   return false;

                }



                //进行正则判断
                function RegCheck(str, pattern){


                    var res = str.match(pattern);

                    return res;
                }

            });

            //登录表单验证

            $('#txt-signin-rollover-email').blur(function () {

                if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入邮箱账号!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>账号为您的邮箱</span>');


            });


            $('#txt-signin-rollover-password').blur(function () {

              if($(this).val() == ''){

                    $(this).next('span').remove();

                    $(this).after('<span style="color:red";>请输入密码!</span>');

                } else {

                    $(this).next('span').remove();
                }

            }).focus( function () {

                $(this).next('span').remove();

                $(this).after('<span style="color:red";>请输入6-12位密码!</span>');


            });

            $('#loginForm').submit( function () {

                var uvalue = $('#txt-signin-rollover-email').val();

                var passvalue = $('#txt-signin-rollover-password').val();
                //判断账号是否为空
                if (uvalue == ''){

                    $('#txt-signin-rollover-email').next('span').remove();

                    $('#txt-signin-rollover-email').after('<span style="color:red";>*请输入邮箱账号!</span>');

                    return false;
                }
                //判断密码是否为空
                if (passvalue == ''){

                    $('#txt-signin-rollover-password').next('span').remove();

                    $('#txt-signin-rollover-password').after('<span style="color:red";>*请输入密码!</span>');

                    return false;

                }


            });
            //购物车迷你显示

            $('#overcar').mouseover(function () {

               $('#showcart').show();

            });



            $(document).click(function () {

                $('#showcart').hide();

            });

            var showcart = document.getElementById('showcart');
            var overcar = document.getElementById('overcar');

            overcar.onclick = function (e) {

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#overcar标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }


            showcart.onclick = function (e) {

                var ev = e||event;

                //阻止事件冒泡，防止点击了div#showcart标签，点击事件继续触发父标签document点击事件
                ev.cancelBubble = true;

            }




        </script>
    </body>
 </html>