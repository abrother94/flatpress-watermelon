<?php /* Smarty version 2.6.30, created on 2019-03-20 23:51:15
         compiled from /var/www/html/fp-interface/sharedtpls/comment-atom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'tag', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 6, false),array('modifier', 'escape', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 9, false),array('modifier', 'date_format', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 13, false),array('modifier', 'date_rfc3339', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 18, false),array('modifier', 'link', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 22, false),array('block', 'entry_block', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 15, false),array('block', 'entry', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 16, false),array('block', 'comment_block', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 26, false),array('block', 'comment', '/var/www/html/fp-interface/sharedtpls/comment-atom.tpl', 27, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['flatpress']['charset']; ?>
"<?php echo '?>'; ?>

<feed xmlns="http://www.w3.org/2005/Atom">

	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['flatpress']['title'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'wp_title', ':') : theme_apply_filters_wrapper($_tmp, 'wp_title', ':')); ?>
</title>
	<subtitle><?php echo $this->_tpl_vars['flatpress']['subtitle']; ?>
</subtitle>
	<link href="<?php echo @BLOG_BASEURL; ?>
" />
	<link rel="self" href="<?php echo ((is_array($_tmp=$_SERVER['REQUEST_URI'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<generator uri="http://www.flatpress.org/" version="<?php echo $this->_tpl_vars['flatpress']['version']; ?>
">
  		FlatPress
	</generator>
	<rights> <?php echo $this->_tpl_vars['flatpress']['author']; ?>
 <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
 </rights>
	
	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	
	<updated><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_rfc3339', true, $_tmp) : theme_smarty_modifier_date_rfc3339($_tmp)); ?>
</updated>
	<author>
		<name><?php echo $this->_tpl_vars['author']; ?>
</name>
	</author>
	<id><?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
</id>
	
	<?php $this->assign('the_comment_link', ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link'))); ?>

	<?php $this->_tag_stack[] = array('comment_block', array()); $_block_repeat=true;smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php $this->_tag_stack[] = array('comment', array()); $_block_repeat=true;smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<entry>
		<title><?php echo $this->_tpl_vars['name']; ?>
</title>
		<author>
			<name><?php echo $this->_tpl_vars['name']; ?>
</name>
			<?php if ($this->_tpl_vars['www']): ?><uri><?php echo $this->_tpl_vars['www']; ?>
</uri><?php endif; ?>
		</author>
		<link href="<?php echo $this->_tpl_vars['the_comment_link']; ?>
#<?php echo $this->_tpl_vars['id']; ?>
" />
		<id><?php echo $this->_tpl_vars['the_comment_link']; ?>
#<?php echo $this->_tpl_vars['id']; ?>
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
	</entry>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	
</feed>