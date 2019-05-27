<?php /* Smarty version 2.6.30, created on 2019-01-23 07:57:37
         compiled from entry-default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'entry-default.tpl', 1, false),array('modifier', 'link', 'entry-default.tpl', 1, false),array('modifier', 'tag', 'entry-default.tpl', 1, false),array('modifier', 'filed', 'entry-default.tpl', 1, false),)), $this); ?>
		<div class="item">			<div class="date">				<div><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%b") : theme_date_format($_tmp, "%b")); ?>
</div>				<span><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d") : theme_date_format($_tmp, "%d")); ?>
</span>			</div>			<div class="content">				<h1><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
">				<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_title') : theme_apply_filters_wrapper($_tmp, 'the_title')); ?>
				</a></h1>				<div class="body">				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:entryadminctrls.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>				<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_content') : theme_apply_filters_wrapper($_tmp, 'the_content')); ?>
				</div>				<ul class="entry-footer">					<li>Posted by <?php echo $this->_tpl_vars['author']; ?>
 at					<?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%H:%M:%S") : theme_date_format($_tmp, "%H:%M:%S")); ?>
					<?php if (( $this->_tpl_vars['categories'] )): ?> in <?php echo theme_entry_categories($this->_tpl_vars['categories']); ?>
<?php endif; ?>					</li> 					<li>						<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link')); ?>
#comments"><?php echo ((is_array($_tmp=$this->_tpl_vars['comments'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'comments_number') : theme_apply_filters_wrapper($_tmp, 'comments_number')); ?>
 (<strong><?php echo $this->_tpl_vars['views']; ?>
</strong> views)</a>					</li>				</ul>			</div>		</div>