&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'-'</span><span style="color: #007700">][]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">][</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">[</span><span style="color: #0000BB">0</span><span style="color: #007700">]&nbsp;===&nbsp;</span><span style="color: #DD0000">'-'</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;((</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">strpos</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'='</span><span style="color: #007700">))&nbsp;!==&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pos&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$pos</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;(</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">)&nbsp;&gt;&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]);&nbsp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">++)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$pname&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$j</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$valued</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">],&nbsp;</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;elseif&nbsp;((</span><span style="color: #0000BB">$j&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">)&nbsp;!=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">$pname</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">true&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">in_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$pname</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$valued</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">]))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$value&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #0000BB">$pname</span><span style="color: #007700">]&nbsp;=&nbsp;</span><span style="color: #0000BB">$value</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">[</span><span style="color: #DD0000">'-'</span><span style="color: #007700">][]&nbsp;=&nbsp;</span><span style="color: #0000BB">$params</span><span style="color: #007700">[</span><span style="color: #0000BB">$i</span><span style="color: #007700">];<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$options&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$optind&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$result</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>

<p>Ω‚Œˆ√¸¡Ó––≤Œ ˝</p>


<div class="detailHeader" id="setCharset-detail">
setCharset()
<span class="detailHeaderTag">
∑Ω∑®
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static void <b>setCharset</b>(string $charset)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$charset</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">∆⁄Õ˚µ√µΩµƒ◊÷∑˚ºØ</td>
</tr>
</table>

<div class="sourceCode">
<b>‘¥¬Î:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/util/XSUtil.class.php#L69">sdk/php/util/XSUtil.class.php#L69</a> (<b><a href="#" class="show">œ‘ æ</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">setCharset</span><span style="color: #007700">(</span><span style="color: #0000BB">$charset</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$charset&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$charset</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'utf8'</span><span style="color: #007700">)&nbsp;&amp;&amp;&nbsp;</span><span style="color: #0000BB">strcasecmp</span><span style="color: #007700">(</span><span style="color: #0000BB">$charset</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'utf-8'</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$charset&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$charset</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">ob_start</span><span style="color: #007700">(array(</span><span style="color: #0000BB">__CLASS__</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'convertOut'</span><span style="color: #007700">));<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>

<p>…Ë÷√ ‰≥ˆ°¢ ‰»Î±‡¬Î
ƒ¨»œ ‰≥ˆµƒ÷–Œƒ±‡¬Îæ˘Œ™ UTF-8</p>


<div class="detailHeader" id="toProjectIni-detail">
toProjectIni()
<span class="detailHeaderTag">
∑Ω∑®
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>toProjectIni</b>(string $project)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$project</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">”√ªß ‰»ÎµƒœÓƒø≤Œ ˝</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">”––ßµƒ ini ≈‰÷√Œƒº˛¬∑æ∂</td>
</tr>
</table>

<div class="sourceCode">
<b>‘¥¬Î:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/util/XSUtil.class.php#L29">sdk/php/util/XSUtil.class.php#L29</a> (<b><a href="#" class="show">œ‘ æ</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">toProjectIni</span><span style="color: #007700">(</span><span style="color: #0000BB">$project</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!</span><span style="color: #0000BB">is_file</span><span style="color: #007700">(</span><span style="color: #0000BB">$project</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$appRoot&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">getenv</span><span style="color: #007700">(</span><span style="color: #DD0000">'XS_APP_ROOT'</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$appRoot&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #0000BB">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$appRoot&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'XS_APP_ROOT'</span><span style="color: #007700">)&nbsp;?&nbsp;</span><span style="color: #0000BB">XS_APP_ROOT&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">dirname</span><span style="color: #007700">(</span><span style="color: #0000BB">__FILE__</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #DD0000">'/../app'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$appRoot&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'/'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$project&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">'.ini'</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}&nbsp;else&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$project</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>

<p>Ω´œÓƒø≤Œ ˝◊™ªªŒ™”––ßµƒ ini Œƒº˛</p>


</div><!-- end of content -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">∫º÷›‘∆ •Õ¯¬Áø∆ºº”–œﬁπ´Àæ</a><br/>
All Rights Reserved.<br/>
</div><!-- end of footer -->

<script type="text/javascript">
/*<![CDATA[*/
$("a.toggle").toggle(function(){
	$(this).text($(this).text().replace(/Hide/,'Show'));
	$(this).parents(".summary").find(".inherited").hide();
},function(){
	$(this).text($(this).text().replace(/Show/,'Hide'));
	$(this).parents(".summary").find(".inherited").show();
});
$(".sourceCode a.show").toggle(function(){
	$(this).text($(this).text().replace(/show/,'hide'));
	$(this).parents(".sourceCode").find("div.code").show();
},function(){
	$(this).text($(this).text().replace(/hide/,'show'));
	$(this).parents(".sourceCode").find("div.code").hide();
});
$("a.sourceLink").click(function(){
	$(this).attr('target','_blank');
});
/*]]>*/
</script>

</div><!-- end of page -->
</body>
</html>                        

    // Check for strings
    $regex = '/(?:(")|(?:\'))((?(1)[^"]+|[^\']+))(?(1)"|\')/';
    if (preg_match_all($regex,$inline,$strings)) {
      $saved_strings = $strings[0];
      $inline  = preg_replace($regex,'YAMLString',$inline);
    }
    unset($regex);

    $i = 0;
    do {

    // Check for sequences
    while (preg_match('/\[([^{}\[\]]+)\]/U',$inline,$matchseqs)) {
      $seqs[] = $matchseqs[0];
      $inline = preg_replace('/\[([^{}\[\]]+)\]/U', ('YAMLSeq' . (count($seqs) - 1) . 's'), $inline, 1);
    }

    // Check for mappings
    while (preg_match('/{([^\[\]{}]+)}/U',$inline,$matchmaps)) {
      $maps[] = $matchmaps[0];
      $inline = preg_replace('/{([^\[\]{}]+)}/U', ('YAMLMap' . (count($maps) - 1) . 's'), $inline, 1);
    }

    if ($i++ >= 10) break;

    } while (strpos ($inline, '[') !== false || strpos ($inline, '{') !== false);

    $explode = explode(', ',$inline);
    $stringi = 0; $i = 0;

    while (1) {

    // Re-add the sequences
    if (!empty($seqs)) {
      foreach ($explode as $key => $value) {
        if (strpos($value,'YAMLSeq') !== false) {
          foreach ($seqs as $seqk => $seq) {
            $explode[$key] = str_replace(('YAMLSeq'.$seqk.'s'),$seq,$value);
            $value = $explode[$key];
          }
        }
      }
    }

    // Re-add the mappings
    if (!empty($maps)) {
      foreach ($explode as $key => $value) {
        if (strpos($value,'YAMLMap') !== false) {
          foreach ($maps as $mapk => $map) {
            $explode[$key] = str_replace(('YAMLMap'.$mapk.'s'), $map, $value);
            $value = $explode[$key];
          }
        }
      }
    }


    // Re-add the strings
    if (!empty($saved_strings)) {
      foreach ($explode as $key => $value) {
        while (strpos($value,'YAMLString') !== false) {
          $explode[$key] = preg_replace('/YAMLString/',$saved_strings[$stringi],$value, 1);
          unset($saved_strings[$stringi]);
          ++$stringi;
          $value = $explode.php-hl-default {
    color: Black;
}
.php-hl-code {
    color: Gray;
}
.php-hl-brackets {
    color: Olive;
}
.php-hl-comment {
    color: #808080;
	font-style: italic;
}
.php-hl-quotes {
    color: red;
}
.php-hl-string {
    color: Red;
}
.php-hl-identifier {
    color: green;
}
.php-hl-builtin {
    color: Teal;
}
.php-hl-reserved {
    color: black;
	font-weight: bold;
}
.php-hl-inlinedoc {
    color: Blue;
}
.php-hl-var {
    color: blue;
}
.php-hl-url {
    color: Blue;
}
.php-hl-special {
    color: Navy;
}
.php-hl-number {
    color: Maroon;
}
.php-hl-inlinetags {
    color: Blue;
}
.php-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
    font-size: 12px;
}
ol.php-hl-main pre {
	margin: 0;
	padding: 0;
}
.php-hl-gutter {
    background-color: #999999;
    color: White
}
.php-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}

.xml-hl-default {
    color: Black;
}
.xml-hl-code {
    color: Gray;
}
.xml-hl-brackets {
    color: Olive;
}
.xml-hl-comment {
    color: #808080;
	font-style: italic;
}
.xml-hl-quotes {
    color: red;
}
.xml-hl-string {
    color: Red;
}
.xml-hl-identifier {
    color: Blue;
}
.xml-hl-builtin {
    color: Teal;
}
.xml-hl-reserved {
    color: Green;
}
.xml-hl-inlinedoc {
    color: Blue;
}
.xml-hl-var {
    color: #000020;
}
.xml-hl-url {
    color: Blue;
}
.xml-hl-special {
    color: Navy;
}
.xml-hl-number {
    color: Maroon;
}
.xml-hl-inlinetags {
    color: Blue;
}
.xml-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
}
.xml-hl-gutter {
    background-color: #999999;
    color: White
}
.xml-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}

.html-hl-default {
    color: Black;
}
.html-hl-code {
    color: Gray;
}
.html-hl-brackets {
    color: Olive;
}
.html-hl-comment {
    color: #808080;
	font-style: italic;
}
.html-hl-quotes {
    color: red;
}
.html-hl-string {
    color: Red;
}
.html-hl-identifier {
    color: Blue;
}
.html-hl-builtin {
    color: Teal;
}
.html-hl-reserved {
    color: Green;
}
.html-hl-inlinedoc {
    color: Blue;
}
.html-hl-var {
    color: #000020;
}
.html-hl-url {
    color: Blue;
}
.html-hl-special {
    color: Navy;
}
.html-hl-number {
    color: Maroon;
}
.html-hl-inlinetags {
    color: Blue;
}
.html-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
}
.html-hl-gutter {
    background-color: #999999;
    color: White
}
.html-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}

