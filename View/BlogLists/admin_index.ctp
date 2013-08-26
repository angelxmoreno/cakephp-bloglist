<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Blog Lists'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_url');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_rss');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('is_active');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($blogLists as $blogList): ?>
			<tr>
				<td><?php echo h($blogList['BlogList']['name']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['blog_url']); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['blog_rss']); ?>&nbsp;</td>
				<td><?=($blogList['BlogList']['is_active']) ?
					$this->Form->postLink(__('Deactivate'), array('action' => 'deactivate', $blogList['BlogList']['id']), array('class'=>'btn'), __('Are you sure you want to deactive # %s?', $blogList['BlogList']['id'])) :
					$this->Form->postLink(__('Activate'), array('action' => 'activate', $blogList['BlogList']['id']), array('class'=>'btn'), __('Are you sure you want to activate # %s?', $blogList['BlogList']['id']))
				?></td>
				<td nowrap="nowrap"><?php echo $this->Time->timeAgoInWords($blogList['BlogList']['created']); ?>&nbsp;</td>
				<td class="actions btn-group-vertical">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $blogList['BlogList']['id']), array('class'=>'btn')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $blogList['BlogList']['id']), array('class'=>'btn')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $blogList['BlogList']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $blogList['BlogList']['id'])); ?>
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