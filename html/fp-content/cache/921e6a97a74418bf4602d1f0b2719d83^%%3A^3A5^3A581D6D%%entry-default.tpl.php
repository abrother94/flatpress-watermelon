<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:37
         compiled from entry-default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'entry-default.tpl', 1, false),array('modifier', 'link', 'entry-default.tpl', 1, false),array('modifier', 'tag', 'entry-default.tpl', 1, false),array('modifier', 'filed', 'entry-default.tpl', 1, false),)), $this); ?>
		<div class="item">
</div>
</span>
">

$this->_smarty_include(array('smarty_include_tpl_file' => "shared:entryadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 at

<?php endif; ?>
#comments"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'comments_number') : theme_apply_filters_wrapper($_tmp, 'comments_number')); ?>
 (<strong><?php echo $this->_tpl_vars['views']; ?>
</strong> views)</a>