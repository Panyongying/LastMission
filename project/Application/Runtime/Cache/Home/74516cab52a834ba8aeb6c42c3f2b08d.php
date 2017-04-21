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


       
	<title>Your Shopping Cart | H&amp;M CN</title>

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


        
	<main role="main" class="favorites-active">
			<div class="wrapper">    
				<nav class="breadcrumbs">
					<ul>
	<li>
		<a href="http://www2.hm.com/zh_cn/">HM.COM</a>
	</li>

	<li class="active">

			<a href="http://www2.hm.com/zh_cn/cart#" onclick="return false;"> 购物袋</a>
				</li>
	</ul>
</nav>
				<script type="text/javascript">$("body").addClass("checkout-loader-layer");</script>
	<header class="checkout-header"><h1>购物袋</h1></header>	
		<div class="row sticky-wrapper ng-scope" ng-controller="CartContextController">
			<div class="grid col-8">
				<h2 class="visuallyhidden">购物袋商品</h2>
					<?php if($data == 'empty' ): ?><div class="ng-scope">
							<div id="cartPage-body-empty" class="box">
								<div class="box-content shopping-bag-empty">
									<h2>您的购物袋是空的</h2>
									<div class="ng-scope">
										<?php if($login == 2): ?>请登录保存商品到购物袋,或读取购物袋中已保存商品。 
										<br><br>
										<a href="/2nd Project/04.21/project/index.php/Home/User/signIn">登录</a>
										<?php else: ?>
										您的购物袋是空的<?php echo ($cart); endif; ?>
										<br><br>
									</div>
								</div>
							</div>
						</div>
					<?php else: ?>
					<ul ng-if="getContext().cartEntries.length &gt; 0" class="product-detail-list responsive ng-scope" id="cartPage-items">
						<?php if(is_array($data["cartList"])): foreach($data["cartList"] as $key=>$ov): ?><li class="product-detail-list-item ng-scope" id="0401021001" ng-repeat="entry in getContext().cartEntries" >
		<div class="product-detail-list-item-image-wrapper">
			<div class="wrapper-inner">
				<a href="http://www2.hm.com/zh_cn/productpage.0401021001.html" class="product-detail-list-item-image ">
					<img alt="<?php echo ($ov["name"]); ?>" title="<?php echo ($ov["name"]); ?>" class="product-detail-list-item-image-image" src="<?php echo ($ov["pic"]); ?>">
						 
			    </a>
			 </div>  
		</div>
		<div class="product-detail-list-item-details">
		
				<div class="product-detail-list-item-price-info">
					<p class="product-detail-list-item-total-price">
						总价：<span id="entry_new_price" class="ng-binding">¥<?php echo ($ov["allPrice"]); ?></span>
					</p>
				</div>
		
				<!-- ngRepeat: marker in entry.productMarker -->
							
				<h3 class="sub-sub-heading ng-binding"><?php echo ($ov["name"]); ?></h3>
<div ng-hide="entry.isYellowPriceAvailable">
	<p class="product-detail-price ng-binding">
		¥<?php echo ($ov["price"]); ?>
	</p>
</div>