.css-hl-default {
    color: Black;
}
.css-hl-code {
    color: Gray;
}
.css-hl-brackets {
    color: Olive;
}
.css-hl-comment {
    color: #808080;
	font-style: italic;
}
.css-hl-quotes {
    color: red;
}
.css-hl-string {
    color: Red;
}
.css-hl-identifier {
    color: Blue;
}
.css-hl-builtin {
    color: Teal;
}
.css-hl-reserved {
    color: Green;
}
.css-hl-inlinedoc {
    color: Blue;
}
.css-hl-var {
    color: #000020;
}
.css-hl-url {
    color: Blue;
}
.css-hl-special {
    color: Navy;
}
.css-hl-number {
    color: Maroon;
}
.css-hl-inlinetags {
    color: Blue;
}
.css-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
}
.css-hl-gutter {
    background-color: #999999;
    color: White
}
.css-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}

.javascript-hl-default {
    color: Black;
}
.javascript-hl-code {
    color: Gray;
}
.javascript-hl-brackets {
    color: Olive;
}
.javascript-hl-comment {
    color: #808080;
	font-style: italic;
}
.javascript-hl-quotes {
    color: red;
}
.javascript-hl-string {
    color: Red;
}
.javascript-hl-identifier {
    color: Blue;
}
.javascript-hl-builtin {
    color: Teal;
}
.javascript-hl-reserved {
    color: Green;
}
.javascript-hl-inlinedoc {
    color: Blue;
}
.javascript-hl-var {
    color: #000020;
}
.javascript-hl-url {
    color: Blue;
}
.javascript-hl-special {
    color: Navy;
}
.javascript-hl-number {
    color: Maroon;
}
.javascript-hl-inlinetags {
    color: Blue;
}
.javascript-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
}
.javascript-hl-gutter {
    background-color: #999999;
    color: White
}
.javascript-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}


