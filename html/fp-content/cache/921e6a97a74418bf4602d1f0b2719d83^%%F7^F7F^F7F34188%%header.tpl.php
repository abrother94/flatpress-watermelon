<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:37
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'action', 'header.tpl', 1, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN""http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html><head><meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['flatpress']['CHARSET']; ?>
"/><meta name="description" content="description"/><meta name="keywords" content="keywords"/> <meta name="author" content="author"/> <?php echo theme_smarty_function_action(array('hook' => 'wp_head'), $this);?>
<title><?php echo $this->_tpl_vars['flatpress']['TITLE']; ?>
<?php echo $this->_tpl_vars['pagetitle']; ?>
</title></head><body><div class="container">	<div class="top">		<a href="index.php"><span><?php echo $this->_tpl_vars['flatpress']['TITLE']; ?>
</span></a>	</div>	<p id="subtitle"><?php echo $this->_tpl_vars['flatpress']['SUBTITLE']; ?>
</p>	<div class="header"></div>