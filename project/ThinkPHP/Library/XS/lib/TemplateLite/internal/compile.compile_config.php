<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>XSException 异常</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="xsexception-">XSException 异常</h1>

<p>所有操作中出现的异常、错误均抛出此类型的异常，搜索代码中应该尝试捕捉该异常以确定操作是否成功。</p>

<p>已通过重载魔术方法 <a href="../api/XSException.html#__toString">XSException::__toString</a> 对出错信息作了简要的美化和修饰，您可以直接输出该对象，
如需要查看堆栈追踪，通过继承来的 <a href="../api/XSException.html#getTraceAsString">XSException::getTraceAsString</a> 即可。</p>

<blockquote class="note">
<p><strong>Note:</strong> 在系统内部将所有的错误处理也转换成为抛出 <a href="../api/XSErrorException.html">XSErrorException</a> 对象，而 <code>XSErrorException</code>
  继承自 <a href="../api/XSException.html">XSException</a>，所以实际代码中只要统一捕捉 <code>XSException</code> 即可。</p>
</blockquote>

<p>一段典型的处理代码应类似下面的方式：</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-reserved">require</span> <span class="php-hl-quotes">'</span><span class="php-hl-string">$prefix/sdk/php/lib/XS.php</span><span