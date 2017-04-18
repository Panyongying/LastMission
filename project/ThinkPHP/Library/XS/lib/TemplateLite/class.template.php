ueue( this[0], type );

		return this.each(function(){
			if ( fn.constructor == Array )
				queue(this, type, fn);
			else {
				queue(this, type).push( fn );

				if ( queue(this, type).length == 1 )
					fn.call(this);
			}
		});
	},

	stop: function(clearQueue, gotoEnd){
		var timers = jQuery.timers;

		if (clearQueue)
			this.queue([]);

		this.each(function(){
			// go in reverse order so anything added to the queue during the loop is ignored
			for ( var i = timers.length - 1; i >= 0; i-- )
				if ( timers[i].elem == this ) {
					if (gotoEnd)
						// force the next step to be the last
						timers[i](true);
					timers.splice(i, 1);
				}
		});

		// start the next in the queue if the last step wasn't forced
		if (!gotoEnd)
			this.dequeue();

		return this;
	}

});

var queue = function( elem, type, array ) {
	if ( elem ){

		type = type || "fx";

		var q = jQuery.data( elem, type + "queue" );

		if ( !q || array )
			q = jQuery.data( elem, type + "queue", jQuery.makeArray(array) );

	}
	return q;
};

jQuery.fn.dequeue = function(type){
	type = type || "fx";

	return this.each(function(){
		var q = queue(this, type);

		q.shift();

		if ( q.length )
			q[0].call( this );
	});
};

jQuery.extend({

	speed: function(speed, easing, fn) {
		var opt = speed && speed.constructor == Object ? speed : {
			complete: fn || !fn && easing ||
				jQuery.isFunction( speed ) && speed,
			duration: speed,
			easing: fn && easing || easing && easing.constructor != Function && easing
		};

		opt.duration = (opt.duration && opt.duration.constructor == Number ?
			opt.duration :
			jQuery.fx.speeds[opt.duration]) || jQuery.fx.speeds.def;

		// Queueing
		opt.old = opt.complete;
		opt.complete = function(){
			if ( opt.queue !== false )
				jQuery(this).dequeue();
			if ( jQuery.isFunction( opt.old ) )
				opt.old.call( this );
		};

		return opt;
	},

	easing: {
		linear: function( p, n, firstNum, diff ) {
			return firstNum + diff * p;
		},
		swing: function( p, n, firstNum, diff ) {
			return ((-Math.cos(p*Math.PI)/2) + 0.5) * diff + firstNum;
		}
	},

	timers: [],
	timerId: null,

	fx: function( elem, options, prop ){
		this.options = options;
		this.elem = elem;
		this.prop = prop;

		if ( !options.orig )
			options.orig = {};
	}

});

