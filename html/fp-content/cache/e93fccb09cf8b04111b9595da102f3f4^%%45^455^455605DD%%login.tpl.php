<?php /* Smarty version 2.6.30, created on 2019-01-28 12:40:49
         compiled from /var/www/html/fp-interface/sharedtpls/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'notempty', '/var/www/html/fp-interface/sharedtpls/login.tpl', 6, false),array('modifier', 'wp_specialchars', '/var/www/html/fp-interface/sharedtpls/login.tpl', 6, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<form id="login" method="post" action="<?php echo @BLOG_BASEURL; ?>
login.php" enctype="multipart/form-data">
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['login']['fieldset1']; ?>
</legend>
	<p><label for="user"><?php echo $this->_tpl_vars['lang']['login']['user']; ?>
</label><br />
	<input <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['user'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 type="text" name="user" id="user" <?php if ($_POST['user']): ?>value="<?php echo ((is_array($_tmp=$_POST['user'])) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, true) : wp_specialchars($_tmp, true)); ?>
"<?php endif; ?> /></p>
	<p><label for="pass"><?php echo $this->_tpl_vars['lang']['login']['pass']; ?>
</label><br />
	<input type="password" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['pass'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 name="pass" id="pass" /></p>
	</fieldset>
	
	<div class="buttonbar">
	<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['lang']['login']['submit']; ?>
" />
		</div>
	
</form>
