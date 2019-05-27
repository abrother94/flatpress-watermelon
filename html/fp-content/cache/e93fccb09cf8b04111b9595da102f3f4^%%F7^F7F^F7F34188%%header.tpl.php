<?php /* Smarty version 2.6.30, created on 2019-01-28 12:40:49
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'tag', 'header.tpl', 4, false),array('function', 'action', 'header.tpl', 8, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['title'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'wp_title', '&laquo;') : theme_apply_filters_wrapper($_tmp, 'wp_title', '&laquo;')); ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['flatpress']['charset']; ?>
" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'/>
	<?php echo theme_smarty_function_action(array('hook' => 'wp_head'), $this);?>

</head>

<body>
	<div id="body-container">

		<div id="head">
			<h1><a href="<?php echo @BLOG_BASEURL; ?>
"><?php echo $this->_tpl_vars['flatpress']['title']; ?>
</a></h1>
			<p class="subtitle"><?php echo $this->_tpl_vars['flatpress']['subtitle']; ?>
</p>
		</div> <!-- end of #head -->
	
	<div id="outer-container">