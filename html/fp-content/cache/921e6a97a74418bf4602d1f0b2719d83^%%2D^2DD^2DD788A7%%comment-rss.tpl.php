<?php /* Smarty version 2.6.30, created on 2019-03-20 23:51:15
         compiled from /var/www/html/fp-interface/sharedtpls/comment-rss.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 6, false),array('block', 'entry', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 7, false),array('block', 'comment_block', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 20, false),array('block', 'comment', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 21, false),array('modifier', 'link', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 9, false),array('modifier', 'date_format', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 13, false),array('modifier', 'theme_comments_feed_link', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 16, false),array('modifier', 'tag', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 26, false),array('modifier', 'date', '/var/www/html/fp-interface/sharedtpls/comment-rss.tpl', 31, false),)), $this); ?>
<?php echo '<?xml'; ?>
 version="1.0" encoding="<?php echo $this->_tpl_vars['fp_config']['locale']['charset']; ?>
" <?php echo '?>'; ?>

<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
	<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		
		<?php $this->assign('the_comment_link', ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'comments_link') : theme_apply_filters_link_wrapper($_tmp, 'comments_link'))); ?>
		<title><?php echo $this->_tpl_vars['flatpress']['title']; ?>
 » <?php echo $this->_tpl_vars['subject']; ?>
</title>
		<link><?php echo $this->_tpl_vars['the_comment_link']; ?>
</link>
		<description><![CDATA[<?php echo $this->_tpl_vars['flatpress']['subtitle']; ?>
]]></description>
		<copyright>Copyright <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, ($this->_tpl_vars['Y'])) : smarty_modifier_date_format($_tmp, ($this->_tpl_vars['Y']))); ?>
, <?php echo $this->_tpl_vars['flatpress']['author']; ?>
</copyright>
 				<language><?php echo $this->_tpl_vars['fp_config']['locale']['lang']; ?>
</language>
		<atom:link rel="self" href="<?php echo ((is_array($_tmp='rss2')) ? $this->_run_mod_handler('theme_comments_feed_link', true, $_tmp, $this->_tpl_vars['id']) : theme_comments_feed_link($_tmp, $this->_tpl_vars['id'])); ?>
" type="application/rss+xml" />

		<generator>FlatPress</generator>
		
		<?php $this->_tag_stack[] = array('comment_block', array()); $_block_repeat=true;smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php $this->_tag_stack[] = array('comment', array()); $_block_repeat=true;smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<item>
		
			<title><?php echo $this->_tpl_vars['name']; ?>
</title>
			<link><?php echo $this->_tpl_vars['the_comment_link']; ?>
#<?php echo $this->_tpl_vars['id']; ?>
</link>
			<description><![CDATA[<?php echo ((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('tag', true, $_tmp, 'the_content') : theme_apply_filters_wrapper($_tmp, 'the_content')); ?>
]]></description>
			
			<guid isPermaLink="true"><?php echo $this->_tpl_vars['the_comment_link']; ?>
#<?php echo $this->_tpl_vars['id']; ?>
</guid>

			<dc:creator><?php echo $this->_tpl_vars['name']; ?>
</dc:creator>
			<pubDate><?php echo ((is_array($_tmp='r')) ? $this->_run_mod_handler('date', true, $_tmp, $this->_tpl_vars['date']) : date($_tmp, $this->_tpl_vars['date'])); ?>
</pubDate>
			
			
			</item>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		
	</channel>
</rss>