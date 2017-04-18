<span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">abc</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">def</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">subject</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 删除字段 subject 上带有索引词 abc 或 def 的所有记录</span></pre></div></div>

<blockquote class="note">
<p><strong>Note:</strong> 如果您删除时指定的主键或字段索引词包含中文字符，则它的编码必须与整个项目的
  默认字符集 <a href="../api/XS.html#defaultCharset">XS::defaultCharset</a> 一致。</p>
  
  <p>此外删除操作和<a href="index.add.html">添加文档</a>一样，也是一个异步行为。</p>
</blockquote>

<div class="revision">$Id$</div>
	<div class="clear"></div>
</div><!-- end of content -->
<div id="guideNav">
		<div class="prev"><a href="index.upd