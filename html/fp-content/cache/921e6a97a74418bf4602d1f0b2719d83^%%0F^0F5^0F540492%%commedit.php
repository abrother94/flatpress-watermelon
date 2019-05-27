<?php /* Smarty version 2.6.30, created on 2019-01-24 05:17:51
         compiled from admin:entry/commedit */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'html_form', 'admin:entry/commedit', 5, false),array('modifier', 'notempty', 'admin:entry/commedit', 18, false),)), $this); ?>
<h2><?php echo $this->_tpl_vars['plang']['head']; ?>
  <a href="admin.php?p=entry&amp;action=write&amp;entry=<?php echo $this->_tpl_vars['entryid']; ?>
"><?php echo $this->_tpl_vars['entrysubject']; ?>
</a></h2>
<p><?php echo $this->_tpl_vars['plang']['descr']; ?>
</p>
	

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'shared:errorlist.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	
			
	

		<p><input type="hidden" name="entry" value="<?php echo $this->_tpl_vars['entryid']; ?>
" /><input type="hidden" name="comment" value="<?php echo $this->_tpl_vars['id']; ?>
" />

		<div class="option-set">
		<dl>
		<dt><label class="textlabel" for="name"><?php echo $this->_tpl_vars['plang']['author']; ?>
</label></dt>
		<dd>
		<input type="text" class="bigtextinput <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['name'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'field-error') : smarty_modifier_notempty($_tmp, 'field-error')); ?>
" name="name" id="name" value="<?php echo $this->_tpl_vars['values']['name']; ?>
" />
		</dd>
		
		<dt><label class="textlabel" for="email"><?php echo $this->_tpl_vars['plang']['email']; ?>
</label></dt>
		<dd>
		<input type="text" class="bigtextinput <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['email'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'field-error') : smarty_modifier_notempty($_tmp, 'field-error')); ?>
" name="email" id="email" value="<?php echo $this->_tpl_vars['values']['email']; ?>
" />
		</dd>
		
		<dt><label class="textlabel" for="www"><?php echo $this->_tpl_vars['plang']['www']; ?>
</label></dt>
		<dd>
		<input type="text" class="bigtextinput <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['www'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'field-error') : smarty_modifier_notempty($_tmp, 'field-error')); ?>
" name="url" id="url" value="<?php echo $this->_tpl_vars['values']['url']; ?>
" />
		</dd>

		<dt><label class="textlabel" for="ip"><?php echo $this->_tpl_vars['plang']['ip']; ?>
</label></dt>
		<dd>
		<input type="text" id="ip" name="ip" class="bigtextinput" value="<?php echo $this->_tpl_vars['values']['ip_address']; ?>
" disabled="disabled" />
		</dd>

		<dt><label class="textlabel" for"loggedin"><?php echo $this->_tpl_vars['plang']['loggedin']; ?>
</label></dt>
		<dd>
		<input type="checkbox" id="loggedin" name="loggedin" <?php if ($this->_tpl_vars['values']['loggedin']): ?> checked="checked" <?php endif; ?> disabled="disabled" />
		</dd>
		</dl>
		</div>
	
		<div class="option-set">	
		<textarea name="content" <?php echo ((is_array($_tmp=$this->_tpl_vars['error']['content'])) ? $this->_run_mod_handler('notempty', true, $_tmp, 'class="field-error"') : smarty_modifier_notempty($_tmp, 'class="field-error"')); ?>

		id="content" rows="10" cols="74"><?php echo $this->_tpl_vars['values']['content']; ?>
</textarea>
		</div>
	
	<div class="buttonbar">
	<input type="submit" name="save" id="submit" value="<?php echo $this->_tpl_vars['plang']['submit']; ?>
" />
	</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

