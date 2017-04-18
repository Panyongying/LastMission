<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>XSException �쳣</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 Ȩ��ָ��
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="xsexception-">XSException �쳣</h1>

<p>���в����г��ֵ��쳣��������׳������͵��쳣������������Ӧ�ó��Բ�׽���쳣��ȷ�������Ƿ�ɹ���</p>

<p>��ͨ������ħ������ <a href="../api/XSException.html#__toString">XSException::__toString</a> �Գ�����Ϣ���˼�Ҫ�����������Σ�������ֱ������ö���
����Ҫ�鿴��ջ׷�٣�ͨ���̳����� <a href="../api/XSException.html#getTraceAsString">XSException::getTraceAsString</a> ���ɡ�</p>

<blockquote class="note">
<p><strong>Note:</strong> ��ϵͳ�ڲ������еĴ�����Ҳת����Ϊ�׳� <a href="../api/XSErrorException.html">XSErrorException</a> ���󣬶� <code>XSErrorException</code>
  �̳��� <a href="../api/XSException.html">XSException</a>������ʵ�ʴ�����ֻҪͳһ��׽ <code>XSException</code> ���ɡ�</p>
</blockquote>

<p>һ�ε��͵Ĵ������Ӧ��������ķ�ʽ��</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-reserved">require</span> <span class="php-hl-quotes">'</span><span class="php-hl-string">$prefix/sdk/php/lib/XS.php</span><span