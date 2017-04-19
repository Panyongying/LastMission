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


       
        <title>时尚服饰，一流品质，合理价位—— H&amp;M CN | H&amp;M CN</title>
       
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


        
<main role="main" class="">
			<div class="wrapper">    
				<nav class="breadcrumbs">
					<ul>
	<li>
	
	
	
		<a href="https://www2.hm.com/zh_cn/">HM.COM</a>
	</li>

	<li class="">

			<a href="https://www2.hm.com/zh_cn/payment/orderPayment/54365404#" onclick="return false;"> 结账</a>
				</li>
	<li class="active">

			<a href="https://www2.hm.com/zh_cn/payment/orderPayment/54365404#" onclick="return false;"> 结账</a>
				</li>
	</ul>
</nav>
				

<header class="checkout-header">
		<h1>结账</h1>
		<ul class="checkout-breadcrumbs items-4 clearfix">
	<li class="item">1. 登录</li>
	<li class="item">2. 发货 &amp; 支付</li>
	<li class="item item-current">3. 确认订单</li>
	<li class="item item-last">4. 非常感谢</li>
	</ul></header>
	<div class="row ng-scope" ng-controller="PaymentController as paymentCtrl">
		<div class="grid col-8 responsive">
			<div class="responsive layout">
				<div class="orders">
					<div class="order-item is-open">
						<div class="order-info">
							<div class="order-info">
								















<!-- CR 18208 Add Loader Key Start-->


<!-- CR 18208 Add Loader Key End-->



<style type="text/css">
	.checkout-loader-layer-text{left:0%;line-height:25px;color:gray;position:fixed;top:54%;width:100%;text-align:center;z-index:1001;font-weight:bold;font-family:"HM Ampersand Bold",sans-serif}
</style>

<div class="order-details two modules">
	<h3 class="sub-heading">已下订单</h3>
	<p class="text">
		感谢您在H&amp;M购物，为了保证及时处理您的订单，如果您使用支付宝作为付款方式且尚未付款，请在下单5小时内完成支付
		如有任何疑问，请联系客户服务中心4008-215-500。
		<br><br>
		
		    
		    
		    	点击现在支付，确认付款。
		    
		
	</p>
	
	<ul class="details-list">
		<li class="item">
			<span class="label">订单号</span>
			<span class="static"><?php echo ($orderData["id"]); ?></span>
			<input type="hidden" id="orderCode" value="<?php echo ($orderData["id"]); ?>">
		</li>
		<li class="item">
			<span class="label">订单日期</span>
			<span class="static"><?php echo ($orderData["orderaddtime"]); ?></span>
		</li>
	</ul>
</div>

<div class="order-tracking">
	<h3 class="sub-heading">现在付款</h3>
	<br>
	<form method="post" class="checkout-place-order-section ng-pristine ng-valid" ng-submit="paymentCtrl.doPayment(&#39;54365404&#39;)">
		 
		<?php if(($orderData["orderstatus"] == 1) AND ($orderData["ordersendstatus"] == 1)): ?><input type="submit" id="checkoutViewPaymentButton" class="button-big" value="现在付款" data-not-added-text="页面正在跳转至您所选择的付款平台，请勿关闭或者回退页面，整个跳转过程可能需要持续60秒左右。"><?php endif; ?>
 	     <!-- CR 18208 Add Loader Div Start-->
 	     <div class="payment-loader js-payment-loader" aria-hidden="true" style="display: none;" data-payment-loader-title="我们正在处理您的付款" data-payment-loader-text="这可能会花费一点时间，请耐心等候。请勿关闭窗口或点击后退键">
            <div class="payment-loader-wrapper">
                <div class="payment-loader-container">
                    <h2 class="title">我们正在处理您的付款</h2>
                    <p class="text">这可能会花费一点时间，请耐心等候。请勿关闭窗口或点击后退键</p>
                </div>
            </div>
        </div>
           <!-- CR 18208 Add Loader Div End-->
 		
 		
		<ul class="item-list">
			<li class="item-list-item"><a href="/2nd Project/04.19/project/index.php/Home/User/orders">我的订单</a></li>
			<li class="item-list-item"><a href="/2nd Project/04.19/project/index.php/Home/CustomService/index">客户服务</a></li>
		</ul>
	</form>
	<div id="payeaseForm"></div>
	<h3 class="heading">
		订单汇总
	</h3>
