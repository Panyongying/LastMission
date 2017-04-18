<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>删除文档</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<div class="toc"><ol><li><a href="#ch0">按主键删除</a></li><li><a href="#ch1">按特定字段上的索引词删除</a></li></ol></div><h1 id="-">删除文档</h1>

<p>当某一条数据（文档）已经过期或失效，则必须将它从索引数据库中移除，才能从搜索结果中消失。
在 <code>Xunsearch PHP-SDK</code> 中删除文档有下面两种方式。</p>

<h2 id="ch0">1. 按主键删除<a name="ch0" class="anchor">?</a></h2>

<p>主键是指项目中类型为 <code>id</code> 的字段，删除是调用的是 <a href="../api/XSIndex.html#del">XSIndex::del</a> 方法，传入参数必须是
要删除的文档的<code>主键值</code>，或一系列主键值组成的<code>数组</code>