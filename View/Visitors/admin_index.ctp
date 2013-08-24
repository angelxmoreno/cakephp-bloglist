<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Visitors'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('session');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('remote_host');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('remote_addr');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('http_user_agent');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('http_referer');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('page_uri');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($visitors as $visitor): ?>
			<tr>
				<td><?php echo h($visitor['Visitor']['id']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['session']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['remote_host']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['remote_addr']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['http_user_agent']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['http_referer']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['page_uri']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['created']); ?>&nbsp;</td>
				<td><?php echo h($visitor['Visitor']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $visitor['Visitor']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $visitor['Visitor']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $visitor['Visitor']['id']), null, __('Are you sure you want to delete # %s?', $visitor['Visitor']['id'])); ?>
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
			<li><?php echo $this->Html->link(__('New %s', __('Visitor')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Blog Lists')), array('controller' => 'blog_lists', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('controller' => 'blog_lists', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>