</div>
</div>
							<ul class="order-products product-detail-list responsive">
							<?php if(is_array($orderDetail)): foreach($orderDetail as $key=>$ov): ?><li class="product-detail-list-item" data-articlecode="0482071001">
	<!-- Order confirmation item -->
	<div class="product-detail-list-item-image-wrapper">
		<div class="wrapper-inner">
			<a href="/2nd Project/04.19/project/index.php/Home/Index/goodsDetail/id/<?php echo ($ov["gid"]); ?>">
				<img src="<?php echo ($ov["pic"]); ?>" alt="<?php echo ($ov["name"]); ?>" title="<?php echo ($ov["name"]); ?>" class="product-detail-list-item-image-image">
			</a>
			<!-- ngIf: false -->
		</div>
	</div>
	<div class="product-detail-list-item-details">
		
		<div class="product-detail-list-item-price-info">
	        <p class="product-detail-list-item-total-price">
				总价：&nbsp;
				¥<?php echo ($ov["allPrice"]); ?></p>
		</div>
	
		<h3 class="sub-sub-heading"><?php echo ($ov["name"]); ?></h3>
		<div class="product-detail-price" ng-class="{&#39;sale-price&#39; : false }">
					<span class="original-price">
						¥<?php echo ($ov["gprice"]); ?></span>
				</div>
			<p class="product-detail-selection"></p>
		<dl class="product-detail-list-item-details-list">
			<dt>
				商品编号：</dt>
			<dd><?php echo ($ov["gid"]); ?> &nbsp;</dd>
			<dt>
				数量：</dt>
			<dd><?php echo ($ov["gnum"]); ?> &nbsp;</dd>
			
			<dt>
				颜色：</dt>
			<dd><?php echo ($ov["color"]); ?> &nbsp;</dd>

			<dt>
				尺码:</dt>
			<dd><?php echo ($ov["size"]); ?> &nbsp;</dd>	
		</dl>
		
		
	</div>
</li><?php endforeach; endif; ?>
</ul>
							<ul class="order-table">
								<li class="item">
    <span class="label">总价：</span>
    <span class="static ">¥<?php echo ($orderData["ordertotalprice"]); ?></span>
</li>

<li class="item order-total">
			<span class="label">总价：</span>
			<span class="static ">¥<?php echo ($orderData["ordertotalprice"]); ?></span>
		</li>
	</ul>
							<script type="text/javascript">
								$(".order-confirmation-total").addClass("order-confirmation-total-paid");
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>

		<input id="cybersourceStatus" type="hidden" value="">
		<input id="cybersourceReasonCode" type="hidden" value="">

		<div class="modaloverlay responsive hidden" id="payment-palce-order-denied">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>出错了</h2>
						<p>请确认您所输入的所有数据都正确无误。</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div class="modaloverlay responsive hidden" id="payment-system-unavailable-tech">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>支付被拒绝</h2>
						<p>checkout.payment.popup.system.unavailable.technical.problems</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div class="modaloverlay responsive hidden" id="payment-system-unavailable">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>支付被拒绝</h2>
						<p>当前无法处理您的订单。请检查付款详情并重试。(code “SU1”)</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div class="modaloverlay responsive hidden" id="payment-fraud-attempt">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>支付被拒绝</h2>
						<p>当前无法处理您的订单。请联系客户服务，并提供代码“RM1”，以获得帮助。</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div class="modaloverlay responsive hidden" id="payment-invalid-data">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>支付被拒绝</h2>
						<p>结账时所输入信息似乎有误，导致您的订单无法处理。请检查您的个人/付款/投递信息，并重试。如果问题仍未解决，请联系 H&amp;M 客户服务，并提供代码“VD1”，以获得帮助。</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div class="modaloverlay responsive hidden" id="payment-transaction-denied">
	<div class="modalbackground"></div>
	<div class="modal responsive" style="margin-top: -104.5px;">
		<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents" style="max-height: 209px;">
				<section class="responsive">
					<div class="shopping-bag-message">
						<h2>支付被拒绝</h2>
						<p>当前无法处理您的订单。请检查您的付款信息，并重试。如果问题仍未解决，请联系您的银行，以获得帮助（代码“BD1”）</p>
						<div class="buttons clearfix">
							<input class="modalclose button" type="button" value="OK">
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div><div aria-hidden="true" id="generic-error-popup" class="hidden modal-content">
			<div class="modal-text">
				<h1 class="heading">出错了</h1>
				<p class="text">该表格不能提交。请检查您的信息</p>
				<div class="sticky button-group">
					<button ng-click="closePopup()" class="modalclose button">确定</button>
				</div>
			</div>
		</div>
	</div>
	
</div>
		</main>

	<script>
		$('#checkoutViewPaymentButton').click(function () {
			$('.js-payment-loader').css('display', 'block');

			$.post(
				'/2nd Project/04.19/project/index.php/Home/Order/pay',
				{
					oid:<?php echo ($orderData["id"]); ?>
				},
				function (data) {
					if (data == 2) {
						$('.js-payment-loader').children().children().find('h2').text('支付被拒绝');
						$('.js-payment-loader').children().children().find('p').text('当前无法处理您的订单。请刷新页面并重试。');
					} else {
						location.href = '/2nd Project/04.19/project/index.php/Home/Order/thinkYou';
					}
				},
				'json'
			);

			return false;
		});
	</script>



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

                var url = '/2nd Project/04.19/project/index.php/Home/Order/base';

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