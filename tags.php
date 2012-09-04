<?php

	/**
	 * Class for including all files and defining tag's functions
	 * @author Ivo Seeba
	 * @package tags
	 */
	class Tags {

		/**
		 * Initializes all tag's classes
		 */
		static function init() {
			require_once 'core/rendererValidators.php';
			require_once 'core/renderer.php';
			require_once 'core/globalAttributes.php';
			require_once 'core/eventAttributes.php';
			require_once 'core/eventAndGlobalAttributes.php';

			require_once 'tags/a.php';
			require_once 'tags/abbr.php';
			require_once 'tags/address.php';
			require_once 'tags/area.php';
			require_once 'tags/article.php';
			require_once 'tags/aside.php';
			require_once 'tags/audio.php';
			require_once 'tags/b.php';
			require_once 'tags/base.php';
			require_once 'tags/bdi.php';
			require_once 'tags/bdo.php';
			require_once 'tags/blockquote.php';
			require_once 'tags/body.php';
			require_once 'tags/br.php';
			require_once 'tags/button.php';
			require_once 'tags/canvas.php';
			require_once 'tags/caption.php';
			require_once 'tags/cite.php';
			require_once 'tags/code.php';
			require_once 'tags/col.php';
			require_once 'tags/colgroup.php';
			require_once 'tags/command.php';
			require_once 'tags/datalist.php';
			require_once 'tags/dd.php';
			require_once 'tags/del.php';
			require_once 'tags/details.php';
			require_once 'tags/dfn.php';
			require_once 'tags/div.php';
			require_once 'tags/dl.php';
			require_once 'tags/dt.php';
			require_once 'tags/em.php';
			require_once 'tags/embed.php';
			require_once 'tags/fieldset.php';
			require_once 'tags/figcaption.php';
			require_once 'tags/figure.php';
			require_once 'tags/footer.php';
			require_once 'tags/form.php';
			require_once 'tags/h1.php';
			require_once 'tags/h2.php';
			require_once 'tags/h3.php';
			require_once 'tags/h4.php';
			require_once 'tags/h5.php';
			require_once 'tags/h6.php';
			require_once 'tags/head.php';
			require_once 'tags/header.php';
			require_once 'tags/hgroup.php';
			require_once 'tags/hr.php';
			require_once 'tags/html.php';
			require_once 'tags/i.php';
			require_once 'tags/iframe.php';
			require_once 'tags/img.php';
			require_once 'tags/input.php';
			require_once 'tags/ins.php';
			require_once 'tags/keygen.php';
			require_once 'tags/kbd.php';
			require_once 'tags/label.php';
			require_once 'tags/legend.php';
			require_once 'tags/li.php';
			require_once 'tags/link.php';
			require_once 'tags/map.php';
			require_once 'tags/mark.php';
			require_once 'tags/menu.php';
			require_once 'tags/meta.php';
			require_once 'tags/meter.php';
			require_once 'tags/nav.php';
			require_once 'tags/noscript.php';
			require_once 'tags/object.php';
			require_once 'tags/ol.php';
			require_once 'tags/optgroup.php';
			require_once 'tags/option.php';
			require_once 'tags/output.php';
			require_once 'tags/p.php';
			require_once 'tags/param.php';
			require_once 'tags/pre.php';
			require_once 'tags/progress.php';
			require_once 'tags/q.php';
			require_once 'tags/rp.php';
			require_once 'tags/rt.php';
			require_once 'tags/ruby.php';
			require_once 'tags/s.php';
			require_once 'tags/samp.php';
			require_once 'tags/script.php';
			require_once 'tags/section.php';
			require_once 'tags/select.php';
			require_once 'tags/small.php';
			require_once 'tags/source.php';
			require_once 'tags/span.php';
			require_once 'tags/strong.php';
			require_once 'tags/style.php';
			require_once 'tags/sub.php';
			require_once 'tags/summary.php';
			require_once 'tags/sup.php';
			require_once 'tags/table.php';
			require_once 'tags/tbody.php';
			require_once 'tags/td.php';
			require_once 'tags/textarea.php';
			require_once 'tags/tfoot.php';
			require_once 'tags/th.php';
			require_once 'tags/thead.php';
			require_once 'tags/time.php';
			require_once 'tags/title.php';
			require_once 'tags/tr.php';
			require_once 'tags/track.php';
			require_once 'tags/u.php';
			require_once 'tags/ul.php';
			require_once 'tags/var.php';
			require_once 'tags/video.php';
			require_once 'tags/wbr.php';
		}

		/**
		 * Tag 'a'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;a /&gt</code>,
		 *    <code>&lt;a&gt;</code>
		 *    <code>&lt;/a&gt;</code> and
		 *    <code>&lt;a&gt;&lt;/a&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;a&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/a&gt;</code> or
		 *    <code>&lt;a&gt;$value&lt;/a&gt;</code> correspondingly.
		 **/
		static function a($type = 2, $value = '') {
			return new A($type, $value);
		}

		/**
		 * Tag 'abbr'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;abbr /&gt</code>,
		 *    <code>&lt;abbr&gt;</code>
		 *    <code>&lt;/abbr&gt;</code> and
		 *    <code>&lt;abbr&gt;&lt;/abbr&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;abbr&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/abbr&gt;</code> or
		 *    <code>&lt;abbr&gt;$value&lt;/abbr&gt;</code> correspondingly.
		 **/
		static function abbr($type = 2, $value = '') {
			return new Abbr($type, $value);
		}

		/**
		 * Tag 'address'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;address /&gt</code>,
		 *    <code>&lt;address&gt;</code>
		 *    <code>&lt;/address&gt;</code> and
		 *    <code>&lt;address&gt;&lt;/address&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;address&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/address&gt;</code> or
		 *    <code>&lt;address&gt;$value&lt;/address&gt;</code> correspondingly.
		 **/
		static function address($type = 2, $value = '') {
			return new Address($type, $value);
		}

		/**
		 * Tag 'area'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;area /&gt</code>,
		 *    <code>&lt;area&gt;</code>
		 *    <code>&lt;/area&gt;</code> and
		 *    <code>&lt;area&gt;&lt;/area&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;area&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/area&gt;</code> or
		 *    <code>&lt;area&gt;$value&lt;/area&gt;</code> correspondingly.
		 **/
		static function area($type = 2, $value = '') {
			return new Area($type, $value);
		}

		/**
		 * Tag 'article'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;article /&gt</code>,
		 *    <code>&lt;article&gt;</code>
		 *    <code>&lt;/article&gt;</code> and
		 *    <code>&lt;article&gt;&lt;/article&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;article&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/article&gt;</code> or
		 *    <code>&lt;article&gt;$value&lt;/article&gt;</code> correspondingly.
		 **/
		static function article($type = 2, $value = '') {
			return new Article($type, $value);
		}

		/**
		 * Tag 'aside'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;aside /&gt</code>,
		 *    <code>&lt;aside&gt;</code>
		 *    <code>&lt;/aside&gt;</code> and
		 *    <code>&lt;aside&gt;&lt;/aside&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;aside&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/aside&gt;</code> or
		 *    <code>&lt;aside&gt;$value&lt;/aside&gt;</code> correspondingly.
		 **/
		static function aside($type = 2, $value = '') {
			return new Aside($type, $value);
		}

		/**
		 * Tag 'audio'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;audio /&gt</code>,
		 *    <code>&lt;audio&gt;</code>
		 *    <code>&lt;/audio&gt;</code> and
		 *    <code>&lt;audio&gt;&lt;/audio&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;audio&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/audio&gt;</code> or
		 *    <code>&lt;audio&gt;$value&lt;/audio&gt;</code> correspondingly.
		 **/
		static function audio($type = 2, $value = '') {
			return new Audio($type, $value);
		}

		/**
		 * Tag 'b'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;b /&gt</code>,
		 *    <code>&lt;b&gt;</code>
		 *    <code>&lt;/b&gt;</code> and
		 *    <code>&lt;b&gt;&lt;/b&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;b&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/b&gt;</code> or
		 *    <code>&lt;b&gt;$value&lt;/b&gt;</code> correspondingly.
		 **/
		static function b($type = 2, $value = '') {
			return new B($type, $value);
		}

		/**
		 * Tag 'base'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;base /&gt</code>,
		 *    <code>&lt;base&gt;</code>
		 *    <code>&lt;/base&gt;</code> and
		 *    <code>&lt;base&gt;&lt;/base&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;base&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/base&gt;</code> or
		 *    <code>&lt;base&gt;$value&lt;/base&gt;</code> correspondingly.
		 **/
		static function base($type = 2, $value = '') {
			return new Base($type, $value);
		}

		/**
		 * Tag 'bdi'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;bdi /&gt</code>,
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>&lt;/bdi&gt;</code> and
		 *    <code>&lt;bdi&gt;&lt;/bdi&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;bdi&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/bdi&gt;</code> or
		 *    <code>&lt;bdi&gt;$value&lt;/bdi&gt;</code> correspondingly.
		 **/
		static function bdi($type = 2, $value = '') {
			return new Bdi($type, $value);
		}

		/**
		 * Tag 'bdo'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;bdo /&gt</code>,
		 *    <code>&lt;bdo&gt;</code>
		 *    <code>&lt;/bdo&gt;</code> and
		 *    <code>&lt;bdo&gt;&lt;/bdo&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;bdo&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/bdo&gt;</code> or
		 *    <code>&lt;bdo&gt;$value&lt;/bdo&gt;</code> correspondingly.
		 **/
		static function bdo($type = 2, $value = '') {
			return new Bdo($type, $value);
		}

		/**
		 * Tag 'blockquote'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;blockquote /&gt</code>,
		 *    <code>&lt;blockquote&gt;</code>
		 *    <code>&lt;/blockquote&gt;</code> and
		 *    <code>&lt;blockquote&gt;&lt;/blockquote&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;blockquote&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/blockquote&gt;</code> or
		 *    <code>&lt;blockquote&gt;$value&lt;/blockquote&gt;</code> correspondingly.
		 **/
		static function blockquote($type = 2, $value = '') {
			return new Blockquote($type, $value);
		}

		/**
		 * Tag 'body'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;body /&gt</code>,
		 *    <code>&lt;body&gt;</code>
		 *    <code>&lt;/body&gt;</code> and
		 *    <code>&lt;body&gt;&lt;/body&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;body&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/body&gt;</code> or
		 *    <code>&lt;body&gt;$value&lt;/body&gt;</code> correspondingly.
		 **/
		static function body($type = 2, $value = '') {
			return new Body($type, $value);
		}

		/**
		 * Tag 'br'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;br /&gt</code>,
		 *    <code>&lt;br&gt;</code>
		 *    <code>&lt;/br&gt;</code> and
		 *    <code>&lt;br&gt;&lt;/br&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;br&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/br&gt;</code> or
		 *    <code>&lt;br&gt;$value&lt;/br&gt;</code> correspondingly.
		 **/
		static function br($type = 2, $value = '') {
			return new Br($type, $value);
		}

		/**
		 * Tag 'button'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;button /&gt</code>,
		 *    <code>&lt;button&gt;</code>
		 *    <code>&lt;/button&gt;</code> and
		 *    <code>&lt;button&gt;&lt;/button&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;button&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/button&gt;</code> or
		 *    <code>&lt;button&gt;$value&lt;/button&gt;</code> correspondingly.
		 **/
		static function button($type = 2, $value = '') {
			return new Button($type, $value);
		}

		/**
		 * Tag 'canvas'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;canvas /&gt</code>,
		 *    <code>&lt;canvas&gt;</code>
		 *    <code>&lt;/canvas&gt;</code> and
		 *    <code>&lt;canvas&gt;&lt;/canvas&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;canvas&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/canvas&gt;</code> or
		 *    <code>&lt;canvas&gt;$value&lt;/canvas&gt;</code> correspondingly.
		 **/
		static function canvas($type = 2, $value = '') {
			return new Canvas($type, $value);
		}

		/**
		 * Tag 'caption'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;caption /&gt</code>,
		 *    <code>&lt;caption&gt;</code>
		 *    <code>&lt;/caption&gt;</code> and
		 *    <code>&lt;caption&gt;&lt;/caption&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;caption&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/caption&gt;</code> or
		 *    <code>&lt;caption&gt;$value&lt;/caption&gt;</code> correspondingly.
		 **/
		static function caption($type = 2, $value = '') {
			return new Caption($type, $value);
		}

		/**
		 * Tag 'cite'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;cite /&gt</code>,
		 *    <code>&lt;cite&gt;</code>
		 *    <code>&lt;/cite&gt;</code> and
		 *    <code>&lt;cite&gt;&lt;/cite&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;cite&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/cite&gt;</code> or
		 *    <code>&lt;cite&gt;$value&lt;/cite&gt;</code> correspondingly.
		 **/
		static function cite($type = 2, $value = '') {
			return new Cite($type, $value);
		}

		/**
		 * Tag 'code'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;code /&gt</code>,
		 *    <code>&lt;code&gt;</code>
		 *    <code>&lt;/code&gt;</code> and
		 *    <code>&lt;code&gt;&lt;/code&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;code&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/code&gt;</code> or
		 *    <code>&lt;code&gt;$value&lt;/code&gt;</code> correspondingly.
		 **/
		static function code($type = 2, $value = '') {
			return new Code($type, $value);
		}

		/**
		 * Tag 'col'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;col /&gt</code>,
		 *    <code>&lt;col&gt;</code>
		 *    <code>&lt;/col&gt;</code> and
		 *    <code>&lt;col&gt;&lt;/col&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;col&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/col&gt;</code> or
		 *    <code>&lt;col&gt;$value&lt;/col&gt;</code> correspondingly.
		 **/
		static function col($type = 2, $value = '') {
			return new Col($type, $value);
		}

		/**
		 * Tag 'colgroup'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;colgroup /&gt</code>,
		 *    <code>&lt;colgroup&gt;</code>
		 *    <code>&lt;/colgroup&gt;</code> and
		 *    <code>&lt;colgroup&gt;&lt;/colgroup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;colgroup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/colgroup&gt;</code> or
		 *    <code>&lt;colgroup&gt;$value&lt;/colgroup&gt;</code> correspondingly.
		 **/
		static function colgroup($type = 2, $value = '') {
			return new Colgroup($type, $value);
		}

		/**
		 * Tag 'command'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;command /&gt</code>,
		 *    <code>&lt;command&gt;</code>
		 *    <code>&lt;/command&gt;</code> and
		 *    <code>&lt;command&gt;&lt;/command&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;command&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/command&gt;</code> or
		 *    <code>&lt;command&gt;$value&lt;/command&gt;</code> correspondingly.
		 **/
		static function command($type = 2, $value = '') {
			return new Command($type, $value);
		}

		/**
		 * Tag 'datalist'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;datalist /&gt</code>,
		 *    <code>&lt;datalist&gt;</code>
		 *    <code>&lt;/datalist&gt;</code> and
		 *    <code>&lt;datalist&gt;&lt;/datalist&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;datalist&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/datalist&gt;</code> or
		 *    <code>&lt;datalist&gt;$value&lt;/datalist&gt;</code> correspondingly.
		 **/
		static function datalist($type = 2, $value = '') {
			return new Datalist($type, $value);
		}

		/**
		 * Tag 'dd'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;dd /&gt</code>,
		 *    <code>&lt;dd&gt;</code>
		 *    <code>&lt;/dd&gt;</code> and
		 *    <code>&lt;dd&gt;&lt;/dd&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;dd&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/dd&gt;</code> or
		 *    <code>&lt;dd&gt;$value&lt;/dd&gt;</code> correspondingly.
		 **/
		static function dd($type = 2, $value = '') {
			return new Dd($type, $value);
		}

		/**
		 * Tag 'del'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;del /&gt</code>,
		 *    <code>&lt;del&gt;</code>
		 *    <code>&lt;/del&gt;</code> and
		 *    <code>&lt;del&gt;&lt;/del&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;del&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/del&gt;</code> or
		 *    <code>&lt;del&gt;$value&lt;/del&gt;</code> correspondingly.
		 **/
		static function del($type = 2, $value = '') {
			return new Del($type, $value);
		}

		/**
		 * Tag 'details'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;details /&gt</code>,
		 *    <code>&lt;details&gt;</code>
		 *    <code>&lt;/details&gt;</code> and
		 *    <code>&lt;details&gt;&lt;/details&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;details&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/details&gt;</code> or
		 *    <code>&lt;details&gt;$value&lt;/details&gt;</code> correspondingly.
		 **/
		static function details($type = 2, $value = '') {
			return new Details($type, $value);
		}

		/**
		 * Tag 'dfn'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;dfn /&gt</code>,
		 *    <code>&lt;dfn&gt;</code>
		 *    <code>&lt;/dfn&gt;</code> and
		 *    <code>&lt;dfn&gt;&lt;/dfn&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;dfn&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/dfn&gt;</code> or
		 *    <code>&lt;dfn&gt;$value&lt;/dfn&gt;</code> correspondingly.
		 **/
		static function dfn($type = 2, $value = '') {
			return new Dfn($type, $value);
		}

		/**
		 * Tag 'div'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;div /&gt</code>,
		 *    <code>&lt;div&gt;</code>
		 *    <code>&lt;/div&gt;</code> and
		 *    <code>&lt;div&gt;&lt;/div&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;div&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/div&gt;</code> or
		 *    <code>&lt;div&gt;$value&lt;/div&gt;</code> correspondingly.
		 **/
		static function div($type = 2, $value = '') {
			return new Div($type, $value);
		}

		/**
		 * Tag 'dl'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;dl /&gt</code>,
		 *    <code>&lt;dl&gt;</code>
		 *    <code>&lt;/dl&gt;</code> and
		 *    <code>&lt;dl&gt;&lt;/dl&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;dl&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/dl&gt;</code> or
		 *    <code>&lt;dl&gt;$value&lt;/dl&gt;</code> correspondingly.
		 **/
		static function dl($type = 2, $value = '') {
			return new Dl($type, $value);
		}

		/**
		 * Tag 'dt'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;dt /&gt</code>,
		 *    <code>&lt;dt&gt;</code>
		 *    <code>&lt;/dt&gt;</code> and
		 *    <code>&lt;dt&gt;&lt;/dt&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;dt&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/dt&gt;</code> or
		 *    <code>&lt;dt&gt;$value&lt;/dt&gt;</code> correspondingly.
		 **/
		static function dt($type = 2, $value = '') {
			return new Dt($type, $value);
		}

		/**
		 * Tag 'em'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;em /&gt</code>,
		 *    <code>&lt;em&gt;</code>
		 *    <code>&lt;/em&gt;</code> and
		 *    <code>&lt;em&gt;&lt;/em&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;em&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/em&gt;</code> or
		 *    <code>&lt;em&gt;$value&lt;/em&gt;</code> correspondingly.
		 **/
		static function em($type = 2, $value = '') {
			return new Em($type, $value);
		}

		/**
		 * Tag 'embed'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;embed /&gt</code>,
		 *    <code>&lt;embed&gt;</code>
		 *    <code>&lt;/embed&gt;</code> and
		 *    <code>&lt;embed&gt;&lt;/embed&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;embed&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/embed&gt;</code> or
		 *    <code>&lt;embed&gt;$value&lt;/embed&gt;</code> correspondingly.
		 **/
		static function embed($type = 2, $value = '') {
			return new Embed($type, $value);
		}

		/**
		 * Tag 'fieldset'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;fieldset /&gt</code>,
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>&lt;/fieldset&gt;</code> and
		 *    <code>&lt;fieldset&gt;&lt;/fieldset&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;fieldset&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/fieldset&gt;</code> or
		 *    <code>&lt;fieldset&gt;$value&lt;/fieldset&gt;</code> correspondingly.
		 **/
		static function fieldset($type = 2, $value = '') {
			return new Fieldset($type, $value);
		}

		/**
		 * Tag 'figcaption'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;figcaption /&gt</code>,
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>&lt;/figcaption&gt;</code> and
		 *    <code>&lt;figcaption&gt;&lt;/figcaption&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;figcaption&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/figcaption&gt;</code> or
		 *    <code>&lt;figcaption&gt;$value&lt;/figcaption&gt;</code> correspondingly.
		 **/
		static function figcaption($type = 2, $value = '') {
			return new Figcaption($type, $value);
		}

		/**
		 * Tag 'figure'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;figure /&gt</code>,
		 *    <code>&lt;figure&gt;</code>
		 *    <code>&lt;/figure&gt;</code> and
		 *    <code>&lt;figure&gt;&lt;/figure&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;figure&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/figure&gt;</code> or
		 *    <code>&lt;figure&gt;$value&lt;/figure&gt;</code> correspondingly.
		 **/
		static function figure($type = 2, $value = '') {
			return new Figure($type, $value);
		}

		/**
		 * Tag 'footer'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;footer /&gt</code>,
		 *    <code>&lt;footer&gt;</code>
		 *    <code>&lt;/footer&gt;</code> and
		 *    <code>&lt;footer&gt;&lt;/footer&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;footer&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/footer&gt;</code> or
		 *    <code>&lt;footer&gt;$value&lt;/footer&gt;</code> correspondingly.
		 **/
		static function footer($type = 2, $value = '') {
			return new Footer($type, $value);
		}

		/**
		 * Tag 'form'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;form /&gt</code>,
		 *    <code>&lt;form&gt;</code>
		 *    <code>&lt;/form&gt;</code> and
		 *    <code>&lt;form&gt;&lt;/form&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;form&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/form&gt;</code> or
		 *    <code>&lt;form&gt;$value&lt;/form&gt;</code> correspondingly.
		 **/
		static function form($type = 2, $value = '') {
			return new Form($type, $value);
		}

		/**
		 * Tag 'h1'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h1 /&gt</code>,
		 *    <code>&lt;h1&gt;</code>
		 *    <code>&lt;/h1&gt;</code> and
		 *    <code>&lt;h1&gt;&lt;/h1&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h1&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h1&gt;</code> or
		 *    <code>&lt;h1&gt;$value&lt;/h1&gt;</code> correspondingly.
		 **/
		static function h1($type = 2, $value = '') {
			return new H1($type, $value);
		}

		/**
		 * Tag 'h2'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h2 /&gt</code>,
		 *    <code>&lt;h2&gt;</code>
		 *    <code>&lt;/h2&gt;</code> and
		 *    <code>&lt;h2&gt;&lt;/h2&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h2&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h2&gt;</code> or
		 *    <code>&lt;h2&gt;$value&lt;/h2&gt;</code> correspondingly.
		 **/
		static function h2($type = 2, $value = '') {
			return new H2($type, $value);
		}

		/**
		 * Tag 'h3'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h3 /&gt</code>,
		 *    <code>&lt;h3&gt;</code>
		 *    <code>&lt;/h3&gt;</code> and
		 *    <code>&lt;h3&gt;&lt;/h3&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h3&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h3&gt;</code> or
		 *    <code>&lt;h3&gt;$value&lt;/h3&gt;</code> correspondingly.
		 **/
		static function h3($type = 2, $value = '') {
			return new H3($type, $value);
		}

		/**
		 * Tag 'h4'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h4 /&gt</code>,
		 *    <code>&lt;h4&gt;</code>
		 *    <code>&lt;/h4&gt;</code> and
		 *    <code>&lt;h4&gt;&lt;/h4&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h4&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h4&gt;</code> or
		 *    <code>&lt;h4&gt;$value&lt;/h4&gt;</code> correspondingly.
		 **/
		static function h4($type = 2, $value = '') {
			return new H4($type, $value);
		}

		/**
		 * Tag 'h5'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h5 /&gt</code>,
		 *    <code>&lt;h5&gt;</code>
		 *    <code>&lt;/h5&gt;</code> and
		 *    <code>&lt;h5&gt;&lt;/h5&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h5&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h5&gt;</code> or
		 *    <code>&lt;h5&gt;$value&lt;/h5&gt;</code> correspondingly.
		 **/
		static function h5($type = 2, $value = '') {
			return new H5($type, $value);
		}

		/**
		 * Tag 'h6'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;h6 /&gt</code>,
		 *    <code>&lt;h6&gt;</code>
		 *    <code>&lt;/h6&gt;</code> and
		 *    <code>&lt;h6&gt;&lt;/h6&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;h6&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/h6&gt;</code> or
		 *    <code>&lt;h6&gt;$value&lt;/h6&gt;</code> correspondingly.
		 **/
		static function h6($type = 2, $value = '') {
			return new H6($type, $value);
		}

		/**
		 * Tag 'head'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;head /&gt</code>,
		 *    <code>&lt;head&gt;</code>
		 *    <code>&lt;/head&gt;</code> and
		 *    <code>&lt;head&gt;&lt;/head&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;head&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/head&gt;</code> or
		 *    <code>&lt;head&gt;$value&lt;/head&gt;</code> correspondingly.
		 **/
		static function head($type = 2, $value = '') {
			return new Head($type, $value);
		}

		/**
		 * Tag 'header'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;header /&gt</code>,
		 *    <code>&lt;header&gt;</code>
		 *    <code>&lt;/header&gt;</code> and
		 *    <code>&lt;header&gt;&lt;/header&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;header&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/header&gt;</code> or
		 *    <code>&lt;header&gt;$value&lt;/header&gt;</code> correspondingly.
		 **/
		static function header($type = 2, $value = '') {
			return new Header($type, $value);
		}

		/**
		 * Tag 'hgroup'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;hgroup /&gt</code>,
		 *    <code>&lt;hgroup&gt;</code>
		 *    <code>&lt;/hgroup&gt;</code> and
		 *    <code>&lt;hgroup&gt;&lt;/hgroup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;hgroup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/hgroup&gt;</code> or
		 *    <code>&lt;hgroup&gt;$value&lt;/hgroup&gt;</code> correspondingly.
		 **/
		static function hgroup($type = 2, $value = '') {
			return new Hgroup($type, $value);
		}

		/**
		 * Tag 'hr'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;hr /&gt</code>,
		 *    <code>&lt;hr&gt;</code>
		 *    <code>&lt;/hr&gt;</code> and
		 *    <code>&lt;hr&gt;&lt;/hr&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;hr&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/hr&gt;</code> or
		 *    <code>&lt;hr&gt;$value&lt;/hr&gt;</code> correspondingly.
		 **/
		static function hr($type = 2, $value = '') {
			return new Hr($type, $value);
		}

		/**
		 * Tag 'html'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;html /&gt</code>,
		 *    <code>&lt;html&gt;</code>
		 *    <code>&lt;/html&gt;</code> and
		 *    <code>&lt;html&gt;&lt;/html&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;html&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/html&gt;</code> or
		 *    <code>&lt;html&gt;$value&lt;/html&gt;</code> correspondingly.
		 **/
		static function html($type = 2, $value = '') {
			return new Html($type, $value);
		}

		/**
		 * Tag 'i'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;i /&gt</code>,
		 *    <code>&lt;i&gt;</code>
		 *    <code>&lt;/i&gt;</code> and
		 *    <code>&lt;i&gt;&lt;/i&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;i&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/i&gt;</code> or
		 *    <code>&lt;i&gt;$value&lt;/i&gt;</code> correspondingly.
		 **/
		static function i($type = 2, $value = '') {
			return new I($type, $value);
		}

		/**
		 * Tag 'iframe'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;iframe /&gt</code>,
		 *    <code>&lt;iframe&gt;</code>
		 *    <code>&lt;/iframe&gt;</code> and
		 *    <code>&lt;iframe&gt;&lt;/iframe&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;iframe&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/iframe&gt;</code> or
		 *    <code>&lt;iframe&gt;$value&lt;/iframe&gt;</code> correspondingly.
		 **/
		static function iframe($type = 2, $value = '') {
			return new Iframe($type, $value);
		}

		/**
		 * Tag 'img'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;img /&gt</code>,
		 *    <code>&lt;img&gt;</code>
		 *    <code>&lt;/img&gt;</code> and
		 *    <code>&lt;img&gt;&lt;/img&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;img&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/img&gt;</code> or
		 *    <code>&lt;img&gt;$value&lt;/img&gt;</code> correspondingly.
		 **/
		static function img($type = 2, $value = '') {
			return new Img($type, $value);
		}

		/**
		 * Tag 'input'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;input /&gt</code>,
		 *    <code>&lt;input&gt;</code>
		 *    <code>&lt;/input&gt;</code> and
		 *    <code>&lt;input&gt;&lt;/input&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;input&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/input&gt;</code> or
		 *    <code>&lt;input&gt;$value&lt;/input&gt;</code> correspondingly.
		 **/
		static function input($type = 2, $value = '') {
			return new Input($type, $value);
		}

		/**
		 * Tag 'ins'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;ins /&gt</code>,
		 *    <code>&lt;ins&gt;</code>
		 *    <code>&lt;/ins&gt;</code> and
		 *    <code>&lt;ins&gt;&lt;/ins&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ins&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ins&gt;</code> or
		 *    <code>&lt;ins&gt;$value&lt;/ins&gt;</code> correspondingly.
		 **/
		static function ins($type = 2, $value = '') {
			return new Ins($type, $value);
		}

		/**
		 * Tag 'keygen'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;keygen /&gt</code>,
		 *    <code>&lt;keygen&gt;</code>
		 *    <code>&lt;/keygen&gt;</code> and
		 *    <code>&lt;keygen&gt;&lt;/keygen&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;keygen&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/keygen&gt;</code> or
		 *    <code>&lt;keygen&gt;$value&lt;/keygen&gt;</code> correspondingly.
		 **/
		static function keygen($type = 2, $value = '') {
			return new Keygen($type, $value);
		}

		/**
		 * Tag 'kbd'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;kbd /&gt</code>,
		 *    <code>&lt;kbd&gt;</code>
		 *    <code>&lt;/kbd&gt;</code> and
		 *    <code>&lt;kbd&gt;&lt;/kbd&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;kbd&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/kbd&gt;</code> or
		 *    <code>&lt;kbd&gt;$value&lt;/kbd&gt;</code> correspondingly.
		 **/
		static function kbd($type = 2, $value = '') {
			return new Kbd($type, $value);
		}

		/**
		 * Tag 'label'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;label /&gt</code>,
		 *    <code>&lt;label&gt;</code>
		 *    <code>&lt;/label&gt;</code> and
		 *    <code>&lt;label&gt;&lt;/label&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;label&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/label&gt;</code> or
		 *    <code>&lt;label&gt;$value&lt;/label&gt;</code> correspondingly.
		 **/
		static function label($type = 2, $value = '') {
			return new Label($type, $value);
		}

		/**
		 * Tag 'legend'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;legend /&gt</code>,
		 *    <code>&lt;legend&gt;</code>
		 *    <code>&lt;/legend&gt;</code> and
		 *    <code>&lt;legend&gt;&lt;/legend&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;legend&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/legend&gt;</code> or
		 *    <code>&lt;legend&gt;$value&lt;/legend&gt;</code> correspondingly.
		 **/
		static function legend($type = 2, $value = '') {
			return new Legend($type, $value);
		}

		/**
		 * Tag 'li'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;li /&gt</code>,
		 *    <code>&lt;li&gt;</code>
		 *    <code>&lt;/li&gt;</code> and
		 *    <code>&lt;li&gt;&lt;/li&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;li&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/li&gt;</code> or
		 *    <code>&lt;li&gt;$value&lt;/li&gt;</code> correspondingly.
		 **/
		static function li($type = 2, $value = '') {
			return new Li($type, $value);
		}

		/**
		 * Tag 'link'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;link /&gt</code>,
		 *    <code>&lt;link&gt;</code>
		 *    <code>&lt;/link&gt;</code> and
		 *    <code>&lt;link&gt;&lt;/link&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;link&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/link&gt;</code> or
		 *    <code>&lt;link&gt;$value&lt;/link&gt;</code> correspondingly.
		 **/
		static function link($type = 2, $value = '') {
			return new Link($type, $value);
		}

		/**
		 * Tag 'map'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;map /&gt</code>,
		 *    <code>&lt;map&gt;</code>
		 *    <code>&lt;/map&gt;</code> and
		 *    <code>&lt;map&gt;&lt;/map&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;map&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/map&gt;</code> or
		 *    <code>&lt;map&gt;$value&lt;/map&gt;</code> correspondingly.
		 **/
		static function map($type = 2, $value = '') {
			return new Map($type, $value);
		}

		/**
		 * Tag 'mark'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;mark /&gt</code>,
		 *    <code>&lt;mark&gt;</code>
		 *    <code>&lt;/mark&gt;</code> and
		 *    <code>&lt;mark&gt;&lt;/mark&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;mark&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/mark&gt;</code> or
		 *    <code>&lt;mark&gt;$value&lt;/mark&gt;</code> correspondingly.
		 **/
		static function mark($type = 2, $value = '') {
			return new Mark($type, $value);
		}

		/**
		 * Tag 'menu'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;menu /&gt</code>,
		 *    <code>&lt;menu&gt;</code>
		 *    <code>&lt;/menu&gt;</code> and
		 *    <code>&lt;menu&gt;&lt;/menu&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;menu&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/menu&gt;</code> or
		 *    <code>&lt;menu&gt;$value&lt;/menu&gt;</code> correspondingly.
		 **/
		static function menu($type = 2, $value = '') {
			return new Menu($type, $value);
		}

		/**
		 * Tag 'meta'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;meta /&gt</code>,
		 *    <code>&lt;meta&gt;</code>
		 *    <code>&lt;/meta&gt;</code> and
		 *    <code>&lt;meta&gt;&lt;/meta&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;meta&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/meta&gt;</code> or
		 *    <code>&lt;meta&gt;$value&lt;/meta&gt;</code> correspondingly.
		 **/
		static function meta($type = 2, $value = '') {
			return new Meta($type, $value);
		}

		/**
		 * Tag 'meter'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;meter /&gt</code>,
		 *    <code>&lt;meter&gt;</code>
		 *    <code>&lt;/meter&gt;</code> and
		 *    <code>&lt;meter&gt;&lt;/meter&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;meter&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/meter&gt;</code> or
		 *    <code>&lt;meter&gt;$value&lt;/meter&gt;</code> correspondingly.
		 **/
		static function meter($type = 2, $value = '') {
			return new Meter($type, $value);
		}

		/**
		 * Tag 'nav'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;nav /&gt</code>,
		 *    <code>&lt;nav&gt;</code>
		 *    <code>&lt;/nav&gt;</code> and
		 *    <code>&lt;nav&gt;&lt;/nav&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;nav&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/nav&gt;</code> or
		 *    <code>&lt;nav&gt;$value&lt;/nav&gt;</code> correspondingly.
		 **/
		static function nav($type = 2, $value = '') {
			return new Nav($type, $value);
		}

		/**
		 * Tag 'noscript'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;noscript /&gt</code>,
		 *    <code>&lt;noscript&gt;</code>
		 *    <code>&lt;/noscript&gt;</code> and
		 *    <code>&lt;noscript&gt;&lt;/noscript&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;noscript&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/noscript&gt;</code> or
		 *    <code>&lt;noscript&gt;$value&lt;/noscript&gt;</code> correspondingly.
		 **/
		static function noscript($type = 2, $value = '') {
			return new Noscript($type, $value);
		}

		/**
		 * Tag 'object'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;object /&gt</code>,
		 *    <code>&lt;object&gt;</code>
		 *    <code>&lt;/object&gt;</code> and
		 *    <code>&lt;object&gt;&lt;/object&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;object&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/object&gt;</code> or
		 *    <code>&lt;object&gt;$value&lt;/object&gt;</code> correspondingly.
		 **/
		static function object($type = 2, $value = '') {
			return new Object($type, $value);
		}

		/**
		 * Tag 'ol'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;ol /&gt</code>,
		 *    <code>&lt;ol&gt;</code>
		 *    <code>&lt;/ol&gt;</code> and
		 *    <code>&lt;ol&gt;&lt;/ol&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ol&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ol&gt;</code> or
		 *    <code>&lt;ol&gt;$value&lt;/ol&gt;</code> correspondingly.
		 **/
		static function ol($type = 2, $value = '') {
			return new Ol($type, $value);
		}

		/**
		 * Tag 'optgroup'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;optgroup /&gt</code>,
		 *    <code>&lt;optgroup&gt;</code>
		 *    <code>&lt;/optgroup&gt;</code> and
		 *    <code>&lt;optgroup&gt;&lt;/optgroup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;optgroup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/optgroup&gt;</code> or
		 *    <code>&lt;optgroup&gt;$value&lt;/optgroup&gt;</code> correspondingly.
		 **/
		static function optgroup($type = 2, $value = '') {
			return new Optgroup($type, $value);
		}

		/**
		 * Tag 'option'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;option /&gt</code>,
		 *    <code>&lt;option&gt;</code>
		 *    <code>&lt;/option&gt;</code> and
		 *    <code>&lt;option&gt;&lt;/option&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;option&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/option&gt;</code> or
		 *    <code>&lt;option&gt;$value&lt;/option&gt;</code> correspondingly.
		 **/
		static function option($type = 2, $value = '') {
			return new Option($type, $value);
		}

		/**
		 * Tag 'output'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;output /&gt</code>,
		 *    <code>&lt;output&gt;</code>
		 *    <code>&lt;/output&gt;</code> and
		 *    <code>&lt;output&gt;&lt;/output&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;output&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/output&gt;</code> or
		 *    <code>&lt;output&gt;$value&lt;/output&gt;</code> correspondingly.
		 **/
		static function output($type = 2, $value = '') {
			return new Output($type, $value);
		}

		/**
		 * Tag 'p'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;p /&gt</code>,
		 *    <code>&lt;p&gt;</code>
		 *    <code>&lt;/p&gt;</code> and
		 *    <code>&lt;p&gt;&lt;/p&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;p&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/p&gt;</code> or
		 *    <code>&lt;p&gt;$value&lt;/p&gt;</code> correspondingly.
		 **/
		static function p($type = 2, $value = '') {
			return new P($type, $value);
		}

		/**
		 * Tag 'param'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;param /&gt</code>,
		 *    <code>&lt;param&gt;</code>
		 *    <code>&lt;/param&gt;</code> and
		 *    <code>&lt;param&gt;&lt;/param&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;param&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/param&gt;</code> or
		 *    <code>&lt;param&gt;$value&lt;/param&gt;</code> correspondingly.
		 **/
		static function param($type = 2, $value = '') {
			return new Param($type, $value);
		}

		/**
		 * Tag 'pre'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;pre /&gt</code>,
		 *    <code>&lt;pre&gt;</code>
		 *    <code>&lt;/pre&gt;</code> and
		 *    <code>&lt;pre&gt;&lt;/pre&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;pre&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/pre&gt;</code> or
		 *    <code>&lt;pre&gt;$value&lt;/pre&gt;</code> correspondingly.
		 **/
		static function pre($type = 2, $value = '') {
			return new Pre($type, $value);
		}

		/**
		 * Tag 'progress'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;progress /&gt</code>,
		 *    <code>&lt;progress&gt;</code>
		 *    <code>&lt;/progress&gt;</code> and
		 *    <code>&lt;progress&gt;&lt;/progress&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;progress&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/progress&gt;</code> or
		 *    <code>&lt;progress&gt;$value&lt;/progress&gt;</code> correspondingly.
		 **/
		static function progress($type = 2, $value = '') {
			return new Progress($type, $value);
		}

		/**
		 * Tag 'q'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;q /&gt</code>,
		 *    <code>&lt;q&gt;</code>
		 *    <code>&lt;/q&gt;</code> and
		 *    <code>&lt;q&gt;&lt;/q&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;q&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/q&gt;</code> or
		 *    <code>&lt;q&gt;$value&lt;/q&gt;</code> correspondingly.
		 **/
		static function q($type = 2, $value = '') {
			return new Q($type, $value);
		}

		/**
		 * Tag 'rp'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;rp /&gt</code>,
		 *    <code>&lt;rp&gt;</code>
		 *    <code>&lt;/rp&gt;</code> and
		 *    <code>&lt;rp&gt;&lt;/rp&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;rp&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/rp&gt;</code> or
		 *    <code>&lt;rp&gt;$value&lt;/rp&gt;</code> correspondingly.
		 **/
		static function rp($type = 2, $value = '') {
			return new Rp($type, $value);
		}

		/**
		 * Tag 'rt'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;rt /&gt</code>,
		 *    <code>&lt;rt&gt;</code>
		 *    <code>&lt;/rt&gt;</code> and
		 *    <code>&lt;rt&gt;&lt;/rt&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;rt&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/rt&gt;</code> or
		 *    <code>&lt;rt&gt;$value&lt;/rt&gt;</code> correspondingly.
		 **/
		static function rt($type = 2, $value = '') {
			return new Rt($type, $value);
		}

		/**
		 * Tag 'ruby'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;ruby /&gt</code>,
		 *    <code>&lt;ruby&gt;</code>
		 *    <code>&lt;/ruby&gt;</code> and
		 *    <code>&lt;ruby&gt;&lt;/ruby&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ruby&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ruby&gt;</code> or
		 *    <code>&lt;ruby&gt;$value&lt;/ruby&gt;</code> correspondingly.
		 **/
		static function ruby($type = 2, $value = '') {
			return new Ruby($type, $value);
		}

		/**
		 * Tag 's'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;s /&gt</code>,
		 *    <code>&lt;s&gt;</code>
		 *    <code>&lt;/s&gt;</code> and
		 *    <code>&lt;s&gt;&lt;/s&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;s&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/s&gt;</code> or
		 *    <code>&lt;s&gt;$value&lt;/s&gt;</code> correspondingly.
		 **/
		static function s($type = 2, $value = '') {
			return new S($type, $value);
		}

		/**
		 * Tag 'samp'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;samp /&gt</code>,
		 *    <code>&lt;samp&gt;</code>
		 *    <code>&lt;/samp&gt;</code> and
		 *    <code>&lt;samp&gt;&lt;/samp&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;samp&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/samp&gt;</code> or
		 *    <code>&lt;samp&gt;$value&lt;/samp&gt;</code> correspondingly.
		 **/
		static function samp($type = 2, $value = '') {
			return new Samp($type, $value);
		}

		/**
		 * Tag 'script'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;script /&gt</code>,
		 *    <code>&lt;script&gt;</code>
		 *    <code>&lt;/script&gt;</code> and
		 *    <code>&lt;script&gt;&lt;/script&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;script&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/script&gt;</code> or
		 *    <code>&lt;script&gt;$value&lt;/script&gt;</code> correspondingly.
		 **/
		static function script($type = 2, $value = '') {
			return new Script($type, $value);
		}

		/**
		 * Tag 'section'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;section /&gt</code>,
		 *    <code>&lt;section&gt;</code>
		 *    <code>&lt;/section&gt;</code> and
		 *    <code>&lt;section&gt;&lt;/section&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;section&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/section&gt;</code> or
		 *    <code>&lt;section&gt;$value&lt;/section&gt;</code> correspondingly.
		 **/
		static function section($type = 2, $value = '') {
			return new Section($type, $value);
		}

		/**
		 * Tag 'select'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;select /&gt</code>,
		 *    <code>&lt;select&gt;</code>
		 *    <code>&lt;/select&gt;</code> and
		 *    <code>&lt;select&gt;&lt;/select&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;select&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/select&gt;</code> or
		 *    <code>&lt;select&gt;$value&lt;/select&gt;</code> correspondingly.
		 **/
		static function select($type = 2, $value = '') {
			return new Select($type, $value);
		}

		/**
		 * Tag 'small'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;small /&gt</code>,
		 *    <code>&lt;small&gt;</code>
		 *    <code>&lt;/small&gt;</code> and
		 *    <code>&lt;small&gt;&lt;/small&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;small&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/small&gt;</code> or
		 *    <code>&lt;small&gt;$value&lt;/small&gt;</code> correspondingly.
		 **/
		static function small($type = 2, $value = '') {
			return new Small($type, $value);
		}

		/**
		 * Tag 'source'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;source /&gt</code>,
		 *    <code>&lt;source&gt;</code>
		 *    <code>&lt;/source&gt;</code> and
		 *    <code>&lt;source&gt;&lt;/source&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;source&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/source&gt;</code> or
		 *    <code>&lt;source&gt;$value&lt;/source&gt;</code> correspondingly.
		 **/
		static function source($type = 2, $value = '') {
			return new Source($type, $value);
		}

		/**
		 * Tag 'span'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;span /&gt</code>,
		 *    <code>&lt;span&gt;</code>
		 *    <code>&lt;/span&gt;</code> and
		 *    <code>&lt;span&gt;&lt;/span&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;span&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/span&gt;</code> or
		 *    <code>&lt;span&gt;$value&lt;/span&gt;</code> correspondingly.
		 **/
		static function span($type = 2, $value = '') {
			return new Span($type, $value);
		}

		/**
		 * Tag 'strong'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;strong /&gt</code>,
		 *    <code>&lt;strong&gt;</code>
		 *    <code>&lt;/strong&gt;</code> and
		 *    <code>&lt;strong&gt;&lt;/strong&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;strong&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/strong&gt;</code> or
		 *    <code>&lt;strong&gt;$value&lt;/strong&gt;</code> correspondingly.
		 **/
		static function strong($type = 2, $value = '') {
			return new Strong($type, $value);
		}

		/**
		 * Tag 'style'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;style /&gt</code>,
		 *    <code>&lt;style&gt;</code>
		 *    <code>&lt;/style&gt;</code> and
		 *    <code>&lt;style&gt;&lt;/style&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;style&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/style&gt;</code> or
		 *    <code>&lt;style&gt;$value&lt;/style&gt;</code> correspondingly.
		 **/
		static function style($type = 2, $value = '') {
			return new Style($type, $value);
		}

		/**
		 * Tag 'sub'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;sub /&gt</code>,
		 *    <code>&lt;sub&gt;</code>
		 *    <code>&lt;/sub&gt;</code> and
		 *    <code>&lt;sub&gt;&lt;/sub&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;sub&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/sub&gt;</code> or
		 *    <code>&lt;sub&gt;$value&lt;/sub&gt;</code> correspondingly.
		 **/
		static function sub($type = 2, $value = '') {
			return new Sub($type, $value);
		}

		/**
		 * Tag 'summary'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;summary /&gt</code>,
		 *    <code>&lt;summary&gt;</code>
		 *    <code>&lt;/summary&gt;</code> and
		 *    <code>&lt;summary&gt;&lt;/summary&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;summary&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/summary&gt;</code> or
		 *    <code>&lt;summary&gt;$value&lt;/summary&gt;</code> correspondingly.
		 **/
		static function summary($type = 2, $value = '') {
			return new Summary($type, $value);
		}

		/**
		 * Tag 'sup'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;sup /&gt</code>,
		 *    <code>&lt;sup&gt;</code>
		 *    <code>&lt;/sup&gt;</code> and
		 *    <code>&lt;sup&gt;&lt;/sup&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;sup&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/sup&gt;</code> or
		 *    <code>&lt;sup&gt;$value&lt;/sup&gt;</code> correspondingly.
		 **/
		static function sup($type = 2, $value = '') {
			return new Sup($type, $value);
		}

		/**
		 * Tag 'table'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;table /&gt</code>,
		 *    <code>&lt;table&gt;</code>
		 *    <code>&lt;/table&gt;</code> and
		 *    <code>&lt;table&gt;&lt;/table&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;table&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/table&gt;</code> or
		 *    <code>&lt;table&gt;$value&lt;/table&gt;</code> correspondingly.
		 **/
		static function table($type = 2, $value = '') {
			return new Table($type, $value);
		}

		/**
		 * Tag 'tbody'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;tbody /&gt</code>,
		 *    <code>&lt;tbody&gt;</code>
		 *    <code>&lt;/tbody&gt;</code> and
		 *    <code>&lt;tbody&gt;&lt;/tbody&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;tbody&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/tbody&gt;</code> or
		 *    <code>&lt;tbody&gt;$value&lt;/tbody&gt;</code> correspondingly.
		 **/
		static function tbody($type = 2, $value = '') {
			return new Tbody($type, $value);
		}

		/**
		 * Tag 'td'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;td /&gt</code>,
		 *    <code>&lt;td&gt;</code>
		 *    <code>&lt;/td&gt;</code> and
		 *    <code>&lt;td&gt;&lt;/td&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;td&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/td&gt;</code> or
		 *    <code>&lt;td&gt;$value&lt;/td&gt;</code> correspondingly.
		 **/
		static function td($type = 2, $value = '') {
			return new Td($type, $value);
		}

		/**
		 * Tag 'textarea'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;textarea /&gt</code>,
		 *    <code>&lt;textarea&gt;</code>
		 *    <code>&lt;/textarea&gt;</code> and
		 *    <code>&lt;textarea&gt;&lt;/textarea&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;textarea&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/textarea&gt;</code> or
		 *    <code>&lt;textarea&gt;$value&lt;/textarea&gt;</code> correspondingly.
		 **/
		static function textarea($type = 2, $value = '') {
			return new Textarea($type, $value);
		}

		/**
		 * Tag 'tfoot'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;tfoot /&gt</code>,
		 *    <code>&lt;tfoot&gt;</code>
		 *    <code>&lt;/tfoot&gt;</code> and
		 *    <code>&lt;tfoot&gt;&lt;/tfoot&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;tfoot&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/tfoot&gt;</code> or
		 *    <code>&lt;tfoot&gt;$value&lt;/tfoot&gt;</code> correspondingly.
		 **/
		static function tfoot($type = 2, $value = '') {
			return new Tfoot($type, $value);
		}

		/**
		 * Tag 'th'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;th /&gt</code>,
		 *    <code>&lt;th&gt;</code>
		 *    <code>&lt;/th&gt;</code> and
		 *    <code>&lt;th&gt;&lt;/th&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;th&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/th&gt;</code> or
		 *    <code>&lt;th&gt;$value&lt;/th&gt;</code> correspondingly.
		 **/
		static function th($type = 2, $value = '') {
			return new Th($type, $value);
		}

		/**
		 * Tag 'thead'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;thead /&gt</code>,
		 *    <code>&lt;thead&gt;</code>
		 *    <code>&lt;/thead&gt;</code> and
		 *    <code>&lt;thead&gt;&lt;/thead&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;thead&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/thead&gt;</code> or
		 *    <code>&lt;thead&gt;$value&lt;/thead&gt;</code> correspondingly.
		 **/
		static function thead($type = 2, $value = '') {
			return new Thead($type, $value);
		}

		/**
		 * Tag 'time'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;time /&gt</code>,
		 *    <code>&lt;time&gt;</code>
		 *    <code>&lt;/time&gt;</code> and
		 *    <code>&lt;time&gt;&lt;/time&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;time&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/time&gt;</code> or
		 *    <code>&lt;time&gt;$value&lt;/time&gt;</code> correspondingly.
		 **/
		static function time($type = 2, $value = '') {
			return new Time($type, $value);
		}

		/**
		 * Tag 'title'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;title /&gt</code>,
		 *    <code>&lt;title&gt;</code>
		 *    <code>&lt;/title&gt;</code> and
		 *    <code>&lt;title&gt;&lt;/title&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;title&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/title&gt;</code> or
		 *    <code>&lt;title&gt;$value&lt;/title&gt;</code> correspondingly.
		 **/
		static function title($type = 2, $value = '') {
			return new Title($type, $value);
		}

		/**
		 * Tag 'tr'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;tr /&gt</code>,
		 *    <code>&lt;tr&gt;</code>
		 *    <code>&lt;/tr&gt;</code> and
		 *    <code>&lt;tr&gt;&lt;/tr&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;tr&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/tr&gt;</code> or
		 *    <code>&lt;tr&gt;$value&lt;/tr&gt;</code> correspondingly.
		 **/
		static function tr($type = 2, $value = '') {
			return new Tr($type, $value);
		}

		/**
		 * Tag 'track'
		 * @param integer $type type 1,2 or 3 (default=1)
		 *    generates the tag in the form
		 *    <code>&lt;track /&gt</code>,
		 *    <code>&lt;track&gt;</code>
		 *    <code>&lt;/track&gt;</code> and
		 *    <code>&lt;track&gt;&lt;/track&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;track&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/track&gt;</code> or
		 *    <code>&lt;track&gt;$value&lt;/track&gt;</code> correspondingly.
		 **/
		static function track($type = 2, $value = '') {
			return new Track($type, $value);
		}

		/**
		 * Tag 'u'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;u /&gt</code>,
		 *    <code>&lt;u&gt;</code>
		 *    <code>&lt;/u&gt;</code> and
		 *    <code>&lt;u&gt;&lt;/u&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;u&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/u&gt;</code> or
		 *    <code>&lt;u&gt;$value&lt;/u&gt;</code> correspondingly.
		 **/
		static function u($type = 2, $value = '') {
			return new U($type, $value);
		}

		/**
		 * Tag 'ul'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;ul /&gt</code>,
		 *    <code>&lt;ul&gt;</code>
		 *    <code>&lt;/ul&gt;</code> and
		 *    <code>&lt;ul&gt;&lt;/ul&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;ul&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/ul&gt;</code> or
		 *    <code>&lt;ul&gt;$value&lt;/ul&gt;</code> correspondingly.
		 **/
		static function ul($type = 2, $value = '') {
			return new Ul($type, $value);
		}

		/**
		 * Tag 'var'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;var /&gt</code>,
		 *    <code>&lt;var&gt;</code>
		 *    <code>&lt;/var&gt;</code> and
		 *    <code>&lt;var&gt;&lt;/var&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;var&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/var&gt;</code> or
		 *    <code>&lt;var&gt;$value&lt;/var&gt;</code> correspondingly.
		 **/
		static function var_($type = 2, $value = '') {
			return new Var_($type, $value);
		}

		/**
		 * Tag 'video'
		 * @param integer $type type 1,2 or 3 (default=2)
		 *    generates the tag in the form
		 *    <code>&lt;video /&gt</code>,
		 *    <code>&lt;video&gt;</code>
		 *    <code>&lt;/video&gt;</code> and
		 *    <code>&lt;video&gt;&lt;/video&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;video&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/video&gt;</code> or
		 *    <code>&lt;video&gt;$value&lt;/video&gt;</code> correspondingly.
		 **/
		static function video($type = 2, $value = '') {
			return new Video($type, $value);
		}

		/**
		 * Tag 'wbr'
		 * @param integer $type type 1,2 or 3 (default=3)
		 *    generates the tag in the form
		 *    <code>&lt;wbr /&gt</code>,
		 *    <code>&lt;wbr&gt;</code>
		 *    <code>&lt;/wbr&gt;</code> and
		 *    <code>&lt;wbr&gt;&lt;/wbr&gt;</code> correspondingly.
		 * @param string $value The tag's value (default='')
		 *    works only if type is 2 or 3 and generates in the form
		 *    <code>&lt;wbr&gt;</code>
		 *    <code>   $value</code>
		 *    <code>&lt;/wbr&gt;</code> or
		 *    <code>&lt;wbr&gt;$value&lt;/wbr&gt;</code> correspondingly.
		 **/
		static function wbr($type = 2, $value = '') {
			return new Wbr($type, $value);
		}

	}
	Tags::init();
?>
