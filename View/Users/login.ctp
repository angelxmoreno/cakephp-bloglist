<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Please enter your username and password'); ?></legend>
			<?php
			echo $this->BootstrapForm->input('username');
			echo $this->BootstrapForm->input('password');
			?>
			<?php echo $this->BootstrapForm->submit(__('Submit')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
</div>