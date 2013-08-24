<?php
$this->Html->addCrumb('Company');
$this->Html->addCrumb('About Us');
?>
<h1><?= __('About Us') ?></h1>
<div class="span8">
	<h2>What is the CakePHP Blog List?</h2>
	<p>The CakePHP Blog List is, as the name says, a list of blogs that talk about CakePHP. Not all the blog sites are pro-CakePHP. Some people blog about how much they hate the framework. That is ok. Those sites are often very educational.</p>
	<hr>
	<h2>Why did you start this list?</h2>
	<p>
		I started this list a few years back. Since then, some sites have gone down and many new one have come to life.
		My goal was to learn more about the framework from the perspective of a multitude of different developers; not just those who love the framework.
	</p>
	<hr>
	<h2>What are you going to do with the list?</h2>
	<p>
		I'm currently in the market for a new RSS reader. I've tried a few and hated most of them. Worst case scenario I might just build one as a mobile project.
		I plan to create, with your help, a very large list of blogs where I can read about the framework.
	</p>
	<hr>
	<h2>Who are you anyways?</h2>
	<p>
		I am a freelance Web Applications Developer, an educator and entrepreneur. I have a passion for open source technologies and contribute to as many as I can on
		<?=$this->Html->link('GitHub', 'https://github.com/angelxmoreno', array('target'=>'_blank'))?>.
	</p>
</div>