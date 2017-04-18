<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>XSSearch 搜索对象</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="xssearch-">XSSearch 搜索对象</h1>

<p>通过 <a href="../api/XSSearch.html">XSSearch</a> 对象实现各种搜索相关操作。实现使用过程中并不需要自行创建该对象，
而是直接访问 <a href="../api/XS.html#search">XS::search</a> 即可。</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-reserved">require</span> <span class="php-hl-quotes">'</span><span class="php-hl-string">$prefix/sdk/php/lib/XS.php</span><span class="php-hl-quotes">'</span><span class="php-hl-code">;
</span><span class="php-hl-var">$xs</span><span class="php-hl-code"> = </span><span class="php-hl-reserved