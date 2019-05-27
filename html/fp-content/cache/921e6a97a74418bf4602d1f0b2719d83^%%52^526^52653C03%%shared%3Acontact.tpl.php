<?php /* Smarty version 2.6.30, created on 2019-01-24 01:48:10
         compiled from shared:contact.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'validate', 'shared:contact.tpl', 3, false),array('function', 'comment_form', 'shared:contact.tpl', 27, false),array('modifier', 'notempty', 'shared:contact.tpl', 16, false),array('modifier', 'stripslashes', 'shared:contact.tpl', 17, false),array('modifier', 'wp_specialchars', 'shared:contact.tpl', 17, false),)), $this); ?>
<p><?php echo $this->_tpl_vars['lang']['contact']['descr']; ?>
</p>
	
<?php echo smarty_function_validate(array('id' => 'name','message' => $this->_tpl_vars['lang']['contact']['error']['name'],'append' => 'error'), $this);?>

<?php echo smarty_function_validate(array('id' => 'email','message' => $this->_tpl_vars['lang']['contact']['error']['email'],'append' => 'error'), $this);?>

<?php echo smarty_function_validate(array('id' => 'www','message' => $this->_tpl_vars['lang']['contact']['error']['www'],'append' => 'error'), $this);?>

<?php echo smarty_function_validate(array('id' => 'content','message' => $this->_tpl_vars['lang']['contact']['error']['content'],'append' => 'error'), $this);?>


<form id="contactform" method="post"
	action="<?php echo @BLOG_BASEURL; ?>
contact.php"
	enctype="multipart/form-data">
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['contact']['fieldset1']; ?>
</legend>
		<p><label class="textlabel" for="name"><?php echo $this->_tpl_vars['lang']['contact']['name']; ?>
</label><br />
		<input type="text" name="name" id="name" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['name'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
		value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, true) : wp_specialchars($_tmp, true)); ?>
" /></p>
		
		<p><label class="textlabel" for="email"><?php echo $this->_tpl_vars['lang']['contact']['email']; ?>
</label><br />
		<input type="text" name="email" id="email" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['email'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
		value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, true) : wp_specialchars($_tmp, true)); ?>
" /></p>
		
		<p><label class="textlabel" for="url"><?php echo $this->_tpl_vars['lang']['contact']['www']; ?>
</label><br />
		<input type="text" name="url" id="url" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['url'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
		value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['url'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, true) : wp_specialchars($_tmp, true)); ?>
" /></p>
		
		<?php echo smarty_function_comment_form(array(), $this);?>

		
	</fieldset>
	
	<fieldset><legend><?php echo $this->_tpl_vars['lang']['contact']['fieldset2']; ?>
</legend>
		<p><label for="content"><?php echo $this->_tpl_vars['lang']['contact']['comment']; ?>
</label><br />
		<textarea name="content" id="content" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['content'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>
 
		rows="10" cols="74"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['values']['content'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)))) ? $this->_run_mod_handler('wp_specialchars', true, $_tmp, true) : wp_specialchars($_tmp, true)); ?>
</textarea></p>

	</fieldset>
	
	<div class="buttonbar">
	<input type="submit" name="submit" id="submit" value="<?php echo $this->_tpl_vars['lang']['contact']['submit']; ?>
" />
	<input type="reset" name="reset" id="reset" value="<?php echo $this->_tpl_vars['lang']['contact']['reset']; ?>
" />
	</div>

</form>