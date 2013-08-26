<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			<?= Configure::read('TwitterBootstrap.AppName') ?> - 
			<?= $title_for_layout ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?= $this->Html->css('bootstrap.min') ?>
		<style>
			/* Sticky footer styles	-------------------------------------------------- */

			html,
			body {
				height: 100%;
				/* The html and body elements cannot have any padding or margin. */
			}

			/* Wrapper for page content to push down footer */
			#wrap {
				min-height: 100%;
				height: auto !important;
				height: 100%;
				/* Negative indent footer by it's height */
				margin: 0 auto -60px;
			}

			/* Set the fixed height of the footer here */
			#push,
			footer {
				height: 60px;
			}
			footer {
				background-color: #f5f5f5;
			}

			/* Lastly, apply responsive CSS fixes as necessary */
			@media (max-width: 767px) {
				#footer {
					margin-left: -20px;
					margin-right: -20px;
					padding-left: 20px;
					padding-right: 20px;
				}
			}

			/* Custom page CSS
			-------------------------------------------------- */
			/* Not required for template or sticky footer method. */

			#wrap > .container {
				padding-top: 60px;
			}
			.container .credit {
				margin: 20px 0;
			}

			code {
				font-size: 80%;
			}
			footer div.container p {
				text-align: center;
			}
			/* -------------------------------------------------- */
			body {
				padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
			}
		</style>
		<?= $this->Html->css('bootstrap-responsive.min') ?>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le fav and touch icons -->

		<link rel="shortcut icon" href="/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">

		<?php
		echo $this->fetch('meta');
		echo $this->fetch('css');
		?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<?= $this->Html->script('bootstrap.min') ?>
		<?= $this->fetch('script') ?>

		<script type="text/javascript">var switchTo5x = true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="/"><?= Configure::read('TwitterBootstrap.AppName') ?></a>
					<div class="nav-collapse">
						<ul class="nav">
							<? foreach ($navLinks as $name => $link) : ?>
								<? if (!isset($link['auth']) || ((bool) $link['auth'] == (bool) AuthComponent::user())) : ?>
									<li<?= ($this->here == $this->Html->url($link['url'])) ? ' class="active"' : '' ?>>
										<?= $this->Html->Link(__($name), $link['url']) ?>
									</li>
								<? endif; ?>
							<? endforeach; ?>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">
			<?= ($this->here !== '/') ? $this->Html->getCrumbList(array('class' => 'breadcrumb', 'lastClass' => 'active', 'separator' => '<span class="divider">/</span>'), array('Home', '/')) : '' ?>
			<?=
			$this->Session->flash('flash', array(
			    'element' => 'alert',
			    'params' => array('plugin' => 'TwitterBootstrap'),
			))
			?>
			<?=
			$this->Session->flash('auth', array(
			    'element' => 'alert',
			    'params' => array('plugin' => 'TwitterBootstrap'),
			))
			?>
			<?= $this->fetch('content') ?>
			<div id="push"></div>
		</div> <!-- /container -->

		<footer>
			<div class="container muted credit">
				<p><a href="<?= Configure::read('TwitterBootstrap.AppUrl') ?>"><?= Configure::read('TwitterBootstrap.AppName') ?></a> site created by <a href="https://www.github.com/angelxmoreno">Angel S. Moreno</a> from <a href="http://phpmine.com">PHPMine</a>.</p>
				<p><a href="http://www.cakephp.org" target="_blank">CakePHP</a> is a registered trademark of the <a href="http://cakefoundation.org" target="_blank">Cake Software Foundation</a>.  <a href="http://phpmine.com" target="_blank">PHPMine</a> and the CakePHP Blog List are not affiliated with CakePHP or the Cake Software Foundation in any way.</p>
			</div>
		</footer>
		<!-- Le javascript
	    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript">stLight.options({publisher: "149ec2ea-27b8-4334-827e-5abe2e0e33f8", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
		<script>
			var options = {"publisher": "149ec2ea-27b8-4334-827e-5abe2e0e33f8", "position": "left", "ad": {"visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": {"items": ["facebook", "twitter", "googleplus", "linkedin", "pinterest", "evernote", "reddit", "digg", "delicious"]}};
			var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
		</script>
	</body>
</html>
