<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Visitor');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Session'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['session']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Remote Host'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['remote_host']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Remote Addr'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['remote_addr']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Http User Agent'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['http_user_agent']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Http Referer'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['http_referer']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Page Uri'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['page_uri']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($visitor['Visitor']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Visitor')), array('action' => 'edit', $visitor['Visitor']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Visitor')), array('action' => 'delete', $visitor['Visitor']['id']), null, __('Are you sure you want to delete # %s?', $visitor['Visitor']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Visitors')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Visitor')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Blog Lists')), array('controller' => 'blog_lists', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('controller' => 'blog_lists', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Blog Lists')); ?></h3>
	<?php if (!empty($visitor['BlogList'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Visitor Id'); ?></th>
				<th><?php echo __('User Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Blog Url'); ?></th>
				<th><?php echo __('Blog Rss'); ?></th>
				<th><?php echo __('Is Active'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($visitor['BlogList'] as $blogList): ?>
			<tr>
				<td><?php echo $blogList['id'];?></td>
				<td><?php echo $blogList['visitor_id'];?></td>
				<td><?php echo $blogList['user_id'];?></td>
				<td><?php echo $blogList['name'];?></td>
				<td><?php echo $blogList['blog_url'];?></td>
				<td><?php echo $blogList['blog_rss'];?></td>
				<td><?php echo $blogList['is_active'];?></td>
				<td><?php echo $blogList['created'];?></td>
				<td><?php echo $blogList['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'blog_lists', 'action' => 'view', $blogList['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'blog_lists', 'action' => 'edit', $blogList['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'blog_lists', 'action' => 'delete', $blogList['id']), null, __('Are you sure you want to delete # %s?', $blogList['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('controller' => 'blog_lists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