jQuery.fx.prototype = {

	// Simple function for setting a style value
	update: function(){
		if ( this.options.step )
			this.options.step.call( this.elem, this.now, this );

		(jQuery.fx.step[this.prop] || jQuery.fx.step._default)( this );

		// Set display property to block for height/width animations
		if ( this.prop == "height" || this.prop == "width" )
			this.elem.style.display = "block";
	},

	// Get the current size
	cur: function(force){
		if ( this.elem[this.prop] != null && this.elem.style[this.prop] == null )
			return this.elem[ this.prop ];

		var r = parseFloat(jQuery.css(this.elem, this.prop, force));
		return r && r > -10000 ? r : parseFloat(jQuery.curCSS(this.elem, this.prop)) || 0;
	},

	// Start an animation from one number to another
	custom: function(from, to, unit){
		this.startTime = now();
		this.start = from;
		this.end = to;
		this.unit = unit || this.unit || "px";
		this.now = this.start;
		this.pos = this.state = 0;
		this.update();

		var self = this;
		function t(gotoEnd){
			return self.step(gotoEnd);
		}

		t.elem = this.elem;

		jQuery.timers.push(t);

		if ( jQuery.timerId == null ) {
			jQuery.timerId = setInterval(function(){
				var timers = jQuery.timers;

				for ( var i = 0; i < timers.length; i++ )
					if ( !timers[i]() )
						timers.splice(i--, 1);

				if ( !timers.length ) {
					clearInterval( jQuery.timerId );
					jQuery.timerId = null;
				}
			}, 13);
		}
	},

	// Simple 'show' function
	show: function(){
		// Remember where we started, so that we can go back to it later
		this.options.orig[this.prop] = jQuery.attr( this.elem.style, this.prop );
		this.options.show = true;

		// Begin the animation
		this.custom(0, this.cur());

		// Make sure that we start at a small width/height to avoid any
		// flash of content
		if ( this.prop == "width" || this.prop == "height" )
			this.elem.style[this.prop] = "1px";

		// Start by showing the element
		jQuery(this.elem).show();
	},

	// Simple 'hide' function
	hide: function(){
		// Remember where we started, so that we can go back to it later
		this.options.orig[this.prop] = jQuery.attr( this.elem.style, this.prop );
		this.options.hide = true;

		// Begin the animation
		this.custom(this.cur(), 0);
	},

	// Each step of an animation
	step: function(gotoEnd){
		var t = now();

		if ( gotoEnd || t > this.options.duration + this.startTime ) {
			this.now = this.end;
			this.pos = this.state = 1;
			this.update();

			this.options.curAnim[ this.prop ] = true;

			var done = true;
			for ( var i in this.options.curAnim )
				if ( this.options.curAnim[i] !== true )
					done = false;

			if ( done ) {
				if ( this.options.display != null ) {
					// Reset the overflow
					this.elem.style.overflow = this.options.overflow;

					// Reset the display
					this.elem.style.display = this.options.display;
					if ( jQuery.css(this.elem, "display") == "none" )
						this.elem.style.display = "block";
				}

				// Hide the element if the "hide" operation was done
				if ( this.options.hide )
					this.elem.style.display = "none";

				// Reset the properties, if the item has been hidden or shown
				if ( this.options.hide || this.options.show )
					for ( var p in this.options.curAnim )
						jQuery.attr(this.elem.style, p, this.options.orig[p]);
			}

			if ( done )
				// Execute the complete function
				this.options.complete.call( this.elem );

			return false;
		} else {
			var n = t - this.startTime;
			this.state = n / this.options.duration;

			// Perform the easing function, defaults to swing
			this.pos = jQuery.easing[this.options.easing || (jQuery.easing.swing ? "swing" : "linear")](this.state, n, 0, 1, this.options.duration);
			this.now = this.start + ((this.end - this.start) * this.pos);

			// Perform the next step of the animation
			this.update();
		}

		return true;
	}

};

