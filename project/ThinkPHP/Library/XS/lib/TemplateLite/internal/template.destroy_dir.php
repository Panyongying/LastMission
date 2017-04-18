<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>清空索引</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="-">清空索引</h1>

<p>当您的索引数据库发生了重大改变时必须清空索引。比如搜索项目的字段配置修改了，
或者是数据进行了大模迁移、导入或批量删除导致真实数据库和搜索数据库发生了较大的偏差。</p>

<blockquote class="tip">
<p><strong>Tip:</strong> 在我们附带的<a href="util.indexer.html">Indexer 索引管理工具</a>中提供了 <code>--clean</code> 
  选项用于清空项目的索引数据库，用起来更简洁。</p>
</blockquote>

<p>清空数据很简单，直接调用 <a href="../api/XSIndex.html#clean">XSIndex::clean</a> 即可，代码