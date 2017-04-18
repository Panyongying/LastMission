<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>XSTokenizer 分词接口</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="xstokenizer-">XSTokenizer 分词接口</h1>

<p><a href="../api/XSTokenizer.html">XSTokenizer</a> 是搜索字段的分词接口定义，整个接口只要求实现一个方法 <a href="../api/XSTokenizer.html#getTokens">XSTokenizer::getTokens</a>，
自定义分词器用于 INI 配置文件中的 <code>tokenizer</code> 选项。</p>

<p>关于自定义分词器的详细用法剖析请阅读后面的<a href="ini.tokenizer.html">专题</a>。</p>

<div class="revision">$Id$</div>
	<div class="clear"></div>
</div><!-- end of content -->
<div id="guideNav">
		<div class="prev"><a href="class.search.html">&laquo; XSSearch 搜索</a></div>
			<div class="next"><a href="ini.guide.html">项目配置详解 &raquo;</a></div>
		<div class="clear"></div>
</div><!-- end of nav -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">杭