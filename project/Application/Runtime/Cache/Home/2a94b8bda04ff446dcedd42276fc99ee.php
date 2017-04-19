<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html lang="zh" class="js history rgba no-touchevents lastchild nthchild oninput backgroundsize borderradius flexbox flexboxlegacy csstransforms csstransitions grunticon ng-scope" ng-app="hmApp">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}
        </style>

            <script src="/2nd Project/04.19/project/Public/Backstage/js/jquery.min.js"></script>

            <link rel="stylesheet" href="/2nd Project/04.19/project/Public/show/icons.data.svg.css" media="all">
            <link rel="stylesheet" href="/2nd Project/04.19/project/Public/show/shared.min.css" type="text/css">
            <link rel="stylesheet" href="/2nd Project/04.19/project/Public/show/general.min.css" type="text/css">
            
            <link rel="stylesheet" href="/2nd Project/04.19/project/Public/show/checkout.min.css" type="text/css">

            <link rel="stylesheet" href="/2nd Project/04.19/project/Public/show/myhm.min.css" type="text/css">

            <link rel="shortcut icon" type="image/x-icon" media="all" href="/2nd Project/04.19/project/Public/show/favicon.ico">
            <link href="/2nd Project/04.19/project/Public/show/icons.data.svg.css" media="screen" rel="stylesheet" type="text/css">

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


       <title>H&M</title>
