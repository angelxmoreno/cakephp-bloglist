<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Blog List');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Visitor'); ?></dt>
			<dd>
				<?php echo $this->Html->link($blogList['Visitor']['id'], array('controller' => 'visitors', 'action' => 'view', $blogList['Visitor']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('User'); ?></dt>
			<dd>
				<?php echo $this->Html->link($blogList['User']['id'], array('controller' => 'users', 'action' => 'view', $blogList['User']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Blog Url'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['blog_url']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Blog Rss'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['blog_rss']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Is Active'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['is_active']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($blogList['BlogList']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Blog List')), array('action' => 'edit', $blogList['BlogList']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Blog List')), array('action' => 'delete', $blogList['BlogList']['id']), null, __('Are you sure you want to delete # %s?', $blogList['BlogList']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Blog Lists')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Visitors')), array('controller' => 'visitors', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Visitor')), array('controller' => 'visitors', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

