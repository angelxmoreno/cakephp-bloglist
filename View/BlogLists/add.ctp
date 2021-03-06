<?php
$this->Html->addCrumb('Blog');
$this->Html->addCrumb('Add');
?>
<h1><?php echo __('Add %s', __('Blog List')); ?></h1>

<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('BlogList', array('class' => 'form-horizontal')); ?>
		<fieldset>
			<?php
			echo $this->BootstrapForm->input('name', array(
			    'label' => 'Name of Blog',
			    'required' => 'required',
			    'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
			);
			echo $this->BootstrapForm->input('blog_url', array(
			    'required' => 'required',
			    'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
			);
			echo $this->BootstrapForm->input('blog_rss');
			echo $this->Recaptcha->display(array('recaptchaOptions' => array('theme' => 'clean')));
			if (!empty($this->validationErrors['BlogList']['recaptcha'])) {
				echo $this->Html->tag('div', $this->validationErrors['BlogList']['recaptcha'][0], array('class' => 'alert alert-error'));
			}
			?>
			<?php echo $this->BootstrapForm->submit(__('Submit')); ?>
		</fieldset>
		<?php echo $this->BootstrapForm->end(); ?>
	</div>
</div>