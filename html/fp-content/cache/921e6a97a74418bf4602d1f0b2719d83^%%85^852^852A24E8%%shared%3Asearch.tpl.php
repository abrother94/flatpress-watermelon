<?php /* Smarty version 2.6.30, created on 2019-07-29 16:36:47
         compiled from shared:search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_select_date', 'shared:search.tpl', 12, false),array('function', 'list_categories', 'shared:search.tpl', 17, false),array('modifier', 'date_format', 'shared:search.tpl', 12, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form id="search" method="get" action="<?php echo @BLOG_BASEURL; ?>
search.php" enctype="multipart/form-data">
		
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['search']['fset1']; ?>
</legend>
	<p><label for="keywords"><?php echo $this->_tpl_vars['lang']['search']['keywords']; ?>
</label><br />
	<input type="text" name="q" id="keywords" />
	<label><input type="radio" name="stype" value="titles" id="onlytitles" checked="checked" /><?php echo $this->_tpl_vars['lang']['search']['onlytitles']; ?>
</label>
	<label><input type="radio" name="stype" value="full" id="fulltext" /><?php echo $this->_tpl_vars['lang']['search']['fulltext']; ?>
</label></p>
	</fieldset>
	
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['search']['fset2']; ?>
</legend>
	<p><?php echo smarty_function_html_select_date(array('start_year' => 2000,'end_year' => ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : theme_date_format($_tmp, "%Y")),'field_separator' => " - ",'field_order' => 'DMY','time' => "0000-00-00",'all_empty' => "--"), $this);?>
</p>
	<p><?php echo $this->_tpl_vars['lang']['search']['datedescr']; ?>
</p>
	</fieldset>
	
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['search']['fset3']; ?>
</legend>
	<?php echo smarty_function_list_categories(array('type' => 'radio','selected' => $this->_tpl_vars['categories']), $this);?>

	<p><?php echo $this->_tpl_vars['lang']['search']['catdescr']; ?>
</p>
	</fieldset>
	
	
	<div class="buttonbar">
	<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['lang']['search']['submit']; ?>
" />
	</div>
</form>