<?php /* Smarty version 2.6.30, created on 2019-01-28 12:40:49
         compiled from plugin:categories/widget */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'list_categories', 'plugin:categories/widget', 1, false),)), $this); ?>
<?php echo smarty_function_list_categories(array('type' => 'linked','count' => $this->_tpl_vars['categories_showcount']), $this);?>
 