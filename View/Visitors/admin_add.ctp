<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Visitor', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Admin Add %s', __('Visitor')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('session', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->input('remote_host');
				echo $this->BootstrapForm->input('remote_addr');
				echo $this->BootstrapForm->input('http_user_agent');
				echo $this->BootstrapForm->input('http_referer');
				echo $this->BootstrapForm->input('page_uri', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Visitors')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Blog Lists')), array('controller' => 'blog_lists', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Blog List')), array('controller' => 'blog_lists', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>