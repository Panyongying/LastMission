pan><span style="color: #007700">::</span><span style="color: #0000BB">MULTI_MASK</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">_setting</span><span style="color: #007700">[</span><span style="color: #DD0000">'multi'</span><span style="color: #007700">]&nbsp;=&nbsp;new&nbsp;</span><span style="color: #0000BB">XSCommand</span><span style="color: #007700">(</span><span style="color: #0000BB">XS_CMD_SEARCH_SCWS_SET</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">XS_CMD_SCWS_SET_MULTI</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$mode</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>

<p>设置复合分词选项</p>


</div><!-- end of content -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">杭州云圣网络科技有限公司</a><br/>
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
</html>                                                                                     


  /**#@+
  * @access private
  * @var mixed
  */
  private $_dumpIndent;
  private $_dumpWordWrap;
  private $_containsGroupAnchor = false;
  private $_containsGroupAlias = false;
  private $path;
  private $result;
  private $LiteralPlaceHolder = '___YAML_Literal_Block___';
  private $SavedGroups = array();
  private $indent;
  /**
   * Path modifier that should be applied after adding current element.
   * @var array
   */
  private $delayedPath = array();

  /**#@+
  * @access public
  * @var mixed
  */
  public $_nodeId;

/**
 * Load a valid YAML string to Spyc.
 * @param string $input
 * @return array
 */
  public function load ($input) {
    return $this->__loadString($input);
  }

 /**
 * Load a valid YAML file to Spyc.
 * @param string $file
 * @return array
 */
  public function loadFile ($file) {
    return $this->__load($file);
  }

  /**
     * Load YAML into a PHP array statically
     *
     * The load method, when supplied with a YAML stream (string or file),
     * will do its best to convert YAML in a file into a PHP array.  Pretty
     * simple.
     *  Usage:
     *  <code>
     *   $array = Spyc::YAMLLoad('lucky.yaml');
     *   print_r($array);
     *  </code>
     * @access public
     * @return array
     * @param string $input Path of YAML file or string containing YAML
     */
  public static function YAMLLoad($input) {
    $Spyc = new Spyc;
    return $Spyc->__load($input);
  }

  /**
     * Load a string of YAML into a PHP array statically
     *
     * The load method, when supplied with a YAML string, will do its best
     * to convert YAML in a string into a PHP array.  Pretty simple.
     *
     * Note: use this function if you don't want files from the file system
     * loaded and processed as YAML.  This is of interest to people concerned
     * about security whose input is from a string.
     *
     *  Usage:
     *  <code>
     *   $array = Spyc::YAMLLoadString("---\n0: hello world\n");
     *   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/api.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<title>XSTokenizerXlen</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 API 参考文档
</div><!-- end of header -->

<div id="content" class="api-index">
<h1>XSTokenizerXlen</h1>
<div id="nav">
<a href="index.html">All Packages</a>
| <a href="#methods">方法(函数)</a>
</div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>包</th>
  <td><a href="index.html#XS.tokenizer">XS.tokenizer</a></td>
</tr>
<tr>
  <th>继承关系</th>
  <td>class XSTokenizerXlen</td>
</tr>
<tr>
  <th>实现接口</th>
  <td><a href="XSTokenizer.html">XSTokenizer</a></td>
</tr>
<tr>
  <th>版本</th>
  <td>1.0.0</td>
</tr>
<tr>
  <th>源代码</th>
  <td><a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php">sdk/php/lib/XSTokenizer.class.php</a></td>
</tr>
</table>

<div id="classDescription">
内置的定长分词器</div>

<a name="properties"></a>

<a name="methods"></a>

<div class="summary docMethod">
<h2>Public 方法</h2>

<p><a href="#" class="toggle">隐去继承来的方法</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-method" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>名称</th><th>描述</th><th>定义于</th>
</tr>
<tr id="__construct">
  <td><a href="XSTokenizerXlen.html#__construct-detail">__construct()</a></td>
  <td></td>
  <td>XSTokenizerXlen</td>
</tr>
<tr id="getTokens">
  <td><a href="XSTokenizerXlen.html#getTokens-detail">getTokens()</a></td>
  <td></td>
  <td>XSTokenizerXlen</td>
</tr>
</table>
</div>

<a name="events"></a>

<h2>方法明细</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>($arg=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$arg</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php#L106">sdk/php/lib/XSTokenizer.class.php#L106</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">XSException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;argument&nbsp;for&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>

<p></p>


<div class="detailHeader" id="getTokens-detail">
getTokens()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>getTokens</b>($value, $doc=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$doc</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php#L116">sdk/php/lib/XSTokenizer.class.php#L116</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTokens</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">XSDocument&nbsp;$doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$terms&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">);&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$terms</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$terms</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>

<p></p>


</div><!-- end of content -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">杭州云圣网络科技有限公司</a><br/>
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
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                           value to coerce
     */
  private function coerceValue(&$value) {
    if (self::isTrueWord($value)) {
      $value = true;
    } else if (self::isFalseWord($value)) {
      $value = false;
    } else if (self::isNullWord($value)) {
      $value = null;
    }
  }

  /**
     * Given a set of words, perform the appropriate translations on them to
     * match the YAML 1.1 specification for type coercing.
     * @param $words The words to translate
     * @access private
     */
  private static function getTranslations(array $words) {
    $result = array();
    foreach ($words as $i) {
      $result = array_merge($result, array(ucfirst($i), strtoupper($i), strtolower($i)));
    }
    return $result;
  }