</head>


    <body ng-controller="HmAppController" style="" class="ng-scope not-signed-in">

    <div class="parbase generatorScriptTouchpoint touchpoint"> </div>


        <header class="header-global"><!-- Header -->

            <!--AEMPUBPRDAP10-->

                    <div class="warehousemessage"></div>

                    <div class="wrapper" ng-init="hmClubEnabled=false; offersSpace=&#39;&#39;; hmClubServiceCacheDuration=0; hmRedirectPath=&#39;&#39;">
                        <a  href="/2nd Project/04.19/project/index.php/Home/Index/index" title="HM.com" class="logotype" style='background-image: url("/2nd Project/04.19/project/Public/show/sprites.png");'>
                        </a>
                    <div class="parbase topnav">

                    <nav class="primary-menu"><!-- Primary menu -->

                        <ul>
                            <?php if(is_array($OneList)): foreach($OneList as $key=>$vo): ?><li class="">
                                    <a id="nav-one" href="/2nd Project/04.19/project/index.php/Home/Index/goods/pid/<?php echo ($vo["id"]); ?>" data-id="<?php echo ($vo["id"]); ?>" class="lists"><?php echo ($vo["name"]); ?></a>

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


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service.html">客户服务</a></li>


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/newsletter.html">订阅时尚资讯 </a></li>


                    		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/download-app.html">下载 APP</a></li>

                    	</ul>
                </div>

                <div class="linklist parbase linklist2">

                    	<ul class="list">

                    		<li class="item"><a class="link" href="/2nd Project/04.19/project/index.php/Home/Store/index">H&amp;M门店信息</a></li>

                    	</ul>
                 </div>


            </nav>
            <!-- /Services menu -->
            <nav class="session-menu"><!-- Session menu -->

                <div class="session-menu-top-row">

                        <a href="/2nd Project/04.19/project/index.php/Home/Favorite/index" class="js-favorite-entry-point favorite-entry-point is-favorite icon-favorites-dark icon">
                            收藏
                        </a>

                    <span class="parbase minicart">
                        <div class="shopping-bag rollover-popdown is-loaded" data-cart="/zh_cn/minicart/view">
                            <a id="overcar" href="/2nd Project/04.19/project/index.php/Home/cart/index" class="goto-shopping-bag rollover-toggle">
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
                        			 <div class="shopping-bag-rollover-items-wrapper ">
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

                                                                <a href="/2nd Project/04.19/project/index.php/Home/order/checkout" class="button button-big">
                                                                结账</a>
                                                                <a href="/2nd Project/04.19/project/index.php/Home/Cart/index" class="button button-big button-secondary">
                                                                    购物袋</a>
                                                                <div ng-if="''">
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

                                <span class="greeting-text"> 您好, <a class="goto-signed-in" href="/2nd Project/04.19/project/index.php/Home/User/person" rel="noreferrer"><?php echo ($_SESSION[userInfo][email]); ?> </a> </span>


                                <a class="goto-my-hm" href="/2nd Project/04.19/project/index.php/Home/User/person" rel="noreferrer">我的H&amp;M</a>

                                <a class="goto-sign-in" href="/2nd Project/04.19/project/index.php/Home/User/logout">退出</a>
                        </div>

                              <?php if(isset($_SESSION['userInfo'])): ?><div class="signin-not-signed-in" style="display:none;">
                                <?php else: ?>
                                <div class="signin-not-signed-in"><?php endif; ?>

                                <a class="goto-my-hm" href="/2nd Project/04.19/project/index.php/Home/User/signIn" rel="noreferrer">我的H&amp;M</a>

                                <a href="javascript:;" id="homelogin" class="goto-sign-in rollover-toggle">登录/加入</a>
                                <div class="signin-rollover popdown row" id="bigdiv">
                                    <div class="inner">
                                      <div class="signin-rollover-login" id="showlogin">
                                          <form id="loginForm"class="responsive form-section ng-pristine ng-valid" action="/2nd Project/04.19/project/index.php/Home/User/login" method="POST">
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
                                                        <a href="/2nd Project/04.19/project/index.php/Home/User/forgetPassword" class="underline">忘了密码？</a>
                                                    </p>
                                                </div>
                                                <div class="input-group join">

                                                    	<input type="button" id="showAdd" class="large fluid secondary button" value="加入我们">
                                                </div>
                                            </form>
                                      </div>
                                      <div class="signin-rollover-join" id="showadd">
                                        	<section class="responsive create-account popdown-form">

                        	                    <form id="registerForm" action="/2nd Project/04.19/project/index.php/Home/User/register" method="POST" class="responsive form-section ng-pristine ng-valid">
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

                        <form method="get" action="/2nd Project/04.19/project/index.php/Home/Index/searchGoods" class="ng-pristine ng-valid">
                        		<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                        		<input id="main-search" type="text"  name="keyword" placeholder="搜索产品" minlength="1" maxlength="200"  class="ui-autocomplete-input" autocorrect="off" spellcheck="false" autocomplete="off">
                        </form>
                        <span class="magnify" style="background-image: url('/2nd Project/04.19/project/Public/show/sprites.png');"></span>

                        <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;">

                        </ul>
                    </div>

                </div>


                        <span class="js-cookie-message-url"></span>

                    </div>
        </header><!-- /Header -->
