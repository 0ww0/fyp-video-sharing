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
		echo $this->Html->script('flash/flowplayer-3.2.12.min');
		echo $this->Html->css('bootstrap/bootstrap');
		echo $this->Html->css('bootstrap/bootstrap-theme');
		echo $this->Html->css('bootstrap/core');
		echo $this->Html->css('offcanvas/offcanvas');
	
		echo $this->Html->script('jquery-1.10.2.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div class ="container">
	
		<div id="header">
			<?php echo $this->element('navbar'); ?>
			
		</div>
		
		<div class="row row-offcanvas row-offcanvas-left">
		<?php 
		if ($this->Session->Read('Auth.User.role_id') == 1) {
			 echo $this->element('admin-action'); 
		}
		if ($this->Session->Read('Auth.User.role_id') == 2) {
			 echo $this->element('student-action');
			 
		}
		if ($this->Session->Read('Auth.User.role_id') == 3) {
			
			
		}
		?>

        <div class="col-xs-12 col-sm-9">
          <p class="pull-left visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav


            </button>
          </p>
          <div id="content" class ="container">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
         
        </div><!--/span-->
		
        
      </div><!--/row-->

		

		<div id="footer">
			
		</div>
		</div>
	
	
	

	<?php echo $this->Html->script('bootstrap/bootstrap'); ?>
	
	<?php echo $this->Html->script('offcanvas/offcanvas'); ?>
	
	<?php echo $this->fetch('script_execute'); ?>
</body>

</html>
