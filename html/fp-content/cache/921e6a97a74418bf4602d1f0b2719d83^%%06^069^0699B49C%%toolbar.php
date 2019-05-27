<?php /* Smarty version 2.6.30, created on 2019-01-23 12:04:59
         compiled from plugin:bbcode/toolbar */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'plugin:bbcode/toolbar', 31, false),)), $this); ?>
<p class="alignright">
	<a class="hint externlink" href="http://wiki.flatpress.org/doc:plugins:bbcode"><?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['help']; ?>
</a>
</p>

<p class="alignleft">
	<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['textarea']; ?>

	<input type="button" name="expand" id="expand" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['expand']; ?>
" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['expandtitle']; ?>
" onclick="form.content.rows+=5;" />
	<input type="button" name="reduce" id="reduce" value="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['reduce']; ?>
" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['reducetitle']; ?>
" onclick="form.content.rows-=5;" />
</p>

<fieldset id="admin-bbcode-toolbar" style="clear:both">
	<legend><?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['formatting']; ?>
</legend>
	<p>
		<img src="fp-plugins/bbcode/res/toolbaricons/link.png" name="bb_url" id="bb_url" accesskey="" alt="url" title="url" onclick="insBBCode('url');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/mail.png" name="bb_mail" id="bb_mail" accesskey="" alt="mail" title="mail" onclick="insBBCode('mail');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/h2.png" name="bb_h2" id="bb_h2" accesskey="" alt="h2" title="h2" onclick="insBBCode('h2');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/h3.png" name="bb_h3" id="bb_h3" accesskey="" alt="h3" title="h3" onclick="insBBCode('h3');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/ul.png" name="bb_ul" id="bb_ul" accesskey="" alt="ul" title="unordered list" onclick="insBBCodeWithContent('list', '\n[*]\n[*]\n');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/ol.png" name="bb_ol" id="bb_ol" accesskey="" alt="ol" title="ordered list" onclick="insBBCodeWithParamsAndContent('list', '#', '\n[*]\n[*]\n');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/quote.png" name="bb_quote" id="bb_quote" accesskey="" alt="quote" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['quotetitle']; ?>
" onclick="insBBCode('quote');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/code.png" name="bb_code" id="bb_code" accesskey="" alt="code" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['codetitle']; ?>
" onclick="insBBCode('code');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/html.png" name="bb_html" id="bb_html" accesskey="" alt="html" title="html" onclick="insBBCode('html');" />
&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="fp-plugins/bbcode/res/toolbaricons/bold.png" name="bb_b" id="bb_b" accesskey="" alt="b" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['boldtitle']; ?>
" onclick="insBBCode('b');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/italic.png" name="bb_i" id="bb_i" accesskey="" alt="i" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['italictitle']; ?>
" onclick="insBBCode('i');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/underlined.png" name="bb_u" id="bb_u" accesskey="" alt="u" title="<?php echo $this->_tpl_vars['lang']['admin']['plugin']['bbcode']['editor']['underlinetitle']; ?>
" onclick="insBBCode('u');" />
		<img src="fp-plugins/bbcode/res/toolbaricons/del.png" name="bb_del" id="bb_del" accesskey="" alt="" title="del" onclick="insBBCode('del');" />
&nbsp;&nbsp;&nbsp;&nbsp;
	</p>
	<p>
		<?php echo smarty_function_html_options(array('name' => 'attachselect','values' => $this->_tpl_vars['attachs_list'],'output' => $this->_tpl_vars['attachs_list'],'onchange' => "insAttach(this.form.attachselect.value)"), $this);?>

		<?php echo smarty_function_html_options(array('name' => 'imageselect','values' => $this->_tpl_vars['images_list'],'output' => $this->_tpl_vars['images_list'],'onchange' => "insImage(this.form.imageselect.value)"), $this);?>

	</p>
</fieldset>