<!-- HeaderLife -->


         
        <main role="main" class="responsive segments">
                <!--AEMPUBPRDAP16-->
            <div class="layout">
                <div class="parsys main">
                    <section class="segment section singleteasercontainer">
                    	                    		
                        <article class="default-m-serif  teaser-media  single-cta" data-item-ratio="16x9" style="position:relative;" data-view-tracking="true" data-activity-type="CAMPAIGN" data-activity-code="8NB" data-promotion-creative="8NB Teaser Page prio 1" id="track_832536">
                            <a href="<?php echo ($mainPic["url"]); ?>" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                        	
                          <div class="background-image teaser-image rimd">

                            <img src="/2nd Project/04.19/project/Public/<?php echo ($mainPic["pic"]); ?>"> <!-- 首页大图 -->
                          </div>

                 <!-- 大图描述1 -->
                                <div class="text-container" data-text-placement="<?php echo ($mainPic["hor"]); ?> <?php echo ($mainPic["ver"]); ?>" data-text-alignment="<?php echo ($mainPic["align"]); ?>" data-text-color="<?php echo ($mainPic["fontcolor"]); ?>">
                                	<p class="vignette"><?php echo ($mainPic["smalltitle"]); ?></p>
                                	
                                	<h3 class="heading"><?php echo ($mainPic["bigtitle"]); ?></h3>
                                	
                                	
                                	<ul class="cta-list" data-cta-color="<?php echo ($mainPic["btncolor"]); ?>">
                                		<li class="item"><a href="<?php echo ($mainPic["url"]); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a>
                                        </li>
                                	</ul>
                                </div>
                <!--大图描述结束-->
                       </article>	  
                    </section>

                <div class="parbase newarrivalscontainer section">  <!-- 第二版图片 -->


                    <section class="segment new-arrivals">  

                        <h2 class="heading">新品</h2>

                        <div class="four modules">
                          
                            <div class="department-product-item">
                              <article class="product-item" data-articlecode="0484891003" data-newarrivals-first-article="true" data-activity-type="MERCH" data-activity-code="NEWS_161102" data-promotion-creative="new arrivals 17-03-22" onclick="setOsaParameters(utag_data.category_id,&#39;NEW_ARRIVALS&#39;, &#39;0484891003&#39;);"><!-- Product item -->
                    				<a href="http://www2.hm.com/zh_cn/productpage.0484891003.html" data-cta-tracking="false" title="双层雪纺上衣" class="product-item-link">
                    	               <img width="260" height="390" alt="双层雪纺上衣" class="product-item-image" src="/2nd Project/04.19/project/Public/show/hmprod(1)" title="双层雪纺上衣">
                    	               <button data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0484891003|双层雪纺上衣|HM" type="button" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button>
                    	            </a>
                    	            <div class="product-item-details">
                    	            	<h3 class="product-item-heading">
                    			    		<a href="http://www2.hm.com/zh_cn/productpage.0484891003.html" data-cta-tracking="false">双层雪纺上衣</a>
                    		        	</h3>
                    		        	<strong class="price">¥249.00</strong>
                    	            </div>
                               </article><!-- /Product item -->
                               <a href="http://www2.hm.com/zh_cn/ladies/new-arrivals/clothes.html" class="cta button" data-cta-tracking="true" data-promotion-page-id="Ladies : New Arrivals : Clothing : Viewall" data-promotion-page-category="LADIES_NEW ARRIVALS : CLOTHING_CLOTHING : VIEWALL_VIEW_ALL">即刻选购</a>
                             </div>
                          
                            <div class="department-product-item">
                              <article class="product-item" data-articlecode="0504168001" data-newarrivals-first-article="false" data-activity-type="MERCH" data-activity-code="NEWS_161102" data-promotion-creative="new arrivals 17-03-22" onclick="setOsaParameters(utag_data.category_id,&#39;NEW_ARRIVALS&#39;, &#39;0504168001&#39;);"><!-- Product item -->
                    				<a href="http://www2.hm.com/zh_cn/productpage.0504168001.html" data-cta-tracking="false" title="提花梭织紧身胸衣" class="product-item-link">
                    	               <img width="260" height="390" alt="提花梭织紧身胸衣" class="product-item-image" src="/2nd Project/04.19/project/Public/show/hmprod(2)" title="提花梭织紧身胸衣">
                    	               <button data-tracking-type="event" data-tracking-json-template="utagFavorite" type="button" class="favorite icon icon-favorites js-favorite is-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button>
                    	            </a>
                    	            <div class="product-item-details">
                    	            	<h3 class="product-item-heading">
                    			    		<a href="http://www2.hm.com/zh_cn/productpage.0504168001.html" data-cta-tracking="false">提花梭织紧身胸衣</a>
                    		        	</h3>
                    		        	<strong class="price">¥199.00</strong>
                    	            </div>
                               </article><!-- /Product item -->
                               <a href="http://www2.hm.com/zh_cn/ladies/new-arrivals/clothes.html" class="cta button" data-cta-tracking="true" data-promotion-page-id="Ladies : New Arrivals : Clothing : Viewall" data-promotion-page-category="LADIES_NEW ARRIVALS : CLOTHING_CLOTHING : VIEWALL_VIEW_ALL">即刻选购</a>
                             </div>
                          
                            <div class="department-product-item">
                            <article class="product-item" data-articlecode="0524124002" data-newarrivals-first-article="false" data-activity-type="MERCH" data-activity-code="NEWS_161102" data-promotion-creative="new arrivals 17-03-22" onclick="setOsaParameters(utag_data.category_id,&#39;NEW_ARRIVALS&#39;, &#39;0524124002&#39;);"><!-- Product item -->
                    				<a href="http://www2.hm.com/zh_cn/productpage.0524124002.html" data-cta-tracking="false" title="褶边上衣" class="product-item-link">
                    	               <img width="260" height="390" alt="褶边上衣" class="product-item-image" src="/2nd Project/04.19/project/Public/show/hmprod(3)" title="褶边上衣">
                    	               <button data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0524124002|褶边上衣|HM" type="button" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button>
                    	            </a>
                    	            <div class="product-item-details">
                    	            	<h3 class="product-item-heading">
                    			    		<a href="http://www2.hm.com/zh_cn/productpage.0524124002.html" data-cta-tracking="false">褶边上衣</a>
                    		        	</h3>
                    		        	<strong class="price">¥399.00</strong>
                    	            </div>
                            </article><!-- /Product item -->
                               <a href="http://www2.hm.com/zh_cn/ladies/new-arrivals/clothes.html" class="cta button" data-cta-tracking="true" data-promotion-page-id="Ladies : New Arrivals : Clothing : Viewall" data-promotion-page-category="LADIES_NEW ARRIVALS : CLOTHING_CLOTHING : VIEWALL_VIEW_ALL">即刻选购</a>
                             </div>
                          
                            <div class="department-product-item">
                              <article class="product-item" data-articlecode="0482832001" data-newarrivals-first-article="false" data-activity-type="MERCH" data-activity-code="NEWS_161102" data-promotion-creative="new arrivals 17-03-22" onclick="setOsaParameters(utag_data.category_id,&#39;NEW_ARRIVALS&#39;, &#39;0482832001&#39;);"><!-- Product item -->
                    				<a href="http://www2.hm.com/zh_cn/productpage.0482832001.html" data-cta-tracking="false" title="绑带棉质衬衫" class="product-item-link">
                    	               <img width="260" height="390" alt="绑带棉质衬衫" class="product-item-image" src="/2nd Project/04.19/project/Public/show/hmprod(4)" title="绑带棉质衬衫">
                    	               <button data-tracking-type="event" data-tracking-json-template="utagFavorite" data-tracking-params="Favourites|0482832001|绑带棉质衬衫|HM" type="button" class="favorite icon icon-favorites js-favorite" data-saved-text="已加入收藏" data-not-saved-text="加入收藏">加入收藏</button>
                    	            </a>
                    	            <div class="product-item-details">
                    	            	<h3 class="product-item-heading">
                    			    		<a href="http://www2.hm.com/zh_cn/productpage.0482832001.html" data-cta-tracking="false">绑带棉质衬衫</a>
                    		        	</h3>
                    		        	<strong class="price">¥299.00</strong>
                    	            </div>
                               </article><!-- /Product item -->
                               <a href="http://www2.hm.com/zh_cn/ladies/new-arrivals/clothes.html" class="cta button" data-cta-tracking="true" data-promotion-page-id="Ladies : New Arrivals : Clothing : Viewall" data-promotion-page-category="LADIES_NEW ARRIVALS : CLOTHING_CLOTHING : VIEWALL_VIEW_ALL">即刻选购</a>
                             </div>     
                        </div>
                    </section>


                </div>
                <section class="segment section"><!-- 第三版/ -->
                	
                	<div class="two modules">
                		<article class="default-m-sans  teaser-media  single-cta" data-item-ratio="2x3" style="position:relative;" data-view-tracking="true" data-activity-type="CAMPAIGN" data-activity-code="8NA" data-promotion-creative="8NA Teaser Page Prio 1" id="track_832537"><a href="<?php echo ($lastPic[0]['url']); ?>" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>

                            
                	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[0]['pic']); ?>">
                    </div>
                    	<div class="text-container" data-text-placement="<?php echo ($lastPic[0]['hor']); ?> <?php echo ($lastPic[0]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[0]['align']); ?>" data-text-color="<?php echo ($lastPic[0]['fontcolor']); ?>">
                    	
                    	<p class="vignette"><?php echo ($lastPic[0]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[0]['bigtitle']); ?></h3>
                    	
                    	
                    	
                    	<ul class="cta-list" data-cta-color="<?php echo ($lastPic[0]['btncolor']); ?>">
                    		<li class="item"><a href="<?php echo ($lastPic[0]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                    	</ul>
                        </div>
                    </article>
                	
                		<article class="merch-ladder-plate teaser-media " data-item-ratio="2x3" data-view-tracking="false" data-activity-type="MERCH" data-activity-code="CN31_QINGMING" data-promotion-creative="CN31 QINGMING"><a href="<?php echo ($lastPic[1]['url']); ?>" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[1]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[1]['hor']); ?> <?php echo ($lastPic[1]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[1]['align']); ?>" data-text-color="<?php echo ($lastPic[1]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[1]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[1]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[1]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[1]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                    </article>
                    	</div>
                    	
                </section> <!--第三结束-->



                <section class="segment section"> <!--第四开始-->
                	
                	<div class="three modules">
                    	<article class="merch-sgi-bottom teaser-media  single-cta" data-item-ratio="2x3" data-view-tracking="true" data-activity-type="MERCH" data-activity-code="CNL12_SEASONSSHIRTS_WEEK13" data-promotion-creative="Shirts and Blouses Week 13" id="track_832538">
                        <a href="<?php echo ($lastPic[2]['url']); ?>" data-promotion-page-id="Ladies : Offersandhighlights : Cnl12 - Seasons Shirts : Seasons shirts" data-promotion-page-category="LADIES_OFFERSANDHIGHLIGHTS : CNL12 - SEASONS SHIRTS_CNL12 - SEASONS SHIRTS : SEASONS SHIRTS_VIEW_ALL" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                        	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[2]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[2]['hor']); ?> <?php echo ($lastPic[2]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[2]['align']); ?>" data-text-color="<?php echo ($lastPic[2]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[2]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[2]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[2]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[2]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                    	
                        <article class="default-m-sans  teaser-media  single-cta" data-item-ratio="2x3" style="position:relative;" data-view-tracking="true" data-activity-type="CAMPAIGN" data-activity-code="8NC" data-promotion-creative="8NC Teaser page part 1" id="track_832539"><a href="<?php echo ($lastPic['3']['url']); ?>" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">阅读更多</a>
                            	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[3]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[3]['hor']); ?> <?php echo ($lastPic[3]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[3]['align']); ?>" data-text-color="<?php echo ($lastPic[3]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[3]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[3]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[3]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[3]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                        	
                        <article class="default-m-sans  teaser-media  single-cta" data-item-ratio="2x3" style="position:relative;" data-view-tracking="true" data-activity-type="CAMPAIGN" data-activity-code="8NE" data-promotion-creative="8NE Teaser page" id="track_832540"><a href="<?php echo ($lastPic[4]['url']); ?>" data-promotion-page-id="Men : Shopbyfeature : 8Ne - Modern Casual" data-promotion-page-category="MEN_SHOPBYFEATURE _8NE - MODERN CASUAL" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                            	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[4]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[4]['hor']); ?> <?php echo ($lastPic[4]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[4]['align']); ?>" data-text-color="<?php echo ($lastPic[4]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[4]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[4]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[4]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[4]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                	</div>
                	
                </section><!--第四部开始-->
                <section class="segment section singleteasercontainer">
                	
                	
                		
                	<article class="default-m-sans  teaser-media  single-cta" data-item-ratio="3x2" style="position:relative;" data-view-tracking="true" data-activity-type="CAMPAIGN" data-activity-code="8NK" data-promotion-creative="8NK Teaser Page" id="track_832541"><a href="<?php echo ($lastPic[5]['url']); ?>" data-promotion-page-id="Kids : Shopbyconcept : Basics : Viewall" data-promotion-page-category="KIDS_SHOPBYCONCEPT : BASICS_BASICS : VIEWALL_VIEW_ALL" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                	
                    	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[5]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[5]['hor']); ?> <?php echo ($lastPic[5]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[5]['align']); ?>" data-text-color="<?php echo ($lastPic[5]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[5]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[5]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[5]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[5]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                    </article>
                	
                </section>
                <section class="segment section">
                    <h2 class="heading">发现 H&amp;M</h2> <!-- 发现HM -->
                    <div class="three modules">
                        <article class="merch-deal-middle-plate teaser-media  single-cta" data-item-ratio="2x3" data-view-tracking="true" data-activity-type="MERCH" data-promotion-creative="Newsletter" id="track_832542">
                                <a href="<?php echo ($lastPic[6]['url']); ?>" data-promotion-page-id="CUSTOMER_SERVICE_NEWSLETTER" data-promotion-page-category="CUSTOMER_SERVICE_NEWSLETTER" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">即刻选购</a>
                        	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[6]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[6]['hor']); ?> <?php echo ($lastPic[6]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[6]['align']); ?>" data-text-color="<?php echo ($lastPic[6]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[6]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[6]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[6]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[6]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                    	
                        <article class="merch-customer-deal-small-top teaser-media " data-item-ratio="2x3" data-view-tracking="false" data-activity-type="MERCH" data-promotion-creative="Wechat Follow Us">
                        	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[7]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[7]['hor']); ?> <?php echo ($lastPic[7]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[7]['align']); ?>" data-text-color="<?php echo ($lastPic[7]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[7]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[7]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[7]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[7]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                        	
                        <article class="merch-deal-small-top teaser-media  single-cta" data-item-ratio="2x3" data-view-tracking="true" data-activity-type="MERCH" data-promotion-creative="Download the app" id="track_832543">
                                <a href="<?php echo ($lastPic[8]['url']); ?>" data-promotion-page-id="Customer Service Downloadapp (View All)" data-promotion-page-category="CUSTOMER_SERVICE_DOWNLOADAPP" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">阅读更多</a>
                                <div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[8]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[8]['hor']); ?> <?php echo ($lastPic[8]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[8]['align']); ?>" data-text-color="<?php echo ($lastPic[8]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[8]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[8]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[8]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[8]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                        </article>
                    </div>
                    	
                </section>
                <section class="segment section singleteasercontainer">
                	
                	
                		
                    <article class="default-m-serif  teaser-media  single-cta" data-item-ratio="3x2" style="position:relative;" data-view-tracking="true" data-activity-type="LIFE" data-activity-code="IN LOVE WITH LULAMA" data-promotion-creative="Magazine_w12_InLoveWithLulama" id="track_832544">
                        <a href="<?php echo ($lastPic[9]['url']); ?>" data-cta-tracking="true" target="_self" class="hidden-text cta-overlay">阅读更多</a>
                        	
                        	<div class="background-image teaser-image rimd">
                 
                        <img src="/2nd Project/04.19/project/Public/<?php echo ($lastPic[9]['pic']); ?>">
                    </div>
                        <div class="text-container" data-text-placement="<?php echo ($lastPic[9]['hor']); ?> <?php echo ($lastPic[9]['ver']); ?>" data-text-alignment="<?php echo ($lastPic[9]['align']); ?>" data-text-color="<?php echo ($lastPic[9]['fontcolor']); ?>">
                        
                        <p class="vignette"><?php echo ($lastPic[9]['smalltitle']); ?></p>
                                    
                        <h3 class="heading"><?php echo ($lastPic[9]['bigtitle']); ?></h3>
                        
                        
                        
                        <ul class="cta-list" data-cta-color="<?php echo ($lastPic[9]['btncolor']); ?>">
                            <li class="item"><a href="<?php echo ($lastPic[9]['url']); ?>" data-cta-tracking="true" class="cta button" target="_self">即刻选购</a></li>
                        </ul>
                        </div>
                    </article>
                		
                </section>
                </div>
            </div>
                	              
        </main>

    


        <footer class="footer-global responsive"><!-- Footer -->


            <div class="layout">


                <a class="button button-chat" target="_blank" href="/2nd Project/04.19/project/index.php/Home/CustomService/index">在线客服
                    <span>嗨我们在这里如果您需要任何帮助</span>
                </a>
                <?php if($_SESSION['userInfo']['status'] == 1): ?><a class="button button-chat" style="margin-right:1150px" href="/2nd Project/04.19/project/index.php/Home/User/active/email/<?php echo ($_SESSION['userInfo']['email']); ?>">激活邮箱
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


                	<h4 class="footer-heading js-toggle-trigger">公司信息</h4>

                	<ul class="list">


                		       <li class="item"><a class="link" href="http://career.hm.com/content/hmcareer/zh_cn.html" target="_blank">在H&amp;M的职业发展</a></li>


                		       <li class="item"><a class="link" href="http://about.hm.com/zh/About.html" target="_blank">关于H&amp;M</a></li>



                		       <li class="item"><a class="link" href="http://about.hm.com/zh_cn.html" target="_blank">我们的职责</a></li>

                		       <li class="item"><a class="link" href="http://about.hm.com/zh/news/newsroom.html" target="_blank">媒体</a></li>


                		<li class="item"><a class="link" href="http://about.hm.com/zh/About/Investor-Relations.html" target="_blank">投资者关系</a></li>


                		<li class="item"><a class="link" href="http://about.hm.com/zh/About/Corporate-Governance.html">Corporate governance</a></li>



                	</ul>

                </nav>



                <nav class="footer-category">


                	<h4 class="footer-heading js-toggle-trigger">帮助</h4>

                	<ul class="list">


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service.html">客户服务</a></li>


                		       <li class="item"><a class="link" href="https://www2.hm.com/zh_cn/login">我的H&amp;M</a></li>


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/shopping-at-hm/store-locator.html">H&amp;M门店信息</a></li>


                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/legal-and-privacy/privacy-link.html">隐私及法律条款</a></li>

                		       <li class="item"><a class="link" href="http://www2.hm.com/zh_cn/customer-service/contact.html">联系我们</a></li>

                	</ul>

                </nav>


                    <section class="footer-newsletter">


                        <div class="newsletter parbase newslettersignupform">
                        <h4 class="footer-heading">订阅通讯</h4>
                        <p class="text">立即注册，获得85折优惠</p>
                        <a href="/2nd Project/04.19/project/index.php/Home/User/signUp" class="button">注册</a></div>


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

                var url = '/2nd Project/04.19/project/index.php/Home/Index/base';

                var that = $(this);

                that.parent().addClass('open');

                $('.primary-menu-sub-menu').show();

                //给个标志判断是否请求过ajax了,是，就跳过，否就请求
                if ( that.attr('ajax-exists') != 'true' ) {

                    $.post(url, {'pid':that.attr('data-id')}, function(data) {

                        var res = '<ul style="float:left;column-count:5;" class="primary-menu-category">';

                        for (var i=0; i<data.length; i++) {

                            res += '<li style="float:left;margin-left:40px;padding:10px;width:150px" ><a href="/2nd Project/04.19/project/index.php/Home/Index/goodsList/tid/'+data[i].id+'/pid/'+that.attr('data-id')+'">'+ data[i].name +'</a></li>';

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