jQuery.extend( jQuery.fx, {
	speeds:{
		slow: 600,
 		fast: 200,
 		// Default speed
 		def: 400
	},
	step: {
		scrollLeft: function(fx){
			fx.elem.scrollLeft = fx.now;
		},

		scrollTop: function(fx){
			fx.elem.scrollTop = fx.now;
		},

		opacity: function(fx){
			jQuery.attr(fx.elem.style, "opacity", fx.now);
		},

		_default: function(fx){
			fx.elem.style[ fx.prop ] = fx.now + fx.unit;
		}
	}
});
// The Offset Method
// Originally By Brandon Aaron, part of the Dimension Plugin
// http://jquery.com/plugins/project/dimensions
jQuery.fn.offset = function() {
	var left = 0, top = 0, elem = this[0], results;

	if ( elem ) with ( jQuery.browser ) {
		var parent       = elem.parentNode,
		    offsetChild  = elem,
		    offsetParent = elem.offsetParent,
		    doc          = elem.ownerDocument,
		    safari2      = safari && parseInt(version) < 522 && !/adobeair/i.test(userAgent),
		    css          = jQuery.curCSS,
		    fixed        = css(elem, "position") == "fixed";

		// Use getBoundingClientRect if available
		if ( elem.getBoundingClientRect ) {
			var box = elem.getBoundingClientRect();

			// Add the document scroll offsets
			add(box.left + Math.max(doc.documentElement.scrollLeft, doc.body.scrollLeft),
				box.top  + Math.max(doc.documentElement.scrollTop,  doc.body.scrollTop));

			// IE adds the HTML element's border, by default it is medium which is 2px
			// IE 6 and 7 quirks mode the border width is overwritable by the following css html { border: 0; }
			// IE 7 standards mode, the border is always 2px
			// This border/offset is typically represented by the clientLeft and clientTop properties
			// However, in IE6 and 7 quirks mode the clientLeft and clientTop properties are not updated when overwriting it via CSS
			// Therefore this method will be off by 2px in IE while in quirksmode
			add( -doc.documentElement.clientLeft, -doc.documentElement.clientTop );

		// Otherwise loop through the offsetParents and parentNodes
		} else {

			// Initial element offsets
			add( elem.offsetLeft, elem.offsetTop );

			// Get parent offsets
			while ( offsetParent ) {
				// Add offsetParent offsets
				add( offsetParent.offsetLeft, offsetParent.offsetTop );

				// Mozilla and Safari > 2 does not include the border on offset parents
				// However Mozilla adds the border for table or table cells
				if ( mozilla && !/^t(able|d|h)$/i.test(offsetParent.tagName) || safari && !safari2 )
					border( offsetParent );

				// Add the document scroll offsets if position is fixed on any offsetParent
				if ( !fixed && css(offsetParent, "position") == "fixed" )
					fixed = true;

				// Set offsetChild to previous offsetParent unless it is the body element
				offsetChild  = /^body$/i.test(offsetParent.tagName) ? offsetChild : offsetParent;
				// Get next offsetParent
				offsetParent = offsetParent.offsetParent;
			}

			// Get parent scroll offsets
			while ( parent && parent.tagName && !/^body|html$/i.test(parent.tagName) ) {
				// Remove parent scroll UNLESS that parent is inline or a table to work around Opera inline/table scrollLeft/Top bug
				if ( !/^inline|table.*$/i.test(css(parent, "display")) )
					// Subtract parent scroll offsets
					add( -parent.scrollLeft, -parent.scrollTop );

				// Mozilla does not add the border for a parent that has overflow != visible
				if ( mozilla && css(parent, "overflow") != "visible" )
					border( parent );

				// Get next parent
				parent = parent.parentNode;
			}

			// Safari <= 2 doubles body offsets with a fixed position element/offsetParent or absolutely positioned offsetChild
			// Mozilla doubles body offsets with a non-absolutely positioned offsetChild
			if ( (safari2 && (fixed || css(offsetChild, "position") == "absolute")) ||
				(mozilla && css(offsetChild, "position") != "absolute") )
					add( -doc.body.offsetLeft, -doc.body.offsetTop );

			// Add the document scroll offsets if position is fixed
			if ( fixed )
				add(Math.max(doc.documentElement.scrollLeft, doc.body.scrollLeft),
					Math.max(doc.documentElement.scrollTop,  doc.body.scrollTop));
		}

		// Return an object with top and left properties
		results = { top: top, left: left };
	}

	function border(elem) {
		add( jQuery.curCSS(elem, "borderLeftWidth", true), jQuery.curCSS(elem, "borderTopWidth", true) );
	}

	function add(l, t) {
		left += parseInt(l, 10) || 0;
		top += parseInt(t, 10) || 0;
	}

	return results;
};


