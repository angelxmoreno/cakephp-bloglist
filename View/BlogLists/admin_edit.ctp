<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('BlogList', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Admin Edit %s', __('Blog List')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('visitor_id', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('user_id');
				echo $this->BootstrapForm->input('name', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('blog_url', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('blog_rss');
				echo $this->BootstrapForm->input('is_active', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('BlogList.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('BlogList.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Blog Lists')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Visitors')), array('controller' => 'visitors', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Visitor')), array('controller' => 'visitors', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Users')), array('controller' => 'users', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('User')), array('controller' => 'users', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>