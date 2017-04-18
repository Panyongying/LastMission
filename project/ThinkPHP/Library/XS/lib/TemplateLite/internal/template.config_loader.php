<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>ʹ������������</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 Ȩ��ָ��
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="-">ʹ������������</h1>

<p>ǰ��ֿ��������ĵ�����ӡ�ɾ�����޸Ĳ��������ǵĵ��ö����������͵��������ġ�
����������ĵ������������ÿһ�ζ����з������������Ե�Ч�ʵ��¡�</p>

<p>��ˣ����ڴ����������²���ʱ����ʹ�����·�ʽ�������������в�������������Ĭ��
��СΪ <code>4MB</code>�������޸��봫��������Ϊ <a href="../api/XSIndex.html#openBuffer">XSIndex::openBuffer</a> �Ĳ�����</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">openBuffer</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> ������������Ĭ�� 4MB���� $index-&gt;openBuffer(8) ���ʾ 8MB</span>
 
<span class="php-hl-comment">//</span><span class="php-hl-comment"> �ڴ˽����������ĵ���ӡ��޸ġ�ɾ������</span><span class="php-hl-code">
...
</span><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">add</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
...
</span><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">del</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span><span class="php-hl-brackets