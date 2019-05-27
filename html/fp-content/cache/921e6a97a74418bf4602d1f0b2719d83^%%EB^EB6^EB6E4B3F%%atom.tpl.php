<?php /* Smarty version 2.6.30, created on 2019-03-20 23:48:54
         compiled from /var/www/html/fp-interface/sharedtpls/atom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'theme_feed_link', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 9, false),array('modifier', 'date_format', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 13, false),array('modifier', 'date_rfc3339', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 14, false),array('modifier', 'link', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 24, false),array('modifier', 'tag', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 32, false),array('block', 'entry_block', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 20, false),array('block', 'entry', '/var/www/html/fp-interface/sharedtpls/atom.tpl', 21, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['flatpress']['charset']; ?>
"<?php echo '?>'; ?>

<feed xmlns="http://www.w3.org/2005/Atom">

	<title><?php echo $this->_tpl_vars['flatpress']['title']; ?>
</title>
	<subtitle><?php echo $this->_tpl_vars['flatpress']['subtitle']; ?>
</subtitle>
	<link href="<?php echo @BLOG_BASEURL; ?>
" />
	<link rel="self" href="<?php echo ((is_array($_tmp='atom')) ? $this->_run_mod_handler('theme_feed_link', true, $_tmp) : theme_feed_link($_tmp)); ?>
" />
	<generator uri="http://www.flatpress.org/" version="<?php echo $this->_tpl_vars['flatpress']['version']; ?>
">
  		FlatPress
	</generator>
	<rights> <?php echo $this->_tpl_vars['flatpress']['author']; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 </rights>
	<updated><?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_rfc3339', true, $_tmp) : theme_smarty_modifier_date_rfc3339($_tmp)); ?>
</updated>
	<author>
		<name><?php echo $this->_tpl_vars['flatpress']['author']; ?>
</name>
	</author>
	<id><?php echo @BLOG_BASEURL; ?>
</id>
	
	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<entry>
		<title><?php echo $this->_tpl_vars['subject']; ?>
</title>
		<link href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
" />
				
		<id><?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
</id>
		<?php $this->assign('the_date', ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_rfc3339', true, $_tmp) : theme_smarty_modifier_date_rfc3339($_tmp))); ?>
		<published><?php echo $this->_tpl_vars['the_date']; ?>
</published>
		<updated><?php echo $this->_tpl_vars['the_date']; ?>
</updated>
		<content type="xhtml">
			<div xmlns="http://www.w3.org/1999/xhtml"> 
				 <?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_content') : theme_apply_filters_wrapper($_tmp, 'the_content')); ?>
 
			</div>
		</content>
		
		<?php $_from = $this->_tpl_vars['enclosure']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['encl']):
?>
		<link rel="enclosure" 
			href="<?php echo $this->_tpl_vars['encl']['url']; ?>
" 
			title="<?php echo $this->_tpl_vars['encl']['title']; ?>
"
			length="<?php echo $this->_tpl_vars['encl']['length']; ?>
" 
			type="<?php echo $this->_tpl_vars['encl']['type']; ?>
" />
		<?php endforeach; endif; unset($_from); ?>
	
	</entry>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
</feed>