<p class="product-detail-selection">
					</p><div class="product-item-selection ng-binding"></div>
				<p></p>
				<dl class="product-detail-list-item-details-list">
					<dt>
						商品编号：</dt>
					<dd class="ng-binding"><?php echo ($ov["gid"]); ?></dd>
					
					<dt>
						颜色：</dt>
					<dd class="ng-binding"><?php echo ($ov["color"]); ?></dd>

					<dt>
						尺码：</dt>
					<dd class="ng-binding"><?php echo ($ov["size"]); ?></dd>
				</dl>
				
			</div>
			<div class="product-detail-list-item-actions">
                <button class="button secondary icon icon-trash rm-btn" type="button" title="Remove product"  aid="<?php echo ($ov["aid"]); ?>" gid="<?php echo ($ov["gid"]); ?>""></button>
                <button class="button secondary icon icon-move-favorite ng-scope fav-btn" type="button" data-saved-text="Saved to favorites" data-not-saved-text="Not saved to favorites" title="Toggle favorite" aid="<?php echo ($ov["aid"]); ?>" gid="<?php echo ($ov["gid"]); ?>"></button>
                <label class="product-detail-list-item-actions-label" for="shopping-bag-quantity-options-4"></label>
				<div class="select-primary product-detail-list-item-quantity">
    				<select name="product-detail-list-item-quantity-options-4" id="shopping-bag-quantity-options-4" data-validation="false" ng-change="updateQuantity(entry,entry.quantity)" ng-model="entry.quantity" ng-options="option for option in range(entry.maxQuantity)" class="ng-pristine ng-untouched ng-valid num-sel"  aid="<?php echo ($ov["aid"]); ?>" gid="<?php echo ($ov["gid"]); ?>">
    					<?php if($ov['stock'] >= 10): $__FOR_START_4888__=1;$__FOR_END_4888__=11;for($i=$__FOR_START_4888__;$i < $__FOR_END_4888__;$i+=1){ ?><option value="<?php echo ($i); ?>" 
    							<?php if($i == $ov['gnum']): ?>selected<?php endif; ?> label="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } ?>
    					<?php else: ?>
    						<?php $__FOR_START_8561__=1;$__FOR_END_8561__=$ov['stock'] + 1;for($i=$__FOR_START_8561__;$i < $__FOR_END_8561__;$i+=1){ ?><option value="<?php echo ($i); ?>" 
    							<?php if($i == $ov['gnum']): ?>selected<?php endif; ?> label="<?php echo ($i); ?>"><?php echo ($i); ?></option><?php } endif; ?>
    				</select>
				</div>
           	</div>
	</li><?php endforeach; endif; ?>
					</ul><?php endif; ?>
			</div>
			<div id="cartPage-summary" class="grid col-4">
				<div style="" class="shopping-bag-order-total sticky-on-scroll semi-sticky" data-sticky-offset="-20" data-sticky-stop-offset="-70">
					<div class="box">
	<h2 class="box-headline">购物袋总金额</h2>
	<div class="box-content">
	<div class="shopping-bag-total">
		<table class="order-total">
	<tbody>
		<tr>
			<th scope="row">订单价值：</th>
			<td><span id="newPriceSubtotal" class="ng-binding">¥
				<?php if($data == 'empty'): ?>0.00
				<?php else: echo ($data["totalPrice"]); endif; ?>
			</span></td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<th scope="row">总价:</th>
			<td id="total_price_of_basket" class="ng-binding">
				¥<?php if($data == 'empty'): ?>0.00
				<?php else: echo ($data["totalPrice"]); endif; ?>
		    	</td>
		   </tr>
		 </tfoot>
</table>
				
			<button id="goToQuery" class="button button-big" <?php if($data == 'empty'): ?>disabled
				<?php else: endif; ?>
				>
				前往结账</button> 
	</div>
		<p class="fine-print">价格和运费在结账时才会最终确认。</p>
		<p class="fine-print">
				您可以取消订单，前提是您希望退回的商品在不迟于您收到订单商品后的30天内送达给我们。您可在此找到退换货政策全文&nbsp;
				<a class="overlay-trigger underline" href="http://www2.hm.com/zh_cn/customer-service/return-link.html"> 退货和退款</a>
			</p>
		</div>
	<div class="product-warning notice responsive ng-hide" ng-show="!isBrowserCompatible &amp;&amp; false"><p class="text icon-notice normal">basket.page.disabled.button.description</p></div>
</div>



 <form id="view-join-club-modal" ng-submit="createClubAccount()" aria-hidden="true" class="hidden modal-content create-account-modal ng-pristine ng-valid">
	<h2 class="heading">Join H&amp;M Club!</h2>
	<article class="hero-unit responsive ">
    	<header class="hero-logo icon-hm-club-logo-light">H&amp;M CLUB</header>
        <p class="hero-text">You have items in your shopping bag that are eligible for special Club prices. Join H&amp;M Club to get this deal!</p>   
    </article>
    <div class="modal-text">
    
    
    <div class="inputwrapper prefilled">		
				<h3 class="label">1996/05/03</h3>
				<div class="input-info">You have already entered your date of birth.</div>			
			</div>
    
    
		
   </div>
   <div class="sticky button-group">
		<div class="inputwrapper list-group required">
	      <ul class="input-list">
			<li class="item">
				<input class="checkbox-input ng-pristine ng-untouched ng-valid" type="checkbox" id="club-concent_0" name="club-concent" data-validation-required="true" ng-model="birthDateForm.consent">
                <label class="checkbox-label" for="club-concent_0">
				        
				        I accept the H&amp;M Club <a href="http://www2.hm.com/zh_cn/customer-service/club-terms-link.html" class="agreement-link overlay-trigger">Terms &amp; conditions </a> and I am  16 years old.
				</label>
			</li>
	</ul>
   </div>
	<p class="input-info">I am not interested in joining the H&amp;M Club at the moment.</p>
		<button class="modalclose button secondary" type="button" ng-click="denyClubBenefits()">Skip</button>
		<input class="button primary" type="submit" value="JOIN H&amp;M CLUB" data-custom-classname="content-fill no-border" data-validate-before-open-modal="true">
	
  </div>
</form>











<div id="confirm-modal" aria-hidden="true" class="hidden no-border modal-content create-account-modal">
	<div class="modal-text responsive">
		<h2 class="heading">Welcome to H&amp;M Club!</h2>
        
		<article class="hero-unit responsive ">
    	    <header class="hero-logo icon-hm-club-logo-light">H&amp;M CLUB</header>
            <p class="hero-text">You are now a member of H&amp;M Club. You can earn pointson everything you buy! Use&nbsp;your&nbsp;points to unlock customised offers,fashionable rewards and invitations to exclusive events.</p>
        </article>
	</div>
	<div class="sticky button-group">
		
		<button onclick="location.href = &#39;https://www2.hm.com/zh_cn/checkout&#39;;" class="modalclose button secondary">确认</button>
	</div>
</div>
	<section class="legaltext parbase section ng-hide" ng-show="containsYellowPrice">
	<h3 class="sub-sub-heading">CLUB BENEFITS</h3>
	<p class="text">Join the club to receive fantastic offers!</p>
	<p class="text">You can apply discount code for H&amp;M club in the checkout process</p>
	<p class="text">There are many club benefits.</p>
	<p class="text">You will get prompted to sign up for the club if you are not a club member and you have a club priced item in your shopping bag</p>
</section>



    
    
<!-- Only Content -->
<!--AEMPUBPRDAP15-->
<div class="parsys main"><section class="legaltext parbase section">
<h1 class="sub-sub-heading"></h1>
<p class="text">

<p><b>退货和退款</b></p>
<p>如果要退货，请自行安排快递并承担快递费用。<a class="underline overlay-trigger" href="http://www2.hm.com/zh_cn/customer-service/return-link.html">在此处</a>了解更多有关退货和退款的信息。<br>
您的发票将会在您提出要求后，为您提供。在&nbsp;<a class="underline overlay-trigger" href="http://www2.hm.com/zh_cn/customer-service/fapiao.html">这里</a>&nbsp;了解更多有关发票的信息</p>
<div style="left: -10000px; top: 0px; width: 9000px; position: absolute;">时髦11.11 + 包邮</div>
<div style="left: -10000px; top: 0px; width: 9000px; position: absolute;">时髦11.11 + 包邮</div>
<p></p>	</section>

</div>

<!-- /Only Content -->

					 
				</div>
			</div>
			
			<div class="modaloverlay responsive ng-hide" ng-show="getContext().showPopup &amp;&amp; getContext().popupType==&#39;UPDATE_ENTRY&#39;">
	<div class="modalbackground"></div>
	<div class="modal responsive">
	<a class="modalclose icon-close-black" href="javascript:;"></a>
		<div class="modalwrap">
			<div class="modalcontents">
			<section class="responsive">
				<div class="shopping-bag-message">
					<h2 class="ng-binding"></h2>
					<p class="ng-binding"></p>
					<p class="shopping-bag-changed-availablity">
						</p><!-- ngRepeat: entry in getContext().cartModificationEntries -->	
					<p></p>
				<div class="buttons clearfix">
					<button ng-click="getContext().showPopup = false" class="modalclose button">确定</button>
				</div>
				</div>
			</section>
			</div>
		</div>
	</div>
</div>

<div class="hidden modal-content" id="error-popup">
	<div class="modal-text">
		<div class="shopping-bag-message">
			<h1 class="heading ng-binding"></h1>
			<p ng-bind-html="getContext().popupMessage" class="ng-binding"></p>
			<form class="ng-pristine ng-valid">
				<div class="sticky button-group">
					<button ng-click="closePopup()" class="modalclose button">确定</button>
				</div>
			</form>
		</div>	
	</div>
</div>
</main>

<script>
	// 删除按钮
	$(document).on('click', '.rm-btn', function () {
		var aid = $(this).attr('aid');
		var gid = $(this).attr('gid');

		$.get(
			'/2nd Project/04.21/project/index.php/Home/Cart/delFromCart',
			{
				aid:aid,
				gid:gid
			},
			function (data) {
				if (data == 2) {
					alert('系统繁忙，请稍后再试')
				} else {
					$('.visuallyhidden').next().remove();
					$('.visuallyhidden').after(data.mainCart);
					$('.shopping-bag-rollover-items-wrapper').children().remove();
					$('.shopping-bag-rollover-items-wrapper').append(data.topCart);
					$('.clearfix').children().find('dd').text('￥' + data.totalPrice);
					$('.shopping-bag-rollover-order-total').children().find('dd').text('￥' + data.totalPrice);
					$('#total_price_of_basket').text('￥' + data.totalPrice);
					$('#newPriceSubtotal').text('￥' + data.totalPrice);
					$('.shoppingbag-item-count').text(data.goodsNum);
					if (data.totalPrice == '0.00') {
						$('#goToQuery').attr('disabled', true);
					} else {
						$('#goToQuery').attr('disabled', false);
					}
				}
			},
			'json'
		);
	});

	// 去收藏按钮
	$(document).on('click', '.fav-btn', function () {
		var aid = $(this).attr('aid');
		var gid = $(this).attr('gid');

		$.get(
			'/2nd Project/04.21/project/index.php/Home/Cart/cartToFav',
			{
				aid:aid,
				gid:gid
			},
			function (data) {
				if (data == 2) {
					alert('系统繁忙，请稍后再试');
				} else if (data == 3) {
					alert('请登录再进行操作');
				} else {
					$('.visuallyhidden').next().remove();
					$('.visuallyhidden').after(data.mainCart);
					$('.shopping-bag-rollover-items-wrapper').children().remove();
					$('.shopping-bag-rollover-items-wrapper').append(data.topCart);
					$('.clearfix').children().find('dd').text('￥' + data.totalPrice);
					$('.shopping-bag-rollover-order-total').children().find('dd').text('￥' + data.totalPrice);
					$('#total_price_of_basket').text('￥' + data.totalPrice);
					$('.shoppingbag-item-count').text(data.goodsNum);
					$('#newPriceSubtotal').text('￥' + data.totalPrice);

					if (data.totalPrice == '0.00') {
						$('#goToQuery').attr('disabled', true);
					} else {
						$('#goToQuery').attr('disabled', false);
					}
				}
			},
			'json'
		);
	});

	// 改变商品数量
	$(document).on('change', '.num-sel', function () {
		var gnum = $(this).val();
		var aid = $(this).attr('aid');
		var gid = $(this).attr('gid');

		$.get(
			'/2nd Project/04.21/project/index.php/Home/Cart/changeNum',
			{
				gnum:gnum,
				aid:aid,
				gid:gid
			},
			function (data) {
				if (data == 2) {
					alert('系统繁忙，请稍后再试');
				} else if (data == 3) {
					alert('没有库存了');
				} else {
					$('.visuallyhidden').next().remove();
					$('.visuallyhidden').after(data.mainCart);
					$('.shopping-bag-rollover-items-wrapper').children().remove();
					$('.shopping-bag-rollover-items-wrapper').append(data.topCart);
					$('.shopping-bag-rollover-summary .clearfix').children().find('dd').text('￥' + data.totalPrice);
					$('.shoppingbag-item-count').text(data.goodsNum);
					$('.shopping-bag-rollover-order-total').children().find('dd').text('￥' + data.totalPrice);
					$('#total_price_of_basket').text('￥' + data.totalPrice);
					$('#newPriceSubtotal').text('￥' + data.totalPrice);

					if (data.totalPrice == '0.00') {
						$('#goToQuery').attr('disabled', true);
					} else {
						$('#goToQuery').attr('disabled', false);
					}
				}
			},
			'json'
		);
	});

	// 去结账
	$('#goToQuery').click(function () {
		location.href = '/2nd Project/04.21/project/index.php/Home/order/checkout';
	});
</script>



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

                var url = '/2nd Project/04.21/project/index.php/Home/Cart/base';

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