<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:29
         compiled from cpheader.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'action', 'cpheader.tpl', 6, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $this->_tpl_vars['flatpress']['TITLE']; ?>
<?php echo $this->_tpl_vars['pagetitle']; ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['flatpress']['CHARSET']; ?>
" />
	<?php echo theme_smarty_function_action(array('hook' => 'wp_head'), $this);?>

</head>

<body>
	<div id="body-container">
	<div id="outer-container">