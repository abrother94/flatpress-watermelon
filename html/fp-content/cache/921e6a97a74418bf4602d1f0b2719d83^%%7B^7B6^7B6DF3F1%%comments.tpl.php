<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:38
         compiled from comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', 'comments.tpl', 1, false),array('block', 'entry', 'comments.tpl', 1, false),array('block', 'comment_block', 'comments.tpl', 1, false),array('block', 'comment', 'comments.tpl', 1, false),array('function', 'nextpage', 'comments.tpl', 1, false),array('function', 'prevpage', 'comments.tpl', 1, false),array('function', 'cycle', 'comments.tpl', 1, false),array('modifier', 'date_format', 'comments.tpl', 1, false),array('modifier', 'md5', 'comments.tpl', 1, false),array('modifier', 'notempty', 'comments.tpl', 1, false),array('modifier', 'default', 'comments.tpl', 1, false),array('modifier', 'link', 'comments.tpl', 1, false),array('modifier', 'tag', 'comments.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
$this->_smarty_include(array('smarty_include_tpl_file' => "entry-default.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo smarty_function_prevpage(array(), $this);?>

</div>
</span>
" class="<?php echo smarty_function_cycle(array('values' => "comm1,comm2"), $this);?>
">
&amp;size=40" alt="Avatar" title="Avatar for <?php echo $this->_tpl_vars['name']; ?>
" width="40" height="40" />
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:commentadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
 [<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['entryid'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#<?php echo $this->_tpl_vars['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : theme_date_format($_tmp, "%H:%M")); ?>
</a>]

$this->_smarty_include(array('smarty_include_tpl_file' => "shared:comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>