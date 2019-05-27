<?php /* Smarty version 2.6.30, created on 2019-01-23 12:07:21
         compiled from admin:entry/cats */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:entry/cats', 11, false),array('modifier', 'escape', 'admin:entry/cats', 14, false),array('function', 'html_submit', 'admin:entry/cats', 20, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<?php echo $this->_tpl_vars['panelstrings']['descr']; ?>


<p><a href="?p=entry&amp;action=cats&amp;do=clear"><?php echo $this->_tpl_vars['panelstrings']['clear']; ?>
</a></p>



<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
		<p>
		<textarea name="content" id="content" rows="20" cols="74"><?php echo ((is_array($_tmp=$this->_tpl_vars['catdefs'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea><br />
		</p>
	
	
	<div class="buttonbar">

	<?php echo smarty_function_html_submit(array('name' => 'save','id' => 'save','value' => $this->_tpl_vars['panelstrings']['submit']), $this);?>

	
	</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>