.sql-hl-default {
    color: Black;
}
.sql-hl-code {
    color: Gray;
}
.sql-hl-brackets {
    color: Olive;
}
.sql-hl-comment {
    color: #808080;
	font-style: italic;
}
.sql-hl-quotes {
    color: red;
}
.sql-hl-string {
    color: Red;
}
.sql-hl-identifier {
    color: Blue;
}
.sql-hl-builtin {
    color: Teal;
}
.sql-hl-reserved {
    color: Green;
}
.sql-hl-inlinedoc {
    color: Blue;
}
.sql-hl-var {
    color: #000020;
}
.sql-hl-url {
    color: Blue;
}
.sql-hl-special {
    color: Navy;
}
.sql-hl-number {
    color: Maroon;
}
.sql-hl-inlinetags {
    color: Blue;
}
.sql-hl-main {
	font-family: 'Courier New', Courier, monospace;
	font-weight: normal;
}
.sql-hl-gutter {
    background-color: #999999;
    color: White
}
.sql-hl-table {
    font-family: courier;
    font-size: 12px;
    border: solid 1px #505050;
}

.source .copycode
{
	text-align: right;
	float: right;
}

.source .copycode a
{
	cursor: pointer;
	color: blue;
}

.source .copycode_hover a
{
	color: red;
}                                                                                                                                                                                                                                                                                                                                                                                       return true;
    if (trim($line, " \r\n\t") == '---') return true;
    return false;
  }

  function isEmpty ($line) {
    return (trim ($line) === '');
  }


  function isArrayElement ($line) {
    if (!$line) return false;
    if ($line[0] != '-') return false;
    if (strlen ($line) > 3)
      if (substr($line,0,3) == '---') return false;
    
    return true;
  }

  function isHashElement ($line) {
    return strpos($line, ':');
  }

  function isLiteral ($line) {
    if ($this->isArrayElement($line)) return false;
    if ($this->isHashElement($line)) return false;
    return true;
  }


  function unquote ($value) {
    if (!$value) return $value;
    if (!is_string($value)) return $value;
    if ($value[0] == '\'') return trim ($value, '\'');
    if ($value[0] == '"') return trim ($value, '"');
    return $value;
  }

  function startsMappedSequence ($line) {
    return ($line[0] == '-' && substr ($line, -1, 1) == ':');
  }

  function returnMappedSequence ($line) {
    $array = array();
    $key         = $this->unquote(trim(substr($line,1,-1)));
    $array[$key] = array();
    $this->delayedPath = array(strpos ($line, $key) + $this->indent => $key);
    return array($array);
  }

  function returnMappedValue ($line) {
    $array = array();
    $key         = $this->unquote (trim(substr($line,0,-1)));
    $array[$key] = '';
    return $array;
  }

  function startsMappedValue ($line) {
    return (substr ($line, -1, 1) == ':');
  }
  
  function isPlainArray ($line) {
    return ($line[0] == '[' && substr ($line, -1, 1) == ']');
  }
  
  function returnPlainArray ($line) {
    return $this->_toType($line); 
  }  

  function returnKeyValuePair ($line) {
    $array = array();
    $key = '';
    if (strpos ($line, ':')) {
      // It's a key/value pair most likely
      // If the key is in double quotes pull it out
      if (($line[0] == '"' || $line[0] == "'") && preg_match('/^(["\'](.*)["\'](\s)*:)/',$line,$matches)) {
        $valINDX( 	 Ø¶`{           (   x  Ë                            %    ` P     %    HH’rr∑“Ü¿r∑“Ü¿r∑“HH’rr∑“       Y              a p i . c s s %    h T     %    HH’rr∑“Ü¿r∑“Ü¿r∑“HH’rr∑“       é              	g u i d e . c s s     %    p \     %    UÅ÷rr∑“-≠¿r∑“-≠¿r∑“UÅ÷rr∑“        â              h i g h l i g h t . c s s     %    p Z     %    UÅ÷rr∑“-≠¿r∑“-≠¿r∑“UÅ÷rr∑“        â              H I G H L I ~ 1 . C S S       %    h R     %    UÅ÷rr∑“-≠¿r∑“-≠¿r∑“UÅ÷rr∑“¿      ∫              i n f o . g i f       %    h R     %    UÅ÷rr∑“0‘¿r∑“0‘¿r∑“UÅ÷rr∑“∏      ¥              n o t e . g i f       %    h T     %    UÅ÷rr∑“0‘¿r∑“0‘¿r∑“UÅ÷rr∑“†      †              	s t y l e . c s s     %    ` P     %    UÅ÷rr∑“»˝¿r∑“»˝¿r∑“UÅ÷rr∑“X      U              t i p . g i f                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   