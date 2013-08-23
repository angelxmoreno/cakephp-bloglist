<?php
$this->Html->addCrumb('Blog');
$this->Html->addCrumb('List');
?>
<h1><?= __('CakePHP Related Blogs') ?></h1>
<div class="row-fluid">
	<div class="span9">
		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_url');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('blog_rss');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
			</tr>
		<?php foreach ($blogLists as $blogList): ?>
			<tr>
				<td><?php echo h($blogList['BlogList']['name']); ?>&nbsp;</td>
				<td><?=$this->Html->link($blogList['BlogList']['blog_url'],$blogList['BlogList']['blog_url'],array('target'=>'_blank')); ?>&nbsp;</td>
				<td><?=$this->Html->link($blogList['BlogList']['blog_rss'],$blogList['BlogList']['blog_rss'],array('target'=>'_blank')); ?>&nbsp;</td>
				<td><?php echo h($blogList['BlogList']['created']); ?>&nbsp;</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
</div>