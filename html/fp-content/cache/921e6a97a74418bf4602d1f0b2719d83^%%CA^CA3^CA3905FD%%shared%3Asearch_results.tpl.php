<?php /* Smarty version 2.6.30, created on 2019-02-01 07:59:35
         compiled from shared:search_results.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'shared:search_results.tpl', 2, false),array('modifier', 'link', 'shared:search_results.tpl', 9, false),array('block', 'search_result_block', 'shared:search_results.tpl', 6, false),array('block', 'search_result', 'shared:search_results.tpl', 8, false),)), $this); ?>
<?php if ($this->_tpl_vars['noresults']): ?>
<p><?php echo ((is_array($_tmp=$_REQUEST['q'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['lang']['search']['descrnores']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['lang']['search']['descrnores'])); ?>
</p>
<?php else: ?>
<p><?php echo ((is_array($_tmp=$_REQUEST['q'])) ? $this->_run_mod_handler('string_format', true, $_tmp, $this->_tpl_vars['lang']['search']['descrres']) : smarty_modifier_string_format($_tmp, $this->_tpl_vars['lang']['search']['descrres'])); ?>
</p>

<?php $this->_tag_stack[] = array('search_result_block', array()); $_block_repeat=true;smarty_search_results_block($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<ol>
	<?php $this->_tag_stack[] = array('search_result', array()); $_block_repeat=true;smarty_search_result($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<li><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
"><?php echo $this->_tpl_vars['subject']; ?>
</a></li>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_search_result($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>	
</ol>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_search_results_block($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>


<p><a href="<?php echo @BLOG_BASEURL; ?>
search.php"><?php echo $this->_tpl_vars['lang']['search']['searchag']; ?>
</a></p>