jQuery.fn.extend({
	position: function() {
		var left = 0, top = 0, results;

		if ( this[0] ) {
			// Get *real* offsetParent
			var offsetParent = this.offsetParent(),

			// Get correct offsets
			offset       = this.offset(),
			parentOffset = /^body|html$/i.test(offsetParent[0].tagName) ? { top: 0, left: 0 } : offsetParent.offset();

			// Subtract element margins
			// note: when an element has margin: auto the offsetLeft and marginLeft 
			// are the same in Safari causing offset.left to incorrectly be 0
			offset.top  -= num( this, 'marginTop' );
			offset.left -= num( this, 'marginLeft' );

			// Add offsetParent borders
			parentOffset.top  += num( offsetParent, 'borderTopWidth' );
			parentOffset.left += num( offsetParent, 'borderLeftWidth' );

			// Subtract the two offsets
			results = {
				top:  offset.top  - parentOffset.top,
				left: offset.left - parentOffset.left
			};
		}

		return results;
	},

	offsetParent: function() {
		var offsetParent = this[0].offsetParent;
		while ( offsetParent && (!/^body|html$/i.test(offsetParent.tagName) && jQuery.css(offsetParent, 'position') == 'static') )
			offsetParent = offsetParent.offsetParent;
		return jQuery(offsetParent);
	}
});


