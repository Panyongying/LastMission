<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html>
<!-- saved from url=(0045)http://cnchat.hm.com/client/home?_projectid=1 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>【提示H&amp;M】H&amp;M提示</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type/">
     <link href="/2nd Project/04.21/project/Public/CustomService/bootstrap.min.css" rel="stylesheet">
    <link href="/2nd Project/04.21/project/Public/CustomService/bootstrap-dialog.min.css" rel="stylesheet" type="text/css">
    <link href="/2nd Project/04.21/project/Public/CustomService/hm.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/2nd Project/04.21/project/Public/CustomService/uploadify.css">
	<link rel="stylesheet" type="text/css" href="/2nd Project/04.21/project/Public/CustomService/filetype.css">
	<script src="/2nd Project/04.21/project/Public/CustomService/jquery.min.js.下载" type="text/javascript"></script>
	




<!-- <script src="/2nd Project/04.21/project/Public/CustomService/flashutil.js.下载" type="text/javascript"></script> -->



	<style type="text/css">
		.div_information p.text-info,p.text-warning {font-size:12px;color:#000;}
		.uploadify{padding-top:0px;}
		.hot_line {cursor: pointer;font-size:12px;color:#000;font-weight:bold;}
		.fileName{font-size:12px;color:#000;font-weight:bold;}
		.acceptattach{font-size:12px;color:#9c9c9c;font-style:normal;font-weight: normal;}
		.replaceAttachment{ padding-left:0px;}
		.uploadify-queue-item {padding:0px;margin-top:0px;padding-bottom:10px;}
		#queue{margin-top:0px;left:30px;top:350px;width:520px;margin:auto;position:absolute;}
		.ul_talklist_li1 { padding-top:20px;padding-bottom:20px;}
		.ul_talklist_li2 { padding:0px;margin:0px; }
		body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
		.system-message{ padding: 24px 48px; }
		.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; }
		.system-message .jump{ padding-top: 10px}
		.system-message .jump a{ color: #333;}
		.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
		.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
	</style>
		<!--[if IE 7]>
	<style type="text/css">
		  .ul_talklist{margin-left:-5px;}
	</style>
	<![endif]-->
  </head>
<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="table_basic">
  <tbody><tr>
    <td align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td width="30%">&nbsp;</td>
        <td align="center"><img src="/2nd Project/04.21/project/Public/CustomService/hm_logo.png" width="106" height="64" class="img_logo"></td>
        <td width="30%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_close">
          <tbody><tr onclick="closeChatWindow();" style="cursor: pointer;">

          </tr>
        </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>
  <tr>
    <td height="40" align="center" class="text_title">&nbsp;</td>
  </tr>
  <tr>
    <td class="table_td_padding_20px"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_talk_common"><tbody id="talk_table_id" sid="6500" originateuser="71626"><tr> <td height="40" class="table_td_padding_20px" style="border-bottom:1px solid white" ></tr>

    <tr>

    <td height="400" valign="top">

    

    <div class="system-message">
		<?php if(isset($message)) {?>
		<h1>:)</h1>
		<p class="success"><?php echo($message); ?></p>
		<?php }else{?>
		<h1>:(</h1>
		<p class="error"><?php echo($error); ?></p>
		<?php }?>
		<p class="detail"></p>
		<p class="jump">
		页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
		</p>
	</div>

	
	<script type="text/javascript">
		(function(){
		var wait = document.getElementById('wait'),href = document.getElementById('href').href;
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time <= 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 1000);
		})();
	</script>

      
    
    
  
    </td>
    </tr>
    </tbody>
    </table>
    </td>
  </tr>
  <tr>
    <td class="table_tools_padding">
    	
    </td>
  </tr>
  <tr>
    <td align="center" class="table_td_padding_20px"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="table_talk_common">
          <tbody><tr style="padding:0px;margin:0px;">
          </tr>
        </tbody></table></td>
      </tr>
      
    </tbody></table></td>
  </tr>
  <tr>
    <td height="70" align="center" class="text_common">&nbsp;</td>
  </tr>
</tbody></table>

<div id="queue"></div>




 </body></html>