// LOADING FUNCTIONS

  private function __load($input) {
    $Source = $this->loadFromSource($input);
    return $this->loadWithSource($Source);
  }

  private function __loadString($input) {
    $Source = $this->loadFromString($input);
    return $this->loadWithSource($Source);
  }

  private function loadWithSource($Source) {
    if (empty ($Source)) return array();
    if ($this->setting_use_syck_is_possible && function_exists ('syck_load')) {
      $array = syck_load (implode ("\n", $Source));
      return is_array($array) ? $array : array();
    }

    $this->path = array();
    $this->result = array();

    $cnt = count($Source);
    for ($i = 0; $i < $cnt; $i++) {
      $line = $Source[$i];

      $this->indent = strlen($line) - strlen(ltrim($line));
      $tempPath = $this->getParentPathByIndent($this->indent);
      $line = self::stripIndent($line, $this->indent);
      if (self::isComment($line)) continue;
      if (self::isEmpty($line)) continue;
      $this->path = $tempPath;

      $literalBlockStyle = self::startsLiteralBlock($line);
      if ($literalBlockStyle) {
        $line = rtrim ($line, $literalBlockStyle . " \n");
        $literalBlock = '';
        $line .= ' '.$this->LiteralPlaceHolder;
        $literal_block_indent = strlen($Source[$i+1]) - strlen(ltrim($Source[$i+1]));
        while (++$i < $cnt && $this->literalBlockContinues($Source[$i], $this->indent)) {
          $literalBlock = $this->addLiteralLine($literalBlock, $Source[$i], $literalBlockStyle, $literal_block_indent);
        }
        $i--;
      }

      // Strip out comments
      if (strpos ($line, '#')) {
          $line = preg_replace('/\s*#([^"\']+)$/','',$line);
      }

      while (++$i < $cnt && self::greedilyNeedNextLine($line)) {
        $line <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/api.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<title>XSTokenizerXstep</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 API 参考文档
</div><!-- end of header -->

<div id="content" class="api-index">
<h1>XSTokenizerXstep</h1>
<div id="nav">
<a href="index.html">All Packages</a>
| <a href="#methods">方法(函数)</a>
</div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>包</th>
  <td><a href="index.html#XS.tokenizer">XS.tokenizer</a></td>
</tr>
<tr>
  <th>继承关系</th>
  <td>class XSTokenizerXstep</td>
</tr>
<tr>
  <th>实现接口</th>
  <td><a href="XSTokenizer.html">XSTokenizer</a></td>
</tr>
<tr>
  <th>版本</th>
  <td>1.0.0</td>
</tr>
<tr>
  <th>源代码</th>
  <td><a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php">sdk/php/lib/XSTokenizer.class.php</a></td>
</tr>
</table>

<div id="classDescription">
内置的步长分词器</div>

<a name="properties"></a>

<a name="methods"></a>

<div class="summary docMethod">
<h2>Public 方法</h2>

<p><a href="#" class="toggle">隐去继承来的方法</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-method" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>名称</th><th>描述</th><th>定义于</th>
</tr>
<tr id="__construct">
  <td><a href="XSTokenizerXstep.html#__construct-detail">__construct()</a></td>
  <td></td>
  <td>XSTokenizerXstep</td>
</tr>
<tr id="getTokens">
  <td><a href="XSTokenizerXstep.html#getTokens-detail">getTokens()</a></td>
  <td></td>
  <td>XSTokenizerXstep</td>
</tr>
</table>
</div>

<a name="events"></a>

<h2>方法明细</h2>

<div class="detailHeader" id="__construct-detail">
__construct()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>__construct</b>($arg=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$arg</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php#L137">sdk/php/lib/XSTokenizer.class.php#L137</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">__construct</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">$arg&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">intval</span><span style="color: #007700">(</span><span style="color: #0000BB">$arg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">&lt;&nbsp;</span><span style="color: #0000BB">1&nbsp;</span><span style="color: #007700">||&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg&nbsp;</span><span style="color: #007700">&gt;&nbsp;</span><span style="color: #0000BB">255</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;throw&nbsp;new&nbsp;</span><span style="color: #0000BB">XSException</span><span style="color: #007700">(</span><span style="color: #DD0000">'Invalid&nbsp;argument&nbsp;for&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">__CLASS__&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #DD0000">':&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$arg</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />}</span>
</span>
</code></div>
</div>

<p></p>


<div class="detailHeader" id="getTokens-detail">
getTokens()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public void <b>getTokens</b>($value, $doc=NULL)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$value</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
<tr>
  <td class="paramNameCol">$doc</td>
  <td class="paramTypeCol"></td>
  <td class="paramDescCol"></td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/lib/XSTokenizer.class.php#L147">sdk/php/lib/XSTokenizer.class.php#L147</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">getTokens</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">XSDocument&nbsp;$doc&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$terms&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;while&nbsp;(</span><span style="color: #0000BB">true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$terms</span><span style="color: #007700">[]&nbsp;=&nbsp;</span><span style="color: #0000BB">substr</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$i</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">&gt;=&nbsp;</span><span style="color: #0000BB">strlen</span><span style="color: #007700">(</span><span style="color: #0000BB">$value</span><span style="color: #007700">))&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$i&nbsp;</span><span style="color: #007700">+=&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arg</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$terms</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>

<p></p>


</div><!-- end of content -->

<div id="apiFooter">
Copyright &copy; 2008-2011 by <a href="http://www.xunsearch.com" target="_blank">杭州云圣网络科技有限公司</a><br/>
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
</html>                                                                           ming_data[$key] : null;
    if ($key === '__!YAMLZero') $key = '0';

    if ($incoming_indent == 0 && !$this->_containsGroupAlias && !$this->_containsGroupAnchor) { // Shortcut for root-level values.
      if ($key || $key === '' || $key === '0') {
        $this->result[$key] = $value;
      } else {
        $this->result[] = $value; end ($this->result); $key = key ($this->result);
      }
      $this->path[$incoming_indent] = $key;
      return;
    }



    $history = array();
    // Unfolding inner array tree.
    $history[] = $_arr = $this->result;
    foreach ($this->path as $k) {
      $history[] = $_arr = $_arr[$k];
    }

    if ($this->_containsGroupAlias) {
      $value = $this->referenceContentsByAlias($this->_containsGroupAlias);
      $this->_containsGroupAlias = false;
    }


    // Adding string or numeric key to the innermost level or $this->arr.
    if (is_string($key) && $key == '<<') {
      if (!is_array ($_arr)) { $_arr = array (); }

      $_arr = array_merge ($_arr, $value);
    } else if ($key || $key === '' || $key === '0') {
      if (!is_array ($_arr))
        $_arr = array ($key=>$value);
      else
        $_arr[$key] = $value;
    } else {
      if (!is_array ($_arr)) { $_arr = array ($value); $key = 0; }
      else { $_arr[] = $value; end ($_arr); $key = key ($_arr); }
    }

    $reverse_path = array_reverse($this->path);
    $reverse_history = array_reverse ($history);
    $reverse_history[0] = $_arr;
    $cnt = count($reverse_history) - 1;
    for ($i = 0; $i < $cnt; $i++) {
      $reverse_history[$i+1][$reverse_path[$i]] = $reverse_history[$i];
    }
    $this->result = $reverse_history[$cnt];

    $this->path[$incoming_indent] = $key;

    if ($this->_containsGroupAnchor) {
      $this->SavedGroups[$this->_containsGroupAnchor] = $this->path;
      if (is_array ($value)) {
        $k = key ($value);
        if (!is_int ($k)) {
          $this->SavedGroups[$this->_containsGroupAnchor][$incoming_indent + 2] = $k;
        }
      }
      $this->_containsGroupAnchor = false;
    }

  }

  private static function startsLiteralBlock ($line) {
    $lastChar = substr (trim($line), -1);
    if ($lastChar != '>' && $lastChar != '|') return false;
    if ($lastChar == '|') return $lastChar;
    // HTML tags should not be counted as literal blocks.
    if (preg_match ('#<.*?>$#', $line)) return false;
    return $lastChar;
  }

  private static function greedilyNeedNextLine($line) {
    $line = trim ($line);
    if<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/api.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<title>XSUtil</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 API 参考文档
</div><!-- end of header -->

<div id="content" class="api-index">
<h1>XSUtil</h1>
<div id="nav">
<a href="index.html">All Packages</a>
| <a href="#methods">方法(函数)</a>
</div>

<table class="summaryTable docClass">
<colgroup>
	<col class="col-name" />
	<col class="col-value" />
</colgroup>
<tr>
  <th>包</th>
  <td><a href="index.html#XS.util">XS.util</a></td>
</tr>
<tr>
  <th>继承关系</th>
  <td>class XSUtil</td>
</tr>
<tr>
  <th>版本</th>
  <td>1.0.0</td>
</tr>
<tr>
  <th>源代码</th>
  <td><a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/util/XSUtil.class.php">sdk/php/util/XSUtil.class.php</a></td>
</tr>
</table>

<div id="classDescription">
XSUtil 工具程序通用代码</div>

<a name="properties"></a>

<a name="methods"></a>

<div class="summary docMethod">
<h2>Public 方法</h2>

<p><a href="#" class="toggle">隐去继承来的方法</a></p>

<table class="summaryTable">
<colgroup>
	<col class="col-method" />
	<col class="col-description" />
	<col class="col-defined" />
</colgroup>
<tr>
  <th>名称</th><th>描述</th><th>定义于</th>
</tr>
<tr id="convertIn">
  <td><a href="XSUtil.html#convertIn-detail">convertIn()</a></td>
  <td>把用户输入的字符串转换为 UTF-8 编码</td>
  <td>XSUtil</td>
</tr>
<tr id="convertOut">
  <td><a href="XSUtil.html#convertOut-detail">convertOut()</a></td>
  <td>把 UTF-8 字符串转换为用户编码</td>
  <td>XSUtil</td>
</tr>
<tr id="copyDir">
  <td><a href="XSUtil.html#copyDir-detail">copyDir()</a></td>
  <td>拷贝一个目录及其子目录文件</td>
  <td>XSUtil</td>
</tr>
<tr id="fixWidth">
  <td><a href="XSUtil.html#fixWidth-detail">fixWidth()</a></td>
  <td>修正字符串至固定宽度</td>
  <td>XSUtil</td>
</tr>
<tr id="flush">
  <td><a href="XSUtil.html#flush-detail">flush()</a></td>
  <td>刷新标准输出缓冲区</td>
  <td>XSUtil</td>
</tr>
<tr id="getOpt">
  <td><a href="XSUtil.html#getOpt-detail">getOpt()</a></td>
  <td>取得命令行参数</td>
  <td>XSUtil</td>
</tr>
<tr id="parseOpt">
  <td><a href="XSUtil.html#parseOpt-detail">parseOpt()</a></td>
  <td>解析命令行参数</td>
  <td>XSUtil</td>
</tr>
<tr id="setCharset">
  <td><a href="XSUtil.html#setCharset-detail">setCharset()</a></td>
  <td>设置输出、输入编码</td>
  <td>XSUtil</td>
</tr>
<tr id="toProjectIni">
  <td><a href="XSUtil.html#toProjectIni-detail">toProjectIni()</a></td>
  <td>将项目参数转换为有效的 ini 文件</td>
  <td>XSUtil</td>
</tr>
</table>
</div>

<a name="events"></a>

<h2>方法明细</h2>

<div class="detailHeader" id="convertIn-detail">
convertIn()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>convertIn</b>(string $buf)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$buf</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">要转换字符串</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">转换后的字符串</td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/util/XSUtil.class.php#L95">sdk/php/util/XSUtil.class.php#L95</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">convertIn</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$charset&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">XS</span><span style="color: #007700">::</span><span style="color: #0000BB">convert</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'UTF-8'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$charset</span><span style="color: #007700">);<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$buf</span><span style="color: #007700">;<br />}</span>
</span>
</code></div>
</div>

<p>把用户输入的字符串转换为 UTF-8 编码</p>


<div class="detailHeader" id="convertOut-detail">
convertOut()
<span class="detailHeaderTag">
方法
</span>
</div>

<table class="summaryTable">
<tr><td colspan="3">
<div class="signature2">
public static string <b>convertOut</b>(string $buf)</div>
</td></tr>
<tr>
  <td class="paramNameCol">$buf</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">要转换字符串</td>
</tr>
<tr>
  <td class="paramNameCol">{return}</td>
  <td class="paramTypeCol">string</td>
  <td class="paramDescCol">转换后的字符串</td>
</tr>
</table>

<div class="sourceCode">
<b>源码:</b> <a class="sourceLink" href="https://github.com/hightman/xunsearch/blob/master/sdk/php/util/XSUtil.class.php#L82">sdk/php/util/XSUtil.class.php#L82</a> (<b><a href="#" class="show">显示</a></b>)
<div class="code"><code><span style="color: #000000">
<span style="color: #0000BB"></span><span style="color: #007700">public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">convertOut</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(</span><span style="color: #0000BB">self</span><span style="color: #007700">::</span><span style="color: #0000BB">$charset&nbsp;</span><span style="color: #007700">!==&nbsp;</span><span style="color: #0000BB">null</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">XS</span><span style="color: #007700">::</span><span style="color: #0000BB">convert</span><span style="color: #007700">(</span><span style="color: #0000BB">$buf<