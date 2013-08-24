<?php
$this->Html->addCrumb('Users');
$this->Html->addCrumb('Add');
?>
<h1><?php echo __('Register'); ?></h1>
<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('User', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<legend><?php echo __('Add %s', __('User')); ?></legend>
			<?php
			echo $this->BootstrapForm->input('username');
			echo $this->BootstrapForm->input('password');
			?>
			<?php echo $this->BootstrapForm->submit(__('Submit')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
</div>