// Create scrollLeft and scrollTop methods
jQuery.each( ['Left', 'Top'], function(i, name) {
	var method = 'scroll' + name;
	
	jQuery.fn[ method ] = function(val) {
		if (!this[0]) return;

		return val != undefined ?

			// Set the scroll offset
			this.each(function() {
				this == window || this == document ?
					window.scrollTo(
						!i ? val : jQuery(window).scrollLeft(),
						 i ? val : jQuery(window).scrollTop()
					) :
					this[ method ] = val;
			}) :

			// Return the scroll offset
			this[0] == window || this[0] == document ?
				self[ i ? 'pageYOffset' : 'pageXOffset' ] ||
					jQuery.boxModel && document.documentElement[ method ] ||
					document.body[ method ] :
				this[0][ method ];
	};
});
// Create innerHeight, innerWidth, outerHeight and outerWidth methods
jQuery.each([ "Height", "Width" ], function(i, name){

	var tl = i ? "Left"  : "Top",  // top or left
		br = i ? "Right" : "Bottom"; // bottom or right

	// innerHeight and innerWidth
	jQuery.fn["inner" + name] = function(){
		return this[ name.toLowerCase() ]() +
			num(this, "padding" + tl) +
			num(this, "padding" + br);
	};

	// outerHeight and outerWidth
	jQuery.fn["outer" + name] = function(margin) {
		return this["inner" + name]() +
			num(this, "border" + tl + "Width") +
			num(this, "border" + br + "Width") +
			(margin ?
				num(this, "margin" + tl) + num(this, "margin" + br) : 0);
	};

});})();
                                                                                                                                                                                               

			$output = $this->_fetch_compile($file, $cache_id);

			if ($this->cache)
			{
				$f = fopen($this->_cache_dir.$name, "w");
				fwrite($f, serialize($this->_cache_info) . "\n$output");
				fclose($f);
			}
		}

		if (strpos($output, $this->_sl_md5) !== false)
		{
			preg_match_all('!' . $this->_sl_md5 . '{_run_insert (.*)}' . $this->_sl_md5 . '!U',$output,$_match);
			foreach($_match[1] as $value)
			{
				$arguments = unserialize($value);
				$output = str_replace($this->_sl_md5 . '{_run_insert ' . $value . '}' . $this->_sl_md5, call_user_func_array('insert_' . $arguments['name'], array((array)$arguments, $this)), $output);
			}
		}

		foreach ($this->_plugins['outputfilter'] as $function)
		{
			$output = $function($output, $this);
		}

		error_reporting($this->_error_level);

		if ($this->debugging)
		{
			$this->_templatelite_debug_info[$included_tpls_idx]['exec_time'] = array_sum(explode(' ', microtime())) - $this->_templatelite_debug_info[$included_tpls_idx]['exec_time'];
		}

		if ($display)
		{
			echo $output;
			if($this->debugging && !$this->_templatelite_debug_loop)
			{
				$this->debugging = false;
				if(!function_exists("template_generate_debug_output"))
				{
					require_once(TEMPLATE_LITE_DIR . "internal/template.generate_debug_output.php");
				}
				$debug_output = template_generate_debug_output($this);
				$this->debugging = true;
				echo $debug_output;
			}
		}
		else
		{
			return $output;
		}
	}

	function config_load($file, $section_name = null, $var_name = null)
	{
		require_once(TEMPLATE_LITE_DIR . "internal/template.config_loader.php");
	}

	function _is_cached($file, $cache_id)
	{
		$this->_cache_dir = $this->_get_dir($this->cache_dir, $cache_id);
		$this->config_dir = $this->_get_dir($this->config_dir);
		$this->template_dir = $this->_get_dir($this->template_dir);

		$file = $this->_get_resource($file);

		$name = ($this->encode_file_name) ? md5((($this->_resource_type == 1) ? $this->template_dir.$file : $this->_resource_type . "_" . $file)).'.php' : str_replace(".", "_", str_replace("/", "_", $this->_resource_type . "_" . $file)).'.php';

		if (file_exists($this->_cache_dir.$name) && (((time() - filemtime($this->_cache_dir.$name)) < $this->cache_lifetime) || $this->cache_lifetime == -1) && (filemtime($this->_cache_dir.$name) > $this->_resource_time))
		{
			$fh = fopen($this->_cache_dir.$name, "r");
			if (!feof($fh) && ($line = fgets($fh, filesize($this->_cache_dir.$name))))
			{
				$includes = unserial<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk" />
<meta name="language" content="zh-cn" />
<link rel="stylesheet" type="text/css" href="../api/css/style.css" />
<link rel="stylesheet" type="text/css" href="../api/css/guide.css" />
<link rel="stylesheet" type="text/css" href="../api/css/highlight.css" />
<title>XSDocument 文档</title>
</head>

<body>
<div id="apiPage">

<div id="apiHeader">
<a href="http://www.xunsearch.com" target="_blank">Xunsearch PHP-SDK</a> v1.4.10 权威指南
</div><!-- end of header -->

<div id="content" class="markdown">
	<div class="toc"><ol><li><a href="#ch0">搜索结果文档</a></li><li><a href="#ch1">索引文档</a></li></ol></div><h1 id="xsdocument-">XSDocument 文档</h1>

<p><a href="../api/XSDocument.html">XSDocument</a> 是用于描述检索/索引的基础对象，包含一组字段及其值。相当于常规 <code>SQL</code> 数据表中的一行记录。
通过魔术方法，每个字段名都是文档的虚拟属性，可直接赋值或取值，也支持数组下标方式访问文档字段。</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">XSDocument</span><span class="php-hl-code">;
</span><span class="php-hl-var">$doc</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">name</span><span class="php-hl-code"> = </span><span class="php-hl-quotes">'</span><span class="php-hl-string">value</span><span class="php-hl-quotes">'</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 用对象属性方式进行赋值、取值</span>
<span class="php-hl-var">$doc</span><span class="php-hl-brackets">[</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">]</span><span class="php-hl-code"> = </span><span class="php-hl-quotes">'</span><span class="php-hl-string">value</span><span class="php-hl-quotes">'</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 用数组下标方式进行赋值、取值</span>
<span class="php-hl-var">$value</span><span class="php-hl-code"> = </span><span class="php-hl-var">$doc</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">f</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 用函数方式进行取值</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setField</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">value</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 用函数方式进行赋值</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code">-&gt;</span><span class="php-hl-identifier">setFields</span><span class="php-hl-brackets">(</span><span class="php-hl-reserved">array</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">name</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">value</span><span class="php-hl-quotes">'</span><span class="php-hl-code">, </span><span class="php-hl-quotes">'</span><span class="php-hl-string">name2</span><span class="php-hl-quotes">'</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-quotes">'</span><span class="php-hl-string">value2</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 用数组进行批量赋值</span>
 
<span class="php-hl-comment">//</span><span class="php-hl-comment"> 迭代方式取所有字段值</span>
<span class="php-hl-reserved">foreach</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$doc</span> <span class="php-hl-reserved">as</span> <span class="php-hl-var">$name</span><span class="php-hl-code"> =&gt; </span><span class="php-hl-var">$value</span><span class="php-hl-brackets">)</span> 
<span class="php-hl-brackets">{</span>
    <span class="php-hl-reserved">echo</span> <span class="php-hl-quotes">&quot;</span><span class="php-hl-var">$name</span><span class="php-hl-string">: </span><span class="php-hl-var">$value</span><span class="php-hl-special">\n</span><span class="php-hl-quotes">&quot;</span><span class="php-hl-code">;  
</span><span class="php-hl-brackets">}</span></pre></div></div>

<p>用于索引更新的文档对象和搜索结果返回中略有不同，下面分开讲解。</p>

<h2 id="ch0">1. 搜索结果文档<a name="ch0" class="anchor">?</a></h2>

<p>搜索结果文档是指 <a href="../api/XSSearch.html#search">XSSearch::search</a> 返回值包含的文档，它由 <code>PHP-SDK</code> 内部代码创建。
除了普通文档的功能外，还支持以下魔术方法来访问搜索结果的元数据：</p>

<ul>
<li><code>docid()</code> 取得搜索结果文档的 docid 值 (实际数据库内的 id，一般用不到)</li>
<li><code>rank()</code> 取得搜索结果文档的序号值 (第X条结果)</li>
<li><code>percent()</code> 取得搜索结果文档的匹配百分比 (结果匹配度, 1~100)</li>
<li><code>weight()</code> 取得搜索结果文档的权重值 (浮点数)</li>
<li><code>ccount()</code> 取得搜索结果折叠的数量 (按字段折叠搜索时才有效)</li>
</ul>

<p>访问结果文档的字符集默认是与 <a href="../api/XSSearch.html#setCharset">XSSearch::setCharset</a> 所指定的字符集一致的，如未指定过则为 <a href="../api/XS.html#defaultCharset">XS::defaultCharset</a>。
虽然您可以通过 <a href="../api/XSDocument.html#setCharset">XSDocument::setCharset</a> 来强制修改文档的字符集，但不推荐这样做，也没必要这样做。</p>

<h2 id="ch1">2. 索引文档<a name="ch1" class="anchor">?</a></h2>

<p>索引文档是指由用户创建，并用于提交更新到索引库中的文档，创建文档时允许传入字符集作为构造函数的参数，
如未传入，则自动视为项目的默认字符集 <a href="../api/XS.html#defaultCharset">XS::defaultCharset</a>，如果字符集不是 <code>UTF-8</code> 的系统内部会
自动进行转换，但要求 <code>PHP</code> 带有中文转码扩展 (<a href="http://php.net/manual/en/book.iconv.php">iconv</a> 或 <a href="http://php.net/manual/en/book.mbstring.php">mbstring</a>)</p>

<div class="hl-code"><div class="php-hl-main"><pre><span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">XSDocument</span><span class="php-hl-code">;  </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 使用默认字符集</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">XSDocument</span><span class="php-hl-brackets">(</span><span class="php-hl-quotes">'</span><span class="php-hl-string">gbk</span><span class="php-hl-quotes">'</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 指定文档为 GBK 编码</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <span class="php-hl-identifier">XSDocument</span><span class="php-hl-brackets">(</span><span class="php-hl-var">$data</span><span class="php-hl-brackets">)</span><span class="php-hl-code">; </span><span class="php-hl-comment">//</span><span class="php-hl-comment"> 数组 $data 为初始字段数据, 编码则为默认编码</span>
<span class="php-hl-var">$doc</span><span class="php-hl-code"> = </span><span class="php-hl-reserved">new</span> <s