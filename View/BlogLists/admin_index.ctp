<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Blog Lists'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('visitor_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('user_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_url');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_rss');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('is_active');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($blogLists as $blogList): ?>
			<tr>
				<td><?php echo h($blogList['BlogList']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($blogList['Visitor']['id'], array('controller' => 'visitors', 'action' => 'view', $blogList['Visitor']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($blogList['User']['id'], array('controller' => 'users', 'action' => 'view', $blogList['User']['id'])); ?>
				</td>
				<td><?php echo h($blogList['BlogList']['name']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['blog_url']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['blog_rss']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['is_active']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['created']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogList['BlogList']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogList['BlogList']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogList['BlogList']['id']), null, __('Are you sure you want to delete # %s?', $blogList['BlogList']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Visitors')), array('controller' => 'visitors', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Visitor')), array('controller' => 'visitors', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>