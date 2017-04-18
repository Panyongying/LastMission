<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>使用索引缓冲区</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="-">使用索引缓冲区</h1>

<p>前面分开讲解了文档的添加、删除、修改操作，它们的调用都是立即传送到服务器的。
如果您进行文档批量处理，如果每一次都进行服务器交互则显得效率低下。</p>

<p>因此，对于大量索引更新操作时，请使用以下方式开启缓冲区进行操作，缓冲区的默认
大小为 <code>4MB</code>，如需修改请传入数字作为 <a href="../api/XSIndex.html#openBuffer">XSIndex::openBuffer</a> 的参数。</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">openBuffer</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 开启缓冲区，默认 4MB，如 $index-&gt;openBuffer(8) 则表示 8MB</span>
 
<span class="php-hl-comment">//</span><span class="php-hl-comment"> 在此进行批量的文档添加、修改、删除操作</span><span class="php-hl-code">
...
</span><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">add</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
...
</span><span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">del</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span><span class="php-hl-brackets