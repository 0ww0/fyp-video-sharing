<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('E-Educator', 'E-Educator');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap/bootstrap');
		echo $this->Html->css('bootstrap/core');
		echo $this->Html->css('Starter/starter');
		

		
		echo $this->Html->script('jquery-1.10.2.min');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class ="container">
	 <div class="starter-template">
		<div id="header">
			<?php echo $this->element('navbar'); ?>
		
		</div>
		<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
		</div>
	</div>




	
		<?php echo $this->Html->script('bootstrap/bootstrap'); ?>
		
		<?php echo $this->fetch('script_execute'); ?>
</body>
</html>
