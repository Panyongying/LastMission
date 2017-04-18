<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>添加文档</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<h1 id="-">添加文档</h1>

<p>搜索数据库在创建之初或运行过程中，都免不了要往索引数据库添加新文档用于检索。</p>

<p>首先您必须创建类型为 <a href="../api/XSDocument.html">XSDocument</a> 的文档对象，关于文档对象的创建请参阅
<a href="class.document.html">XSDocument 文档</a> 中关于<strong>索引文档</strong>的部分。特别要指出
的是，文档中的主键字段值必须明确指定（即类型为 <code>ID</code> 的字段），否则在添加、
更新过程中会抛出异常，其余字段若未指定则相当于忽略这些字段。</p>

<p>索引文档创建后，再调用 <a href="../api/XSIndex.html#add">XSIndex::add</a> 方法将文档加入索引数据库中即可。</p>

<blockquote class="note">
<p><strong>Note:</strong> 如果索引数据库中已存在主键值相同的文档，并不会有冲突提示，文档仍会
  添加成功并且不会有任何冲突提醒。所以除非您明确知道此为新文档，否则建议使用
  <a href="index.update.html">更新文档</a>。</p>
  
  <p>此外，如果您自行扩展了 <a href="../api/XSDocument.html">XSDocument</a>，请使用您自定定义的文档类创建对象。</p>
</blockquote>

<p>参考代码如下：</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-var">$data</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">pid</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-number">234</span><span class="php-hl-code">, </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 此字段为主键，必须指定</span>
    <span class="php-hl-quotes">'</span><span class="php-hl-string">subject</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">测试文档的标题</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">message</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">测试文档的内容部分</span><span class="php-hl-quotes">'</span><span class="php-hl-code">,
    </span><span class="php-hl-quotes">'</span><span class="php-hl-string">chrono</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-identifier">time</span><span class="php-hl-brackets">(</span><span class="php-hl-brackets">)</span>
<span class="php-hl-brackets">)</span><span class="php-hl-code">;
 
</span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 创建文档对象</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">XSDocument</span><span class="php-hl-code">;
</span><span class="php-hl-var">$doc</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFields</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$data</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;
 
</span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 添加到索引数据库中</span>
<span class="php-hl-var">$index</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">add</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span><span class="php-hl-brackets">)</span><span class="php-hl-code">;</span></pre></div></div>

<div class="revision">$Id$</div>
	<div class="clear"></div>
</div><!-- end of content -->
<div id="guideNav">
		<div class="prev"><a href="index.overview.html">&laquo; 索引概述</a></div>
			<div class="next"><a href="index.update.html">更新、修改文档 &raquo;</a></div>
		<div class="clear"></div>
</div><!-- end of nav -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">杭州云圣网络科技有限公司</a><br/>
All Rights Reserved.<br/>
</div><!-- end of footer -->

</div><!-- end of page -->

<div style="display:none;">
	<img src="../api/css/info.gif" />
	<img src="../api/css/tip.gif" />
	<img src="../api/css/note.gif" />
</div>

</body>
</html>                                                                                                                                                    eee><td colspan=2><tt><i>No config vars assigned</i></tt></td></tr>");
	{/foreach}
	_templatelite_console.document.write("</table>");
	_templatelite_console.document.write("</BODY></HTML>");
	_templatelite_console.document.close();
</SCRIPT>
{/if}