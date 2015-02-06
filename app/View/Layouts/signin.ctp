<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('E-Educator', 'Education in Video');
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
			
			echo $this->fetch('meta');

			echo $this->Html->css('bootstrap/bootstrap');
			// Uncomment this to enable the bootstrap gradient theme (Flat is way better though).
			//echo $this->Html->css('bootstrap/bootstrap-theme.min');
			//echo $this->Html->css('bootstrap/core');
			echo $this->Html->css('Signin/signin');
			echo $this->fetch('css');
			
			//echo $this->Html->script('bootstrap/jquery-1.10.2.min');
			//echo $this->Html->script('bootstrap/bootstrap.min');

			
			echo $this->fetch('script');
		?>
	</head>

	<body>

		 <div class="container">
		
			
			
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			
			
			
		</div>
		
	<?php echo $this->fetch('script_execute'); ?>
	</body>

</html>