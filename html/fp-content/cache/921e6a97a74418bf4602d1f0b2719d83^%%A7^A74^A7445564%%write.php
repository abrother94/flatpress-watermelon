<?php /* Smarty version 2.6.30, created on 2019-10-12 13:12:15
         compiled from admin:static/write */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'static_block', 'admin:static/write', 6, false),array('block', 'html_form', 'admin:static/write', 13, false),array('block', 'static', 'admin:static/write', 15, false),array('modifier', 'notempty', 'admin:static/write', 18, false),array('modifier', 'default', 'admin:static/write', 19, false),array('modifier', 'wp_specialchars', 'admin:static/write', 19, false),array('modifier', 'htmlspecialchars', 'admin:static/write', 28, false),array('function', 'toolbar', 'admin:static/write', 25, false),array('function', 'html_submit', 'admin:static/write', 37, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	


	<?php $this->_tag_stack[] = array('static_block', array()); $_block_repeat=true;smarty_block_statics($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php if ($this->_tpl_vars['preview']): ?>
	<fieldset id="post-preview"><legend><?php echo $this->_tpl_vars['panelstrings']['preview']; ?>
</legend>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "preview.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	</fieldset>
	<?php endif; ?>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		

	<?php $this->_tag_stack[] = array('static', array('content' => $this->_tpl_vars['post'],'alwaysshow' => true)); $_block_repeat=true;smarty_block_static($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
			<p><label for="subject"><?php echo $this->_tpl_vars['panelstrings']['subject']; ?>
</label><br />
			<input type="text" name="subject" id="subject" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['subject'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
			value="<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['subject']) : smarty_modifier_default($_tmp, @$_REQUEST['subject'])))) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['page']) : smarty_modifier_default($_tmp, @$_REQUEST['page'])))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, 1) : wp_specialchars($_tmp, 1)); ?>
" /><br />
			<input type="hidden" name="timestamp" value="<?php echo $this->_tpl_vars['date']; ?>
" />
			</p>
			<p>
			<label for="content"><?php echo $this->_tpl_vars['panelstrings']['content']; ?>
</label>
			</p>
			<?php echo smarty_function_toolbar(array(), $this);?>

			<p>
			<textarea name="content" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['content'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 id="content" 
			rows="20" cols="74"><?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['content'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['content']) : smarty_modifier_default($_tmp, @$_REQUEST['content'])))) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</textarea><br />
					</p>
		
		<fieldset id="admin-static-filename"><legend><?php echo $this->_tpl_vars['panelstrings']['fieldset2']; ?>
</legend>
		<input type="hidden" name="oldid" id="oldid" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['id'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['oldid']) : smarty_modifier_default($_tmp, @$_REQUEST['oldid'])); ?>
" />
		<p><label for="id"><?php echo $this->_tpl_vars['panelstrings']['pagename']; ?>
</label><br />
		<input type="text" name="id" id="id" class="maxsize<?php echo ((is_array($_tmp=$this->_tpl_vars['error']['id'])) ? $this->_run_mod_handler('notempty', true, $_tmp, ' field-error') : smarty_modifier_notempty($_tmp, ' field-error')); ?>
"
		value="<?php echo ((is_array($_tmp=((is_array($_tmp=@$_REQUEST['id'])) ? $this->_run_mod_handler('default', true, $_tmp, @$_REQUEST['page']) : smarty_modifier_default($_tmp, @$_REQUEST['page'])))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['static_id']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['static_id'])); ?>
"  /></p>
		<?php echo smarty_function_html_submit(array('name' => 'save','id' => 'save','value' => $this->_tpl_vars['panelstrings']['submit'],'accesskey' => 's'), $this);?>

		<?php echo smarty_function_html_submit(array('name' => 'preview','id' => 'preview','value' => $this->_tpl_vars['panelstrings']['preview'],'accesskey' => 'p'), $this);?>

		
		</fieldset>

	
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_static($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_statics($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>





