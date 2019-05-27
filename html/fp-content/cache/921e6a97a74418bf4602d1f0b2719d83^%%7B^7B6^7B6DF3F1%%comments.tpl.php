<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:38
         compiled from comments.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', 'comments.tpl', 1, false),array('block', 'entry', 'comments.tpl', 1, false),array('block', 'comment_block', 'comments.tpl', 1, false),array('block', 'comment', 'comments.tpl', 1, false),array('function', 'nextpage', 'comments.tpl', 1, false),array('function', 'prevpage', 'comments.tpl', 1, false),array('function', 'cycle', 'comments.tpl', 1, false),array('modifier', 'date_format', 'comments.tpl', 1, false),array('modifier', 'md5', 'comments.tpl', 1, false),array('modifier', 'notempty', 'comments.tpl', 1, false),array('modifier', 'default', 'comments.tpl', 1, false),array('modifier', 'link', 'comments.tpl', 1, false),array('modifier', 'tag', 'comments.tpl', 1, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	<div class="main">	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "entry-default.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>		<div class="navigator">			<?php echo smarty_function_nextpage(array(), $this);?>
<?php echo smarty_function_prevpage(array(), $this);?>
		</div>		<?php $this->_tag_stack[] = array('comment_block', array()); $_block_repeat=true;smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>		<div id="comments">		<?php $this->_tag_stack[] = array('comment', array()); $_block_repeat=true;smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>			<div class="date">				<div><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b") : theme_date_format($_tmp, "%b")); ?>
</div>				<span><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : theme_date_format($_tmp, "%d")); ?>
</span>			</div>						<div id="<?php echo $this->_tpl_vars['id']; ?>
" class="<?php echo smarty_function_cycle(array('values' => "comm1,comm2"), $this);?>
">							<img class="cmt-gravatar" src="http://www.gravatar.com/avatar.php?gravatar_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('md5', true, $_tmp) : md5($_tmp)); ?>
&amp;size=40" alt="Avatar" title="Avatar for <?php echo $this->_tpl_vars['name']; ?>
" width="40" height="40" />				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:commentadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 				<strong class='comment-name'>								<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('notempty', true, $_tmp, "<a href=\"".($this->_tpl_vars['url'])."\" title=\"Permalink to ".($this->_tpl_vars['name'])."'s comment\">".($this->_tpl_vars['name'])."</a>") : smarty_modifier_notempty($_tmp, "<a href=\"".($this->_tpl_vars['url'])."\" title=\"Permalink to ".($this->_tpl_vars['name'])."'s comment\">".($this->_tpl_vars['name'])."</a>")))) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['name']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['name'])); ?>
 [<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['entryid'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#<?php echo $this->_tpl_vars['id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M") : theme_date_format($_tmp, "%H:%M")); ?>
</a>]				</strong>				<!--<p class="date">								</p>-->				<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'comment_text') : theme_apply_filters_wrapper($_tmp, 'comment_text')); ?>
			</div>		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>		</div>		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>		<div id="comments-form">			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:comments.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>		</div>	</div>	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "sidebar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>