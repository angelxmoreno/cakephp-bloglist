<?php
$this->Html->addCrumb('Company');
$this->Html->addCrumb('Contact Me');
?>
<h1><?= __('Contact Me') ?></h1>
<div class="span8">
	<?php
    echo $this->Form->create();
        echo $this->Form->input('name');
        echo $this->Form->input('email');
        echo $this->Form->input('message', array('type'=>'textarea'));
        echo $this->Recaptcha->display();
        if(!empty($this->validationErrors['Contact']['recaptcha'])){
            echo $this->Html->tag('div', $this->validationErrors['Contact']['recaptcha'][0], array('class'=>'alert alert-error'));
        }
    echo $this->Form->end('Submit');
?>
</div>